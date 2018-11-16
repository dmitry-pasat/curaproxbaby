<?php

	//include 'inc/functions/default.php';
	//include 'inc/functions/login.php';
	//include 'inc/functions/pagination.php';
	//include 'inc/functions/remover.php';
	// include 'inc/functions/theme.php';
	//include 'inc/functions/map.php';
	// include 'inc/functions/post_types.php';
	// include 'inc/functions/font-awesome.php';

	
/**
 * Register our Curaprox Baby sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home Newsletter Subscription sidebar',
		'id'            => 'bluzz_home_newsletter_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">', 
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
	
?>