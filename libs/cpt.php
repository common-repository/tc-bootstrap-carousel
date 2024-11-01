<?php
// Custom Post Type Setup
add_action( 'init', 'tc_post_type' );
function tc_post_type() {
	$labels = array(
		'name' => __('All Carousels', 'tc-bootstrap-carousel'),
		'singular_name' => __('Carousel Image', 'tc-bootstrap-carousel'),
		'add_new' => __('Add New Carousel', 'tc-bootstrap-carousel'),
		'add_new_item' => __('Add New Carousel', 'tc-bootstrap-carousel'),
		'all_items' => __('All Carousels', 'owl-carousel-wp' ),
		'edit_item' => __('Edit Carousel Image', 'tc-bootstrap-carousel'),
		'new_item' => __('New Carousel Image', 'tc-bootstrap-carousel'),
		'view_item' => __('View Carousel Image', 'tc-bootstrap-carousel'),
		'search_items' => __('Search Carousel Images', 'tc-bootstrap-carousel'),
		'not_found' => __('No Carousel Image', 'tc-bootstrap-carousel'),
		'not_found_in_trash' => __('No Carousel Images found in Trash', 'tc-bootstrap-carousel'),
		'parent_item_colon' => '',
		'menu_name' => __('TC Carousel', 'tc-bootstrap-carousel') // this name will be shown on the menu
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => false,
		'show_ui' => true,
		'show_in_menu' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'page',
		'has_archive' => true,
		'hierarchical' => false,
		'menu_position' => 21,
		'menu_icon' => 'dashicons-images-alt2',
		'supports' => array('title','excerpt','thumbnail')
	);
	register_post_type('tc-bcarousel', $args);
}
 add_action( 'init', 'tc_post_type' );


// Adding a taxonomy for the carousel post type
function tocode_Carousel_taxonomy() {
		$args = array('hierarchical' => true);
		register_taxonomy( 'Carousel_category', 'tc-bcarousel', $args );
	}
 add_action( 'init', 'tocode_Carousel_taxonomy', 0 );
