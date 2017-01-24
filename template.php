<?php

/**
* Preprocess variables for  html.tpl.php.
* template_preprocess_html
*/
function union1617_preprocess_html(&$variables) {
  // Ensure that the $vars['rdf'] variable is an object.
 if (!isset($variables['rdf']) || !is_object($variables['rdf'])) {
    $variables['rdf'] = new StdClass();
 }
 if (module_exists('rdf')) {
     $variables['doctype'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML+RDFa 1.1//EN">' . "\n";
     $variables['rdf']->version = ' version="HTML+RDFa 1.1"';
     $variables['rdf']->namespaces = $variables['rdf_namespaces'];
     $variables['rdf']->profile = ' profile="' . $variables['grddl_profile'] . '"';
 } else {
     $variables['doctype'] = '<!DOCTYPE html>' . "\n";
     $variables['rdf']->version = '';
     $variables['rdf']->namespaces = '';
     $variables['rdf']->profile = '';
 }
 // Add Page Title to body.class array
 if (isset($variables['head_title_array']['title'])){
    $variables['classes_array'][] = 'page-' .drupal_html_class($variables['head_title_array']['title']);
 }

 // External CSS
 drupal_add_css('//cloud.typography.com/6859912/684268/css/fonts.css', array('type' => 'external'));
 
 //print kpr($variables);
}

/**
* Preprocess = Page
*/
function union1617_preprocess_page(&$variables, $hook) {
   // Page template suggestions based off of content types
   if (isset($variables['node'])) { 
      $variables['theme_hook_suggestions'][] = 'page__type__'. $variables['node']->type;
      $variables['theme_hook_suggestions'][] = "page__node__" . $variables['node']->nid;
   }
   
   // Page template suggestions based off URL alias
   if (module_exists('path')) {
    $alias = drupal_get_path_alias(str_replace('/edit','',$_GET['q']));
    if ($alias != $_GET['q']) {
      $template_filename = 'page';
      foreach (explode('/', $alias) as $path_part) {
        $template_filename = $template_filename . '__' . $path_part;
        $variables['theme_hook_suggestions'][] = $template_filename;
      }
    }
  }
   
}

/**
  * Add files to be loaded with jQuery Multi's jQuery library
  * @return
  *   An array of full paths to files that should be loaded with the jqmulti's jQuery library
  *   (paths are relative to Drupal root)
  */
 function union1617_jqmulti_files() {
   return array(
    'js/custom-union.js',
   );
 }

/**
* theme_menu_tree() - great for HTML 5 <nav>
*/
function union1617_menu_tree($variables) {
  return '<nav><ul class="menu">' . $variables['tree'] . '</ul></nav>';
}

/**
* theme_menu_link() - great for css class on the fly
*/
function union1617_menu_link(array $variables) {
//add class for li
   $variables['element']['#attributes']['class'][] = 'menu-' . $variables['element']['#original_link']['mlid'];
//add class for a
   $variables['element']['#localized_options']['attributes']['class'][] = 'menu-' . $variables['element']['#original_link']['mlid'];
//dvm($variables['element']);
  return theme_menu_link($variables);
}

/**
* Preprocess variables for search-result.tpl.php.
*
* @see search-result.tpl.php
*/
function union1617_preprocess_search_results(&$variables) {
  $variables['search_results'] = '';
  $resultTypes = array();

  // Add node object to result, so we can display imagefield images in results.
  $n = node_load($variables['result']['node']->nid);
  $n && ($variables['node'] = $n);
   
  // Divide results
  foreach ($variables['results'] as $result)
  {
  $resultTypes[$result['type']][] = $result;
  }
   
  // Create fieldsets
  foreach ($resultTypes as $resultType => $resultTypeResults)
  {
  $value = "";
   
  foreach ($resultTypeResults as $result)
  {
  $value .= theme('search_result', array('result' => $result, 'module' => $variables['module']));
  }
   
  $variables['search_results'] .= theme('fieldset', array('element' => array('#title' => $resultType, '#value' => $value)));
  }
}
/**
* Checkout Progress API
*
* @see https://www.drupal.org/node/1930346#comment-8729473
*/
function union1617_commerce_checkout_progress_items_alter(&$items) {
  // We do not have a seperate Payment page
  unset($items['payment']);
}

/**
*
* RequireJS
*/
$requireURL = base_path() . 'sites/all/themes/union1617/js/require.js';
$scriptUrl  = base_path() . 'sites/all/themes/union1617/js/script.js';
function union1617_preprocess_html_tag(&$variables) {
  if ($variables['element']['#tag'] === 'script'){
      //$variables['element']['#attributes']['data-main'] = $base_path . 'sites/all/themes/union1617/js/script';
  }
}


/**
 * Display File Uploads as Thumbnails
 * https://www.drupal.org/node/1413562#comment-9336763
 */
function union1617_file_link($variables) {
    $file = $variables['file'];

    // Operates only on files uploaded to /webform/ Change this to operate on the fields you wish to.
    if(strpos($file->uri, 'webform')) {
        // Render as thumbnail.
        $url = file_create_url($file->uri);
        $thumbnail = theme('image_style',array(
            'style_name' => 'thumbnail',
            'path' => $file->uri,
            'alt' => t('uploaded image')
        ));
        return '' . $thumbnail. '';
    }
    else {
        return theme_file_link($variables);
    }
}