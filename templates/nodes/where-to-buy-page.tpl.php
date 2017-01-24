<main id="dealer-locator">
  <section id="page-header">
    <h1>Dealer Locator</h1>
    <p>Find A Union Dealer Near You</p>
  </section>
  <section id="dealer-map">
  	<div id='storemapper' style='width:100%;'>
  		<p>Store Locator is loading from <a href='https://www.storemapper.co'>Storemapper store locator app</a>...</p>
  	</div>
  	<script data-storemapper-start='2016,07,20' data-storemapper-id='3185'>
  		(function() {
  			var script = document.createElement('script');script.type  = 'text/javascript';script.async = true;script.src = document.location.protocol + '//www.storemapper.co/js/widget.js';
  			var entry = document.getElementsByTagName('script')[0];entry.parentNode.insertBefore(script, entry);
  		}());
  	</script>
  </section>
  <section id="shop-online">
      <div class="container">
          <div class="section-title">
            <h2>Shop Online</h2>
          </div>
          <div id="online-partners">
            <?php print views_embed_view('shop_online', 'block_1'); ?>
          </div>
      </div>
  </section>
</main>