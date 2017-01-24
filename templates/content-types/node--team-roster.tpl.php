<?php
	hide($content['field_team_profile_link']);
	$profile = $content['field_team_profile_link'];
	//kpr($profile);	
?>

<main id="team">
  <section id="page-header">
    <h1>Team</h1>
    <p>2016 / 2017 Team RIDERS</p>
  </section>
  <section class="bg-parallaxY" id="team-banner"><img class="placeholder" src="https://placehold.it/1511x485">
    <div class="container">
      <h2>Stronger.</h2>
      <h3>Union team movie in progress: fall 2016</h3>
    </div>
  </section>
  <section id="riders">
    	<div class="container">
      		<div id="rider-grid">
		      	<?php
		      		for($i=0; $i < count($profile['#items']); $i++){
		      			$value = $profile['#items'][$i]['value'];
		      			$name = $profile[$i]['entity']['field_collection_item'][$value]['field_rider_name']['#items'][0]['value'];
		      			$img  = $profile[$i]['entity']['field_collection_item'][$value]['field_rider_image']['#items'][0]['filename'];
		      			$link = $profile[$i]['entity']['field_collection_item'][$value]['field_rider_link']['#items'][0]['url'];
		      			$pro  = $profile[$i]['entity']['field_collection_item'][$value]['field_rider_pro']['#items'][0]['value'];
		      			$isPro;
		      			$imgUrl;
		      			if($img != "" || $img != null){
      					
		      				$imgUrl = image_style_url('teaser_profile_photo', $profile[$i]['entity']['field_collection_item'][$value]['field_rider_image']['#items'][0]['uri']);
		      			}else{
		      				$imgUrl = base_path() . 'sites/all/themes/union1617/images/team/no-image.jpg';
		      			}

		      			if($pro === "Yes"){
		      				$isPro = 'pro';
		      			}else{
		      				$isPro = '';
		      			}

			      		if($link != "" || $link != null){
			      			print '<a href="' . str_replace(array('http://www.unionbindingcompany.com/', 'https://www.unionbindingcompany.com/'), base_path(), $link) . '" class="rider fadein ' . $isPro . '">';
			      		}else{
			      			print '<div class="rider fadein ' . $isPro . '">';
			      		}
		      	?>
						<img class="lazy" data-lazy="<?php print $imgUrl;?>">
						<div class="rider-name">
							<p><?php print $name;?></p>
						</div>
				<?php 
						if($link!= "" || $link != null){
							print '</a>';
						} else {
							print '</div>';
						}
					} 
				?>

        	</div>
    	</div>
  </section>
</main>