<?php

	function remove_menus(){
		remove_menu_page( 'edit-comments.php' );		//Comments
		remove_menu_page( 'themes.php' );				//Appearance
		remove_menu_page( 'users.php' );				//Users
		remove_menu_page( 'tools.php' );				//Tools
		// remove_menu_page( 'options-general.php' );		//Settings	
		// remove_menu_page( 'plugins.php' );				//Plugins
		remove_menu_page( 'edit.php?post_type=acf' );	//ACF
		remove_menu_page( 'wpcf7' );					//Contact
		// remove_menu_page( 'edit.php' );                   //Posts
	}
	add_action( 'admin_menu', 'remove_menus' );

	// remove admin bar
	show_admin_bar( false );

	//remove dashboard widgets
	function remove_dashboard_meta() {
		$user = wp_get_current_user();
		if (!$user -> has_cap ('manage_options'))
		remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
		remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal');
	}
	add_action( 'admin_init', 'remove_dashboard_meta' ); 	


	// custom admin footer
	function remove_footer_admin () {
		echo '<span id="footer-thankyou">Built with love</span>';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');


	// replace howdy
	function replace_howdy( $wp_admin_bar ) {
		$my_account=$wp_admin_bar->get_node('my-account');
		$newtitle = str_replace( 'Howdy,', 'Good morning,', $my_account->title );
		$wp_admin_bar->add_node( array (
			'id' => 'my-account',
			'title' => $newtitle,
		) );
	}
	add_filter( 'admin_bar_menu', 'replace_howdy',25 );


	// wp icon
	function no_wp_logo_admin_bar_remove() { ?>
		<style type="text/css">
			#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
				content: url('<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/android-icon-36x36.png') !important;
				top: 2px;
			}

			#wpadminbar #wp-admin-bar-wp-logo > a.ab-item {
				pointer-events: none;
				cursor: default;
			}
		</style>
	<?php }
	add_action('wp_before_admin_bar_render', 'no_wp_logo_admin_bar_remove', 0);

	// disable toolbar for all users except admin
	function remove_admin_bar() {
		if (!current_user_can('administrator') && !is_admin()) {
			show_admin_bar(false);
		}
	}
	add_action('after_setup_theme', 'remove_admin_bar');

?>