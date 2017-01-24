<main id="social">
    <section id="page-header">
        <h1>The Union Feed</h1>
        <p>Content Filter:</p>
        <form>
            <div>
                <input type="checkbox" id="team" value="154">
                <label for="team">Team</label>
            </div>
            <div>
                <input type="checkbox" id="videos" value="155">
                <label for="videos">Videos</label>
            </div>
            <div>
                <input type="checkbox" id="product" value="133">
                <label for="product">Product</label>
            </div>
            <div>
                <input type="checkbox" id="custom-house" value="146">
                <label for="custom-house">Custom House</label>
            </div>
            <div>
                <input type="checkbox" id="events" value="205">
                <label for="events">Events</label>
            </div>
        </form>
    </section>
    <section id="social-feed">
        <div class="container">
            <aside id="social-sidebar">
                <div id="hashtag"><a href="https://www.instagram.com/unionbindingco/?hl=en" target="_blank">#unionbindings</a></div>
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
                      <p>follow union binding co.</p>
                        <a href="https://www.instagram.com/unionbindingco/?hl=en" target="_blank"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                        <a href="https://twitter.com/unionbindings" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                        <a href="https://www.facebook.com/UnionBindingCompany" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    </div>
            </aside>
    		
		  <?php print views_embed_view('blog_entries', 'page_1'); ?>
			
        </div>
    </section>
	<section id="load-more">
        <div id="load-more-btn" class="flip-container">
            <div id="load-more-text">Load More</div>
            <div id="flipper">
                <div id="blink">
                </div>
            </div>
        </div>
    </section>
</main>