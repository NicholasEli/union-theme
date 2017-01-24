
<?php
  hide($content['field_front_slides']);
  hide($content['field_front_featured_bindings']);
  //kpr($content['field_front_slides']);
  //get index of slide
  $front_slides = $content['field_front_slides'];
  $indexArray = [];
  foreach($front_slides['#items'] as $item) {
    $index = $item['value'];
    array_push($indexArray, $index);
  }

  for($i=0; $i < count($indexArray); $i++){
    $uri    =    file_create_url($front_slides[$i]['entity']['field_collection_item'][$indexArray[$i]]['field_slide_image'][0]['#item']['uri']);
    $mobileUri = image_style_url('front_slides_mobile', $front_slides[$i]['entity']['field_collection_item'][$indexArray[$i]]['field_slide_image'][0]['#item']['uri']);
    $slideTitle = $front_slides[$i]['entity']['field_collection_item'][$indexArray[$i]]['field_slide_text_1']['#items'][0]['value'];
    $text       = $front_slides[$i]['entity']['field_collection_item'][$indexArray[$i]]['field_slide_text'][0]['#markup'];
    $title      = $front_slides[$i]['entity']['field_collection_item'][$indexArray[$i]]['field_slide_link'][0]['#element']['title'];
    $url        = $front_slides[$i]['entity']['field_collection_item'][$indexArray[$i]]['field_slide_link'][0]['#element']['url'];
?>
    <div class="swiper-slide">
        <div class="container">
            <div class="swiper-content">
                <div class="swiper-content-title">
                    <h6><?php print $slideTitle; ?></h6>
                </div>
                <div class="swiper-content-text">
                    <p><?php print $text; ?></p>
                </div>
                <div class="swiper-content-link">
                    <?php 
                      if($url){
                        print '<a href="'. $url .'">' . $title . '</a>'; 
                      }
                    ?>
                </div>
            </div>
        </div>
        <div class="swiper-overlay" data-swiperSmall="<?php print $mobileUri; ?>" data-swiperLarge="<?php print $uri; ?>"></div>
    </div>
<?php
  } 
  //kpr($front_slides);
?>

