<!--
<section id="glossar" class="slide scrollme">
	<div class="container slide-content">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/<?php echo ICL_LANGUAGE_CODE; ?>/wichtige_begriffe.png" class="img-responsive title-img no-animateme"
				data-when="enter"
		data-from="0.8"
		data-to="0.2"
		data-opacity="0"
		data-translatex="1800" 
		alt="Glossar">
				<div class="row terms">
					<?php the_field('text_glossar_short', 74); ?>
					<div class="col-md-12 glossar-full">
						<p><?php the_field('terms', 74); ?>:</p>
						<a class="ov button" href="#glossar-full">Glosar</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
-->

<section id="support" class="slide scrollme">
	<div class="container slide-content">
		<div class="row">
			<div class="col-md-12">
				<img src="<?php echo get_template_directory_uri(); ?>/img/content/<?php echo ICL_LANGUAGE_CODE; ?>/tipps_tricks.png" class="img-responsive title-img no-animateme"
				data-when="enter"
		data-from="0.8"
		data-to="0.2"
		data-opacity="0"
		data-translatex="1800" 
		alt="Tipps & Tricks">
		<h3 class="intro"><?php the_field('text_support_start', 74); ?></h3>
				<div class="row tipps">
					<?php the_field('text_support', 74); ?>
				</div>
			</div>
		</div>
	</div>
</section>