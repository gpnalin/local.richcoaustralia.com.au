<?php
/**
 * Roots initial setup and constants
 */
function roots_setup() {
  // Make theme available for translation
  load_theme_textdomain('roots', get_template_directory() . '/lang');

  // Register wp_nav_menu() menus (http://codex.wordpress.org/Function_Reference/register_nav_menus)
  register_nav_menus(array(
    'primary_navigation'    => __('Primary Navigation', 'roots'),
    'industries_navigation' => __('Footer Industries Navigation', 'roots'),
    'downloads_navigation'  => __('Footer Downloads Navigation', 'roots'),
    'footer_navigation'     => __('Footer Navigation', 'roots'),
    'what_we_provide_menu'  => __('What We Provide Menu', 'roots'),
  ));

  // Add post thumbnails (http://codex.wordpress.org/Post_Thumbnails)
  add_theme_support('post-thumbnails');
  // set_post_thumbnail_size(150, 150, false);
  // add_image_size('category-thumb', 300, 9999); // 300px wide (and unlimited height)
    add_image_size( 'our-customer-logo', 500, 81 );
    add_image_size( 'product-thumb', 258, 202, true ); // width and  height on pixels
    add_image_size( 'product-image', 450, 450, true );
    add_image_size( 'around-the-world-slide', 942, 533, array( 'left', 'top' ) ); // width and  height on pixels

    add_image_size( 'case-study-thumb', 204, 190, true );  // thumnail image for case studies

  // Add post formats (http://codex.wordpress.org/Post_Formats)
  // add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

  // Tell the TinyMCE editor to use a custom stylesheet
  add_editor_style('/assets/css/editor-style.css');
}
add_action('after_setup_theme', 'roots_setup');
