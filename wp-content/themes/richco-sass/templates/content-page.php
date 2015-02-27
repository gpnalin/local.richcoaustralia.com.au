<?php while (have_posts()) : the_post(); ?>
<div class="row">
	<div class="col-xs-12 col-sm-8 border-right">
		<div class="common-para">
			<?php echo wpautop( get_the_content() ); ?>
		</div>
	</div>
	<div class="col-xs-12 col-sm-4">
		<h4 class="tagh4">Find out More</h4>
		<?php

		$args = array(
			'theme_location'  => 'what_we_provide_menu',
			'container'       => false,		
			'menu_class'      => 'provide-lister',
			'echo'            => true,
			'fallback_cb'     => 'wp_page_menu',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 1
		);

		wp_nav_menu( $args );

		?> 
	</div>
</div>
<?php endwhile; ?>