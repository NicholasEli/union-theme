<?php
// Customize our META Data
$metaTitle = 'STRONGER, The Union Team Movie | Official Trailer';
$metaDescription = 'Starring the best team in snowboarding, the long awaited UNION BINDING COMPANY team movie is here at last!  Shot entirely with RED cameras in 4K and above, STRONGER was filmed on location from the peaks of the Alaskan alpine to the streets of Finland, and all the best spots in between.  Bringing together legends, veterans and rookies, STRONGER delivers insane snowboarding from Kazu Kokubo, Gigi Rüf, Scott Stevens, Dustin Craven, Johnny O’Connor, Phil Jacques, Travis Rice, Dan Brisse, Anto Chamberland, Bryan Iguchi, Arthur Longo & Torstein Horgmo.  Buckle up tight, because a crew like this has never been assembled in a major snowboarding motion picture.';
$metaKeywords = 'union bindings snowboarding team movie';
$metaImage = 'https://www.unionbindingcompany.com/sites/default/files/union-team-movie-1200x630.jpg';
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
'content' => $metaImage,
),
'#weight' => '19',
),
);
foreach ($html_meta as $key => $metadata) {
drupal_add_html_head($metadata, $key);
}
?>
<main id="team-movie">
<section id="team-movie-banner">
	<div class="container">
		<div id="banner-nav">
			<nav>
				<div id="nav-stronger">Stronger</div>
				<ul>
					<li><a data-scroll href="#tour-dates">World Tour</a></li>
					<li><a data-scroll href="#the-riders">Riders</a></li>
					<li><a data-scroll href="#the-soundtrack">Soundtrack</a></li>
					<li><a data-scroll class="watch" href="#movie-container">Watch</a></li>
				</ul>
			</nav>
		</div>
		<div id="banner-heading-group">
			<svg id="union-logo" width="100%" height="100%" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
				<g transform="matrix(1,0,0,1,-9.7952,-82.149)">
				<path d="M29.618,104.275C29.618,105.171 28.891,105.9 27.993,105.9L21.597,105.9C20.7,105.9 19.973,105.171 19.973,104.275L19.973,94.084L10.314,94.084L10.314,99.279L12.811,101.772L12.811,106.536C12.811,109.35 15.092,111.631 17.906,111.631L31.685,111.631C34.499,111.631 36.779,109.35 36.779,106.536L36.779,101.772L39.277,99.279L39.277,94.084L29.618,94.084L29.618,104.275ZM10.314,82.667L10.314,88.436L20.65,88.437L24.796,92.583L28.941,88.437L39.277,88.437L39.277,82.667L10.314,82.667Z" style="fill:rgb(231,124,54);fill-rule:nonzero;"></path>
			</g>
			<h1>Stronger.</h1>
			<h2>A TEAM MOVIE FROM THE UNION BINDING COMPANY</h2>
		</svg>
	</div>
	<div id="movie-container">
		<img class="vid-placeholder" src="https://placehold.it/1200x675">
		<iframe id="movie" width="560" height="315" src="https://www.redbull.tv/embed/AP-1NVEGJF4W1W11" frameborder="0" allowfullscreen></iframe>
	</div>
	<div id="banner-info-group">
		<img class="bounce" src="<?php print base_path() . $directory;?>/images/team/arrow-down.png">
		<p>Starring the best team in snowboarding, the long awaited UNION BINDING COMPANY team movie is here at last!  Shot entirely with RED cameras in 4K and above, STRONGER was filmed on location from the peaks of the Alaskan alpine to the streets of Finland, and all the best spots in between.  Bringing together legends, veterans and rookies, STRONGER delivers insane snowboarding from Kazu Kokubo, Gigi Rüf, Scott Stevens, Dustin Craven, Johnny O’Connor, Phil Jacques, Travis Rice, Dan Brisse, Anto Chamberland, Bryan Iguchi, Arthur Longo & Torstein Horgmo.  Buckle up tight, because a crew like this has never been assembled in a major snowboarding motion picture.</p>
		<!--<a data-scroll class="watch" href="#movie-container">Watch the trailer
		<img src="<?php //print base_path() . $directory;?>/images/team/play.png"></a>-->
	</div>
</div>
</section>
<section id="premier">
<svg width="100%" height="100%" viewBox="0 0 1180 145" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
	<g transform="matrix(0.999065,0,0,0.999065,-405.821,0.0677548)">
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<path d="M406.2,561.551L424.491,539.641C437.155,550.093 450.421,556.727 466.501,556.727C479.164,556.727 486.803,551.701 486.803,543.46L486.803,543.058C486.803,535.219 481.978,531.199 458.461,525.169C430.119,517.933 411.828,510.093 411.828,482.154L411.828,481.752C411.828,456.224 432.33,439.34 461.074,439.34C481.576,439.34 499.064,445.772 513.335,457.229L497.255,480.546C484.792,471.903 472.531,466.676 460.672,466.676C448.813,466.676 442.581,472.104 442.581,478.938L442.581,479.34C442.581,488.586 448.612,491.601 472.933,497.832C501.476,505.269 517.556,515.521 517.556,540.043L517.556,540.445C517.556,568.385 496.25,584.063 465.898,584.063C444.592,584.063 423.084,576.626 406.2,561.551" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<path d="M573.236,469.893L530.422,469.893L530.422,441.351L647.005,441.351L647.005,469.893L604.191,469.893L604.191,582.053L573.236,582.053L573.236,469.893Z" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<path d="M729.015,509.691C744.09,509.691 752.733,501.651 752.733,489.792L752.733,489.389C752.733,476.123 743.487,469.289 728.412,469.289L697.658,469.289L697.658,509.691L729.015,509.691ZM666.703,441.35L731.025,441.35C748.914,441.35 762.784,446.375 772.03,455.621C779.869,463.46 784.09,474.515 784.09,487.781L784.09,488.184C784.09,510.897 771.828,525.168 753.939,531.801L788.311,582.052L752.13,582.052L721.98,537.027L697.658,537.027L697.658,582.052L666.703,582.052L666.703,441.35Z" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<path d="M918.963,512.104L918.963,511.702C918.963,487.582 901.275,467.481 876.35,467.481C851.426,467.481 834.139,487.179 834.139,511.3L834.139,511.702C834.139,535.822 851.828,555.922 876.753,555.922C901.677,555.922 918.963,536.224 918.963,512.104M801.778,512.104L801.778,511.702C801.778,471.702 833.336,438.938 876.753,438.938C920.169,438.938 951.325,471.3 951.325,511.3L951.325,511.702C951.325,551.702 919.767,584.465 876.35,584.465C832.934,584.465 801.778,552.104 801.778,512.104" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<path d="M974.843,441.35L1003.38,441.35L1069.32,527.982L1069.32,441.35L1099.87,441.35L1099.87,582.053L1073.54,582.053L1005.39,492.606L1005.39,582.053L974.843,582.053L974.843,441.35Z" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<path d="M1123.38,512.104L1123.38,511.702C1123.38,471.702 1154.54,438.938 1197.15,438.938C1222.48,438.938 1237.76,445.772 1252.43,458.235L1232.93,481.752C1222.08,472.707 1212.43,467.481 1196.15,467.481C1173.64,467.481 1155.75,487.38 1155.75,511.3L1155.75,511.702C1155.75,537.43 1173.43,556.325 1198.36,556.325C1209.62,556.325 1219.67,553.51 1227.51,547.882L1227.51,527.782L1196.35,527.782L1196.35,501.049L1257.45,501.049L1257.45,562.154C1242.98,574.416 1223.08,584.465 1197.36,584.465C1153.54,584.465 1123.38,553.711 1123.38,512.104" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<path d="M1283.18,441.35L1389.32,441.35L1389.32,468.888L1313.94,468.888L1313.94,497.43L1380.27,497.43L1380.27,524.968L1313.94,524.968L1313.94,554.516L1390.32,554.516L1390.32,582.053L1283.18,582.053L1283.18,441.35Z" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<path d="M1476.15,509.691C1491.22,509.691 1499.87,501.651 1499.87,489.792L1499.87,489.389C1499.87,476.123 1490.62,469.289 1475.55,469.289L1444.79,469.289L1444.79,509.691L1476.15,509.691ZM1413.84,441.35L1478.16,441.35C1496.05,441.35 1509.92,446.375 1519.16,455.621C1527,463.46 1531.22,474.515 1531.22,487.781L1531.22,488.184C1531.22,510.897 1518.96,525.168 1501.07,531.801L1535.44,582.052L1499.26,582.052L1469.11,537.027L1444.79,537.027L1444.79,582.052L1413.84,582.052L1413.84,441.35Z" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
		<g transform="matrix(1,0,0,1,0,-439.201)">
			<rect x="1554.74" y="549.893" width="32.563" height="32.16" style="fill:rgb(29,29,27);fill-rule:nonzero;"/>
		</g>
	</g>
</svg>
</section>
<section id="tour-dates">
<div class="container">
	<div id="tour-title-group">
		<h3>World Tour</h3>
		<h4>Thank you to everyone who made it out to your local premiere!</h4>
	</div>
	<div id="tour-grid">
			<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">USA</p>
		                <h3>Seattle</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/seattle/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/seattle/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/seattle/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/seattle/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">USA</p>
		                <h3>Denver</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/denver/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/denver/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/denver/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/denver/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">Canada</p>
		                <h3>Vancouver B.C.</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/vancouver/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/vancouver/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/vancouver/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/vancouver/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">UK</p>
		                <h3>London</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/london/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/london/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/london/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/london/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">Italy</p>
		                <h3>Milano</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/milano/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/milano/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/milano/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/milano/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">Russia</p>
		                <h3>Moscow</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/moscow/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/moscow/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/moscow/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/moscow/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">Japan</p>
		                <h3>Tokyo</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/tokyo/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/tokyo/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/tokyo/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/tokyo/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">Austria</p>
		                <h3>Innsbruck</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/innsbruck/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/innsbruck/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/innsbruck/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/innsbruck/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">China</p>
		                <h3>Beijing</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/beijing/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/beijing/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/beijing/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/beijing/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>

		  	<div class="grid">
		      	<div class="grid-inner">
		        	<div class="tour-info">
		            	<p class="location">Ukraine</p>
		                <h3>Kyiv</h3>
		                <div class="swiper-container">
						    <!-- Additional required wrapper -->
						    <div class="swiper-wrapper">
						        <!-- Slides -->
						        <div class="swiper-slide">
						        	<img src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/ukraine/1.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/ukraine/2.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/ukraine/3.jpg">
						        </div>
						        <div class="swiper-slide">
						        	<img class="swiper-lazy" data-src="<?php print base_path() ;?>sites/all/themes/union1617/images/movie/ukraine/4.jpg">
						        </div>
						    </div>
						    
						    <!-- If we need navigation buttons -->
						    <div class="swiper-button-prev"></div>
						    <div class="swiper-button-next"></div>
						</div>
		            </div>
		     	</div>
		  	</div>
	</div>
</div>
</section>
<section id="editorial">
<div id="editorial-group-left">
	<img class="vid-placeholder" src="http://img.youtube.com/vi/CQtZRHnbPks/maxresdefault.jpg">
	<iframe class="youtube" width="560" height="315" data-src="https://www.youtube.com/embed/CQtZRHnbPks" frameborder="0" allowfullscreen=""></iframe>
