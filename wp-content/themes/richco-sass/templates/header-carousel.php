    <div id="myCarousel" class="carousel slide">        

        <?php if( have_rows('main_slider', GC_PAGE_ID ) ): ?>

            <div class="carousel-inner">

            <?php

            $slide_no=0;

            while( have_rows('main_slider', GC_PAGE_ID ) ): the_row();

                // vars
                $image = get_sub_field('slider_image');
                $caption = get_sub_field('slider_caption');
            ?>

            <div class="<?php  echo( $slide_no==0 ? 'item active' : 'item' ); ?>">

                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo $image; ?>');"></div>

                <?php if( $caption ): ?>

                    <div class="carousel-caption">
                        
                        <?php echo $caption; ?>

                    </div>

                <?php endif; ?>
            </div>

            <?php $slide_no++; ?>
            
        <?php endwhile; ?>

        </div>            
    <?php endif; ?>    
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </div>