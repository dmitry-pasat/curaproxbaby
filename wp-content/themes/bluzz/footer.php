			<section id="shop" class="slide scrollme">
				<div class="">

					<!-- shop -->
					<div class="slide-content">
						<?php if (is_front_page() || is_home() || is_page(252) || is_page(254) || is_page(275)) { } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/img/content/<?php echo ICL_LANGUAGE_CODE; ?>/buy_now.png" 
							class="img-responsive title-img animateme" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-scale="0.5" alt="Tipps & Tricks">
							<?php if (ICL_LANGUAGE_CODE=='de') { ?>
								<a href="https://shop.curaprox.com/de/7-curaprox-baby" class="shop-now button" target="_blank"><?php the_field('link_shop_now', 74); ?></a>
							<?php } elseif (ICL_LANGUAGE_CODE=='en') { ?>
								<a href="https://shop.curaprox.com/en/7-curaprox-baby" class="shop-now button" target="_blank"><?php the_field('link_shop_now', 74); ?></a>
							<?php } elseif (ICL_LANGUAGE_CODE=='fr') { ?>
								<a href="https://shop.curaprox.com/fr/7-curaprox-baby" class="shop-now button" target="_blank"><?php the_field('link_shop_now', 74); ?></a>
							<?php } elseif (ICL_LANGUAGE_CODE=='pl') { ?>
								<a href="https://shop.curaprox.pl/7-dziecko" class="shop-now button" target="_blank"><?php the_field('link_shop_now', 74); ?></a>
							<?php } elseif (ICL_LANGUAGE_CODE=='sk') { ?>
								<a href="https://shop.curaprox.sk/7-curaprox-baby" class="shop-now button" target="_blank"><?php the_field('link_shop_now', 74); ?></a>
							<?php } ?>
							<p><?php the_field('text_shop_now'); ?></p>
						<?php } ?>


						<!-- newsletter -->
						<?php if (is_front_page() || is_home() || is_page(275)) { get_template_part('inc/newsletter'); } ?>

						
						<div class="newsletter-subscriber">
							<?php if ( is_active_sidebar( 'bluzz_home_newsletter_1' ) ) : ?>
							<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
							<?php dynamic_sidebar( 'bluzz_home_newsletter_1' ); ?>
							</div><!-- #primary-sidebar -->
							<?php endif; ?>
						</div>
						
						<!-- footer -->
						<div class="footerbar">
							<img src="<?php echo get_template_directory_uri(); ?>/img/content/cpx_footer.png" class="brand" alt="Curaprox">
							<img src="<?php echo get_template_directory_uri(); ?>/img/content/SwissPremiumOralCareW.png" alt="Swiss Premium Oral Care">
							<div>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="web" target="_blank"><?php echo str_replace('www.','', $_SERVER['SERVER_NAME']);?></a>
								<a href="#home" class="scroll-top"><span class="scroll-top-icon">scroll top</span></a>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
	</main>

</div> <!--/.page-wrapper-->

<?php
	$rows = get_field('lang', 4);
	$text_lang_0 = $rows[0];
	$text_lang_1 = $rows[1];
	$text_lang_2 = $rows[2];
	$text_lang_3 = $rows[3];
	$text_lang_4 = $rows[4];
	$text_lang_5 = $rows[5];
	$text_lang_6 = $rows[6];
	$text_lang_7 = $rows[7];
	$text_lang_8 = $rows[8];
	$text_lang_9 = $rows[9];
?>

<nav class="lang-nav">
	<button class="lang-nav-toggle"><?php echo $text_lang_0['text_lang']; ?></button>
	<ul style="height: 0px;">
		<li><a href="http://baby.the-factory-network.com"><?php echo $text_lang_1['text_lang']; ?></a></li>
		<li><a href="http://baby.the-factory-network.com/en"><?php echo $text_lang_2['text_lang']; ?></a></li>
		<li><a href="http://baby.the-factory-network.com/fr"><?php echo $text_lang_3['text_lang']; ?></a></li>
		<li><a href="http://baby.the-factory-network.com/pl"><?php echo $text_lang_4['text_lang']; ?></a></li>
		<li><a href="http://baby.the-factory-network.com/sk"><?php echo $text_lang_5['text_lang']; ?></a></li>
	</ul>
</nav>

<div class="info">
	<div class="bio-info popup-info">
		<img src="<?php echo get_template_directory_uri(); ?>/img/content/bio_button.png" alt="<?php the_field('menu_1'); ?>">
		<div class="info-content-wrap">
			<button type="button" class="info-close"><span class="close-icon">close</span></button>
			<div class="info-content">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/bio_button.png" alt="<?php the_field('menu_1'); ?>">
				<?php the_field('info_bio'); ?>
			</div>
		</div>
	</div>
	<div class="toxin-free-info popup-info">
		<img src="<?php echo get_template_directory_uri(); ?>/img/content/<?php echo ICL_LANGUAGE_CODE; ?>/toxin_free_button.png" alt="<?php the_field('menu_1'); ?>">
		<div class="info-content-wrap">
			<button type="button" class="info-close"><span class="close-icon">close</span></button>
			<div class="info-content">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/<?php echo ICL_LANGUAGE_CODE; ?>/toxin_free_button.png" alt="<?php the_field('menu_1'); ?>">
				<?php the_field('info_toxin_free'); ?>
			</div>
		</div>
	</div>
