<div class="row">
    <div class="col-xs-12">
        <div class="brand-inner">

        <?php if( have_rows('our_customers' , OUR_CUSTOMERS_PAGE_ID ) ): ?>
            <ul id="flexiselDemo7">

                <?php while( have_rows('our_customers' , OUR_CUSTOMERS_PAGE_ID ) ): the_row();              
                // vars
                $image_id = get_sub_field('customer_logo');
                ?>
                <li>
                    <div class="col-xs-12">
                        <?php 
                        if( $image_id )
                            echo wp_get_attachment_image( $image_id, 'img-responsive', false, array( 'class' => 'img-responsive' ) );
                        ?>
                    </div>
                </li>
                <?php endwhile; ?>

            </ul>
            <?php endif; ?>

        </div>
    </div>
</div>