</div>
<div id="editorial-group-right">
	<div class="container">
		<p>
			<a href="http://www.pirate-movie-production.com/" target="_blank">
				<span>Produced by:</span> Pirate Movie Productions
				<svg width="100%" height="100%" viewBox="0 0 292 306" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
					<g transform="matrix(1,0,0,1,-7055.58,-7032.09)">
						<path d="M7347.08,7152.47C7339.79,7212.21 7285.77,7231.15 7285.7,7234.47C7285.58,7241.26 7284.39,7307.99 7220.87,7338.09C7238.94,7316.28 7263.98,7285.43 7260.72,7246.07C7258.01,7212.55 7234.25,7192.96 7198.46,7181.51C7207.47,7133.76 7216.42,7086.02 7225.42,7038.29C7300.53,7051.02 7353.38,7082.64 7347.08,7152.47M7241.6,7061.35C7240.74,7061.25 7240.49,7060.24 7240.13,7061.07C7233.89,7094.11 7227.29,7130.28 7221.04,7163.39C7250.85,7175.51 7265.87,7190.24 7278.72,7212.1C7299.13,7200.08 7322.05,7181.91 7325.67,7148.99C7328.29,7125.28 7318.04,7105.22 7303.69,7091.51C7288.15,7076.51 7267.51,7067 7241.6,7061.35" style="fill:white;fill-rule:nonzero;"/>
					</g>
					<g transform="matrix(1,0,0,1,-7055.58,-7032.09)">
						<path d="M7213.37,7037.33C7213.91,7037.57 7195.36,7132.52 7186.49,7179.76C7145.14,7177.7 7110.61,7189.46 7099.89,7231.26C7091.02,7265.32 7100.07,7292.56 7108.85,7317.09C7084.7,7286.11 7068.41,7250.97 7085.52,7198.25C7086.53,7195.24 7047.12,7166.57 7057.24,7105.62C7068.58,7037.95 7140.04,7022.31 7213.37,7037.33M7191.68,7054.02C7191.83,7053.29 7192,7052.57 7191.44,7052.37C7135.87,7043.32 7084.27,7057.9 7077.09,7117.97C7073.99,7143.86 7088.28,7162.77 7100.32,7179.99C7120.63,7165.07 7142.47,7156.91 7172.66,7156.36C7178.76,7123.7 7185.52,7086.7 7191.68,7054.02" style="fill:white;fill-rule:nonzero;"/>
					</g>
					<g transform="matrix(1,0,0,1,-7055.58,-7032.09)">
						<path d="M7112.69,7280.41C7117.11,7252.84 7124.02,7222.14 7149.37,7223.59C7169.94,7224.83 7175.28,7241.9 7177.64,7256.74C7186.09,7243.22 7192.68,7228.45 7211.8,7233.4C7238.61,7240.23 7239.28,7273.9 7232.2,7302.39C7249.27,7278.42 7249.18,7242.71 7237.83,7223.35C7227.91,7206.51 7210.69,7197.8 7189.61,7193.29C7168.78,7188.77 7145.84,7193.9 7132.3,7206.1C7109.9,7226.23 7108.78,7250.79 7112.69,7280.41" style="fill:white;fill-rule:nonzero;"/>
					</g>
				</svg>
			</a>
		</p>
		<p>
			<a href="https://www.redbullmediahouse.com/" target="_blank">
				<span>Co-produced by:</span> Redbull Media House
				<svg id="redbull" width="100%" height="100%" viewBox="0 0 415 164" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:1.41421;">
					<g transform="matrix(1,0,0,1,-213.242,0)">
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M621.38,363.63L621.38,363.626L591.33,363.63C583.038,363.63 579.822,361.39 579.822,357.205C579.814,356.681 579.822,329.873 579.822,329.873L607.815,329.873L607.815,329.875L620.017,329.873L620.017,329.869C623.591,329.822 626.473,326.717 626.473,322.899C626.473,319.079 623.591,315.976 620.017,315.928L620.017,315.922L607.815,315.922L607.815,315.924L579.822,315.924L579.822,292.353C579.822,288.45 581.932,286.966 585.603,286.966C585.742,286.966 585.967,286.987 586.104,286.987L603.436,286.987L603.436,286.978L621.179,286.976L621.179,286.972C624.568,286.927 627.297,283.986 627.297,280.362C627.297,276.741 624.568,273.801 621.179,273.755L621.179,273.752L594.139,273.752L594.139,273.767L586.314,273.767C584.448,273.668 576.792,273.371 571.376,278.227C568.938,280.407 566.032,284.408 566.032,291.06L566.032,358.415C566.018,358.901 565.977,365.054 571.157,370.263C575.632,374.755 582.575,377.282 591.33,377.282L621.38,377.29L621.38,377.283C624.882,377.239 627.702,374.198 627.702,370.458C627.702,366.714 624.882,363.675 621.38,363.63M536.266,318.768C531.179,317.289 527.31,317.28 526.878,317.275L517.22,317.272C512.594,317.255 509.771,316.211 507.736,314.921C504.741,313.001 503.072,309.966 502.146,307.001C501.694,305.55 501.458,304.19 501.348,303.248C501.292,302.776 501.263,302.41 501.251,302.188C501.248,302.11 501.248,302.051 501.245,302.01L501.245,301.994C501.263,297.722 502.228,295.172 503.41,293.334C505.155,290.627 507.97,289.085 510.743,288.23C512.101,287.813 513.371,287.595 514.248,287.491C514.689,287.441 515.029,287.417 515.228,287.405C515.329,287.401 515.397,287.399 515.422,287.399L540.263,287.397C544.126,287.397 547.261,284.263 547.261,280.399C547.261,276.532 544.126,273.399 540.263,273.399L515.382,273.399C514.784,273.438 508.616,273.355 501.63,276.862C498.154,278.63 494.454,281.436 491.684,285.684C488.901,289.919 487.226,295.466 487.243,301.994C487.24,302.166 487.246,302.348 487.261,302.534C487.328,304.343 487.69,310.055 490.902,316.375C492.765,319.991 495.71,323.826 500.151,326.685C504.578,329.557 510.364,331.29 517.22,331.272L526.869,331.272L526.869,331.269C527.438,331.268 532.119,331.599 535.934,333.632C537.967,334.693 539.73,336.099 541.032,338.077C542.319,340.069 543.325,342.749 543.345,347.125L543.345,347.149C543.345,347.149 543.345,347.384 543.308,347.888C543.211,349.665 542.491,354.147 540.295,357.425C539.199,359.089 537.839,360.486 535.901,361.565C533.952,362.629 531.318,363.446 527.327,363.455L491.36,363.455C487.491,363.455 484.356,366.589 484.356,370.455C484.356,374.322 487.491,377.458 491.36,377.458L527.327,377.455C534.162,377.475 539.96,375.711 544.382,372.786C551.071,368.375 554.247,361.946 555.769,356.937C557.21,352.169 557.324,348.384 557.342,347.317C557.342,347.264 557.342,347.214 557.345,347.162L557.345,347.125C557.365,340.233 555.497,334.382 552.45,329.971C547.853,323.309 541.294,320.247 536.266,318.768M470.462,272.148C466.596,272.148 463.461,275.314 463.461,279.221L463.458,279.221L463.458,340.87C463.458,340.876 463.458,340.905 463.455,341.05C463.455,341.05 462.994,349.209 460.314,354.869C458.988,357.719 457.211,360.18 454.918,361.883C452.608,363.57 448.96,364.756 444.351,364.787L444.351,364.785C443.716,364.791 437.781,364.338 433.696,361.373C431.622,359.885 429.664,357.861 428.091,354.664C426.666,351.562 425.536,347.386 424.583,342.729L418.779,317.839C415.363,302.163 408.256,294.234 408.256,294.234C398.68,281.009 380.335,275.168 380.335,275.168C368.109,271.488 357.293,271.798 356.35,271.798C337.526,271.798 320.538,279.188 310.015,293.078C308.749,294.75 308.651,296.611 310.416,297.787C312.065,298.887 313.647,297.787 315.048,296.144C325.135,284.317 339.043,277.639 353.283,277.639C355.061,277.639 356.896,277.728 358.773,277.913C365.111,278.395 375.474,280.669 383.66,285.785C392.47,291.293 402.161,299.883 406.567,321.689L412.593,352.462C413.407,356.032 414.594,359.205 416.08,361.99C420.53,370.401 427.488,374.803 432.985,376.836C438.53,378.905 443.795,378.928 444.334,378.936L444.515,378.936C452.165,378.937 459.448,376.422 464.14,372.559C471.277,366.695 474.34,358.707 475.907,352.463C477.279,346.86 477.434,342.396 477.457,341.17C477.46,341.071 477.463,340.972 477.463,340.872L477.463,279.221C477.463,275.314 474.328,272.148 470.462,272.148M403.073,344.337C401.248,343.391 399.762,344.742 398.883,346.328C395.708,352.599 391.075,357.991 385.511,362.262C375.765,369.184 363.504,373.313 351.249,373.313C319.507,373.313 293.31,347.735 292.985,316.067L293.074,315.98L293.074,279.975C293.074,276.109 289.939,272.976 286.073,272.976C282.209,272.976 279.074,276.109 279.074,279.975L279.074,315.987L227.241,315.987L227.241,279.975C227.241,276.109 224.107,272.976 220.242,272.976C216.376,272.976 213.242,276.109 213.242,279.975L213.242,371.561C213.242,375.426 216.376,378.561 220.242,378.561C224.107,378.561 227.241,375.426 227.241,371.561L227.241,329.985L279.074,329.985L279.321,329.739C286.36,358.466 314.026,379.908 347.089,379.908C361.518,379.908 374.92,375.824 386.027,368.836C395.114,362.84 400.161,356.345 403.877,349.098C404.897,347.108 404.897,345.282 403.073,344.337" style="fill:rgb(100,101,103);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M338.977,255.339L330.531,255.339L330.531,226.666L336.42,226.666C339.008,226.666 341.107,228.764 341.107,231.35C341.107,233.937 339.008,236.034 336.42,236.034L333.353,236.034L333.353,243.982L338.977,243.982C342.112,243.982 344.482,246.513 344.482,249.651C344.371,252.89 342.381,255.126 338.977,255.339M346.367,238.949C348.783,236.695 350.261,233.676 350.261,230.356C350.261,227.352 349.105,224.588 347.081,222.42C344.973,220.1 341.246,219.072 336.206,219.072L321.12,219.072L321.12,263.048L340.609,263.048C348.078,262.927 354.093,257.255 354.093,250.335C354.093,245.303 352.321,241.712 346.367,238.949M389.581,263.085L398.41,263.085L398.41,216.584L389.581,216.584L389.581,263.085ZM376.028,251.907C376.028,254.56 373.768,256.71 370.982,256.71C368.196,256.71 365.937,254.56 365.937,251.907L365.937,235.985L357.17,235.985L357.17,253.601C357.17,259.562 363.34,264.396 370.951,264.396C378.561,264.396 384.73,259.562 384.73,253.601L384.732,235.985L376.028,235.985L376.028,251.907ZM404.506,263.085L413.335,263.085L413.335,216.584L404.506,216.584L404.506,263.085ZM293.867,256.241C290.288,256.241 287.386,253.068 287.386,249.15C287.386,245.232 290.288,242.059 293.867,242.059C297.444,242.059 300.345,245.232 300.345,249.15C300.345,253.068 297.444,256.241 293.867,256.241M300.233,238.166C297.891,235.845 294.77,234.441 291.36,234.441C284.071,234.441 278.16,240.906 278.16,248.885C278.16,256.86 284.071,263.325 291.36,263.325C294.807,263.325 297.922,261.862 300.273,259.495L300.273,263.054L309.045,263.054L309.045,216.236L300.233,216.236L300.233,238.166ZM243.605,231.859C243.605,224.647 237.645,218.801 230.297,218.801C230.073,218.801 229.044,218.807 228.823,218.817L213.347,218.817L213.347,263.015L222.742,263.015L222.742,226.442L228.345,226.395C231.814,226.395 234.449,228.985 234.449,232.177C234.449,235.372 231.636,237.963 228.167,237.963L225.987,238.012L225.987,248.536L235.372,263.015L246.443,263.015L233.467,244.544C239.287,243.151 243.605,238 243.605,231.859M254.418,246.028C254.418,243.05 256.833,240.637 259.813,240.637C262.792,240.637 265.206,243.05 265.206,246.028L254.418,246.028ZM259.734,234.455C251.676,234.455 245.143,241.068 245.143,249.226C245.143,257.384 251.679,264.007 259.737,264.007C265.891,264.007 270.685,261.222 273.161,256.862L265.994,253.557C265.081,255.528 262.946,256.913 260.459,256.913C257.142,256.913 254.453,254.448 254.453,251.41C254.453,251.212 254.373,251.29 254.395,251.099L273.9,251.11C273.958,250.507 273.988,249.886 273.982,249.253C274.117,239.697 267.792,234.455 259.734,234.455" style="fill:rgb(219,10,64);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M337.6,294.834C332.216,296.803 325.512,300.258 319.847,305.408C318.23,306.881 316.695,308.261 314.068,309.452L314.068,309.441C313.787,310.078 313.436,310.977 313.163,311.616C312.658,312.981 312.4,313.705 312.141,314.614C312.141,314.675 312.165,314.772 312.199,314.832C312.613,314.876 313.386,314.432 316.274,312.677C321.507,309.484 323.936,308.059 328.7,305.801C328.318,307.188 327.702,308.018 326.14,309.258C325.702,309.551 325.138,309.954 324.673,310.213C322.979,311.189 321.187,311.989 319.481,312.958C317.477,314.105 315.552,315.394 313.542,316.523C313.36,316.62 313.108,316.75 312.926,316.85C312.133,317.223 311.676,317.022 311.705,316.291C311.706,316.248 311.717,316.2 311.724,316.139C311.626,316.537 311.519,316.967 311.388,317.475C310.631,320.845 310.485,323.73 310.362,326.032C310.356,333.214 311.777,337.392 311.848,337.552C311.861,337.634 311.908,337.706 311.929,337.78C312.079,337.804 312.262,337.839 312.411,337.876C312.844,339.86 312.889,340.071 313.214,340.991C314.079,341.617 313.742,342.714 314.272,343.457C314.538,343.358 314.912,343.284 315.203,343.288L314.776,343.431C315.203,343.603 315.795,343.732 316.234,343.838C316.186,345.438 316.186,345.438 316.399,345.81C316.535,345.724 316.71,345.606 316.838,345.515C319.302,346.045 319.302,346.045 320.559,345.009L321.584,344.126C320.543,345.333 320.543,345.333 320.642,346.211C321.388,346.319 321.388,346.319 336.315,335.938L336.296,335.925C342.947,332.159 349.266,327.81 355.858,323.952C350.905,325.419 346.621,328.31 341.925,330.31C340.412,331.19 339.038,331.999 337.769,332.735C337.746,332.706 337.712,332.671 337.686,332.646C337.657,332.585 337.484,332.206 337.368,332.159C337.298,332.153 337.236,332.149 337.172,332.149C337.09,332.149 337.016,332.149 336.926,332.124C336.646,332.028 336.181,331.95 335.882,332.028C335.807,332.042 335.692,332.116 335.635,332.153C335.496,332.218 335.411,332.265 335.269,332.333C335.126,332.372 335.022,332.478 334.873,332.513C334.722,332.56 334.534,332.542 334.358,332.513L334.094,332.513C334.037,332.513 333.659,332.546 333.618,332.513C333.515,332.399 333.667,332.153 333.709,332.067C333.753,331.976 333.776,331.864 333.795,331.767C333.814,331.696 333.851,331.659 333.929,331.653C333.991,331.577 333.991,331.55 334.024,331.456C334.137,331.19 334.461,330.952 334.699,330.782C335.004,330.562 335.358,330.333 335.676,330.12C336.027,329.897 336.407,329.567 336.824,329.458C336.96,329.419 337.125,329.419 337.267,329.386C337.451,329.321 337.443,329.267 337.528,329.106C337.568,329.017 337.625,329.003 337.603,328.909C337.6,328.86 337.089,328.653 337.016,328.632C337.032,328.61 337.058,328.595 337.078,328.583C337.052,328.605 337.022,328.61 336.99,328.632C336.829,328.605 336.885,328.597 336.748,328.653C336.571,328.728 336.407,328.784 336.246,328.896C336.066,329.036 335.863,329.114 335.671,329.228C335.533,329.351 335.458,329.462 335.374,329.589C334.817,329.94 334.275,330.271 333.74,330.622C333.709,330.636 333.665,330.657 333.623,330.657C333.488,330.694 333.378,330.677 333.259,330.71C332.898,330.782 332.527,330.938 332.172,331.038C331.93,331.097 331.585,331.142 331.374,331.315C331.286,331.388 331.22,331.481 331.136,331.571C330.981,331.741 330.726,331.927 330.531,332.036C330.294,332.167 330.155,332.134 329.893,332.134L329.741,332.134C329.636,332.146 329.54,332.163 329.458,332.13C329.431,332.124 329.416,332.124 329.39,332.134C329.357,332.13 329.355,332.13 329.31,332.065C329.305,332.028 329.313,331.907 329.336,331.868C329.417,331.731 329.589,331.675 329.636,331.495C329.508,331.345 328.954,331.433 328.762,331.495C328.341,331.603 327.965,331.745 327.577,331.931C327.257,332.085 326.925,332.134 326.611,332.288C326.184,332.489 325.926,332.347 325.479,332.259C325.471,332.106 325.473,332.036 325.541,331.921C325.604,331.823 325.728,331.735 325.793,331.644C325.817,331.614 325.84,331.563 325.847,331.532C326.003,331.368 326.162,331.179 326.319,331.021C326.641,330.694 327.115,330.458 327.461,330.169C327.876,329.79 328.271,329.409 328.666,329.017C328.732,328.952 328.815,328.901 328.883,328.821C328.937,328.837 328.987,328.821 329.026,328.771C329.099,328.706 329.085,328.595 329.15,328.513C329.195,328.497 329.228,328.46 329.256,328.431C329.446,328.257 329.627,328.132 329.834,327.995C329.936,327.952 330.003,327.878 330.056,327.806C330.084,327.714 330.084,327.534 330.036,327.457C329.9,327.457 329.834,327.655 329.766,327.718C329.603,327.896 329.375,327.966 329.167,328.083C328.637,328.335 327.958,328.614 327.343,328.636C327.176,328.647 326.993,328.647 326.816,328.632C326.714,328.624 326.606,328.624 326.505,328.624C326.494,328.624 326.055,328.657 326.015,328.622C325.912,328.483 326.219,328.083 326.276,328.009C326.397,327.841 326.528,327.671 326.655,327.517C326.72,327.442 326.777,327.347 326.813,327.253C326.887,327.183 326.827,327.216 326.966,327.147C327.376,326.909 327.767,326.663 328.159,326.411C328.24,326.349 328.329,326.271 328.422,326.263C328.516,326.237 328.576,326.263 328.658,326.218C328.756,326.153 328.86,326.048 328.949,325.983C329.402,325.688 329.955,325.491 330.445,325.231C331.111,324.876 331.662,324.364 332.349,324.04C332.56,323.923 332.779,323.819 333.005,323.739C333.162,323.687 333.298,323.671 333.441,323.579C333.748,323.343 334.072,323.175 334.426,323.003C334.776,322.84 335.161,322.718 335.507,322.533C335.605,322.48 335.677,322.384 335.775,322.329C335.864,322.296 335.958,322.272 336.05,322.258C336.21,322.167 336.381,322.092 336.534,322.001C336.676,321.933 336.921,321.822 337.067,321.772C337.259,321.705 337.393,321.642 337.564,321.536C337.734,321.461 337.803,321.407 337.877,321.227C337.906,321.135 337.986,320.948 337.906,320.859C337.626,320.833 337.304,321.007 337.052,321.124C336.782,321.241 336.51,321.308 336.254,321.43C336.11,321.481 335.989,321.57 335.866,321.662C335.784,321.69 335.724,321.677 335.667,321.671C335.627,321.677 335.6,321.677 335.556,321.671C335.449,321.671 335.328,321.705 335.217,321.759C335.048,321.786 334.873,321.847 334.705,321.899C334.376,322.012 334.032,322.204 333.73,322.398C333.345,322.608 332.981,322.862 332.572,323.04C332.086,323.274 331.582,323.546 331.058,323.69C330.656,323.806 330.258,323.933 329.882,324.063C329.639,324.149 329.377,324.22 329.151,324.315C329.028,324.368 329.01,324.407 328.916,324.493C328.786,324.605 328.629,324.673 328.451,324.726C327.977,324.906 327.506,325.105 327.036,325.269C326.875,325.304 326.763,325.399 326.605,325.413C326.408,325.442 326.184,325.428 325.962,325.413C325.84,325.413 325.703,325.405 325.586,325.413C325.299,325.399 325.126,325.37 324.848,325.256C324.828,325.243 324.746,325.222 324.656,325.177C325.912,324.3 327.201,323.462 328.525,322.662C329.955,321.798 331.417,320.974 332.907,320.206C334.489,319.357 336.08,318.563 337.704,317.806C339.379,317.005 341.086,316.26 342.798,315.534C344.541,314.801 346.304,314.113 348.085,313.439C349.857,312.769 351.639,312.144 353.441,311.548C355.19,310.992 356.975,310.436 358.755,309.926C360.454,309.441 362.174,309.002 363.897,308.599C365.519,308.223 367.141,307.879 368.786,307.598C369.534,307.47 370.279,307.355 371.034,307.249C371.226,307.224 371.414,307.211 371.605,307.16C371.727,307.143 371.844,307.086 371.955,307.051L371.821,307.143C372.183,307.103 372.532,307.054 372.882,307.016C373.203,307.022 373.532,307.022 373.848,307.051C373.991,307.054 374.733,306.979 374.743,307.243C374.764,307.409 374.556,307.39 374.444,307.423C374.304,307.476 374.17,307.55 374.031,307.607C374.416,307.593 374.798,307.598 375.19,307.598C375.398,307.604 375.587,307.604 375.794,307.604C375.869,307.604 376.156,307.561 376.163,307.676C376.156,307.748 376.125,307.767 376.04,307.767C375.871,307.897 375.678,308.02 375.498,308.138C375.297,308.266 375.14,308.31 374.894,308.372C374.469,308.481 374.049,308.622 373.632,308.725C373.009,308.865 372.355,308.988 371.736,309.049C371.573,309.063 371.379,309.021 371.442,309.26C371.573,309.284 371.698,309.284 371.835,309.272C372.345,309.272 372.849,309.284 373.368,309.284C373.629,309.284 373.908,309.315 374.157,309.26C374.34,309.221 374.509,309.194 374.704,309.215C374.926,309.238 375.154,309.303 375.371,309.353C372.716,309.607 369.833,310.04 367.129,310.763C364.917,311.37 364.48,311.413 363.398,311.344C363.573,311.102 363.826,310.786 364.032,310.574C362.682,310.37 354.599,313.159 354.055,314.598C354.08,314.598 354.102,314.598 354.117,314.583C354.028,314.807 354.156,314.866 354.348,314.938C354.875,315.048 355.413,315.091 355.954,315.067C356.605,315.097 357.247,315.097 357.878,315.076C358.373,315.087 358.859,315.087 359.354,315.091C360.266,315.091 361.183,315.159 362.088,314.958C362.832,314.789 363.565,314.502 364.292,314.26C365.006,314.045 365.711,313.769 366.438,313.582C366.602,313.522 366.767,313.485 366.936,313.429C367.01,313.411 367.202,313.294 367.292,313.294C367.459,313.29 367.49,313.382 367.425,313.522C367.276,313.791 366.454,313.959 366.236,314.03C365.881,314.165 365.493,314.288 365.132,314.442C365.143,314.777 365.639,314.724 366.023,314.68C366.161,314.652 366.298,314.624 366.371,314.618C366.408,314.624 366.451,314.614 366.503,314.614C366.583,314.612 366.677,314.598 366.725,314.614C366.866,314.689 366.799,315.005 366.761,315.116C366.7,315.271 366.589,315.411 366.501,315.532C366.379,315.698 366.279,315.781 366.075,315.882C366.04,316.177 367.941,316.016 368.119,315.981C368.439,315.916 368.829,315.667 369.159,315.624C369.291,315.599 369.385,315.632 369.531,315.595C369.727,315.543 369.866,315.522 370.059,315.497C370.274,315.46 370.455,315.356 370.681,315.337C370.827,315.323 370.973,315.337 371.114,315.343C371.264,315.337 371.424,315.362 371.583,315.343C371.963,315.317 372.326,315.136 372.704,315.097C372.799,315.076 372.885,315.076 372.98,315.076C373.075,315.076 373.161,315.076 373.249,315.071C373.576,315.019 373.907,314.967 374.212,314.909C374.621,314.807 375.045,314.758 375.463,314.689C376.039,314.586 376.67,314.666 377.261,314.684C377.796,314.698 378.329,314.884 378.861,314.943C379.495,315.023 378.745,315.44 378.52,315.568C377.786,316.024 376.953,316.434 376.141,316.744C375.596,316.97 375.14,317.132 374.547,317.107C374.218,317.101 373.97,317.126 373.655,317.236C373.46,317.304 373.288,317.368 373.082,317.397C372.908,317.401 372.731,317.378 372.549,317.378C372.302,317.378 372.026,317.331 371.768,317.363C371.65,317.396 371.583,317.435 371.448,317.458C371.362,317.454 371.273,317.454 371.194,317.444C371.007,317.435 370.829,317.435 370.657,317.506C370.471,317.58 370.462,317.641 370.248,317.658L370.014,317.658C369.832,317.641 369.64,317.641 369.457,317.71C369.007,317.913 368.533,317.919 368.053,317.929C367.994,317.925 367.947,317.919 367.883,317.925C367.857,317.953 367.819,317.972 367.786,318.008C367.491,318.137 367.178,318.234 366.871,318.333C366.213,318.584 365.606,318.95 364.913,319.154C364.74,319.204 364.651,319.187 364.506,319.218C364.078,319.32 363.633,319.468 363.22,319.575C363.031,319.653 362.814,319.701 362.625,319.759C362.284,319.854 362.053,320.025 361.742,320.172C361.587,320.249 361.426,320.31 361.278,320.388C361.02,320.522 360.788,320.587 360.496,320.62C360.261,320.653 360.053,320.725 359.819,320.763C359.58,320.802 359.505,320.968 359.336,321.081C359.183,321.183 358.975,321.149 358.815,321.241C358.486,321.411 358.176,321.599 357.843,321.772C357.684,321.847 357.551,321.903 357.412,321.969C357.215,322.083 356.957,322.194 356.798,322.361C356.666,322.509 356.664,322.86 356.704,323.079C356.692,323.079 356.685,323.089 356.664,323.089C356.685,323.089 356.692,323.081 356.704,323.081C356.714,323.118 356.721,323.144 356.717,323.175C357.118,323.288 357.485,323.271 357.904,323.2C358.057,323.192 358.219,323.165 358.366,323.114C358.586,323.067 358.761,323.066 358.969,323.036C359.363,322.997 359.727,322.791 360.094,322.63C360.151,322.61 360.202,322.569 360.252,322.539C365.1,321.458 369.667,319.198 374.71,318.851C374.801,318.851 383.148,318.476 388.771,321.086C390.513,321.89 398.958,326.61 394.617,340.384L395.029,339.188C396.018,335.885 396.298,334.153 396.577,332.212L396.597,332.036C396.975,328.608 396.963,327.94 396.879,324.308C396.488,319.177 396.055,317.456 394.907,313.546L394.757,313.287C394.599,312.849 396.107,309.131 387.884,300.908C384.362,297.582 379.311,297.313 375.335,294.903C375.911,294.701 375.911,294.701 376.754,294.873C373.415,292.77 369.338,293.246 365.797,291.893C366.239,291.524 366.476,291.313 367.6,291.358C367.568,291.226 367.539,291.018 367.514,290.88C372.826,290.249 376.603,291.369 379.276,292.805C378.94,292.559 378.606,292.308 378.274,292.031C379.059,292.387 379.447,292.574 380.663,293.459L380.781,293.555L380.463,293.298C375.062,289.178 367.306,283.938 343.44,293.576L341.631,292.973C341.62,292.938 339.618,294.081 339.597,294.057M367.19,311.693C367.083,311.693 366.975,311.693 366.869,311.688C368.425,311.407 369.833,311.189 371.098,311.044C370.735,311.161 370.379,311.281 370.024,311.41C369.904,311.445 369.596,311.456 369.457,311.531C369.437,311.588 369.394,311.631 369.319,311.637C369.325,311.631 369.122,311.688 369.122,311.688C368.752,311.751 368.356,311.703 367.972,311.703C367.768,311.703 367.573,311.693 367.359,311.693C367.306,311.693 367.247,311.699 367.19,311.693M366.098,311.838C366.038,311.854 365.966,311.866 365.897,311.892C365.789,311.912 365.66,311.932 365.549,311.932C365.725,311.9 365.916,311.866 366.098,311.838M356.847,313.893C356.775,313.925 356.704,313.949 356.6,313.949L356.588,313.949C356.672,313.927 356.762,313.91 356.847,313.893M338.785,333.616L338.838,333.595C337.87,334.132 336.586,334.855 335.621,335.417C336.557,334.855 337.833,334.14 338.785,333.616M360.447,316.831C360.085,316.97 359.87,317.077 359.569,317.274C359.597,317.28 359.633,317.285 359.66,317.294C360.163,317.378 360.163,317.378 362.202,316.606C362.249,316.587 362.315,316.569 362.356,316.54C361.454,316.604 360.996,316.659 360.447,316.831M394.34,341.187L394.539,340.647C394.572,340.55 394.593,340.481 394.617,340.384L394.34,341.187Z" style="fill:rgb(250,213,10);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M388.724,298.597C388.7,298.565 388.673,298.533 388.647,298.5C388.669,298.529 388.687,298.55 388.708,298.577C388.714,298.584 388.718,298.591 388.724,298.597M323.355,294.402C323.287,294.48 323.213,294.55 323.13,294.62L323.189,294.572C323.233,294.518 323.301,294.46 323.355,294.402M363.161,284.402C362.06,284.271 359.994,284.035 357.195,283.989C357.09,283.989 356.931,283.983 356.821,283.983C360.261,283.894 362.733,284.099 365.363,284.675C364.536,284.542 364.155,284.503 363.161,284.402M347.59,301.906L347.641,301.91C346.523,302.047 345.042,302.296 343.933,302.462C345.021,302.275 346.493,302.06 347.59,301.906M397.539,321.481C396.995,316.551 396.694,315.493 395.599,311.562L394.948,309.71C393.354,305.531 391.62,302.839 389.929,300.233C389.392,299.466 389.363,299.421 388.708,298.577C388.684,298.552 388.658,298.521 388.638,298.5L388.647,298.5C386.101,295.324 384.993,294.392 382.204,292.021C382.703,292.346 382.703,292.346 383.417,292.906L383.101,292.62C375.934,286.408 368.8,284.479 360.299,283.491C361.208,283.35 369.655,283.627 377.924,288.763C369.88,283.722 362.41,282.692 358.407,282.364C357.454,282.322 356.354,282.278 355.097,282.273C351.479,282.249 346.552,282.914 340.091,284.981L340.119,284.957C340.119,284.957 335.997,286.199 332.174,288.029C332.075,288.077 331.976,288.124 331.881,288.17C331.828,288.196 331.778,288.22 331.725,288.245C331.452,288.38 331.192,288.513 330.943,288.646C330.895,288.67 330.848,288.695 330.8,288.72C330.631,288.812 330.465,288.904 330.302,288.995C329.918,289.21 329.543,289.427 329.189,289.652L329.194,289.656C328.924,289.821 328.655,289.992 328.376,290.169L327.772,290.603C327.286,290.974 326.652,291.472 326.175,291.859C325.141,292.708 325.097,292.749 323.355,294.402C326.309,291.685 334.605,286.908 347.969,285.408C347.32,285.944 346.556,286.236 344.594,286.732C337.656,288.319 327.176,290.724 322.363,295.42C322.336,295.442 322.3,295.471 322.278,295.489C321.779,296.015 321.353,296.517 320.066,298.036C318.861,299.523 318.79,299.638 317.028,302.307L316.162,303.765C316.117,303.898 316.081,304.113 316.05,304.258C316.177,304.279 316.337,304.292 316.458,304.301C315.466,308.41 315.466,308.41 315.457,308.431C317.034,307.142 317.034,307.142 317.101,307.102C316.17,309.21 316.17,309.21 316.011,309.774C316.026,309.774 316.035,309.744 316.04,309.744C315.889,310.128 315.706,310.638 315.592,311.029C315.697,311.152 315.825,311.326 315.911,311.447C316.665,310.962 317.288,310.312 318.108,309.897L317.163,310.556C317.809,310.278 318.687,309.94 319.34,309.685C318.687,310.535 318.011,311.315 317.369,312.158C318.039,311.756 318.636,311.229 319.376,310.913C319.459,310.994 319.578,311.118 319.666,311.196C320.66,311.074 321.248,310.759 324.063,309.113L325.779,308.13C324.012,309.252 323.774,309.398 323.292,310.208C323.924,310.145 323.924,310.145 327.474,308.463C332.133,306.293 335.149,305.102 344.286,302.953L344.262,302.947C357.629,300.738 357.629,300.738 366.682,301.014C363.43,300.36 363.43,300.36 351.857,300.515C339.929,301.849 335.163,303.655 333.108,304.428C329.744,305.712 329.66,305.69 329.032,305.591C331.932,303.454 345.232,298.805 348.662,298.318C348.564,298.321 338.023,299.827 332.092,302.894C328.726,304.612 324.723,305.788 324.715,305.792C326.244,304.367 327.989,303.178 329.363,301.607C328.015,301.272 328.015,301.272 325.658,301.808C334.856,290.122 385.397,286.936 394.163,310.366C393.623,309.581 388.658,302.595 379.942,298.915C377.787,298.003 377.719,297.927 377.293,297.504C377.407,297.466 377.551,297.386 377.676,297.33C376.526,296.671 370.652,294.843 368.323,295.286C376.695,297.388 389.709,303.542 389.363,306.822C385.841,305.635 383.256,302.809 379.777,301.552C383.71,303.702 390.302,307.315 391.34,310.822C391.224,310.885 391.063,310.986 390.945,311.066C390.552,310.814 390.05,310.446 389.698,310.143C389.692,310.166 389.683,310.18 389.677,310.202C388.887,309.343 384.258,305.733 381.207,304.428C376.891,302.589 372.168,302.196 367.708,300.843C372.56,302.714 377.842,303.363 382.415,305.956C387.873,309.031 391.949,314.496 391.994,314.545C399.249,324.35 396.382,334.366 395.315,338.119L394.417,340.5L395.374,338.016C396.399,334.864 396.485,334.34 397.218,330.418C397.7,326.342 397.671,325.504 397.539,321.481M374.813,299.658C374.071,299.3 373.644,299.112 373.113,298.982C372.805,298.904 372.575,298.865 372.222,298.84C372.233,298.846 372.263,298.861 372.288,298.883C372.639,299.087 372.639,299.087 374.674,299.621C374.71,299.638 374.77,299.652 374.813,299.658M322.275,295.492C322.277,295.491 322.277,295.49 322.278,295.489C322.286,295.482 322.291,295.476 322.297,295.468L322.275,295.492ZM377.992,288.803C377.968,288.788 377.94,288.783 377.924,288.763C377.927,288.763 377.927,288.769 377.927,288.769L377.992,288.803ZM388.969,298.904C388.93,298.857 388.895,298.812 388.86,298.767C388.879,298.79 388.898,298.814 388.915,298.84L388.969,298.904ZM322.297,295.468L323.13,294.62C322.774,294.978 322.528,295.227 322.297,295.468" style="fill:rgb(242,148,10);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M386.297,320.194C386.3,320.184 386.302,320.176 386.304,320.167C386.229,320.146 386.154,320.126 386.08,320.105C386.153,320.137 386.231,320.16 386.297,320.194Z" style="fill:url(#_Linear1);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M394.616,340.384C394.607,340.429 394.591,340.467 394.58,340.506C394.735,340.073 394.89,339.639 395.028,339.189L394.616,340.384Z" style="fill:url(#_Linear2);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M331.061,347.334C330.681,347.074 330.281,346.882 329.857,346.729C329.857,346.744 330.337,346.965 331.061,347.334Z" style="fill:url(#_Linear3);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<clipPath id="_clip4">
							<path d="M370.537,333.848C363.652,339.473 369.611,337.832 369.685,337.8C370.351,337.545 370.953,337.149 371.226,336.962C364.728,344.187 346.185,352.198 332.465,346.48C328.842,344.958 326.358,344.056 333.291,348.343C333.211,348.343 333.146,348.323 333.081,348.295C336.027,349.773 339.677,351.772 337.83,351.837C337.83,351.874 337.83,351.937 337.825,351.969L337.742,351.945L337.83,351.994C337.895,352.051 337.895,352.051 342.908,353.91C342.598,354.027 342.334,355.127 346.532,355.542C351.423,356.02 355.817,355.473 359.887,354.296C351.317,360.236 341.365,364.015 331.514,362.092C331.769,362.187 332.124,362.329 332.383,362.428C334.675,363.232 336.154,363.529 338.422,363.703C338.414,363.813 338.399,363.955 338.393,364.102C339.99,364.943 342.118,364.408 342.468,364.219C343.386,363.748 343.732,363.66 349.639,363.227C348.329,364.299 346.481,363.796 345.124,364.726C345.165,364.91 345.323,365.168 345.48,365.279C352.943,364.257 360.638,363.207 379.698,347.707C379.928,347.52 380.271,347.337 380.534,347.234L380.49,347.271C379.094,348.606 379.094,348.606 367.214,358.674C364.384,361.076 360.291,361.344 357.643,364.062C357.68,364.17 357.726,364.299 357.754,364.408L357.671,364.461L357.793,364.426C358.44,364.572 359.053,364.573 359.646,364.486C358.477,364.962 357.046,365.574 355.292,366.357C355.295,366.453 355.2,366.297 355.262,366.974C358.622,366.203 365.286,365.34 369.69,362.706C376.234,359.109 388.586,348.246 394.313,336.364C394.455,336.062 394.701,335.679 394.968,335.495L394.986,335.809L394.982,335.809C395.197,336.231 395.197,336.231 394.587,338.386C395.06,337.383 395.41,336.358 395.711,335.313C396.8,325.419 390.277,321.78 388.77,321.086C387.991,320.724 387.158,320.425 386.304,320.167C386.302,320.176 386.3,320.184 386.297,320.194C386.231,320.16 386.153,320.137 386.08,320.105C384.679,319.701 383.222,319.417 381.837,319.226C378.957,326.034 375.224,330.022 370.537,333.848ZM383.783,325.651C383.873,325.526 383.973,325.354 384.054,325.218C383.636,326.734 382.83,328.577 381.704,330.618C381.441,331.03 381.166,331.449 380.881,331.89C379.535,333.921 376.888,334.366 375.413,336.249C375.06,336.051 374.965,335.987 374.381,336.303C374.226,335.393 375.704,334.147 374.52,333.581C375.713,330.995 377.812,328.984 379.595,326.766C379.7,327.23 380.001,327.406 380.395,327.406C381.605,327.406 383.701,325.753 383.783,325.651ZM364.893,362.848C364.888,362.853 364.883,362.853 364.875,362.851C364.881,362.85 364.887,362.849 364.893,362.848Z"/>
							</clipPath>
							<g clip-path="url(#_clip4)">
								<path d="M324.624,324.232L396.149,317.974L400.092,363.052L328.567,369.309L324.624,324.232Z" style="fill:url(#_Linear5);fill-rule:nonzero;"/>
							</g>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M382.925,355.986C383.429,355.654 383.805,355.363 384.333,354.867C383.549,355.674 383.318,355.935 383.129,356.264C383.603,355.838 384.02,355.485 384.52,355.099C384.38,355.406 384.38,355.406 381.414,358.32C385.102,355.06 391.099,349.779 394.364,341.114L394.616,340.384C394.781,339.86 394.923,339.352 395.051,338.854L395.063,338.805L395.078,338.743C395.166,338.401 395.241,338.067 395.312,337.739C392.554,346.216 386.596,352.65 382.925,355.986Z" style="fill:url(#_Linear6);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M394.402,341.017C394.418,340.976 394.434,340.936 394.449,340.894L394.402,341.017ZM394.386,341.06L394.402,341.017C394.397,341.031 394.392,341.046 394.386,341.06Z" style="fill:url(#_Linear7);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M333.081,348.295C332.323,347.919 331.624,347.588 331.061,347.334C331.721,347.707 332.334,348.114 333.081,348.295Z" style="fill:url(#_Linear8);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M394.364,341.114L394.34,341.187L394.386,341.06L394.449,340.894L394.539,340.648C394.556,340.594 394.567,340.549 394.58,340.506C394.591,340.467 394.607,340.429 394.616,340.384L394.364,341.114Z" style="fill:url(#_Linear9);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M392.423,323.803C390.755,330.438 388.753,333.502 385.809,337.992C384.167,340.492 380.917,341.051 379.107,343.341C378.676,343.101 378.546,343.032 377.835,343.418C377.652,342.291 379.456,340.776 378.022,340.084C380.434,334.815 385.911,331.52 387.597,325.77C386.945,326.592 386.475,327.543 385.814,328.371C386.557,325.842 387.701,323.448 388.251,320.865C388.121,320.811 387.994,320.755 387.861,320.703C387.719,320.959 387.534,321.301 387.279,321.768C383.714,330.551 379.032,335.584 373.118,340.418C364.678,347.32 371.986,345.29 372.073,345.264C372.899,344.926 373.617,344.448 373.973,344.236C363.902,355.437 330.222,368.173 314.726,346.449C314.876,346.668 315.054,346.982 315.198,347.21C318.958,352.922 318.958,352.922 327.461,358.181C325.867,357.901 324.731,356.675 323.234,356.209C323.264,356.247 326.887,360.968 337.718,362.208C349.269,363.536 352.552,362.646 356.024,361.697C358.989,360.898 361.647,360.618 361.667,360.618L361.604,360.646C353.077,363.255 353.077,363.255 343.555,363.859C341.697,363.972 339.923,363.579 338.155,363.177C336.458,362.788 334.767,362.411 333.025,362.47C333.025,362.509 333.025,362.583 333.016,362.62L332.906,362.607L333.025,362.64C333.108,362.726 333.108,362.726 339.247,365.013C338.865,365.154 337.052,365.404 329.502,362.163C329.565,362.214 338.553,366.493 343.685,367.003C360.524,368.65 372.621,360.503 384.329,352.622C384.329,352.676 384.312,352.759 384.309,352.825C384.453,352.849 384.632,352.868 384.777,352.886C384.696,353.146 384.696,353.146 383.429,354.657C386.191,352.423 387.612,348.967 390.533,346.866C390.276,348.096 381.139,362.775 360.796,367.491C361.78,367.351 362.083,367.304 363.163,367.027C361.762,367.421 361.724,367.456 361.131,367.657C361.5,367.601 361.5,367.601 363.403,367.22C362.294,367.765 361.007,368.023 357.918,368.654C375.53,365.605 388.445,355.599 394.28,340.442C395.081,337.809 395.404,336.737 395.733,335.073C396.28,329.506 394.408,325.951 392.423,323.803" style="fill:rgb(10,48,100);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M322.105,341.803C321.681,342.328 321.044,342.488 320.47,343.514C319.303,343.061 319.098,341.528 318.885,340.865C319.815,340.692 322.009,340.274 323.163,340.1C322.688,340.699 322.348,341.106 322.105,341.803M349.738,346.602C348.564,345.944 347.868,344.922 347.388,344.107C347.181,343.754 346.992,343.39 346.804,343.04L346.585,342.631C346.354,342.198 346.067,341.699 345.735,341.261C345.607,341.102 345.451,340.926 345.288,340.762L344.817,340.268C344.668,340.112 344.529,339.959 344.417,339.813C344.3,339.666 344.219,339.537 344.182,339.444C342.112,334.16 341.626,331.168 340.877,325.905C340.492,323.199 338.833,321.01 336.146,317.726C335.808,317.32 335.438,316.835 335.04,316.324C334.767,315.969 334.481,315.604 334.189,315.233C333.31,314.126 332.59,313.299 332.021,312.751C331.056,311.937 330.205,311.218 329.437,310.564C328.341,309.639 327.417,308.853 326.563,308.153C324.949,306.827 323.708,305.893 322.28,304.93C320.281,303.583 318.146,302.904 315.936,302.906C313.676,302.91 312.014,303.636 311.449,304.025C309.548,305.324 308.113,306.123 306.501,306.795C305.333,307.28 304.12,307.68 302.581,308.185C302.089,308.346 301.561,308.521 300.99,308.71C299.242,309.297 298.003,310.309 297.124,311.134C296.91,311.331 296.709,311.53 296.516,311.713C296.298,311.928 296.095,312.126 295.901,312.3C295.505,312.668 295.23,312.86 294.979,312.951C294.714,313.044 294.286,313.11 293.669,313.155C293.349,313.175 293.015,313.189 292.691,313.203C292.452,313.216 292.218,313.23 292.001,313.239C289.994,313.359 288.386,314.489 287.35,315.333C286.81,315.769 286.307,316.227 285.825,316.671L285.593,316.881C284.983,317.438 284.547,317.812 284.133,318.076C282.71,318.998 281.365,319.131 279.887,319.283C279.126,319.354 278.346,319.434 277.502,319.612C276.501,319.819 275.553,320.133 274.611,320.578C273.55,321.082 272.477,321.719 271.133,322.657C270.552,323.06 269.983,323.473 269.422,323.887C268.922,324.249 268.427,324.612 267.935,324.957C265.719,326.514 263.817,327.547 261.755,327.549C259.717,327.555 258.271,326.362 258.073,324.516C257.895,322.891 258.727,321.246 260.408,319.884L261.333,319.139C262.023,318.583 262.673,318.071 263.255,317.563C264.235,316.723 264.899,316.045 265.41,315.373C266.676,313.71 266.997,311.994 266.449,309.822C265.959,307.865 264.453,306.532 261.844,305.752C260.917,305.473 259.969,305.308 259.084,305.164L258.778,305.111C258.503,305.07 258.257,305.032 258.043,304.992C257.758,304.939 257.56,304.886 257.443,304.838C256.032,304.213 252.957,302.159 252.34,301.745L252.091,301.574L251.917,301.824C251.357,302.631 250.916,303.273 250.582,306.073C250.215,309.162 252.766,312.934 257.151,313.624C257.397,313.66 257.593,313.838 257.658,314.081C257.718,314.322 257.637,314.574 257.44,314.726C252.803,318.383 251.817,319.948 251.579,324.047C251.428,326.588 252.317,329.082 254.026,330.889C255.886,332.86 258.581,333.901 261.827,333.899C262.69,333.899 263.604,333.823 264.539,333.678C264.57,333.668 264.605,333.666 264.636,333.668C264.777,333.668 264.912,333.715 265.023,333.801C265.158,333.908 265.243,334.071 265.255,334.242C265.474,337.096 265.995,339.409 266.639,340.446C266.798,340.698 266.756,341.029 266.537,341.238C266.338,341.42 266.021,341.599 265.625,341.756C264.633,342.141 263.131,342.381 261.634,342.383C260.702,342.384 260.007,343.027 259.451,344.407C259.27,344.854 259.12,345.33 258.977,345.791L258.938,345.92C258.861,346.155 258.792,346.373 258.722,346.565C258.66,346.743 258.589,346.904 258.518,347.038C258.334,347.367 258.055,347.699 257.673,348.042C257.558,348.139 257.413,348.196 257.261,348.197C257.226,348.197 257.19,348.191 257.157,348.188C256.968,348.154 256.805,348.038 256.716,347.875C256.256,347.05 255.534,346.528 254.572,346.319L254.55,346.314L254.451,346.313C253.028,346.314 250.566,347.523 249.663,349.782C249.577,349.993 249.38,350.14 249.156,350.165L249.04,350.183C247.906,350.303 247.192,350.83 246.789,351.837C246.62,352.272 246.519,352.747 246.439,353.166L246.379,353.476C246.315,353.823 246.247,354.181 246.158,354.522C246.086,354.794 245.991,355.034 245.841,355.308C245.77,355.445 245.698,355.565 245.629,355.677C245.576,355.765 245.526,355.845 245.479,355.927C245.227,356.394 245.097,356.868 245.3,357.68C245.392,358.048 245.687,358.366 246.172,358.628C246.53,358.822 246.996,358.99 247.553,359.124C248.542,359.365 249.517,359.44 249.707,359.441C249.843,359.441 249.98,359.4 250.11,359.327C250.205,359.275 250.295,359.2 250.402,359.124C250.512,359.038 250.667,358.982 250.811,358.982C250.845,358.982 250.876,358.984 250.907,358.992L251.37,359.079C251.748,359.152 252.222,359.241 252.693,359.341L252.767,359.355C253.22,359.447 253.662,359.531 254.023,359.599C254.216,359.634 254.385,359.665 254.518,359.687C254.661,359.706 254.775,359.716 254.843,359.714L254.849,359.716C256.808,359.62 257.632,358.859 258.182,358.126C258.336,357.917 258.475,357.7 258.609,357.474L258.832,357.095L258.998,356.812C259.16,356.542 259.317,356.286 259.493,356.049C259.61,355.884 259.8,355.792 259.996,355.792C260.049,355.794 260.103,355.794 260.156,355.812C260.38,355.872 260.606,355.915 260.798,355.949C261.251,356.025 261.669,356.062 261.845,356.075C261.975,356.083 262.097,356.089 262.223,356.092C264.081,356.089 265.459,355.055 266.605,354.08L266.981,353.762C267.159,353.611 267.329,353.461 267.5,353.322C267.726,353.128 268.03,352.885 268.344,352.673C268.898,352.304 269.368,352.131 269.827,352.132L269.941,352.137C270.388,352.162 272.062,352.283 274.905,352.728C275.026,352.747 275.15,352.759 275.275,352.757C275.915,352.759 276.732,352.536 277.707,352.103C278.406,351.784 279.204,351.352 280.017,350.847C280.193,350.734 280.399,350.635 280.649,350.518L280.723,350.49C280.951,350.38 281.205,350.272 281.457,350.14C281.92,349.902 282.604,349.509 283.155,348.813C283.481,348.406 283.917,347.551 284.34,346.686L284.803,345.735C285.06,345.209 285.333,344.653 285.603,344.1C285.711,343.889 285.925,343.76 286.166,343.754L286.176,343.756L286.339,343.756C287.22,343.757 288.278,343.619 289.196,343.488C289.599,343.427 289.996,343.367 290.375,343.304C291.22,343.169 291.949,343.058 292.49,343.033C292.625,343.033 292.982,343.058 293.482,343.092L294.608,343.166C296.027,343.248 297.183,343.29 298.143,343.287C298.717,343.289 299.218,343.273 299.642,343.242C300.401,343.186 301.096,343.074 301.652,342.903C301.813,342.854 301.985,342.799 302.155,342.725C302.234,342.688 302.32,342.671 302.406,342.67C302.563,342.67 302.718,342.731 302.839,342.848C303.148,343.147 303.481,343.453 303.811,343.745C304.002,343.909 304.075,344.18 303.994,344.41C303.914,344.649 303.702,344.812 303.452,344.837C303.325,344.842 303.201,344.858 303.085,344.872C302.688,344.928 301.968,345.09 301.606,345.554C301.486,345.714 301.302,345.8 301.114,345.797C301.028,345.8 300.945,345.783 300.864,345.749C300.778,345.711 300.692,345.68 300.603,345.655C300.409,345.6 300.225,345.591 300.071,345.588L299.992,345.591L299.779,345.59L299.459,345.596L299.288,345.597C298.723,345.594 297.399,345.591 296.255,345.783C295.55,345.903 294.995,346.069 294.6,346.295C294.227,346.502 293.789,346.893 293.827,347.526C293.897,348.698 295.548,351.865 296.674,352.99C296.89,353.211 297.634,353.439 298.451,353.437C298.537,353.439 298.626,353.433 298.714,353.427C298.729,353.43 298.747,353.425 298.759,353.425C298.991,353.425 299.202,353.559 299.313,353.769C300.463,356.032 302.458,357.554 304.272,357.552L304.389,357.548C306.124,357.484 310.8,355.791 314.082,354.246C314.122,354.228 314.166,354.215 314.21,354.203C314.313,354.177 314.437,354.16 314.566,354.144C314.76,354.113 314.977,354.089 315.213,354.066L315.541,354.023C316.263,353.935 317.084,353.814 317.685,353.525C318.237,353.261 319.042,352.224 319.732,350.89C319.839,350.681 320.052,350.552 320.283,350.552C320.303,350.552 320.324,350.555 320.342,350.555C320.594,350.58 320.804,350.752 320.881,350.999C320.961,351.266 321.056,351.503 321.171,351.716C321.731,352.77 322.73,353.303 324.14,353.3C324.215,353.3 324.292,353.3 324.372,353.297C325.339,353.257 326.407,352.929 327.331,352.63L327.858,352.455C328.653,352.186 329.399,351.937 330.101,351.814C330.35,351.77 330.632,351.745 330.961,351.744C331.111,351.744 331.268,351.747 331.432,351.757C331.727,351.77 332.025,351.796 332.326,351.82C332.528,351.833 332.729,351.851 332.93,351.862C333.217,351.879 333.515,351.899 333.825,351.896C334.691,351.9 335.355,351.771 335.956,351.484C336.83,351.119 337.508,350.632 337.956,350.309L338.122,350.188C338.23,350.105 338.358,350.072 338.486,350.068C338.634,350.074 338.782,350.125 338.901,350.223C340.127,351.318 342.77,353.144 346.66,353.138C346.79,353.138 346.922,353.138 347.056,353.137C347.983,353.103 348.707,352.796 349.101,352.266C349.361,351.917 349.444,351.493 349.333,351.077C349.29,350.91 349.318,350.733 349.412,350.58C349.503,350.435 349.655,350.335 349.827,350.305C350.463,350.188 350.982,349.965 351.358,349.626C351.705,349.32 351.926,348.878 351.93,348.495C351.934,348.239 351.84,348.019 351.642,347.835C351.218,347.435 350.973,347.293 349.738,346.602" style="fill:white;fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M338.663,336.204C338.657,336.231 338.557,336.507 338.557,336.507C338.55,336.532 338.461,336.825 338.461,336.825C338.354,337.108 338.191,337.268 337.943,337.325C337.797,337.37 337.659,337.347 337.552,337.268C337.439,337.184 337.377,337.048 337.377,336.895C337.375,336.892 337.353,336.577 337.353,336.577L337.241,335.466C337.151,334.95 336.997,334.554 336.761,334.216C336.751,334.208 336.274,333.651 336.274,333.651C336.255,333.63 335.721,333.026 335.721,333.026C335.297,332.602 334.915,332.403 334.52,332.39C334.21,332.483 333.931,332.688 333.632,333.018L333.244,333.491L332.906,333.944C332.787,334.153 332.51,334.036 332.506,334.032C332.506,334.032 332.482,334.022 332.46,334.015C332.449,333.987 332.437,333.956 332.437,333.956C332.354,333.741 332.319,333.534 332.32,333.337C332.319,332.993 332.423,332.683 332.529,332.429L332.82,331.827L333.156,331.118L333.202,331.05C333.304,330.954 333.4,330.78 333.511,330.489L333.598,330.241L333.796,329.739C334.095,329.095 334.536,328.923 335.191,329.2C335.699,329.47 336.009,329.899 336.243,330.278L336.405,330.55L336.61,330.884L337.036,331.425C338.204,332.729 338.769,333.964 338.768,335.239C338.769,335.554 338.731,335.88 338.663,336.204M334.251,346.042C334.251,346.042 334.239,346.051 334.243,346.059C334.234,346.051 334.208,346.061 334.208,346.061C333.54,346.276 332.782,346.36 331.961,346.32L331.914,346.314C331.917,346.314 331.763,346.245 331.763,346.245C331.763,346.242 331.602,346.148 331.602,346.148C331.526,346.082 331.402,345.946 331.472,345.741C331.784,344.804 332.71,343.721 333.884,343.479C333.913,343.475 333.982,343.474 333.982,343.474L334.15,343.475L334.412,343.515C334.538,343.549 334.755,343.653 334.809,343.964C334.829,344.133 334.844,344.327 334.844,344.522C334.845,345.076 334.73,345.681 334.251,346.042M320.477,322.251C320.434,322.241 320.39,322.229 320.39,322.229C320.39,322.229 320.384,322.249 320.38,322.265C320.366,322.278 320.351,322.292 320.351,322.292C320.253,322.391 320.069,322.468 319.888,322.345C319.888,322.345 319.864,322.329 319.838,322.313C319.832,322.284 319.826,322.253 319.826,322.253C319.547,320.817 319.22,319.295 318.639,317.882C318.642,317.882 318.306,317.306 318.306,317.306L318.176,317.125L317.889,316.71C317.661,316.348 317.441,315.855 317.743,315.27L317.773,315.225C318.039,314.964 318.502,314.943 318.816,315.059L318.86,315.084C319.475,315.506 319.874,316.206 320.164,316.721C320.526,317.567 320.716,318.628 320.716,319.73C320.716,320.571 320.608,321.427 320.39,322.229C320.39,322.229 320.434,322.241 320.477,322.251M348.824,347.646C346.659,346.386 345.791,344.009 344.454,342.127C343.986,341.442 343.154,341.005 342.719,340.327C341.164,336.104 339.827,331.886 339.427,327.05C339.096,325.854 338.847,324.628 338.195,323.511C336.243,320.339 333.716,317.45 331.259,314.531C331.043,314.316 331.039,314.294 330.571,313.846L322.016,306.75C320.967,305.955 319.775,305.446 318.584,304.909C316.78,304.225 314.325,304.375 312.559,305.133C310.719,306.105 309.059,307.518 307.111,308.169C304.302,309.435 301.123,309.69 298.708,311.854C297.304,313.084 296.112,314.996 294.019,314.675C291.675,314.565 289.58,315.434 287.817,316.882C286.229,318.321 284.714,320.025 282.656,320.424C280.852,321.181 278.654,320.822 276.813,321.511C273.891,322.233 271.583,324.544 269.097,326.319C266.608,327.761 264.228,329.315 261.122,329.245C259.101,329.102 257.151,327.698 256.502,325.751C255.886,323.513 256.567,321.206 258.336,319.684C260.173,317.481 263.097,316.182 264.537,313.652C265.292,312.319 265.185,310.155 264.175,308.889C262.259,306.91 259.515,306.838 257.024,306.225C255.438,305.795 254.209,304.572 252.8,303.814C252.26,304.643 252.082,305.544 252.153,306.558C252.446,308.825 254.178,310.883 256.345,311.676C257.605,312.215 259.053,311.817 260.35,312.106C260.712,312.25 261.073,312.61 261.108,313.007C261.038,313.368 261.003,313.728 260.68,313.98C258.659,315.679 256.531,317.306 254.835,319.397C253.032,321.35 252.82,324.776 253.762,327.231C254.809,330.042 257.734,331.886 260.549,332.239C262.605,332.563 264.445,332.022 266.323,331.624C266.573,331.624 266.684,331.878 266.791,332.018C266.975,333.679 266.721,335.157 267.086,336.675C267.41,338.083 267.88,339.055 268.388,340.425C268.459,340.894 268.389,341.399 268.06,341.765C267.017,342.557 265.934,343.1 264.779,343.605L261.966,343.788L261.426,344.046C260.378,345.27 260.345,346.534 259.698,347.904C258.832,349.349 257.245,350.04 255.912,350.869C255.479,351.553 255.009,352.273 254.396,352.82C253.928,353.25 253.35,353.364 252.737,353.431C251.765,354.551 251.549,356.107 251.297,357.62C252.885,357.764 254.547,358.627 256.097,357.762C257.431,357.142 257.72,355.519 258.73,354.548C259.52,353.683 260.715,354.333 261.654,354.511C263.057,354.576 264.069,353.57 265.261,353.096C266.087,352.555 266.77,351.616 267.637,351.074C269.298,350.277 271.605,350.71 273.34,351.035C274.71,351.392 276.154,351.176 277.345,350.636C278.462,349.945 279.508,349.079 280.77,348.79C281.89,348.214 282.429,346.947 282.896,345.898C283.256,344.927 284.195,344.167 284.123,343.05C283.833,342.798 283.508,342.25 283.075,342.292C282.53,343.05 282.136,343.844 281.524,344.571C278.917,348.131 276.868,348.47 271.568,348.475C267.634,348.332 264.099,349.527 261.399,352.597C261.217,352.705 260.964,352.634 260.819,352.49C260.713,352.058 261.07,351.338 261.251,351.011C263.664,347.583 267.419,346.786 271.387,346.707C273.553,346.563 275.609,346.202 277.448,345.259C279.505,344.212 280.909,342.583 281.774,340.559C282.242,338.286 282.419,335.833 282.995,333.667C283.068,333.45 283.605,333.286 283.785,333.358C284.001,333.399 284.432,333.595 284.434,333.845C284.038,336.085 283.323,338.716 284.191,340.878C285.928,343.159 289.137,341.923 291.483,341.813C293.935,341.594 295.908,341.782 298.255,341.925C299.407,341.892 300.262,342.173 301.161,341.452C301.416,341.052 301.517,340.513 301.445,340.081C301.369,339.431 300.829,339.04 301.442,338.497C301.623,338.35 302.162,338.444 302.305,338.63C302.632,339.53 302.775,340.502 303.351,341.298C304.51,342.777 306.209,343.933 307.793,344.761C309.309,345.806 310.576,347.283 310.685,349.123C310.686,350.062 309.819,350.71 309.1,351.144C307.874,351.758 306.538,352.267 305.096,352.123C303.18,351.188 302.675,349.171 301.408,347.687C300.761,346.97 299.786,346.827 298.811,346.896C297.766,347.007 296.72,347.045 295.779,347.368C295.529,347.584 295.456,347.91 295.491,348.239C296.142,349.427 296.865,350.576 297.588,351.767C298.421,352.273 299.574,351.481 300.296,352.381C300.91,353.321 301.309,354.436 302.248,355.162C303.149,355.947 304.523,356.31 305.712,355.807C308.379,354.972 311.054,354.106 313.54,352.764L314.369,352.764C315.38,352.66 316.497,352.728 317.22,351.966C318.011,350.814 318.661,349.73 319.272,348.504C319.886,347.67 319.598,346.406 319.344,345.511C318.113,343.993 317.426,342.298 316.775,340.561C316.162,340.384 315.62,340.026 314.935,340.059C314.612,340.204 314.141,340.136 313.961,340.493L316.816,346.124C316.996,346.558 317.214,347.172 317.106,347.747C316.712,348.937 316.1,350.095 315.125,350.96C314.946,351.071 314.728,351.176 314.585,350.926C314.908,349.698 315.483,348.363 315.409,346.956L312.628,341.937C312.302,341.255 311.724,340.64 311.76,339.846C311.759,339.484 312.082,339.232 312.373,339.091C313.599,338.692 315.078,338.759 316.014,337.786C317.243,335.876 317.495,333.993 317.818,331.724C317.889,331.575 318.18,331.3 318.397,331.3C318.614,331.225 318.858,331.542 318.967,331.651C319.332,334.136 318.828,336.661 317.386,338.616C317.316,338.868 317.207,339.19 317.495,339.374C318.867,339.808 320.312,339.368 321.465,338.753C322.945,338.79 324.314,338.429 325.651,338.209C325.796,338.284 325.941,338.429 325.941,338.573C325.04,339.579 324.534,340.702 324.284,342.001C323.201,343.121 321.651,344.1 321.544,345.72C321.723,346.515 322.412,345.756 322.881,345.83C323.095,345.866 323.24,346.044 323.24,346.263L322.16,347.85C321.584,348.79 322.269,349.874 322.267,350.773C322.524,351.493 323.391,351.856 324.148,351.856C325.772,351.782 327.216,351.169 328.657,350.659C330.246,349.971 332.225,350.009 333.964,350.295C335.655,350.185 336.921,349.065 338.18,347.942C338.865,347.947 339.481,348.412 339.949,348.916C341.898,351.011 344.425,351.906 347.278,351.834L347.529,351.687C347.711,351.51 347.64,351.183 347.42,351.043L345.724,350.177C344.535,349.415 343.053,348.409 342.656,347.076C342.292,345.884 341.642,344.586 340.92,343.433C340.666,342.85 340.089,342.385 339.834,341.808C339.904,341.733 339.978,341.626 340.089,341.657C341.966,342.308 343.084,344.15 343.951,345.811C345.326,347.722 347.31,349.347 349.909,348.913L350.128,348.729C350.235,348.584 350.197,348.404 350.125,348.298L348.824,347.646Z" style="fill:rgb(219,10,64);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M253.022,351.74C254.144,351.089 254.864,349.859 255.442,348.813C255.334,348.417 254.935,348.129 254.609,347.836C254.393,347.661 254.07,347.802 253.816,347.873C253.019,348.564 252.193,349.103 251.328,349.644C250.965,349.899 251.111,350.438 251.04,350.837C251.038,351.197 251.472,351.45 251.689,351.668C252.086,351.849 252.594,351.877 253.022,351.74" style="fill:rgb(219,10,64);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M249.235,351.849C248.658,352.137 248.047,352.679 247.902,353.329C247.72,354.486 247.976,355.565 247.076,356.399C247.04,356.62 246.82,356.867 247.04,357.085C247.834,357.333 248.591,357.66 249.564,357.766C249.997,356.357 250.319,354.806 250.826,353.581L250.826,353.218C250.39,352.678 249.958,351.991 249.235,351.849" style="fill:rgb(219,10,64);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M303.971,347.975C304.697,348.77 304.659,349.992 305.491,350.607C306.573,350.788 307.547,350.355 308.376,349.706C308.847,349.306 308.158,348.801 308.088,348.331C307.617,347.649 307.94,346.276 306.785,346.241C305.629,346.419 304.478,346.454 303.322,346.459L302.996,346.68C302.782,347.363 303.789,347.363 303.971,347.975" style="fill:rgb(219,10,64);fill-rule:nonzero;"/>
						</g>
						<g transform="matrix(1,0,0,1,0,-216.107)">
							<path d="M626.141,259.364L604.36,217.759C603.884,216.849 602.95,216.285 601.924,216.285C600.898,216.285 599.963,216.849 599.489,217.761L577.966,258.902C577.264,260.25 577.783,261.912 579.129,262.616C580.475,263.32 582.135,262.8 582.843,261.455L582.84,261.453L601.924,224.967L621.266,261.914C621.759,262.852 622.714,263.389 623.708,263.389C624.136,263.389 624.574,263.288 624.981,263.075C626.325,262.371 626.846,260.709 626.141,259.364M570.187,216.499C568.666,216.499 567.437,217.73 567.437,219.25L567.437,260.426C567.437,261.944 568.666,263.176 570.187,263.176C571.705,263.176 572.938,261.944 572.938,260.426L572.938,219.25C572.938,217.73 571.705,216.499 570.187,216.499M555.628,245.76C555.483,246.566 555.337,247.192 555.236,247.606C555.18,247.813 555.139,247.968 555.11,248.065C555.086,248.16 555.078,248.176 555.078,248.176C553.58,253.047 550.594,255.222 547.736,256.472C546.317,257.074 544.953,257.385 543.972,257.537C543.48,257.611 543.086,257.648 542.827,257.667C542.699,257.676 542.6,257.678 542.544,257.68L542.5,257.682L523.563,257.682L523.563,221.992L543.007,221.992C548.33,222.032 551.121,224.236 552.989,226.517C553.895,227.664 554.504,228.837 554.869,229.708C555.052,230.14 555.174,230.494 555.247,230.728C555.285,230.843 555.308,230.929 555.323,230.978L555.331,231.01C555.987,233.894 556.217,236.659 556.217,239.089C556.217,241.835 555.923,244.15 555.628,245.76M557.298,223.103C554.757,219.819 550.049,216.453 543.007,216.492L520.813,216.492C520.087,216.492 519.379,216.787 518.87,217.299C518.357,217.81 518.062,218.517 518.062,219.242L518.062,260.432C518.062,261.157 518.357,261.865 518.87,262.377C519.382,262.891 520.087,263.182 520.813,263.182L542.5,263.182C542.722,263.176 545.979,263.177 549.883,261.534C553.767,259.927 558.379,256.388 560.337,249.794C560.383,249.641 561.715,245.368 561.721,239.089C561.718,236.309 561.453,233.136 560.69,229.77C560.62,229.512 559.885,226.386 557.298,223.103M509.596,257.616L484.589,257.616C482.888,257.529 482.879,257.163 482.556,256.771C482.43,256.554 482.346,256.276 482.308,256.071C482.287,255.969 482.282,255.889 482.279,255.85C482.276,255.834 482.276,255.827 482.276,255.825L482.276,241.447L509.126,241.447C510.648,241.447 511.877,240.215 511.877,238.694C511.877,237.175 510.648,235.945 509.126,235.945L482.276,235.945L482.276,223.968C482.287,223.833 482.378,223.291 482.634,222.942C482.957,222.576 483.164,222.125 485.027,222.06C490.399,222.058 509.499,222.058 509.502,222.058C511.021,222.058 512.253,220.828 512.253,219.308C512.253,217.791 511.021,216.559 509.502,216.559L485.027,216.559C481.501,216.476 478.885,218.316 477.851,220.222C476.767,222.09 476.793,223.677 476.776,223.941L476.776,255.88C476.793,256.134 476.764,257.653 477.763,259.474C478.687,261.284 481.117,263.118 484.362,263.118C484.438,263.118 484.514,263.117 484.589,263.115C489.653,263.115 509.596,263.115 509.596,263.117C511.114,263.117 512.346,261.885 512.346,260.366C512.346,258.845 511.114,257.616 509.596,257.616M468.362,216.657C467.332,216.23 466.15,216.465 465.364,217.253L447.914,234.701L430.124,216.912C429.341,216.125 428.159,215.891 427.13,216.315C426.104,216.742 425.434,217.746 425.434,218.857L425.434,260.818C425.434,262.336 426.663,263.568 428.182,263.568C429.703,263.568 430.935,262.336 430.935,260.818L430.935,225.497L445.971,240.536C446.49,241.055 447.18,241.342 447.917,241.342C448.649,241.342 449.342,241.055 449.861,240.536L464.559,225.836L464.559,260.818C464.559,262.336 465.788,263.568 467.31,263.568C468.828,263.568 470.06,262.336 470.06,260.818L470.06,219.197C470.06,218.085 469.39,217.081 468.362,216.657" style="fill:rgb(100,101,103);fill-rule:nonzero;"/>
						</g>
					</g>
					<defs>
				<linearGradient id="_Linear1" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0.224609,0,0,0.224609,386.08,320.149)"><stop offset="0%" style="stop-color:rgb(25,133,195);stop-opacity:1"/><stop offset="81%" style="stop-color:rgb(26,97,153);stop-opacity:1"/><stop offset="96%" style="stop-color:rgb(28,53,102);stop-opacity:1"/><stop offset="100%" style="stop-color:rgb(28,53,102);stop-opacity:1"/></linearGradient>
			<linearGradient id="_Linear2" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0.448242,0,0,0.448242,394.58,339.847)"><stop offset="0%" style="stop-color:rgb(25,133,195);stop-opacity:1"/><stop offset="81%" style="stop-color:rgb(26,97,153);stop-opacity:1"/><stop offset="96%" style="stop-color:rgb(28,53,102);stop-opacity:1"/><stop offset="100%" style="stop-color:rgb(28,53,102);stop-opacity:1"/></linearGradient>
		<linearGradient id="_Linear3" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(1.2041,0,0,1.2041,329.857,347.032)"><stop offset="0%" style="stop-color:rgb(25,133,195);stop-opacity:1"/><stop offset="81%" style="stop-color:rgb(26,97,153);stop-opacity:1"/><stop offset="96%" style="stop-color:rgb(28,53,102);stop-opacity:1"/><stop offset="100%" style="stop-color:rgb(28,53,102);stop-opacity:1"/></linearGradient>
	<linearGradient id="_Linear5" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(65.0591,-5.69192,5.69192,65.0591,329.008,346.559)"><stop offset="0%" style="stop-color:rgb(25,133,195);stop-opacity:1"/><stop offset="81%" style="stop-color:rgb(26,97,153);stop-opacity:1"/><stop offset="96%" style="stop-color:rgb(28,53,102);stop-opacity:1"/><stop offset="100%" style="stop-color:rgb(28,53,102);stop-opacity:1"/></linearGradient>
