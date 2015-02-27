<div class="row">
    <div class="middle-block">
        <div class="col-xs-12">
            <div class="row">

				<?php if( have_rows('repeater_field_name') ): ?>

					<ul class="slides">

					<?php while( have_rows('industry_scroller') ): the_row(); 

						// vars
						$image = get_sub_field('image');
						$content = get_sub_field('content');
						$link = get_sub_field('link');

						?>

						<li class="slide">

							<?php if( $link ): ?>
								<a href="<?php echo $link; ?>">
							<?php endif; ?>

								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

							<?php if( $link ): ?>
								</a>
							<?php endif; ?>

						    <?php echo $content; ?>

						</li>

					<?php endwhile; ?>

					</ul>

				<?php endif; ?>

            	<?php if ( have_rows('industry_scroller') ): ?>
				    <ul id="flexiselDemo2">
				    <?php while( have_rows('industry_scroller') ): the_row(); 
					    // vars
						$term = get_sub_field('industry');
						?>
			    		<li>
	                        <div class="col-xs-12">
	                            <div class="out">
	                            	<?php $image = get_field('industry_featured_image', $term->taxonomy . '_' . $term->term_id ); ?>
	                                <img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>">
	                                <div class="over">
	                                    <h3><?php echo $term->name ; ?></h3>
	                                    <p><?php $excerpt = substr($term->description, 0, 60); echo( $excerpt.'...' ); ?></p>
	                                    <a href="<?php $url = site_url('/'. $term->slug .'/'); echo $url; ?>">Read More</a>
	                                </div>
	                            </div>
	                        </div>
	                    </li>
				    <?php endwhile; ?>
            		</ul>
            	<?php endif; ?>

            </div>
        </div>
    </div>
</div>