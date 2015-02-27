<?php
/**
 * Custom functions
 */

remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

remove_filter ('acf_the_content', 'wpautop');
remove_filter ('acf_the_content', 'wptexturize');

function roots_sidebar_disable($sidebar) {  
  return $sidebar;
}
add_filter('roots_display_sidebar', 'roots_sidebar_disable');


function tiny_mce_before_init($init) {
 $init['setup'] = "function(ed) {
     ed.onBeforeSetContent.add(function(ed, o) {
     if ( o.content.indexOf('<pre') != -1) {
     o.content = o.content.replace(/<pre[^>]*>[\\s\\S]+?<\\/pre>/g, function(a) {
     return a.replace(/(\\r\\n|\\n)/g, '<br />');
    });
   }
  });
 }";
 return $init;
}
add_filter(	'tiny_mce_before_init', 'tiny_mce_before_init');

// Define Page ID's
define("OPTIONS_PAGE_ID","16");
define("OUR_CUSTOMERS_PAGE_ID","77");

function get_the_industries( $type='name' ){

	$terms = get_the_terms( get_the_ID() , 'richco_industry' ); 
	//var_dump($terms);

    $industries_str ="";    

    if ( $terms && !is_wp_error( $terms ) ) {

        $industries = array();

        if ($type=='name') {
	
	        foreach ( $terms as $term ) {

	            $industries[] = $term->name;

	        }

        }elseif ($type=='slug') {

        	foreach ( $terms as $term ) {

	            $industries[] = $term->slug;

	        }

        }elseif ($type=='id') {

        	foreach ( $terms as $term ) {

	            $industries[] = $term->term_taxonomy_id;

	        }

        }else{

        	foreach ( $terms as $term ) {

	            $industries[] = $term->name;
	            
	        }

        }
                
        $industries_str = join( ", ", $industries );
    }

    return $industries_str;
}


// Use this function to create pagingation links that are styleable with Twitter Bootstrap
// http://www.lanexa.net/2012/09/add-twitter-bootstrap-pagination-to-your-wordpress-theme/

// Numeric Page Navi
function page_navi($before = '', $after = '') {
  global $wpdb, $wp_query;
  $request = $wp_query->request;
  $posts_per_page = intval(get_query_var('posts_per_page'));
  $paged = intval(get_query_var('paged'));
  $numposts = $wp_query->found_posts;
  $max_page = $wp_query->max_num_pages;
  if ( $numposts <= $posts_per_page ) { return; }
  if(empty($paged) || $paged == 0) {
    $paged = 1;
  }
  $pages_to_show = 7;
  $pages_to_show_minus_1 = $pages_to_show-1;
  $half_page_start = floor($pages_to_show_minus_1/2);
  $half_page_end = ceil($pages_to_show_minus_1/2);
  $start_page = $paged - $half_page_start;
  if($start_page <= 0) {
    $start_page = 1;
  }
  $end_page = $paged + $half_page_end;
  if(($end_page - $start_page) != $pages_to_show_minus_1) {
    $end_page = $start_page + $pages_to_show_minus_1;
  }
  if($end_page > $max_page) {
    $start_page = $max_page - $pages_to_show_minus_1;
    $end_page = $max_page;
  }
  if($start_page <= 0) {
    $start_page = 1;
  }

  echo $before.'<ul class="pagination">'."";
  if ($paged > 1) {
    $first_page_text = "<span class='glyphicon glyphicon-home'></span>";
    echo '<li class="prev"><a href="'.get_pagenum_link().'" title="First">'.$first_page_text.'</a></li>';
  }

  $prevposts = get_previous_posts_link('&laquo;');
  if($prevposts) { echo '<li>' . $prevposts  . '</li>'; }
  else { echo '<li class="disabled"><a href="#">&laquo;</a></li>'; }

  for($i = $start_page; $i  <= $end_page; $i++) {
    if($i == $paged) {
      echo '<li class="active"><a href="#">'.$i.'</a></li>';
    } else {
      echo '<li><a href="'.get_pagenum_link($i).'">'.$i.'</a></li>';
    }
  }
  echo '<li class="">';
  next_posts_link('&raquo;');
  echo '</li>';
  if ($end_page < $max_page) {
    $last_page_text = "»";
    echo '<li class="next"><a href="'.get_pagenum_link($max_page).'" title="Last">'.$last_page_text.'</a></li>';
  }
  echo '</ul>'.$after."";
}

/**
 * Changing the number of posts per page
 */
function load_all_posts( $query ) {

  if ( ! is_admin() && $query->is_main_query() )
      if (isset($_GET['all']))
        $query->set('posts_per_page', -1 );

}
add_action( 'pre_get_posts', 'load_all_posts', 1 );

function filter_posts( $query ) {

  if ( ! is_admin() && $query->is_main_query() ){
    if (isset($_GET['filter'])){
      $query->set('s', $_GET['filter'] );
    }    
  }
}
add_action( 'pre_get_posts', 'filter_posts', 1 );

function filter_by_country_posts( $query ) {

  if ( ! is_admin() && $query->is_main_query() ){
    if (isset($_GET['country'])){

      $tax_query = array(
        'post_type' => 'richco_case_studies',
        array(
          'taxonomy' => 'richco_country',               
          'field' => 'slug',
          'terms' => array( $_GET['country'] )
        )       
      );

      $query->set( 'tax_query', $tax_query );
    }

  }
}
add_action( 'pre_get_posts', 'filter_by_country_posts', 1 );



function is_tree($pageSlug) {

  global $post;
  
  $page = get_page_by_path($pageSlug);

  if ($page) {

    $pid = $page->ID;

    if(is_page()&&($post->post_parent==$pid||is_page($pid))) {
      return true;   // we're at the page or at a sub page
    }else {
      return false;  // we're elsewhere
    } 

  }else {
    return false;
  }
}