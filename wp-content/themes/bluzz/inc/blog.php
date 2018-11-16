<section id="blog" class="slide scrollme">
	<div class="container slide-content">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center no-animateme red" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-scale="0.5" opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);>
					<h1>Magazin</h1>
				</div>
			</div>
			<div class="col-md-12 red">
				<h3 class="blog-title">LATEST NEWS</h3>
			</div>
			<?php
				$i=0;
				$args = array( 'posts_per_page' => 3, 'category' => 10, 'orderby' => 'date', 'suppress_filters' => false );
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post );
					$i++;
					if ($i==1) {
			?>
				<div class="col-12 col-lg-7 no-animateme red blogy gutters" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-scale="0.5" opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);>
					<a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);" class="h600 cover rounded">
						<h3 class="blog-title absolute bottom"><?php the_title(); ?><br><?php echo get_the_date(); ?></h3>
					</a>
				</div>
				<div class="col-12 col-lg-5 no-animateme red no-gutter" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-scale="0.5" opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);>
			<?php } elseif ($i==2 || $i==3 ) { ?>
				<div class="col-12 no-animateme red blogy gutters" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-scale="0.5" opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);>
					<a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>);" class="h300 cover rounded">
						<h3 class="blog-title absolute bottom"><?php the_title(); ?><br><?php echo get_the_date(); ?></h3>
					</a>
				</div>
			<?php } endforeach; wp_reset_postdata();?>
			</div>
		</div>


		<div class="row">
			<div class="col-md-12 red">
				<br><br>
				<h3 class="blog-title">MOST POPULAR</h3>
			</div>
			<?php
				if( have_rows('popular_posts') ):
					while ( have_rows('popular_posts') ) : the_row();
						$post_object = get_sub_field('post');
						if( $post_object ): 
							$post = $post_object;
							setup_postdata( $post ); 
			?>
				<div class="col-12 col-lg-3 no-animateme  blogy gutters" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-scale="0.5" opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);>
					<a href="<?php the_permalink(); ?>" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>);" class="h200 cover rounded"></a>
					<h5 class=""><?php echo get_the_date(); ?><br><?php the_title(); ?></h5>
				</div>
			<?php
				wp_reset_postdata(); endif;
				endwhile; else : endif;
			?>
		</div>
	</div>
</section>