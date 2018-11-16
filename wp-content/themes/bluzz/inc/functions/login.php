<?php

	// change logo url
	function my_loginURL() {
		return home_url();
	}
	add_filter('login_headerurl', 'my_loginURL');

	
	// change logo text
	function my_loginURLtext() {
		return get_bloginfo('name');
	}
	add_filter('login_headertitle', 'my_loginURLtext');


	// load login_style.css
	function my_logincustomCSSfile() {
		wp_enqueue_style('login-styles', get_template_directory_uri() . '/css/login_styles.css');
	}
	add_action('login_enqueue_scripts', 'my_logincustomCSSfile');


	// user redirect
	function my_loginredrect( $redirect_to, $request, $user ) {
	  if ( isset( $user->roles ) && is_array( $user->roles ) ) {
	    if( in_array('administrator', $user->roles)) {
	      return admin_url();
	    } else {
	      return site_url();
	    }
	  } else {
	      return site_url();
	  }
	}
	 
	add_filter('login_redirect', 'my_loginredrect', 10, 3);

?>