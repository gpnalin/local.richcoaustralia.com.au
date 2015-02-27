<?php while (have_posts()) : the_post(); ?>
	<div class="row">
		<div class="col-xs-12">
			<div class="common-para">
				<?php the_content(); ?>
			</div>
		</div>		
	</div>
<?php endwhile; ?>