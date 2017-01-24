<?php
  hide($content['field_binding_collection']);
  hide($content['field_binding_img_colorways']);
  hide($content['field_binding_intro']);
  hide($content['field_binding_stats_bkg']);
  hide($content['field_binding_highlights']);
  hide($content['field_binding_features']);
  hide($content['field_binding_prev']);
  hide($content['field_binding_next']);
  hide($content['field_product_skus']);
  hide($content['field_clinic_video']);
  hide($content['field_binding_sub_heading']);
  hide($content['field_disk_type']);
  hide($conent['field_tested_and_approved']);
  hide($content['field_platinum_pick']);

  // Terms
  hide($content['field_binding_baseplate']);
  hide($content['field_binding_bushing']);
  hide($content['field_binding_heelcup']);
  hide($content['field_binding_highback']);
  hide($content['field_binding_straps']);
  hide($content['field_binding_buckles']);

  hide($content['field_meter_baseplate']);
  hide($content['field_meter_highback']);



  // make sure to hide all fields from SKU Level
  hide($content['product:sku']);
  hide($content['product:title']);
  hide($content['product:commerce_price']);
  hide($content['product:status']);
  hide($content['product:field_binding_collection']);
  hide($content['product:field_sku_color_swatch']);
  hide($content['product:field_product_size']);
  hide($content['field_technology_images']);
  hide($content['field_binding_features']);

  hide($content['language']);
  hide($content['links']);

  $techImages           = $content['field_technology_images'];
  $colorways            = $content['field_binding_img_colorways'];
  $features             = $content['field_binding_features']['#items'];
  $price                = $content['product:commerce_price'][0]['#markup'];

  $weight               = $content['field_weight']['#items'];

  $diskType             = $content['field_disk_type']['#items'];
  $baseplateStiffness   = $content['field_meter_baseplate']['#items'];
  $highbackStiffness    = $content['field_meter_highback']['#items'];

?>
<?php if ($view_mode == 'teaser') { ?>
    <?php
    // Begin Colorways Loop
    //kpr($content['field_binding_img_colorways']);
    foreach ((array)$node->field_binding_img_colorways['und'] as $item) {
      $colorName = str_replace(" ", "-", $item['title']);
    ?>
        <div class="binding">
            <a href="<?php print $node_url . '#' . $colorName;?>">
                <div class="binding-display">
                    <div class="special-feature-icon">
                        <?php
                        if($content['field_tested_and_approved']['#items'][0]['value'] === "Yes"){
                          print '<img class="badge tws-tested" src="' . $GLOBALS['base_path'] . drupal_get_path('theme', 'union1516') . '/images/badge-tws-tested.png" alt="Tested and Approved by Transworld Snowboarding">';
                        }

                        if($content['field_platinum_pick']['#items'][0]['value'] === "Yes"){
                          print '<img class="badge platinum-pick" src="' . $GLOBALS['base_path'] . drupal_get_path('theme', 'union1516') . '/images/badge-sm-platinum.png" alt="Snowboard Magazine Platinum Picks Award">';
                        }
                        ?>
                    </div>
                    <!-- hero image -->
                    <?php
                    $hero_name  = str_replace('swatch', 'hero', $item['filename']);
                    $hero       = str_replace('.jpg', '.png', $hero_name);
                    print '<img src="'.image_style_url('product_overview', 'public://binding/hero/'.$hero).'" alt="Union Bindings '.check_plain($node->title).' - '.$item['title'].'" class="main_catalog--product_image">';
                    ?>
                </div>
            </a>
                <div class="binding-info-preview">
                    <div class="binding-name">
                        <h6><?php print check_plain($node->title) ?></h6>
                    </div>
                    <div class="binding-tagline">
                        <p><?php print render($content['field_binding_sub_heading']);?></p>
                    </div>
                    <div class="colorways">
                        <label>colorways:</label>
                        <?php
                        for($i=0; $i < count($colorways['#items']); $i++){ ?>
                            <?php 
                                $hashnav = str_replace(" ", "-",$colorways['#items'][$i]['title']);
                            ?>
                            <a href="<?php print $node_url;?>#<?php print str_replace(" ", "-", $hashnav);?>">
                                <img src="<?php print $base_path;?>sites/default/files/binding/colorway/<?php print render($content['field_binding_img_colorways']['#items'][$i]['filename']);?>" alt="">
                            </a>
                        <?php }; ?>
                    </div>
                </div>
        </div>
    <?php } // Close off the Foreach Loop on Colorways ?>
<?php }; // END TEASER VIEW ?>

