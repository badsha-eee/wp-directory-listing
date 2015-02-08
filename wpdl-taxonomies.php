<?php 

// hook into the init action and call create_book_taxonomies when it fires
add_action( 'init', 'create_location_taxonomies', 0 );

// create taxonomies for the post type "restaurant"
function create_location_taxonomies() {
	// Add new taxonomy, make it hierarchical (like categories)
	$labels = array(
		'name'              => _x( 'Location', 'taxonomy general name' ),
		'singular_name'     => _x( 'location', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Location' ),
		'all_items'         => __( 'All Location' ),
		'parent_item'       => __( 'Parent location' ),
		'parent_item_colon' => __( 'Parent location:' ),
		'edit_item'         => __( 'Edit location' ),
		'update_item'       => __( 'Update location' ),
		'add_new_item'      => __( 'Add New location' ),
		'new_item_name'     => __( 'New location Name' ),
		'menu_name'         => __( 'location' ),
	);

	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'location' ),
	);

	register_taxonomy( 'location', array( 'restaurant' ), $args );

	// Add new taxonomy, NOT hierarchical (like tags)
	$labels = array(
		'name'                       => _x( 'Cuisine', 'taxonomy general name' ),
		'singular_name'              => _x( 'Cuisine', 'taxonomy singular name' ),
		'search_items'               => __( 'Search Cuisine' ),
		'popular_items'              => __( 'Popular Cuisine' ),
		'all_items'                  => __( 'All Cuisine' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Edit cuisine' ),
		'update_item'                => __( 'Update cuisine' ),
		'add_new_item'               => __( 'Add New cuisine' ),
		'new_item_name'              => __( 'New cuisine Name' ),
		'separate_items_with_commas' => __( 'Separate Cuisine with commas' ),
		'add_or_remove_items'        => __( 'Add or remove Cuisine' ),
		'choose_from_most_used'      => __( 'Choose from the most used Cuisine' ),
		'not_found'                  => __( 'No Cuisine found.' ),
		'menu_name'                  => __( 'Cuisine' ),
	);

	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'cuisine' ),
	);

	register_taxonomy( 'cuisine', 'restaurant', $args );
}

?>