</div>

<div id="lussi" class="science-content hidden">
	<div class="container science">
		<div class="row">
			<div class="col-md-3 col-sm-8 col-md-push-7 col-md-offset-0 col-sm-offset-2">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/lussi.jpg" class="img-responsive" alt="Adrian Lussi">
			</div>
			<div class="col-md-5 col-sm-8 col-md-pull-2 col-md-offset-1 col-sm-offset-2">
				<?php the_field('science_lussi'); ?>
			</div>
		</div>
	</div>
</div>

<div id="kellerhoff" class="science-content hidden">
	<div class="container science">
		<div class="row">
			<div class="col-md-3 col-sm-8 col-md-push-7 col-md-offset-0 col-sm-offset-2">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/kellerhoff.jpg" class="img-responsive" alt="Nadja Kellerhoff">
			</div>
			<div class="col-md-5 col-sm-8 col-md-pull-2 col-md-offset-1 col-sm-offset-2">
				<?php the_field('science_kellerhoff'); ?>
			</div>
		</div>
	</div>
</div>

<div id="pick" class="science-content hidden">
	<div class="container science">
		<div class="row">
			<div class="col-md-3 col-sm-8 col-md-push-7 col-md-offset-0 col-sm-offset-2">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/pick.jpg" class="img-responsive" alt="Herbert Pick">
			</div>
			<div class="col-md-5 col-sm-8 col-md-pull-2 col-md-offset-1 col-sm-offset-2">
				<?php the_field('science_pick'); ?>
			</div>
		</div>
	</div>
</div>

<div id="glossar-full" class="glossar-content hidden">
	<div class="container glossar">
		<div class="row">
			<div class="col-md-12 col-sm-10 col-md-offset-0 col-sm-offset-1">
				<h2><?php echo the_field('menu_6'); ?></h2>
			</div>
			<div class="col-md-12 col-sm-10 col-md-offset-0 col-sm-offset-1">
				<div class="row terms">
					<?php echo the_field('text_glossar_full'); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="about" class="about-content hidden">
	<div class="container about">
		<div class="row">
			<div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-1">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/cpx_footer.png" class="brand img-responsive" alt="Curaprox">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/SwissPremiumOralCareW.png" class="img-responsive" alt="Swiss Premium Oral Care">
				<?php the_field('text_curaprox'); ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="web" target="_blank"><?php echo str_replace('www.','', $_SERVER['SERVER_NAME']); ?></a>
			</div>
		</div>
	</div>
</div>

<div id="media-test">
	<div class="visible-xs">xs</div>
	<div class="visible-sm">sm</div>
	<div class="visible-md">md</div>
	<div class="visible-lg">lg</div>
</div>


<?php wp_footer(); ?>

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.12.0.min.js"></script>
<!-- other scripts -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollme.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js/dist/video.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/video.js/dist/Youtube.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
<!-- rem polyfill (goolge fonts link tags must have the data-norem attribute) -->
<script src="<?php echo get_template_directory_uri(); ?>/js/rem.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCPcwXrhqH6HJ6alXZXaCLbUdEiXM8JxSQ"></script>



<!-- modal popup -->
<script>
	$(document).ready(function () {
		$("#bkgOverlay").delay(4800).fadeIn(400);
  		$("#delayedPopup").delay(5000).fadeIn(400);	
		$(".backgroundOverlay").click(function (e) {
			HideDialog();
			e.preventDefault();
		});
	});
	function HideDialog() {
		$("#bkgOverlay").fadeOut(400);
		$("#delayedPopup").fadeOut(300);
	}
</script>
<!-- end modal popup -->



<!-- calendar -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/locale/de.js"></script>
<?php
	global $post;
	$args = array( 'posts_per_page' => -1, 'category' => 9 );
	$myposts = get_posts( $args );

	$calendar_events = array();
	foreach ( $myposts as $post ) : setup_postdata( $post );
		if( have_rows('date') ): while ( have_rows('date') ) : the_row();
			$calendar_events[] = "{id: '" . get_the_id() . "', title: '" . get_the_title() ."', start: '" . get_sub_field('date') . "T" . get_sub_field('hour') . "', url: '" . get_permalink() . "'},";
		endwhile; else : endif;
	endforeach; wp_reset_postdata();
?>

<script>
	$(document).ready(function() {
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,listYear'
			},

			locale: 'ro',
			editable: true,
			eventLimit: true,
			events: [ <?php echo implode($calendar_events); ?> ]
		});

	});
</script>

</body>
</html>