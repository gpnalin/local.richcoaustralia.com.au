<?php

/*************************************************************************************************
********************************** Register Case Studies Post Type *************************************
**************************************************************************************************/
function richco_case_studies_post_type() {

	$labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Case Studies', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Case Study:', 'text_domain' ),
		'all_items'           => __( 'All Case Studies', 'text_domain' ),
		'view_item'           => __( 'View Case Study', 'text_domain' ),
		'add_new_item'        => __( 'Add New Case Study', 'text_domain' ),
		'add_new'             => __( 'New Case Study', 'text_domain' ),
		'edit_item'           => __( 'Edit Case Study', 'text_domain' ),
		'update_item'         => __( 'Update Case Study', 'text_domain' ),
		'search_items'        => __( 'Search case studies', 'text_domain' ),
		'not_found'           => __( 'No case studies found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No case studies found in Trash', 'text_domain' ),
	);
	$rewrites = array( 
		'slug' 			=> 'case-studies',
		'with_front' 	=> false,
        'feeds' 		=> true,
        'pages'	 		=> true
	);
	$args = array(
		'label'               => __( 'Case Studies', 'text_domain' ),
		'description'         => __( 'Case Study information pages', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'          => array( 'richco_industry', 'richco_client' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		'rewrite'             => $rewrites,
	);
	register_post_type( 'richco_case_studies', $args );

}

// Hook into the 'init' action
add_action( 'init', 'richco_case_studies_post_type', 0 );



/*************************************************************************************************
*********************************** Register Country Taxonomy *************************************
**************************************************************************************************/
function richco_country_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Countries', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Country', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Country', 'text_domain' ),
		'all_items'                  => __( 'All Countries', 'text_domain' ),
		'parent_item'                => __( 'Parent Country', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Country:', 'text_domain' ),
		'new_item_name'              => __( 'New Country Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Country', 'text_domain' ),
		'edit_item'                  => __( 'Edit Country', 'text_domain' ),
		'update_item'                => __( 'Update Country', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Countries with commas', 'text_domain' ),
		'search_items'               => __( 'Search Countries', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Countries', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Countries', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'country',
		'with_front'                 => false,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'    		         => false,
		'sort'    		         	 => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'richco_country', array( 'richco_case_studies' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'richco_country_taxonomy', 0 );


/*************************************************************************************************
*********************************** Register Client Taxonomy *************************************
**************************************************************************************************/
function richco_client_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Clients', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Client', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Client', 'text_domain' ),
		'all_items'                  => __( 'All Clients', 'text_domain' ),
		'parent_item'                => __( 'Parent Client', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Client:', 'text_domain' ),
		'new_item_name'              => __( 'New Client Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Client', 'text_domain' ),
		'edit_item'                  => __( 'Edit Client', 'text_domain' ),
		'update_item'                => __( 'Update Client', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Clients with commas', 'text_domain' ),
		'search_items'               => __( 'Search Clients', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Clients', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Clients', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'client',
		'with_front'                 => false,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => false,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'query_var'    		         => false,
		'sort'    		         	 => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'richco_client', array( 'richco_case_studies' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'richco_client_taxonomy', 0 );


/*************************************************************************************************
********************************* Adjust Case Studies Per Page ***********************************
**************************************************************************************************/

function adjust_cs_per_page( $query ) {

  if ( ! is_admin() && $query->is_main_query() )
      if ( is_post_type_archive('richco_case_studies') )
        $query->set('posts_per_page', -1 );
    	$query->set('order', 'ASC');

}
add_action( 'pre_get_posts', 'adjust_cs_per_page', 1 );