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

/**
 * Register Taxonomies
 *
 * Taxonomies to be registered are Genre, Country, Year and Actor
 */

// 1 - Genres
add_action( 'init', 'cl_add_genres_taxonomy' );
function cl_add_genres_taxonomy() {
	$labels = [
		'name'              => _x( 'Genre', 'Film genres taxonomy', 'cl_film' ),
		'singular_name'     => _x( 'Genre', 'Film genre taxonomy', 'cl_film' ),
		'search_items'      => __( 'Search Genres', 'cl_film' ),
		'all_items'         => __( 'All Genres', 'cl_film' ),
		'parent_item'       => __( 'Parent Genre', 'cl_film' ),
		'parent_item_colon' => __( 'Parent Genre:', 'cl_film' ),
		'edit_item'         => __( 'Edit Genre', 'cl_film' ),
		'update_item'       => __( 'Update Genre', 'cl_film' ),
		'add_new_item'      => __( 'Add New Genre', 'cl_film' ),
		'new_item_name'     => __( 'New Genre Name', 'cl_film' ),
		'menu_name'         => __( 'Genres', 'cl_film' ),
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'genre' ],
	];

	register_taxonomy( 'genre', [ 'film' ], $args );
}

// 2 - Countries
add_action( 'init', 'cl_add_countries_taxonomy' );
function cl_add_countries_taxonomy() {
	$labels = [
		'name'              => _x( 'Country', 'Film countries taxonomy', 'cl_film' ),
		'singular_name'     => _x( 'Country', 'Film country taxonomy', 'cl_film' ),
		'search_items'      => __( 'Search Countries', 'cl_film' ),
		'all_items'         => __( 'All Countries', 'cl_film' ),
		'parent_item'       => __( 'Parent Country', 'cl_film' ),
		'parent_item_colon' => __( 'Parent Country:', 'cl_film' ),
		'edit_item'         => __( 'Edit Country', 'cl_film' ),
		'update_item'       => __( 'Update Country', 'cl_film' ),
		'add_new_item'      => __( 'Add New Country', 'cl_film' ),
		'new_item_name'     => __( 'New Country Name', 'cl_film' ),
		'menu_name'         => __( 'Countries', 'cl_film' ),
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => ['slug' => 'country'],
	];

	register_taxonomy( 'country', ['film'], $args );
}

// 3 - Years
add_action( 'init', 'cl_add_years_taxonomy' );
function cl_add_years_taxonomy() {
	$labels = array(
		'name'              => _x( 'Year', 'Film year taxonomies', 'cl_film' ),
		'singular_name'     => _x( 'Year', 'Film year taxonomy', 'cl_film' ),
		'search_items'      => __( 'Search Years', 'cl_film' ),
		'all_items'         => __( 'All Years', 'cl_film' ),
		'parent_item'       => __( 'Parent Year', 'cl_film' ),
		'parent_item_colon' => __( 'Parent Year:', 'cl_film' ),
		'edit_item'         => __( 'Edit Year', 'cl_film' ),
		'update_item'       => __( 'Update Year', 'cl_film' ),
		'add_new_item'      => __( 'Add New Year', 'cl_film' ),
		'new_item_name'     => __( 'New Year Name', 'cl_film' ),
		'menu_name'         => __( 'Years', 'cl_film' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'year' ),
	);

	register_taxonomy( 'year', ['film'], $args );
}

// 4 - Actors
add_action( 'init', 'cl_add_actors_taxonomy' );
function cl_add_actors_taxonomy() {
	$labels = [
		'name'              => _x( 'Actor', 'Film actors taxonomy', 'cl_film' ),
		'singular_name'     => _x( 'Actor', 'Film actor taxonomy', 'cl_film' ),
		'search_items'      => __( 'Search Actors', 'cl_film' ),
		'all_items'         => __( 'All Actors', 'cl_film' ),
		'parent_item'       => __( 'Parent Actor', 'cl_film' ),
		'parent_item_colon' => __( 'Parent Actor:', 'cl_film' ),
		'edit_item'         => __( 'Edit Actor', 'cl_film' ),
		'update_item'       => __( 'Update Actor', 'cl_film' ),
		'add_new_item'      => __( 'Add New Actor', 'cl_film' ),
		'new_item_name'     => __( 'New Actor Name', 'cl_film' ),
		'menu_name'         => __( 'Actors', 'cl_film' ),
	];

	$args = [
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => [ 'slug' => 'actor' ],
	];

	register_taxonomy( 'actor', ['film'], $args );
}

/**
 * Shortcode to display latest 5 films
 *
 * @param $atts
 *
 * @return string
 */
function cl_get_last_added_films_shortcode( $atts = [])
{
	extract( shortcode_atts( [
		'limit' => isset($atts['limit']) && $atts['limit'] != '' && $atts['limit'] > 0 ? $atts['limit'] : 5
	], $atts ) );

	$args = [
		'posts_per_page'  => $limit,
		'post_type' => 'film',
		'order' => 'desc'
	];

	$films = new WP_Query($args);
	$layout = "<div class='list-group'>";
	$layout .= "<li class='list-group-item active'>Latest Films</li>";
	while($films->have_posts()): $films->the_post();
		$permalink = get_the_permalink();
		$layout .= "<a class='list-group-item' href='{$permalink}'>";
		$layout .= "<h4 class='list-group-item-heading'>";
		$layout .= get_the_title();
		$layout .= "</h4>";
		$layout .= "<p class='list-group-item-text'>" . substr(get_the_content(), 0, 50) . "</p>";
		$layout .= "</a>";
	endwhile;
	wp_reset_postdata();
	$layout .= "</ul>";

	return $layout;
}
add_shortcode( 'last_added_films', 'cl_get_last_added_films_shortcode' );

