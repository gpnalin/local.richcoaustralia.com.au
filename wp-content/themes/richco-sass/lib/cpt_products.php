<?php

/*************************************************************************************************
********************************** Register Custom Post Type *************************************
**************************************************************************************************/
function richco_products_post_type() {

	$labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Products', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Product:', 'text_domain' ),
		'all_items'           => __( 'All Products', 'text_domain' ),
		'view_item'           => __( 'View Product', 'text_domain' ),
		'add_new_item'        => __( 'Add New Product', 'text_domain' ),
		'add_new'             => __( 'New Product', 'text_domain' ),
		'edit_item'           => __( 'Edit Product', 'text_domain' ),
		'update_item'         => __( 'Update Product', 'text_domain' ),
		'search_items'        => __( 'Search products', 'text_domain' ),
		'not_found'           => __( 'No products found', 'text_domain' ),
		'not_found_in_trash'  => __( 'No products found in Trash', 'text_domain' ),
	);
	$rewrites = array( 
		'slug' 			=> 'products',
		'with_front' 	=> false,
        'feeds' 		=> true,
        'pages'	 		=> true
	);
	$args = array(
		'label'               => __( 'product', 'text_domain' ),
		'description'         => __( 'Product information pages', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'          => array( 'richco_industry' ),
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
	register_post_type( 'richco_product', $args );

}

// Hook into the 'init' action
add_action( 'init', 'richco_products_post_type', 0 );



/*************************************************************************************************
*********************************** Register Custom Taxonomy *************************************
**************************************************************************************************/
function industry_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Industries', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Industry', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Industry', 'text_domain' ),
		'all_items'                  => __( 'All Industries', 'text_domain' ),
		'parent_item'                => __( 'Parent Industry', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Industry:', 'text_domain' ),
		'new_item_name'              => __( 'New Industry Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Industry', 'text_domain' ),
		'edit_item'                  => __( 'Edit Industry', 'text_domain' ),
		'update_item'                => __( 'Update Industry', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Industries with commas', 'text_domain' ),
		'search_items'               => __( 'Search Industries', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Industries', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used Industries', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                       => 'industry',
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
	register_taxonomy( 'richco_industry', array( 'richco_product', 'richco_case_studies' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'industry_taxonomy', 0 );