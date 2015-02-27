<?php 
$banner_text    = get_field( 'brochures_banner_text', OPTIONS_PAGE_ID );
$banner_image  = get_field( 'brochures_banner_image', OPTIONS_PAGE_ID );
?>
<?php if( $banner_image ): ?>
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="container3">
                    <div class="" id="landing-header">
                        <div class="row">
                            <div class="col-lg-12">
                                <img src="<?php echo($banner_image); ?>" alt="<?php echo($banner_text); ?>" class="landing-img" />
                                
                                <?php if ($banner_text): ?>                              
                                    <div class="landing-header-content">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <p><?php echo($banner_text); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if (have_posts()) : ?>
    <div class="container">
        <div class="container-new">
            <div class="row">
                <div class="col-xs-12">
                    <div class="help">
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <h3>Richco Brochures</h3>
                            </div>
                            <div class="col-xs-12 col-sm-4 text-right">
                                <p class="items"><?php echo( $wp_query->found_posts ); ?> items</p>
                                <?php if ($wp_query->max_num_pages > 1) : ?>
                                  <?php
                                // custom function to output Bootstrap pagination added in custom.php
                                  page_navi();
                                  ?>
                                <?php endif; ?>
                                <a style="color: inherit;" href="?all">View All</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <div class="row">
            <?php $column=0; while (have_posts()) : the_post(); $column++; ?>

            <div class="col-xs-12 col-sm-12 col-md-6 col-width">
                <div class="brochure-block">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 p-right-none text-center">
                            <?php the_post_thumbnail( array(220, 172) , array( 'class' => 'img-responsive normal' ) ); ?>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <h4><?php the_title(); ?></h4>
                            <?php the_excerpt(); ?>
                            <div class="row">
                                <div class="col-xs-6 col-sm-6 text-center">
                                    <a href="<?php echo get_site_url(). '/download.php?id=' .get_field('brochure_upload'); ?>"   class="btn btn-default btn-brochure">Download</a>
                                </div>
                                <div class="col-xs-6 col-sm-6 text-center">
                                    <?php if ( get_field('brochure_url') ): ?>
                                        <a href="<?php echo get_field('brochure_url'); ?>" class="btn btn-default btn-brochure" target="_blank" >View Online</a>
                                    <?php else: ?>  
                                        <a href="<?php echo get_site_url(). '/pdf/viewer.php?id=' .get_field('brochure_upload'); ?>" class="btn btn-default btn-brochure" target="_blank" >View Online</a>
                                    <?php endif; ?>                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <?php
            if ($column == 3)
              echo '</div><div class="row">';   $column = 0; 
          ?>

      <?php endwhile; ?>        
  </div>
  
</div>
</div>
<?php endif; ?>