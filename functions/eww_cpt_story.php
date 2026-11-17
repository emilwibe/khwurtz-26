<?php

if (!defined('ABSPATH')) { exit; }

// Register Custom Post Type
function eww_custom_post_type_story() {

	$labels = array(
		'name'                  => _x( 'Story', 'Post Type General Name', '' ),
		'singular_name'         => _x( 'Story', 'Post Type Singular Name', '' ),
		'menu_name'             => __( 'Stories', '' ),
		'name_admin_bar'        => __( 'Story', '' ),
		'archives'              => __( 'Story Archives', '' ),
		'attributes'            => __( 'Story Attributes', '' ),
		'parent_item_colon'     => __( 'Story Item:', '' ),
		'all_items'             => __( 'All Stories', '' ),
		'add_new_item'          => __( 'Add New Story', '' ),
		'add_new'               => __( 'Add New', '' ),
		'new_item'              => __( 'New Story', '' ),
		'edit_item'             => __( 'Edit Story', '' ),
		'update_item'           => __( 'Update Story', '' ),
		'view_item'             => __( 'View Story', '' ),
		'view_items'            => __( 'View Stories', '' ),
		'search_items'          => __( 'Search Story', '' ),
		'not_found'             => __( 'Not found', '' ),
		'not_found_in_trash'    => __( 'Not found in Trash', '' ),
		'featured_image'        => __( 'Featured Image', '' ),
		'set_featured_image'    => __( 'Set featured image', '' ),
		'remove_featured_image' => __( 'Remove featured image', '' ),
		'use_featured_image'    => __( 'Use as featured image', '' ),
		'insert_into_item'      => __( 'Insert into Story', '' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Story', '' ),
		'items_list'            => __( 'Stories list', '' ),
		'items_list_navigation' => __( 'Stories list navigation', '' ),
		'filter_items_list'     => __( 'Filter Stories list', '' ),
	);
	$args = array(
		'label'                 => __( 'Story', '' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', 'excerpt' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-book-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'story', $args );

}
add_action( 'init', 'eww_custom_post_type_story', 0 );