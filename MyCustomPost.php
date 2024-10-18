

<?php
// Register Custom Post Type my_custome_post
function create_mycustomepost_cpt() {

	$labels = array(
		'name' => _x( 'my_custome_post', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'my_custome_post', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'my_custome_post', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'my_custome_post', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'my_custome_post Archives', 'textdomain' ),
		'attributes' => __( 'my_custome_post Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent my_custome_post:', 'textdomain' ),
		'all_items' => __( 'All my_custome_post', 'textdomain' ),
		'add_new_item' => __( 'Add New my_custome_post', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New my_custome_post', 'textdomain' ),
		'edit_item' => __( 'Edit my_custome_post', 'textdomain' ),
		'update_item' => __( 'Update my_custome_post', 'textdomain' ),
		'view_item' => __( 'View my_custome_post', 'textdomain' ),
		'view_items' => __( 'View my_custome_post', 'textdomain' ),
		'search_items' => __( 'Search my_custome_post', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into my_custome_post', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this my_custome_post', 'textdomain' ),
		'items_list' => __( 'my_custome_post list', 'textdomain' ),
		'items_list_navigation' => __( 'my_custome_post list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter my_custome_post list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'my_custome_post', 'textdomain' ),
		'description' => __( 'Making custom posts', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-comments',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'post-formats'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'mycustomepost', $args );

}
add_action( 'init', 'create_mycustomepost_cpt', 0 ); ?>

