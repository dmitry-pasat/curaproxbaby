<?php 

// evenimente
register_taxonomy( 'events', array('event'), array(
	'hierarchical' => true,
	'label' => 'Categories',
	'show_admin_column' => true,
	'singular_label' => 'Category',
	'rewrite' => array( 'slug' => 'events', 'with_front'=> false )
	)
);

add_action( 'init', 'events_register' );

function events_register() {

	$labels = array(
		'name' => _x('Event', 'post type general name'),
		'singular_name' => _x('Event Item', 'post type singular name'),
		'add_new' => _x('Add New', 'event item'),
		'add_new_item' => __('Add New Event Item'),
		'edit_item' => __('Edit Event Item'),
		'new_item' => __('New Event Item'),
		'view_item' => __('View Event Item'),
		'search_items' => __('Search Event'),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-format-audio',
		'rewrite' => array( 'slug' => 'event', 'with_front'=> false ),
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'menu_position' => null,
		'supports' => array('title', 'author', 'editor','thumbnail')
	);

	register_post_type( 'event' , $args );

	register_taxonomy_for_object_type( 'events', 'event' );
}

?>