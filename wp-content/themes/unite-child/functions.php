<?php

// Begin our film post type registration
add_action( 'init', 'cl_register_movie_post_type' );
function cl_register_movie_post_type() {

	$labels = array(
		'name'               => __( 'Films' ),
		'singular_name'      => __( 'Film' ),
		'add_new'            => __( 'Add New Film' ),
		'add_new_item'       => __( 'Add New Film' ),
		'edit_item'          => __( 'Edit Film' ),
		'new_item'           => __( 'New Film' ),
		'all_items'          => __( 'All Films' ),
		'view_item'          => __( 'View Film' ),
		'search_items'       => __( 'Search Films' ),
		'featured_image'     => 'Poster',
		'set_featured_image' => 'Add Poster'
	);

	$args = array(
		'labels'            => $labels,
		'description'       => 'Holds our films and film specific data',
		'public'            => true,
		'menu_position'     => 5,
		//'excerpt', 'comments',
		'supports'          => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'has_archive'       => true,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'has_archive'       => true,
		'query_var'         => 'film'
	);

	// Let's register our film post type
	register_post_type( 'film', $args);
}
