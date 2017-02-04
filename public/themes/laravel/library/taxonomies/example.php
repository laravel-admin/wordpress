<?php

// hook into the init action and call create_book_taxonomies when it fires

add_action( 'init', function () {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Types', 'Types', 'laravel' ),
		'singular_name'     => _x( 'Type', 'Type', 'laravel' ),
		'search_items'      => __( 'Search Types', 'laravel' ),
		'all_items'         => __( 'All Types', 'laravel' ),
		'parent_item'       => __( 'Parent Type', 'laravel' ),
		'parent_item_colon' => __( 'Parent Type:', 'laravel' ),
		'edit_item'         => __( 'Edit Type', 'laravel' ),
		'update_item'       => __( 'Update Type', 'laravel' ),
		'add_new_item'      => __( 'Add New Type', 'laravel' ),
		'new_item_name'     => __( 'New Type Name', 'laravel' ),
		'menu_name'         => __( 'Type', 'laravel' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => false,
	);

	register_taxonomy( 'Type', array( 'example' ), $args );
});
