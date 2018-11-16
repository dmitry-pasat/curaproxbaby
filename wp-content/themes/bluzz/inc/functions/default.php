<?php

	// add feed links to header
	if (function_exists('automatic_feed_links')) {
		automatic_feed_links();
	} else {
		return;
	}


	// smart jquery inclusion
	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"), false);
		wp_enqueue_script('jquery');
	}


	// remove junk from head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


	// custom excerpt length
	function custom_excerpt_length($length) {
		return 20;
	}
	add_filter('excerpt_length', 'custom_excerpt_length');


	// custom excerpt ellipses for 2.9+
	function custom_excerpt_more($more) {
		return '...';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');


	// no more jumping for read more link
	function no_more_jumping($post) {
		return '...';
	}
	add_filter('excerpt_more', 'no_more_jumping');
	add_filter('the_content_more_link', 'remove_more_jump_link');


	// add a favicon for your admin
	function admin_favicon() {
		echo '<link rel="Shortcut Icon" type="image/x-icon" href="'. get_template_directory_uri() .'/img/favicon/ms-icon-150x150.png" />';
	}
	add_action('admin_head', 'admin_favicon');


	// custom admin login logo
	function custom_login_logo() {
		echo '<style type="text/css">
		h1 a { background-image: url('. get_template_directory_uri() .'/img/favicon/ms-icon-150x150.png) !important; }
		</style>';
	}
	add_action('login_head', 'custom_login_logo');


	// disable all widget areas
	function disable_all_widgets($sidebars_widgets) {
		//if (is_home())
			$sidebars_widgets = array(false);
		return $sidebars_widgets;
	}
	add_filter('sidebars_widgets', 'disable_all_widgets');


	// kill the admin nag
	if (!current_user_can('edit_users')) {
		add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
		add_filter('pre_option_update_core', create_function('$a', "return null;"));
	}

	add_theme_support( 'post-thumbnails' ); 


	// menu
	function register_my_menus() {
		register_nav_menus(
			array(
				'header-menu' => __( 'Header Menu' ),
				'extra-menu' => __( 'Extra Menu' )
			)
		);
	}
	add_action( 'init', 'register_my_menus' );
?>