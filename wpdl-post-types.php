<?php
/*
Plugin Name: WP Directory Listing
Version: 0.1.0
Plugin URI: https://github.com/badsha-eee/wp-directory-listing
Description: Registers Custom post type for BanglayKhuji.com
Author: Sekander Badsha
Author URI: http://sekander.pro
License: CC
Domain Path: /lang
*/

add_action( 'init', 'Restaurant_init' );
/**
 * Register a Restaurant post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function Restaurant_init() {
	$labels = array(
		'name'               => _x( 'Restaurants', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'Restaurant', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'Restaurants', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'Restaurant', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'Restaurant', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New Restaurant', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New Restaurant', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit Restaurant', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View Restaurant', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All Restaurants', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search Restaurants', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent Restaurants:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No Restaurants found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No Restaurants found in Trash.', 'your-plugin-textdomain' )
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'Restaurant' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'author', 'comments', 'custom-fields', 'revisions' )
	);

	register_post_type( 'Restaurant', $args );
}

require_once 'wpdl-taxonomies.php';

?>
