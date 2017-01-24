<?php
	hide($content['field_partner_image']);
	hide($content['field_partner_country_code']);
	hide($content['field_partner_link']);
	print render($content);
?>
<a class="<?php print render($content['field_partner_country_code']); ?>" href="<?php print render($content['field_partner_link']);?>" target="_blank">
	<?php print render($content['field_partner_image']); ?> 
</a>