<?php if ($view_mode == 'full') { // FULL VIEW ?>

  <?php
  $first_hero_name  = str_replace('swatch', 'hero', $content['field_binding_img_colorways'][0]['#item']['filename']);
  $first_hero       = str_replace('.jpg', '.png', $first_hero_name);

  // First Image   
  $opengraphImageSecure   = url(image_style_url('facebook_opengraph', 'public://binding/hero/'. $first_hero), array('absolute' => TRUE));
  $opengraphImage = strtr($opengraphImageSecure, "https", "http");

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
    <div id="binding-video-overlay" class="butthole-overlay">
        <div class="close-overlay" data-overlay-target="binding-video-overlay">
            <div class="overlay-bar-top"></div>
            <div class="overlay-bar-middle"></div>
            <div class="overlay-bar-bottom"></div>
        </div>
        <div class="overlay-wrapper">
            <img class="vid-placeholder" src="https://placehold.it/1200x600">
            <?php print render($content['field_clinic_video']); ?>
        </div>
    </div>
    <div id="binding-size-chart-overlay" class="butthole-overlay">
        <div class="close-overlay" data-overlay-target="binding-size-chart-overlay">
            <div class="overlay-bar-top"></div>
            <div class="overlay-bar-middle"></div>
            <div class="overlay-bar-bottom"></div>
        </div>
        <div class="overlay-wrapper">
            <?php include 'sites/all/themes/union1617/templates/components/binding-size-chart.php' ;?>
        </div>
    </div>
    <div id="binding-buy-overlay" class="butthole-overlay">
        <div class="close-overlay" data-overlay-target="binding-buy-overlay">
          <div class="overlay-bar-top"></div>
          <div class="overlay-bar-middle"></div>
          <div class="overlay-bar-bottom"></div>
        </div>
        <div id="buy" class="overlay-wrapper">
            <h3>Select Your Binding</h3>
            <div class="product--skus"><?php print render($content['field_product_skus']); ?></div>
            <div class="product--price buy-btn"><?php print $price; ?></div>
        </div>
    </div>
    <main id="binding-page">
        <section id="page-header">
            <h1><?php print check_plain($node->title) ?></h1>
            <p><?php print render($content['field_binding_sub_heading']);?></p>
        </section>
        <div id="binding-info-sections">
            <div id="section-container" class="container">
                <section id="binding-swiper">
                    <div class="binding-swiper-container container">
                        <div class="swiper-wrapper">
                            <?php
                            for($i=0; $i < count($colorways['#items']); $i++){
                                $hero_name  = str_replace('swatch', 'hero', $content['field_binding_img_colorways'][$i]['#item']['filename']);
                                $hero       = str_replace('.jpg', '.png', $hero_name);
                                print '<div class="swiper-slide" data-hash="'.str_replace(" ", "-",$content['field_binding_img_colorways'][$i]['#item']['title']) .'"><img src="'.file_create_url('public://binding/hero/'. $hero).'"></div>';
                            }
                            ?>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </section>

                <section id="colorways-mobile">
                    <div class="container">
                        <label>colorways:
                            <div class="swatch">
                                <?php
                                for($i=0; $i < count($colorways['#items']); $i++){
                                    $uri = file_create_url($content['field_binding_img_colorways']['#items'][$i]['uri']);
                                ?>
                                    <img src="<?php print $uri?>" alt="">
                                <?php }; ?>
                            </div>
                        </label>
                    </div>
                </section>

                <section id="price-mobile" class="btn buy-btn">
                    <div class="container">
                            <p><?php print $price; ?></p>
                    </div>
                </section>

                <section id="video-buy-size-mobile">
                    <div class="container">
                        <a class="overlay-btn" data-overlay-target="binding-video-overlay" href="">video</a>
                        <a class="overlay-btn buy-btn" data-overlay-target="binding-buy-overlay" href="javascript:void(0)">buy now</a>
                        <a class="overlay-btn" data-overlay-target="binding-size-chart-overlay" href="javascript:void(0)">size chart</a>
                    </div>
                </section>
                <!-- desktop - right -->
                    <div id="desktop-align-right">
                        <section id="key-features">
                            <div class="container">
                                <div id="features-title">
                                    <h6>Key Features</h6>
                                </div>
                                <?php
                                // Lets grab all of the Entity Data from the Field Collections
                                $highlights_title = array(); // Title
                                $highlights_desc = array(); // Description

                                // Start our count as 0 index
                                $highlights_count = 0;

                                // Make sure the field was populated first then identify each index as item variable
                                if(!empty($content['field_binding_highlights']['#items'])) {

                                    foreach($content['field_binding_highlights']['#items'] as $item) {
                                        // because field items are numbered consecutively, the correct index needs to be retrieved here
                                        $index = $item['value'];

                                        // Populate Title Data array
                                        $highlights_title[] = $content['field_binding_highlights'][$highlights_count]['entity']['field_collection_item'][$index]['field_binding_highlights_title'][0]['#markup'];

                                        // Populate Description Data array
                                        $highlights_desc[] = $content['field_binding_highlights'][$highlights_count]['entity']['field_collection_item'][$index]['field_binding_highlights_desc'][0]['#markup'];

                                        $highlights_count++;
                                    }
                                }
                                ?>
                                <div class="feature">
                                    <h4><?php print $highlights_title[0]; ?></h4>
                                    <p><?php print $highlights_desc[0]; ?></p>
                                </div>
                                <div class="feature">
                                    <h4><?php print $highlights_title[1]; ?></h4>
                                    <p><?php print $highlights_desc[1]; ?></p>
                                </div>
                                <?php if($weight){ ?>
                                    <div id="binding-weight">
                                        <p>BINDING WEIGHT: <?php print render($content['field_weight']);?>g</p>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>

                        <section id="technology">
                            <div class="container">
                                <div id="technology-title">
                                    <h6>technology</h6>
                                </div>
                                <?php
                                    if(isset($techImages['#items'])){
                                        // Display all the Tech Images
                                        for($i=0; $i < count($techImages['#items']); $i++){
                                        print '<div class="tech"><img src="'.base_path().'sites/default/files/technology/'.$techImages['#items'][$i]['filename'].'"></div>';
                                        }
                                    }
                                ?>
                            </div>
                        </section>

                        <section id="binding-chart">
                            <div class="container">
                                <?php if($baseplateStiffness){ 
                                  $baseplateValue = $content['field_meter_baseplate']['#items'][0]['value'];
                                ?>
                                  <div id="baseplate-stiffness" class="chart">
                                          <h4>Baseplate Stiffness</h4>
                                          <div id="baseplate-stiffness-progress" class="chart-wrapper" data-percent="<?php print render($baseplateValue); ?>">
                                          </div>
                                          <?php 
                                            switch (true) {
                                              case $baseplateValue <= 4:
                                                print '<p>Loose and surfy</p>';
                                              break;
                                              case $baseplateValue >= 5 && $baseplateValue <= 7:
                                                print '<p>medium flex</p>';
                                              break;
                                              case $baseplateValue >= 8 && $baseplateValue <= 10:
                                                print '<p>Stiff and responsive</p>';
                                              break;
                                              default:
                                                print ''; 
                                              break;
                                            }
                                          ?>
                                  </div>
                                <?php } ?>
                                <?php if($highbackStiffness){ 
                                  $highbackValue = $content['field_meter_highback']['#items'][0]['value'];
                                ?>
                                <div id="highback-stiffness" class="chart" >
                                    <h4>Highback Stiffness</h4>
                                    <div id="highback-stiffness-progress" class="chart-wrapper" data-percent="<?php print render($highbackValue); ?>">

                                    </div>
                                    <?php 
                                        switch (true) {
                                          case $highbackValue <= 4:
                                            print '<p>Loose and surfy</p>';   
                                          break;
                                          case $highbackValue >= 5 && $highbackValue <= 7:
                                            print '<p>medium flex</p>';
                                          break;
                                          case $highbackValue >= 8 && $highbackValue <= 10:
                                            print '<p>Stiff and responsive</p>';
                                          break;
                                          default:
                                            print ''; 
                                          break;
                                        }
                                      ?>
                                </div>
                                <?php } ?>
                                <?php if($diskType) { ?>

                                    <div id="disktype" class="chart" >
                                        <h4>Disk Type</h4>

                                        <img src="<?php print base_path();?>sites/default/files/disktype/<?php print ($diskType[0]['filename']);?>" alt="">
                                        <?php
                                          if($diskType[0]['filename'] === 'universal-disk.png'){
                                            print '<p>COMPATIBLE WITH 4X4, 4X2, CHANNEL</p>';
                                          }else if($diskType[0]['filename'] === 'minidisk.png'){
                                            print '<p>Mini Disk 4x2 and the channel</p>';
                                          }

                                        ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </section>

                        <section id="colorways-desktop">
                            <div class="container">
                                <label>colorways:
                                    <div class="swatch">
                                        <?php
                                            for($i=0; $i < count($colorways['#items']); $i++){
                                                $uri = file_create_url($content['field_binding_img_colorways']['#items'][$i]['uri']);
                                            ?>
                                                <img src="<?php print $uri?>" alt="">
                                            <?php }; ?>
                                    </div>
                                </label>
                            </div>
                        </section>

                        <section id="price-desktop" class="buy-btn">
                            <div class="container">
                                <p><?php print $price; ?></p>
                            </div>
                        </section>

                        <section id="video-buy-size-desktop">
                            <div class="container">
                                <a class="overlay-btn buy-btn" data-overlay-target="binding-buy-overlay" href="javascript:void(0)">buy now</a>
                            </div>
                        </section>
                    </div>
                    <!-- end desktop -->
                </div>
            </div>
        <section id="footer-stats">
            <div class="container">
                <!-- Binding Key Technologies -->
                <?php
                //kpr($content['field_binding_features']);
                for($i=0; $i < count($features); $i++){
                    $value = $features[$i]['value']
                    ?>
                    <div class="horizontal-stat">
                        <div class="horizontal-stat-inner">
                            <h6><?php print $content['field_binding_features'][$i]['entity']['field_collection_item'][$value]['field_binding_features_title'][0]['#markup']; ?></h6>
                            <p><?php print $content['field_binding_features'][$i]['entity']['field_collection_item'][$value]['field_binding_features_desc'][0]['#markup'] ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
        </section>
        <section id="footer-grid-stats">
            <div class="container">
                <div class="grid-stat">
                    <h6>HIGHBACK</h6>
                    <p><?php print render($content['field_binding_highback']); ?></p>
                </div>
                <div class="grid-stat">
                    <h6>Straps</h6>
                    <p><?php print render($content['field_binding_straps']); ?></p>
                </div>
                <div class="grid-stat">
                    <h6>baseplate</h6>
                    <p><?php print render($content['field_binding_baseplate']); ?></p>
                </div>
                <div class="grid-stat">
                    <h6>heelcup</h6>
                    <p><?php print render($content['field_binding_heelcup']); ?></p>
                </div>
                <div class="grid-stat">
                    <h6>bushing</h6>
                    <p><?php print render($content['field_binding_bushing']); ?></p>
                </div>
                <div class="grid-stat">
                    <h6>buckles</h6>
                    <p><?php print render($content['field_binding_buckles']); ?></p>
                </div>
            </div>
        </section>
        <section id="prev-video-size-next">
            <div class="container">
                <?php
                $prevBinder = 'public://binding/hero/'.str_replace('.jpg', '.png', str_replace('COLOR_SWATCHES-', 'HERO-', $node->field_binding_prev['und'][0]['entity']->field_binding_img_colorways['und'][0]['filename']));
                $nextBinder = 'public://binding/hero/'.str_replace('.jpg', '.png', str_replace('COLOR_SWATCHES-', 'HERO-', $node->field_binding_next['und'][0]['entity']->field_binding_img_colorways['und'][0]['filename']));
                ?>
                <div id="prev-binding"><a href="<?php print $GLOBALS['base_path'] . 'node/' . $node->field_binding_prev['und'][0]['entity']->nid; ?>">&#60; View Previous Binding</a></div>
                <div id="video-size">
                    <a class="overlay-btn" data-overlay-target="binding-video-overlay" href="javascript:void(0)">video</a>
                    <a class="overlay-btn" data-overlay-target="binding-size-chart-overlay" href="javascript:void(0)">size chart</a>
                </div>
                <div id="next-binding"><a href="<?php print $GLOBALS['base_path'] . 'node/' . $node->field_binding_next['und'][0]['entity']->nid; ?>">View Next Binding &gt;</a></div>
            </div>
        </section>
    </main>
<?php }; // END FULL VIEW ?>
