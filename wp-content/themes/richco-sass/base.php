<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <?php 
  if ( is_front_page() ){ 
    get_template_part('templates/home-facebook-sdk');
  }      
  ?>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
    <![endif]-->

    <?php

    //get_template_part('templates/header-options');

    do_action('get_header');

    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }

    // Page specific Banners or Caresoul or non of them
    if ( is_front_page() ) {

      get_template_part('templates/carousel');
    
    }else{

      get_template_part('templates/carousel-single');

    }
    
    ?>

    <!-- <div class="wrap container" role="document">    --> 

    <!-- <div class="content row"> -->
    <!-- <main class="main <?php echo roots_main_class(); ?>" role="main"> -->
    <?php include roots_template_path(); ?>
    <!-- </main> --><!-- /.main -->      
    <!-- </div> --><!-- /.content -->
    <!-- </div> --><!-- /.wrap -->

    <?php get_template_part('templates/footer'); ?>

  </body>
  </html>
