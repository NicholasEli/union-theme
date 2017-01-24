<?php
  hide($content['field_location']);
  hide($content['field_venue']);
  hide($content['field_host']);
  hide($content['field_tour_city']);
  hide($content['field_info_link']);
  hide($content['field_tickets_link']);
  hide($content['field_date']);
  print render($content);

  $info = field_get_items('node', $node, 'field_info_link');
  $tickets = field_get_items('node', $node, 'field_tickets_link');
?>
<?php if ($view_mode == 'teaser') { ?>
<div class="grid">
      <div class="grid-inner">
             <div class="tour-info">
            <p class="location"><?php print render($content['field_location']); ?></p>
                <h3><?php print render($content['field_tour_city']); ?></h3>
                <p>Date: <?php print render($content['field_date']); ?></p>
                <p>Venue: <?php print render($content['field_venue']); ?></p>
                <p>Hosted By: <?php print render($content['field_host']); ?></p>
            </div>
          <div class="tickets">
            <?php 
              if($info){
                print '<a class="info-link" href="'. render($content['field_info_link']) . '" target="_blank">Info</a>';
              }
            ?>

            <?php 
              if($tickets){
                print '<a class="ticket-link" href="'. render($content['field_tickets_link']) . '" target="_blank">Tickets</a>';
              }
            ?>
          
          </div>
     </div>
  </div>
<?php }; // END TEASER VIEW ?>

