<?php while (have_posts()) : the_post(); ?>
<div class="row">
    <div class="col-xs-12 col-sm-7 text-center">
        <?php if ( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail( 'full' , array( 'class' => 'img-responsive normal' ) ); ?>
        <?php else: ?>
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/blog-image.jpg" class="img-responsive normal" alt="Image">
        <?php endif; ?>
    </div>
    <div class="col-xs-12 col-sm-5">
        <div class="blog-right-col">
            <div class="keep-touch">
                <h3>Keep in Touch</h3>
                <div class="share">
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/share-fb.jpg" class="img-responsive" alt="Image">
                    </span>
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/share-tw.jpg" class="img-responsive" alt="Image">
                    </span>
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/share-link.jpg" class="img-responsive" alt="Image">
                    </span>
                    <span>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/share-yt.jpg" class="img-responsive" alt="Image">
                    </span>
                </div>
                <h3>From the Blog</h3>
                <div class="blog-right-pro">
                  <?php 
                    $args = array( 'numberposts' => '3' );
                    $recent_posts = wp_get_recent_posts( $args );
                    foreach( $recent_posts as $recent ){
                      $thumb_url = wp_get_attachment_image_src( get_post_thumbnail_id($recent["ID"] , 'thumbnail') );

                      echo '<div class="box-col">'.
                            '<a href="' . get_permalink($recent["ID"]) . '" >'.
                              '<img src="'. $thumb_url[0] .'" width="76" height="76" class="img-responsive" alt="Image">'.                        
                              '<p>' . $recent["post_title"]. '</p>'.
                            '</a>'.
                          '</div>';

                    }
                  ?>                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="pro-disc">
            <h4><?php the_title(); ?></h4>
            <?php echo wpautop( get_the_content() ); ?>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="pro-disc">
            <div class="row">

                <?php 
                $args = array( 'numberposts' => '4' );
                $recent_posts = wp_get_recent_posts( $args );
                ?>

                <?php foreach( $recent_posts as $recent ): ?>

                  <div class="col-xs-12 col-sm-3 text-center">
                      <div class="bottom-box">
                          <a href="<?php echo( get_permalink($recent["ID"]) ); ?>">

                            <?php echo get_the_post_thumbnail( $recent["ID"] , 'thumbnail'  , array( 'class' => 'img-responsive normal' ) ); ?>
                          
                            <h5><?php echo $recent["post_title"]; ?></h5>

                          </a>
                          <p><?php echo( substr( $recent["post_content"] , 0 , 120 ) . '...' ); ?></p>
                      </div>
                  </div>
                      
                <?php endforeach;  ?>                
                
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>