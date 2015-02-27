<?php
/*
Template Name: Industry Template
*/

$industry = get_field('selected_industry');
//print_r($industry);

?>
<div class="container">
    <div class="container4">
        <div class="row">
            <div class="col-xs-12">
                <h3><?php the_title(); ?></h3>                
            </div>
        </div>
        <div class="row">
            <div class="common-pages">
                <div class="col-xs-12">
                    <p><?php echo nl2br($industry->description,false) ; ?></p>
                </div>
                <div class="col-xs-12">
                    <a href="<?php echo site_url('/contact-us/'); ?>" class="btn btn-default richco-btn">Specify our product</a>
                </div>
            </div>
        </div>

    </div>
</div>
<?php 

$args = array(
  'post_type' => 'richco_product',
  'posts_per_page'=>-1,
  'tax_query' => array(
     array(
        'taxonomy' => 'richco_industry',  
        'field'    => 'slug',
        'terms'    => $industry->slug,
        ),
     ),
  );

$query = new WP_Query( $args ); 

?>


<div class="container container-space">

	<?php if ( $query->have_posts() ): ?>		
       
       <div class="related-products">
           <div class="row">
               <div class="col-xs-12">
                   <h4><?php the_title(); ?> Products</h4>
               </div>
           </div>
           <div class="row">
               <div class="col-xs-12">
                   <div class="row">
                       <ul class="pro-lister">

                          <?php while ( $query->have_posts() ) : $query->the_post(); ?>							
                            
                            <li>
                              <a href="<?php the_permalink(); ?>" class="pro-col">
                                 <?php the_post_thumbnail('product-thumb', array('class' => 'img-responsive') ); ?>
                                 <h3><?php the_title(); ?></h3>
                             </a>
                         </li>

                     <?php endwhile; ?>
                     
                 </ul>
             </div>
         </div>
     </div>
 </div>

<?php endif; ?>


<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="container4">
            <div class="row">
                <div class="col-xs-12">
                    <h3 class="no-border">Case Files</h3>
                </div>
            </div>
            <div class="row">
                <div class="case-col">
                    <ul id="flexiselDemo4">
                        <?php 
                        $args = array( 'post_type' => 'richco_case_studies' , 'orderby' => 'title' );
                        $case_studies = get_posts( $args );
                        foreach ( $case_studies as $case_study ) :
                            ?>
                        <li>
                            <div class="col-xs-12 text-center">
                                <a href="<?php echo( $case_study->guid ); ?>"><?php echo( $case_study->post_title ); ?></a>
                            </div>
                        </li>                            
                        <?php
                        endforeach; 
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="container4">
            <div class="comm-disc">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h3 class="no-border">Brochures</h3>
                        <p>Limited manufactures and installs an extensive range of floor coatings including epoxy.</p>
                    </div>
                    <div class="col-xs-12 col-sm-6 text-center">
                        <img src="<?php echo( get_template_directory_uri() ); ?>/assets/img/sample-book.jpg" class="img-responsive normal" alt="Image">
                        <a href="<?php echo site_url('/brochures/'); ?>">View Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="other-industries">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h4>Other Industries</h4>

                <?php 

                $terms = get_terms(
                    "richco_industry",
                    array(
                        'hide_empty'    => false,
                        'exclude'       => $industry->term_taxonomy_id
                        )
                    );

                    ?>

                    <?php if ( !empty( $terms ) && !is_wp_error( $terms ) ): ?>
                        <ul id="flexiselDemo5">
                            <?php foreach ( $terms as $term ) : ?>
                                <li>
                                    <div class="col-xs-12">
                                        <a href="<?php $url = site_url('/'. $term->slug .'/'); echo $url; ?>" class="out">
                                            <?php $image = get_field('industry_featured_image', $term->taxonomy . '_' . $term->term_taxonomy_id ); ?>
                                            <img src="<?php echo $image['url']; ?>" class="img-responsive" alt="<?php echo $image['alt']; ?>">
                                            <div class="over">
                                                <h5><?php echo $term->name ; ?></h5>                                        
                                            </div>
                                        </a>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
       $( document ).ready(function() {
		//	Case Files flexisel
       $("#flexiselDemo4").flexisel({
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
            portrait: {
                changePoint: 480,
                visibleItems: 1
            },
            landscape: {
                changePoint: 640,
                visibleItems: 1
            },
            tablet: {
                changePoint: 768,
                visibleItems: 2
            },
            tablet2: {
                changePoint: 991,
                visibleItems: 2
            },
            desktop: {
                changePoint: 5000,
                visibleItems: 3
            }
        }
    });

	    //	Other Industries flexisel
        $("#flexiselDemo5").flexisel({
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint: 480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint: 600,
                    visibleItems: 2
                },
                tablet: {
                    changePoint: 768,
                    visibleItems: 3
                },
                tablet: {
                    changePoint: 985,
                    visibleItems: 3
                },
                desktop: {
                    changePoint: 5000,
                    visibleItems: 4
                }
            }
        });

    });
</script>
