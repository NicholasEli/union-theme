<?php
hide($content['field_news_image']);
hide($content['field_news_tags']);
hide($content['field_news_video_embed']);
hide($content['body']);
hide($content['comments']);
hide($content['links']);
print render($content); 
$blogVideo 		= field_get_items('node', $node, 'field_news_video_embed');
$videoRender 	= render($content['field_news_video_embed']);
$blogImage 		= field_get_items('node', $node, 'field_news_image');
$tags 			= $content['field_news_tags'];
// see page.tpl for isBlog() to render sidebar and filter
//kpr($tags);

?>

<?php if ($view_mode == 'teaser') { ?>
      <div class="post fadein">
        <?php //print $node_url ?>
        <div class="post-wrapper">
            <div class="post-title">
            <a href="<?php print $node_url;?>">
              	<h2><?php print check_plain($node->title) ?></h2>
            </a>
            </div>
            <article class="post-video-text">
              	<?php print render($content['body']); ?>
            </article>
            <div class="date">
              <p>-<?php 
              	$formatted_date = format_date($node->created, 'custom', 'd, m, y');
              	print str_replace([' ', ',.'], '.', $formatted_date); 

              ?>-</p>
            </div>
        </div>
    </div>
<?php }; ?>


<?php if ($view_mode == 'full') { ?>
<main id="social" class="social-inner">
    <section id="page-header">
        <h1>The Union Feed</h1>
        <p>Content Filter:</p>
    </section>
    <section id="social-feed">
        <div class="container">
            <aside id="social-sidebar">
                <div id="hashtag"><a>#Unionbindings</a></div>
                    <div id="ig-feed">
                      <?php 
                          $instagram = file_get_contents("https://api.instagram.com/v1/users/21048736/media/recent/?access_token=21048736.1677ed0.78f2dff209f44499ac4f612766623c10");
                          $json = json_decode($instagram, true);
                          
                          for($i=0; $i < 4; $i++){
                            print '<div class="ig-img"><img src="' . $json['data'][$i]['images']['standard_resolution']['url'] .'"></div>';
                          }
                      ?>
                    </div>
                    <div id="follow">
                      <p>follow union binding co:</p><a><i class="fa fa-instagram"></i><span>Instagram</span></a><a><i class="fa fa-twitter"></i><span>Twitter</span></a><a><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    </div>
            </aside>
        		<div id="feed">
					<div class="post fadein team">
				        <?php //print $node_url ?>
				        <div class="post-wrapper">
				            <div class="post-title">
				              	<h2><?php print check_plain($node->title) ?></h2>
				            </div>
				            <article class="post-video-text">
				            	<img class="vid-placeholder" src="https://placehold.it/1000x500">
				              	<?php print render($content['body']); ?>
				            </article>
				            <div class="date">
				              <p>-<?php 
				              	$formatted_date = format_date($node->created, 'custom', 'd, m, y');
				              	print str_replace([' ', ',.'], '.', $formatted_date); 

				              ?>-</p>
				            </div>
				        </div>
				    </div>
				</div>
            </div>
        </div>
    </section>
</main>
<?php }; ?>
