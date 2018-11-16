<?php
	get_header();

		if (is_front_page() || is_home()) { get_template_part('inc/home'); }
		elseif (is_page(252) || is_page(254)) { get_template_part('inc/events'); }
		elseif (is_page(275)) { get_template_part('inc/blog'); }
		elseif (is_page(273)) { get_template_part('inc/product'); }
		elseif (is_page(277)) { get_template_part('inc/glosar'); }

	get_footer();
?>