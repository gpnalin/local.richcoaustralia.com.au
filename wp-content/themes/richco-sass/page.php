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
		<?php get_template_part('templates/page-customers-flexisel'); ?>
	</div>
</div>