<linearGradient id="_Linear6" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(13.8984,0,0,13.8984,381.414,348.03)"><stop offset="0%" style="stop-color:rgb(25,133,195);stop-opacity:1"/><stop offset="81%" style="stop-color:rgb(26,97,153);stop-opacity:1"/><stop offset="96%" style="stop-color:rgb(28,53,102);stop-opacity:1"/><stop offset="100%" style="stop-color:rgb(28,53,102);stop-opacity:1"/></linearGradient>
<linearGradient id="_Linear7" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0.0625,0,0,0.0625,394.387,340.977)"><stop offset="0%" style="stop-color:rgb(25,133,195);stop-opacity:1"/><stop offset="81%" style="stop-color:rgb(26,97,153);stop-opacity:1"/><stop offset="96%" style="stop-color:rgb(28,53,102);stop-opacity:1"/><stop offset="100%" style="stop-color:rgb(28,53,102);stop-opacity:1"/></linearGradient>
<linearGradient id="_Linear8" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(2.01953,0,0,2.01953,331.062,347.814)"><stop offset="0%" style="stop-color:rgb(25,133,195);stop-opacity:1"/><stop offset="81%" style="stop-color:rgb(26,97,153);stop-opacity:1"/><stop offset="96%" style="stop-color:rgb(28,53,102);stop-opacity:1"/><stop offset="100%" style="stop-color:rgb(28,53,102);stop-opacity:1"/></linearGradient>
<linearGradient id="_Linear9" x1="0" y1="0" x2="1" y2="0" gradientUnits="userSpaceOnUse" gradientTransform="matrix(0.276367,0,0,0.276367,394.34,340.785)"><stop offset="0%" style="stop-color:rgb(25,133,195);stop-opacity:1"/><stop offset="81%" style="stop-color:rgb(26,97,153);stop-opacity:1"/><stop offset="96%" style="stop-color:rgb(28,53,102);stop-opacity:1"/><stop offset="100%" style="stop-color:rgb(28,53,102);stop-opacity:1"/></linearGradient>
</defs>
</svg>
</a>
</p>
<p><span>Filmers:</span> Flo Eckhardt, Justin Hare, Heiko Knauer, Tom Hannam, Skylar Brent, Mikael Ahtikari, Tijl Bex.</p>
<p><span>Locations:</span> Alaska, Utah, Minnesota, Wyoming, Quebec, Alberta, British Columbia, Austria, Switzerland, Sweden, Finland & Japan.</p>
<p><span>Hashtag:</span> #Unionteammovie</p>
</div>
</div>
</section>
<section id="the-riders">
<div class="container">
<h3>The Riders</h3>
<div id="rider-grid">
<a href="<?php print base_path(); ?>team/kazuhiro-kokubo" class="rider fadein pro">

