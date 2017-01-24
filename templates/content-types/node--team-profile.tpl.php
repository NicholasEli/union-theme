<?php
hide($content['field_profile_name_override']);
hide($content['field_profile_hometown']);
hide($content['field_profile_photo']);
hide($content['field_profile_bio']);
hide($content['field_profile_links']);
hide($content['field_instagram_id']);
hide($content['field_profile_ads']);
hide($content['field_profile_rider_bindings']);
hide($content['field_profile_birthday']);
hide($content['field_profile_stance']);
hide($content['field_profile_local_resort']);
hide($content['field_profile_sponsors']);
hide($content['field_profile_riding_binding']);
hide($content['field_profile_banner']);

$hometown = render($content['field_profile_hometown']);
$riding = $content['field_profile_riding_binding'];
//kpr($content['field_profile_ads']);
//kpr($content['field_profile_banner']);
?>

<?php if ($view_mode == 'teaser') { ?>
  <a class="rider" href="<?php print $node_url;?>">
      <?php
        foreach ((array)$node->field_profile_photo['und'] as $item) {
            print '<img src="' . image_style_url('teaser_profile_photo', $item['uri']) . '"/>';
        }
      ?>
    <div class="rider-name">
      <p>
        <?php
          $fieldTitleOverride = field_get_items('node', $node, 'field_profile_name_override');
          if($fieldTitleOverride){ 
              print $node->field_profile_name_override['und'][0]['value']; 
          } else { 
              print $title;
          } 
        ?>
      </p>
    </div>
  </a>
<?php } ?>
<?php if ($view_mode == 'full') {?>
<?php
$opengraphImageSource = file_create_url($node->field_profile_photo['und'][0]['uri']);

$opengraphImage = url($opengraphImageSource, array('absolute' => TRUE, 'https'=> FALSE));
$opengraphImageSecure = url($opengraphImageSource, array('absolute' => TRUE, 'https'=> TRUE));

// Add as many META tags overrides as we need - or check if the admin has them customized
$html_meta = array(
    'facebook_og_image' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'property' => 'og:image',
            'content' => $opengraphImage,
        ),
        '#weight' => '30',
    ),
    // We need secure image as well
    'facebook_og_image_secure' => array(
        '#tag' => 'meta',
        '#attributes' => array(
            'property' => 'og:image:secure_url',
            'content' => $opengraphImageSecure,
        ),
        '#weight' => '30',
    ),
);
foreach ($html_meta as $key => $metadata) {
    drupal_add_html_head($metadata, $key);
}
?>
    <main id="profile">
        <section id="page-header">
            <h1>THE TEAM</h1>
            <p>2016 / 2017 PRO RIDERS</p>
        </section>
        <?php
            $items = $content['field_profile_banner']['#items'];
            if(count($items) != 0){
                print '<section id="profile-slider"><div class="swiper-container"><div class="swiper-wrapper">';

                for($i=0; $i < count($items); $i++){
                    $uri = image_style_url('profile_banner', $content['field_profile_banner']['#items'][$i]['uri']);
                    print '<div class="swiper-slide"><div class="swiper-overlay" data-swiperSmall="'. $uri .'" data-swiperLarge="' . $uri. '"></div></div>';
                }

                print '</div><div class="swiper-pagination"></div><div class="swiper-button-prev"></div><div class="swiper-button-next"></div></div></section>';
            }
        ?>
        <section id="rider-profile">
            <div class="container">
                <div id="profile-left">
                  <?php print render($content['field_profile_photo']); ?>
                </div>
                <div id="profile-right">
                    <div id="rider-bio">
                        <h2>
                            <?php
                                $fieldTitleOverride = field_get_items('node', $node, 'field_profile_name_override');
                                if($fieldTitleOverride){ 
                                    print $node->field_profile_name_override['und'][0]['value']; 
                                }else{ 
                                    print $title;
                                } 
                            ?>
                        </h2>
                        <h6><?php print $hometown; ?></h6>
                        <p><?php print render($content['field_profile_bio']); ?></p>
                    </div>
                  <div id="profile-flex-wrapper"> 
                    <div id="profile-info">
                        <p class="stats">Info:</p>
                        <ul class="stats">
                            <li>HOMETOWN: <span><?php print $hometown; ?></span></li>
                            <li>LOCAL RESORT: <span><?php print render($content['field_profile_local_resort']); ?></span></li>
                            <li>REGULAR OR GOOFY: <span><?php print render($content['field_profile_stance']); ?></span></li>
                            <li>SPONSORS: <span><?php print render($content['field_profile_sponsors']); ?></span></li>
                        </ul>
                        <p class="riding">Riding:</p>
                        <ul class="riding">
                            <?php
                            for($i=0; $i < count($riding['#items']); $i++){
                                $binding = $riding['#items'][$i]['value'];
                                $url = str_replace([' ', '.'], '-', $binding);
                                $imgUrl = $riding[$i]['#markup'];
                                $bindingName = strtolower($binding);
                                if($bindingName === 'legacy' || $bindingName === 'trilogy' || $bindingName === 'milan' || $bindingName === 'juliet' || $bindingName === 'rose'){
                                    $gender = 'womens';
                                }else{
                                    $gender = 'mens';
                                }
                                print '<li><a href="' . base_path() .'snowboard-bindings/'.$gender.'/union-'. strtolower($url) . '-bindings-2017"><img src="'.base_path().'sites/default/files/styles/product_overview/public/binding/hero/'.$imgUrl.'.png"/>'. $bindingName . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div id="profile-media">
                        <p>Instagram: </p>
                        <div id="ig-images">
                            <?php
                                foreach ((array)$node->field_profile_ads['und'] as $item) {
                                    $photoLarge = image_style_url('default', $item['uri']);
                                    $photoSmall = image_style_url('ads-archive', $item['uri']);
                                    $photoTitle = $item['title'];
                                    print '<div><img class="overlay-btn" data-overlay-target="profile-instagram-overlay" data-src="'.$photoLarge.'" src="' . $photoSmall . '" /></div>';
                                }
                            ?>
                        </div>
                        <div id="follow">
                            <p>Follow:</p>
                            <ul>
                                <?php if ($node->field_profile_links['und'][0] > '' ) {
                                    foreach ((array)$node->field_profile_links['und'] as $item) {
                                        $title = strtolower($item['title']);

                                        switch ($title) {
                                            case 'facebook':
                                                print '<li><a href="'. $item['url'] .'" target="_blank"><i class="fa fa-facebook"></i></a></li>';
                                            break;
                                            case 'twitter':
                                                print '<li><a href="'. $item['url'] .'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
                                            break;
                                            case 'instagram':
                                                print '<li><a href="'. $item['url'] .'" target="_blank"><i class="fa fa-instagram"></i></a></li>';
                                            break;
                                            case 'vimeo':
                                                print '<li><a href="'. $item['url'] .'" target="_blank"><i class="fa fa-vimeo"></i></a></li>';
                                            break;
                                            case 'youtube':
                                                print '<li><a href="'. $item['url'] .'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
                                            break;
                                            default:
                                                print '<li><a href="'. $item['url'] .'" target="_blank"><i class="fa fa-link"></i></a></li>';
                                            break;
                                        }
                                    }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="additional-riders">
            <div class="container">
                <h3>ADDITIONAL PRO RIDERS:</h3>
                <div id="rider-grid">
                    <?php print views_embed_view('team_pro_riders', 'block_1'); ?>
                </div>
            </div>
        </section>
        <div id="profile-instagram-overlay" class="butthole-overlay">
            <div class="close-overlay" data-overlay-target="profile-instagram-overlay">
              <div class="overlay-bar-top"></div>
              <div class="overlay-bar-middle"></div>
              <div class="overlay-bar-bottom"></div>
            </div>
            <div class="instagram-swiper-container">
                <div id="ig-swiper" class="swiper-wrapper">

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>  
    </main>
<?php };?>










