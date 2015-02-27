<div class="container container-space">
	<div class="container4">
		<?php get_template_part('templates/page', 'header'); ?>		
		<?php 
			if ( get_field('disable_sidebar') ) {
				get_template_part('templates/content', 'no-side'); 
			}else{
				get_template_part('templates/content', 'page'); 
			}
		?>
		<div class="row margin-top-30px">
			<div class="col-xs-12 text-center">
				<div class="lg-world-map">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/around-world/richco-world.png" class="img-responsive normal img-around-world world-map" width="942" height="533" alt="Richco World Map" usemap="#world-map-coordinates">
					<map name="world-map-coordinates" id="world-map-coordinates">						
						<area id="region-us" class="map-areas" shape="circle" coords="227,191,82" href="#us" alt="us" data-title="RICHCO US" data-content="CLICK TO VISIT OUR US GALLERY" />
						<area id="region-uk" class="map-areas" shape="circle" coords="482,141,52" href="#uk" alt="uk" data-title="RICHCO UK" data-content="CLICK TO VISIT OUR UK GALLERY" />
						<area id="region-au" class="map-areas" shape="circle" coords="814,401,63" href="#au" alt="au" data-title="RICHCO AU" data-content="CLICK TO VISIT OUR AU GALLERY" />
					</map>
				</div>
					
				<?php if( have_rows('us_gallery') ): ?>
				<div class="slider-us slider-container">
					<a href="#close" class="close-slider text-hide">Close</a>
					<ul id="bxslider-us" class="bx-slider">
					<?php while( have_rows('us_gallery') ): the_row(); 
						// vars
						$us_image = get_sub_field('us_image');
						$us_caption = get_sub_field('us_caption');
						?>
						<li><img src="<?php echo $us_image['sizes']['around-the-world-slide']; ?>" title="<?php echo $us_caption; ?>" /></li>
					<?php endwhile; ?>
					</ul>
				</div>
				<?php endif; ?>

				<?php if( have_rows('uk_gallery') ): ?>
				<div class="slider-uk slider-container">
					<a href="#close" class="close-slider text-hide">Close</a>
					<ul id="bxslider-uk" class="bx-slider">
					<?php while( have_rows('uk_gallery') ): the_row(); 
						// vars
						$uk_image = get_sub_field('uk_image');
						$uk_caption = get_sub_field('uk_caption');
						?>
						<li><img src="<?php echo $uk_image['sizes']['around-the-world-slide']; ?>" title="<?php echo $uk_caption; ?>" /></li>
					<?php endwhile; ?>
					</ul>
				</div>
				<?php endif; ?>

				<?php if( have_rows('au_gallery') ): ?>
				<div class="slider-au slider-container">
					<a href="#close" class="close-slider text-hide">Close</a>
					<ul id="bxslider-au" class="bx-slider">
					<?php while( have_rows('au_gallery') ): the_row(); 
						// vars
						$au_image = get_sub_field('au_image');
						$au_caption = get_sub_field('au_caption');
						?>
						<li><img src="<?php echo $au_image['sizes']['around-the-world-slide']; ?>" title="<?php echo $au_caption; ?>" /></li>
					<?php endwhile; ?>
					</ul>
				</div>
				<?php endif; ?>		

			</div>
		</div>
		<div class="row margin-top-30px">
			<div class="col-sm-12 col-md-4 col-lg-4 text-center">
				<a id="region-uk" class="region-select region-uk text-hide" rel="uk" href="#uk">UK</a>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 text-center">
				<a id="region-us" class="region-select region-us text-hide" rel="us" href="#us">US</a>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4 text-center">
				<a id="region-au" class="region-select region-au text-hide" rel="au" href="#au">AU</a>
			</div>
		</div>

		<?php get_template_part('templates/page-customers-flexisel'); ?>
	</div>
</div>