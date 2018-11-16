<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section id="glossar" class="slide scrollme">
			<div class="container slide-content">
				<div class="row">
					<div class="col-md-12">
						<img src="<?php the_post_thumbnail_url(); ?>"class="img-responsive animateme" alt="<?php the_title(); ?>">
						<div class="title">
							<br><br>
							<h2><?php the_title(); ?></h2>
							<br>
						</div>
						<div class="animateme"><?php the_content(); ?></div>
					</div>
				</div>
			</div>
		</section>

		<?php $location = get_field('map'); if( !empty($location) ): ?>
			<div class="acf-map">
			<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
			</div>
		<?php endif; ?>

	<?php endwhile; endif; ?>

<?php get_footer(); ?>