<div class="visit-steel visiter-header">        
  <div class="visit-intro container">      
      <h4 class="text-center"><?php the_field('top_text',OPTIONS_PAGE_ID); ?></h4>
  </div>
</div>
<header>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-4">
                <div class="logo">
                    <div class="row">                    
                        <div class="col-xs-12">
                            <a href="<?php echo home_url('/') ?>">
                                <img src="<?php echo( get_template_directory_uri() ); ?>/assets/img/logo.jpg" class="img-responsive" alt="<?php bloginfo('name'); ?>">
                            </a>
                        </div>                        
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-4 col-lg-4">                
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="call-now"><?php the_field('call_us',OPTIONS_PAGE_ID); ?></div>
                    </div>                       
                </div>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-4">
                <div class="top-right-options">
                    <?php get_template_part('templates/header-options'); ?>
                    <div class="row">                        
                        <div class="col-xs-12 p-l-n">
                            <?php get_search_form(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_template_part('templates/header-mega-menu'); ?>
</header>