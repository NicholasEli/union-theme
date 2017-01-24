<?php
// Customize our META Data
$metaTitle = 'Union Snowboard Bindings | 2017';
$metaDescription = 'Union is 100% devoted to making the best snowboard bindings on the planet. Select from mens bindings, womens bindings, and kids bindings.';
$metaKeywords = 'snowboard binding bindings mens womens kids best lightest travis rice union company snowboarding snowboader';
$metaImage = path_to_theme('theme', 'union1617') . '/images/facebook/union-snowboard-bindings.jpg';

// Let's customize the META data for these non-node pages.
drupal_set_title($metaTitle);
$html_meta = array(
    'meta_description' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'description',
            'content' => $metaDescription,
        ),
        '#weight' => '5',
    ),
    'meta_keywords' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'name' => 'keywords',
            'content' => $metaKeywords,
        ),
        '#weight' => '10',
    ),
    // Facebook Open Graph Tags
    'facebook_og_site' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'property' => 'og:site_name',
            'content' => 'UNION BINDING CO. | Snowboard Bindings | 2016/2017',
        ),
        '#weight' => '15',
    ),
    'facebook_og_url' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'property' => 'og:url',
            'content' => url(current_path(), array('absolute' => TRUE)),
        ),
        '#weight' => '16',
    ),
    'facebook_og_title' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'property' => 'Union Snowboard Bindings | 2017',
            'content' => $metaTitle,
        ),
        '#weight' => '17',
    ),
    'facebook_og_description' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'property' => 'og:description',
            'content' => $metaDescription,
        ),
        '#weight' => '18',
    ),
    'facebook_og_image' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'property' => 'og:image',
            'content' => url($metaImage, array('absolute' => TRUE)),
        ),
        '#weight' => '19',
    ),
);
foreach ($html_meta as $key => $metadata) {
  drupal_add_html_head($metadata, $key);
}
?>
<main id="bindings-page">
    <section id="bindings-filter">
      <div class="container">
        <div id="filter-title">
          <h6>Binding Filter:</h6>
        </div>
        <div id="filter-tabs">
          <ul>
            <li><a class="filter-tab" data-filterLabel="mens">men's</a></li>
            <li><a class="filter-tab" data-filterLabel="womens">women's</a></li>
            <li><a class="filter-tab" data-filterLabel="minis">kid's</a></li>
            <li><a class="filter-tab" data-filterLabel="custom">Custom House</a></li>
          </ul>
        </div>
      </div>
    </section>
    <section id="bindings-grid">
      <div class="container">
        <div class="filter-group" id="filter-group-mens">
          <div class="section-title">
            <h2>Men's Bindings</h2>
          </div>
          <?php print views_embed_view('bindings_by_collection', 'page', 'mens' ); ?>
        </div>
        <div class="filter-group" id="filter-group-womens">
          <div class="section-title">
            <h2>Women's Bindings</h2>
          </div>
          <?php print views_embed_view('bindings_by_collection', 'page', 'womens' ); ?>
        </div>
        <div class="filter-group" id="filter-group-minis">
          <div class="section-title">
            <h2>Kid's Bindings</h2>
          </div>
          <?php print views_embed_view('bindings_by_collection', 'page', 'minis' ); ?>
        </div>
        <div class="filter-group" id="filter-group-custom">
          <div class="section-title">
            <h2>Custom House</h2>
          </div>
          <?php print views_embed_view('bindings_by_collection', 'page', 'custom-house' ); ?>
        </div>
      </div>
    </section>
  </main>