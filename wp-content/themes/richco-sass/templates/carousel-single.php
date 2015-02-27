<?php 
    $banner_text    = get_field('banner_text');
    $banner_image  = get_field('banner_image');
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