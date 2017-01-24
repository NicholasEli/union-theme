<?php
hide($content['field_north_america']);
hide($content['field_south_america']);
hide($content['field_australasia']);
hide($content['field_europe_middle_east']);
hide($content['field_asia']);
hide($content['field_canada']);
print render($content);
?>
<main id="contact-page">
  <section id="page-header">
    <h1>Contact Us</h1>
    <p>Select Your Region Below</p>
  </section>
  <section id="contact-map"><img src="<?php print base_path() . $directory;?>/images/contact-map.png"></section>
  <section id="contact-filter">
    <div class="container">
      <div id="filter-tabs">
        <ul>
          <li><a href="#north-america">USA</a></li>
          <li><a href="#south-america">South America</a></li>
          <li><a href="#australia-new-zealand">AUSTRALIA+NEW ZEALAND</a></li>
          <li><a href="#europe">Europe</a></li>
          <li><a href="#asia">Asia</a></li>
          <li><a href="#canada">Canada</a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="contact-info">
    <div class="container">
      <h4>Info</h4>
      <p>Have a question about sizing? Want to know what binding would work best for your riding style? Need help with a warranty? Just want to chat with someone about snowboarding?</p>
      <p>We're here to help! Shoot us an e-mail or give us a call.</p>
      <h6>Hours</h6>
      <p>Mon-Fri: 9am-5pm PST Saturday: Closed Sunday: Closed</p>
    </div>
  </section>
  <section id="contact-grid">
    <div class="container">
      <div class="filter-group" id="north-america">
        <?php foreach ((array)$node->field_north_america['und'] as $item) { ?>
            <?php print $item['value'] ?>
        <?php } ?>
      </div>
      <div class="filter-group" id="south-america">
        <?php foreach ((array)$node->field_south_america['und'] as $item) { ?>
            <?php print $item['value'] ?>
        <?php } ?>
      </div>
      <div class="filter-group" id="australia-new-zealand">
        <?php foreach ((array)$node->field_australasia['und'] as $item) { ?>
            <?php print $item['value'] ?>
        <?php } ?>
      </div>
      <div class="filter-group" id="europe">
        <?php foreach ((array)$node->field_europe_middle_east['und'] as $item) { ?>
            <?php print $item['value'] ?>
        <?php } ?>
      </div>
      <div class="filter-group" id="asia">
        <?php foreach ((array)$node->field_asia['und'] as $item) { ?>
            <?php print $item['value'] ?>
        <?php } ?>
      </div>
      <div class="filter-group" id="canada">
        <?php foreach ((array)$node->field_canada['und'] as $item) { ?>
            <?php print $item['value'] ?>
        <?php } ?>
      </div>
    </div>
  </section>
</main>