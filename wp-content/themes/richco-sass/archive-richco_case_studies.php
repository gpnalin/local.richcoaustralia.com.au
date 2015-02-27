<?php 
    $banner_text    = get_field( 'case_studies_banner_text', OPTIONS_PAGE_ID );
    $banner_image  = get_field( 'case_studies_banner_image', OPTIONS_PAGE_ID );
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


<div class="container container-space">
    <div class="container4">
        <div class="row">
            <div class="col-xs-12">
                <h3>Case Studies</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="case-filter">
                    <div class="row">
                        <form method="GET" action="<?php echo home_url(add_query_arg(array(),$wp->request)); ?>/">
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Case Study</div>                                            
                                        <select class="form-control" onchange='document.location.href=this.options[this.selectedIndex].value;'>
                                            <option>Please select...</option>
                                            <?php 
                                            $args = array( 'posts_per_page'   => -1, 'post_type' => 'richco_case_studies', 'posts_per_page'=> -1,'order' => 'ASC', 'orderby' => 'title' );
                                            $case_studies = get_posts($args);
                                            foreach ( $case_studies as $post ) : 
                                              setup_postdata( $post ); ?>
                                                <option value="<?php the_permalink(); ?>"><?php the_title(); ?></option>
                                            <?php endforeach;
                                            wp_reset_postdata(); ?>                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon">Country</div>                                            
                                        <select class="form-control" onchange='document.location.href=this.options[this.selectedIndex].value;'>
                                            <option>Please select...</option>                                          
                                        
                                            <?php $countries= get_terms("richco_country");
                                            if  ($countries):
                                              foreach ($countries  as $country ) { ?>
                                                <option value="?country=<?php echo $country->slug; ?>"><?php echo $country->name; ?></option>
                                            <?php
                                              }
                                            endif; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>                           
                            <div class="col-xs-12 col-sm-4">
                                <div class="col-xs-12 col-sm-10 col-md-12 col-lg-12 pull-right">
                                    <div class="row">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-addon">Search</div>
                                                <input class="form-control" name="filter" type="text" placeholder="">
                                            </div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if (have_posts()) : ?>
        <div class="row">
            <div class="col-xs-12">
                <div class="case-lister">
                    <div class="row">
                        <ul>

                            <?php $column=0; while (have_posts()) : the_post(); $column++; ?>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'case-study-thumb' , array( 'class' => 'img-responsive img-rounded' ) ); ?>                                
                                </a>
                                <h4>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h4>
                            </li>
                            <?php endwhile; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="no-posts"><h4 class="text-center">NO CASE STUDUIES FOUND!</h4></div>
        <?php endif; ?>
    </div>
</div>
