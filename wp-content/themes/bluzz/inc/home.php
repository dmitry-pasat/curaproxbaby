<section id="home" class="slide scrollme">
	<div class="fullscreen background parallax" data-img-width="2200" data-img-height="1100" data-diff="100" data-align-top="true">
		<div class="fullscreen-content animateme" 
		data-when="span"
data-from="0"
data-to="0.8"
		data-translatex="-1000">
			<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/cpx_logo_we_know.png" alt="Curaprox" class="img-responsive visible-lg-block visible-md-block"> -->
			<img src="<?php echo get_template_directory_uri(); ?>/img/nomoretears.png" class="img-responsive nomoretears" alt="Slogan">
		</div>
		<a href="#bio" class="scroll-down"><span class="scroll-down-icon">scroll down</span></a>
	</div>
</section>

<section id="bio" class="slide scrollme">
	<div class="slide-content">
		<div class="slide-content-wrap">
			<div class="bio-halter animateme bio-abs"
			data-when="enter"
	data-from="0.85"
	data-to="0"
			data-translatex="-500">
				<div class="abs-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/content/bio_halter.png" class="img-responsive" alt="Schnullerhalter">
					<h2><?php the_field('product_1_1'); ?></h2>
				</div>
			</div>
			<div class="bio-schnuller animateme bio-abs"
			data-when="enter"
	data-from="0.85"
	data-to="0"
			data-translatex="-800">
				<div class="abs-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/content/bio_schnuller.png" class="img-responsive" alt="Schnuller">
					<h2><?php the_field('product_1'); ?></h2>
				</div>
			</div>
			<div class="bio-beissring animateme bio-abs"
			data-when="enter"
	data-from="0.85"
	data-to="0"
			data-translatex="600">
				<div class="abs-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/content/bio_beissring.png" class="img-responsive" alt="Beissring">
					<h2><?php the_field('product_2'); ?></h2>
				</div>
			</div>
			<div class="bio-zahnbuerste animateme bio-abs"
			data-when="enter"
	data-from="0.85"
	data-to="0"
			data-translatex="1500">
				<div class="abs-content">
					<img src="<?php echo get_template_directory_uri(); ?>/img/content/bio_zahnbuerste.png" class="img-responsive" alt="Zahnbürste">
					<h2><?php the_field('product_3'); ?></h2>
				</div>
			</div>
			<div class="bio-functional animateme"
			data-when="enter"
	data-from="0.85"
	data-to="0"
			data-opacity="0">
				<!-- background img -->
			</div>
			<div class="bio-functional-wrap">
				<div class="bio-functional-content">
					<h3><?php the_field('bio_functional_title'); ?></h3>
					<div><?php the_field('bio_functional_text'); ?></div>
					<a class="ov-open youtube" href="<?php the_field('video'); ?>&origin=http://baby.curaprox.com">
						Video
					</a>
				</div>
			</div>
		</div>
	</div>
</section>




<!-- 				<section id="support" class="slide scrollme">
	<div class="container slide-content">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/<?php echo ICL_LANGUAGE_CODE; ?>/tipps_tricks.png" class="img-responsive title-img animateme"
				data-when="enter"
		data-from="0.8"
		data-to="0.2"
		data-opacity="0"
		data-translatex="1800" 
		alt="Tipps & Tricks">
		<h3 class="intro"><?php the_field('text_support_start'); ?></h3>
				<div class="row tipps">
					<?php the_field('text_support'); ?>
				</div>
			</div>
		</div>
	</div>
</section>

-->		

<section class="slide scrollme">
	<div class="container slide-content">
		<div class="row">
			<div class="col-md-12">
				<div class="title text-center animateme red" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-scale="0.5" opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);>
					<h1>Newsroom</h1>
				</div>
				<div class="title text-center animateme red" data-when="enter" data-from="1" data-to="0.4" data-opacity="0" data-scale="0.5" opacity: 1; transform: translate3d(0px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scale3d(1, 1, 1);>
					<?php echo do_shortcode('[juicer name="babycuraprox" per="19"]') ?>
				</div>
			</div>
		</div>
	</div>
</section>