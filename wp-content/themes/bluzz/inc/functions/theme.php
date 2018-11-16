<?php

	// Custom WordPress Admin Color Scheme
	function admin_css() {
		wp_enqueue_style( 'admin_css', get_template_directory_uri() . '/css/admin.css' );
	}
	add_action('admin_print_styles', 'admin_css' );


	function example_add_dashboard_widgets() {
		wp_add_dashboard_widget(
			'example_dashboard_widget',         // Widget slug.
			'Example Dashboard Widget',         // Title.
			'example_dashboard_widget_function' // Display function.
		);
	}
	add_action( 'wp_dashboard_setup', 'example_add_dashboard_widgets' );

	function example_dashboard_widget_function() {
		echo "my new dashboard";

		?>

	<?php

}



?>