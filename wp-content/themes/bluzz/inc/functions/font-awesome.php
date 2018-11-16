<?php 
	function enqueue_our_required_stylesheets(){
		wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'); 
	}
	add_action('wp_enqueue_scripts','enqueue_our_required_stylesheets');
?>