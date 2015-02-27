<div class="row">
    <div class="col-xs-12">
        <div class="brand">
            <h4>Our Customers</h4>            

            <?php if( have_rows('our_customers' , OUR_CUSTOMERS_PAGE_ID ) ): ?>
 
                <ul id="flexiselDemo3">
             
                <?php while( have_rows('our_customers' , OUR_CUSTOMERS_PAGE_ID ) ): the_row(); 
             
                    // vars
                    $image_id = get_sub_field('customer_logo');
                    ?>
             
                    <li class="customers-logo">
                        <div class="col-xs-12">
                        <?php 
                        if( $image_id )
                            echo wp_get_attachment_image( $image_id, 'our-customer-logo', false, array( 'class' => 'img-responsive' ) );
                        ?>
                        </div>
                    </li>
             
                <?php endwhile; ?>
             
                </ul>
             
            <?php endif; ?>

        </div>
    </div>
</div>