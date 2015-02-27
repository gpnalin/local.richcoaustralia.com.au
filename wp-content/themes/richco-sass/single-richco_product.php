<?php while (have_posts()) : the_post(); ?>
  
<?php endwhile; ?>

<div class="container container-space">

    <div class="container2">
        <?php

        $args = array(
            'numberposts' => -1,
            'post_type' => 'richco_product',
            'tax_query' => array(
                array(
                    'taxonomy' => 'richco_industry',
                    'field'    => 'slug',
                    'terms'    => get_the_industries('slug')
                    )
                ),
            'post_status' => 'publish'
            );

        $top_products = get_posts( $args );

        if ($top_products): ?>
        <div class="row">
            <div class="pro-control">
                <?php
                foreach ( $top_products as $top_product ) : ?>
                <div class="col-xs-6 col-sm-4 col-md-2 text-center top-product">
                    <a href="<?php echo $top_product->guid; ?>"><?php echo $top_product->post_title; ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>


<div class="row">
    <div class="col-xs-12"><h2><?php the_title(); ?> / <a style="color:inherit" href="<?php echo site_url( get_the_industries('slug') ); ?>"><?php echo get_the_industries(); ?></a></h2></div>
</div>

<div class="row">

    <div class="col-xs-12 col-sm-7">

        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="thumb">

                    <?php if( have_rows('product_images') ): ?>
                        <div id="product-image-slider-pager" class="bx-pager">

                            <?php 
                            $itr=0;
                            while( have_rows('product_images') ): the_row(); ?>

                            <a data-slide-index="<?php echo $itr; ?>" href="">     

                                <?php 
                                $image = get_sub_field('product_image');
                                    $size = 'product-image'; // (thumbnail, medium, large, full or custom size)

                                    if( $image ) {
                                        echo wp_get_attachment_image( $image, $size, false,  array('class' => "img-responsive normal") );
                                    }
                                    $itr++;
                                    ?>
                                </a>

                            <?php endwhile; ?>

                        </div>                            
                    <?php endif; ?>

                </div>
            </div>
            <div class="col-xs-12 col-sm-9 text-center">

                <?php if( have_rows('product_images') ): ?>

                    <ul class="product-image-slider">

                        <?php 

                        $itr=0;

                        while( have_rows('product_images') ): the_row(); ?>

                        <li>     

                            <?php 

                            $image = get_sub_field('product_image');

                                    $size = 'product-image'; // (thumbnail, medium, large, full or custom size)
                                    $image_attributes = wp_get_attachment_image_src( $image, 'full' ); // returns an array
                                    if( $image ): ?>
                                        <a class="product-gallery" rel="gal" href="<?php echo $image_attributes[0]; ?>">
                                            <?php  echo wp_get_attachment_image( $image, $size, false,  array('class' => "img-responsive normal") ); ?>
                                        </a>
                                    <?php
                                    endif;
                                    $itr++;

                                    ?>

                                </li>

                            <?php endwhile; ?>

                        </ul>

                    <?php endif; ?>

                </div>

            </div>

        </div>

        <div class="col-xs-12 col-sm-5">

            <div class="row">
                <div class="col-xs-12">
                    <div class="pro-disc">
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>

            <?php if (get_field('buy_now')): ?>  
            <div class="row">
                <div class="col-xs-12">
                    <form class="quote">
                        <a href="<?php echo get_field('buy_now'); ?>" class="btn btn-default qt-btn" style="max-width: 100%;">Buy Now</a>                        
                    </form>
                </div>
            </div>
            <?php endif ?>
            <div class="row">
                <div class="col-xs-12">
                    <form class="quote">
                        <a href="<?php echo get_page_link(108); ?>" class="btn btn-default qt-btn">Request a Quote</a>
                        <a href="<?php echo get_page_link(12); ?>" class="btn btn-default cont-btn">Contact Us</a>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <div class="row">
        <div class="col-xs-12">
            
            <?php 

            $information   = get_field('information_content');
            $colours       = get_field('colours_content');
            $specification = get_field('specification_content');

            ?>

            <?php if ( $information OR $colours OR $specification ): ?>
                
                <div class="pro-taber">

                    <ul class="nav nav-tabs" role="tablist" id="pro-tab" >
                        <?php if ($information): ?>
                            <li><a href="#information" role="tab" data-toggle="tab">Information</a></li>
                        <?php endif ?>
                        <?php if ($colours): ?>                                
                            <li><a href="#colours" role="tab" data-toggle="tab">Colours</a></li>
                        <?php endif ?>
                        <?php if ($specification): ?>
                            <li><a href="#specification" role="tab" data-toggle="tab">Specification</a></li>  
                        <?php endif ?>
                        
                    </ul>

                    <div class="tab-content">

                        <?php if ($information): ?>
                            <div class="tab-pane" id="information">
                                <?php echo wpautop($information); ?>
                            </div>  
                        <?php endif ?>

                        <?php if ($colours): ?>
                            <div class="tab-pane" id="colours">
                                <?php //echo wpautop($colours); ?>   

                                <?php

                                // check if the repeater field has rows of data
                                if( have_rows('colours_content') ):

                                    // loop through the rows of data
                                    while ( have_rows('colours_content') ) : the_row();

                                        // display a sub field value
                                        $folder_path    = get_sub_field('folder_path');
                                        $upload_dir     = wp_upload_dir();
                                        
                                        $dir_path   = $upload_dir['basedir'] . '/color-ranges/' . $folder_path . '/';
                                        $dir_uri    = $upload_dir['baseurl'] . '/color-ranges/' . $folder_path . '/';
                                        $replace    = array(".jpg", "-", "_", ".png");
                                        // Loop through the files
                                        echo '<div class="row color-ranges">';
                                        //$itr = 0;
                                        foreach(array_diff(scandir($dir_path), array('.', '..')) as $file) {

                                            //if( $itr == 6 ) { echo '</div> <div class="row color-ranges">'; $itr=0; }

                                                echo '<div class="col-xs-6 col-sm-3 col-md-2 color-ranges-item text-center" >';                                
                                                echo    '<img class="img-responsive normal" src="'.$dir_uri.$file.'" alt="'.str_replace('name', 'Clean Name', $file).'" title="'.str_replace('name', 'Clean Name', $file).'" />';
                                                echo    '<h4>'.ucwords(str_replace( $replace, ' ', str_replace('name', 'Name', $file))).'</h4>';
                                                echo '</div>';                                    

                                            //$itr++;
                                        }
                                        echo '</div>';

                                    endwhile;

                                else :

                                    // no rows found

                                endif;

                                ?>                             

                                <?php
                                
                                ?>

                            </div>
                        <?php endif ?>

                        <?php if ($specification): ?>
                            <div class="tab-pane" id="specification">
                                <?php echo wpautop($specification); ?>
                            </div>
                        <?php endif ?>

                    </div>

                </div>
            <?php endif ?>
        </div>
    </div>

</div>

</div>
<script type="text/javascript">

    $( document ).ready(function() {

        $('#pro-tab a:first').tab('show');

        $('.product-image-slider').bxSlider({

            pagerCustom: '#product-image-slider-pager',
            mode: 'fade',
            responsive:true,
            controls:false

        });

    });

</script>