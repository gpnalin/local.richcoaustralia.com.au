<div id="carousel-example-captions" class="carousel slide" data-ride="carousel" data-interval="false">
    
    <?php
    $slide_no=0;
    if( have_rows('bootstrap_slider') ): ?>
        <ol class="carousel-indicators">
            <?php while( have_rows('bootstrap_slider') ): the_row(); ?>
                <li data-target="#carousel-example-captions" data-slide-to="<?php echo $slide_no; ?>" class=<?php echo( $slide_no==0 ? '"active"' : '""' ); ?>></li>
                <?php
                $slide_no++;
            endwhile; ?>
        </ol>
    <?php endif; ?>

    
    <?php if( have_rows('bootstrap_slider') ): ?>

    <div class="carousel-inner">

        <?php
        $slide_no=0;
        while( have_rows('bootstrap_slider') ): the_row();
            // vars
            $image   = get_sub_field('slide_image');
            $link    = get_sub_field('slide_link');
            $caption = get_sub_field('slide_caption');
        ?>

        <div class=<?php  echo( $slide_no==0 ? '"item active"' : '"item"' ); ?>>
            <?php if( $link ): ?>
                <a href="<?php echo $link; ?>">
            <?php endif; ?>

                    <img src="<?php echo $image['url']; ?>" alt="<?php $image['alt']; ?>" class="img-responsive" />

            <?php if( $link ): ?>
                </a>
            <?php endif; ?>

            <?php if( $caption ): ?>                
            <div class="carousel-caption">
                <div class="container">
                    <?php echo $caption; ?>
                </div>
            </div>
            <?php endif; ?>

        </div>

        <?php $slide_no++; ?>
        <?php endwhile; ?>

    </div>

    <?php endif; ?>

    <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
</div>