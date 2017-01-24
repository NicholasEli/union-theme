<main id="home-page">
    <section class="swiper-container">
        <div class="swiper-wrapper">
        	<?php print views_embed_view('front_page_slideshow', 'block_1'); ?>
	    </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>
</main>
<?php 
	drupal_goto('team/movie');
?>