<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/Kazu.jpg">
<div class="rider-name">
<p>KAZU KOKUBO</p>
</div>
</a>
<a href="<?php print base_path(); ?>team/scott-stevens" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/scott_0.jpg">
<div class="rider-name">
<p>Scott Stevens</p>
</div>
</a>
<a href="<?php print base_path(); ?>team/gigi-rüf" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/Gigi.jpg">
<div class="rider-name">
<p>Gigi Rüf</p>
</div>
</a>
<a href="<?php print base_path(); ?>team/dustin-craven" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/Dustin_0.jpg">
<div class="rider-name">
<p>Dustin Craven</p>
</div>
</a>
<a href="<?php print base_path(); ?>team/johnny-oconnor" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/JOC_0.jpg">
<div class="rider-name">
<p>Johnny O'Connor </p>
</div>
</a>
<a href="<?php print base_path(); ?>team/phil-jacques" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/PhilJacques_0.jpg">
<div class="rider-name">
<p>Phil Jacques</p>
</div>
</a>
<a href="<?php print base_path(); ?>team/travis-rice" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/Travis_0.jpg">
<div class="rider-name">
<p>Travis Rice</p>
</div>
</a>
<a href="<?php print base_path(); ?>team/dan-brisse" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/Brisse_0.jpg">
<div class="rider-name">
<p>Dan Brisse</p>
</div>
</a>
<a href="<?php print base_path(); ?>team/bryan-iguchi" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/Guch_0.jpg">
<div class="rider-name">
<p>Bryan Iguchi</p>
</div>
</a>
<a href="http://instagram.com/arthur_longo" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/ArthurLongo.jpg">
<div class="rider-name">
<p>Arthur Longo </p>
</div>
</a>
<a href="<?php print base_path(); ?>team/torstein-horgmo" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/Tor_0.jpg">
<div class="rider-name">
<p>Torstein Horgmo</p>
</div>
</a>
<a href="https://www.instagram.com/antochamberland" class="rider fadein pro">
<img src="<?php print base_path(); ?>sites/default/files/styles/teaser_profile_photo/public/team/Anto.jpg">
<div class="rider-name">
<p>Anto Chamberland</p>
</div>
</a>
</div>
</div>
</section>
<section id="bts">
	<div class="container">
	<h3>STRONGER, BEHIND THE SCENES.</h3>
	<div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            	<img class="vid-placeholder" src="http://img.youtube.com/vi/PTBgt4wvKHo/maxresdefault.jpg">
				<iframe class="youtube" data-src="https://www.youtube.com/embed/PTBgt4wvKHo" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
            	<img class="vid-placeholder" src="http://img.youtube.com/vi/2RlDSbxsnyc/maxresdefault.jpg">
				<iframe class="youtube" data-src="https://www.youtube.com/embed/2RlDSbxsnyc" src="" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
            	<img class="vid-placeholder" src="http://img.youtube.com/vi/CVH_JDo6fmc/maxresdefault.jpg">
				<iframe class="youtube" data-src="https://www.youtube.com/embed/CVH_JDo6fmc" src="" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-white"></div>
        <div class="swiper-button-prev swiper-button-white"></div>
    </div>
    <div class="swiper-container gallery-thumbs">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            	<img src="http://img.youtube.com/vi/PTBgt4wvKHo/maxresdefault.jpg">
            </div>
            <div class="swiper-slide">
            	<img src="http://img.youtube.com/vi/2RlDSbxsnyc/maxresdefault.jpg">
            </div>
            <div class="swiper-slide">
            	<img src="http://img.youtube.com/vi/CVH_JDo6fmc/maxresdefault.jpg">
            </div>
        </div>
    </div>
		
	</div>
</section>
<section id="the-soundtrack">
<div class="container">
<h3>The Soundtrack</h3>
<iframe src="https://embed.spotify.com/?uri=spotify:user:unionbindingco:playlist:4Tal0agbeangQi8v3heJ63" width="100%" height="640" frameborder="0" allowtransparency="true"></iframe>
</div>
</section>
</main>