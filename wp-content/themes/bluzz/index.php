<?php get_header(); ?>

<?php 
	// homepage
	if (is_front_page() || is_home()) { ?>
		homepage
	<?php }

	// custom
	elseif (is_page('666')) { ?>
	<?php }

	// default page
	else { ?>
		<?php if (have_posts()) :?>
			<?php while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php else : endif; ?>
	<?php }
?>
<?php get_footer(); ?>