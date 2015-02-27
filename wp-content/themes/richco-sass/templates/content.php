<div class="col-xs-12 col-sm-12 col-md-6">
    <div class="brochure-block">
        <div class="row">
            <div class="col-xs-12 col-sm-5 p-right-none text-center">
            	<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail( array(220, 172) , array( 'class' => 'img-responsive normal' ) ); ?>
				<?php else: ?>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/sample-7.jpg" class="img-responsive normal" alt="Image">
				<?php endif; ?>
            </div>
            <div class="col-xs-12 col-sm-6">
                <h4><?php the_title(); ?></h4>
                <p><?php echo substr( get_the_excerpt(), 0,130 ). "..."; ?></p>
                <div class="row">
                    <div class="col-xs-6 col-sm-6 text-center">
                        &nbsp;
                    </div>
                    <div class="col-xs-6 col-sm-6 text-center">
                        <a href="<?php the_permalink(); ?>" class="btn btn-default btn-brochure">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>