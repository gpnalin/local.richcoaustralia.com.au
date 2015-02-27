<?php

/*************************************************************************************************
********************************** Register Brochures Post Type *************************************
**************************************************************************************************/
function richco_brochures_post_type() {

	$labels = array(
		'name'                => _x( 'Brochures', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Brochure', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Brochures', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Brochure:', 'text_domain' ),
		'all_items'           => __( 'All Brochures', 'text_domain' ),
		'view_item'           => __( 'View Brochure', 'text_domain' ),
		'add_new_item'        => __( 'Add New Brochure', 'text_domain' ),
		'add_new'             => __( 'New Brochure', 'text_domain' ),
		'edit_item'           => __( 'Edit Brochure', 'text_domain' ),
		'update_item'         => __( 'Update Brochure', 'text_domain' ),
		'search_items'        => __( 'Search Brochures', 'text_domain' ),
		'not_found'           => __( 'No Brochures found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No Brochures found in Trash', 'text_domain' ),
	);
	$rewrites = array( 
		'slug' 			=> 'brochures',
		'with_front' 	=> false,
        'feeds' 		=> false,
        'pages'	 		=> true
	);
	$args = array(
		'label'               => __( 'Brochures', 'text_domain' ),
		'description'         => __( 'Brochure information pages', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'excerpt', 'thumbnail' ),
		'public'              => false,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'rewrite'             => $rewrites,
	);
	register_post_type( 'richco_brochures', $args );

}

// Hook into the 'init' action
add_action( 'init', 'richco_brochures_post_type', 0 );
