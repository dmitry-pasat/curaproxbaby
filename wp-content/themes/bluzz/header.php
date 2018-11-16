<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >

	<head>
		<!-- Mobile Specific Metas + CDN Fallback -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<meta name="MobileOptimized" content="320">
		<meta name="HandheldFriendly" content="True">
		<!-- /end Mobile Specific Metas -->

		<meta charset="<?php bloginfo('charset'); ?>">
		
		<link href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/js/video.js/dist/video-js.min.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">

		<!-- calendar -->
		<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css' rel='stylesheet' />
		<link href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.css' rel='stylesheet' media='print' />

		<script src='<?php echo get_template_directory_uri(); ?>/js/moment.min.js'></script>

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"></script>
			<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
		<![endif]-->
		<script src="<?php echo get_template_directory_uri(); ?>/js/picturefill.min.js"></script>

		<title><?php wp_title('|', true, 'right');bloginfo('name'); ?></title>
		<meta name="viewport" content="width=device-width" />

		<!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri(); ?>/img/favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- Feed -->
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

		<!-- Font -->
		<link href='https://fonts.googleapis.com/css?family=Signika:600,400,300' rel='stylesheet' type='text/css' data-norem>


		<?php wp_head(); ?>
		<!-- W3TC-include-css -->
	</head>

	<body <?php body_class(); ?>>

	<!-- modal popup -->
	<?php if (ICL_LANGUAGE_CODE=='de') { ?>
		<!-- <div id="bkgOverlay" class="backgroundOverlay"></div> -->
		<!-- <a href="http://www.stillkampagne.ch" target="_blank" id="delayedPopup" class="delayedPopupWindow" ></a> -->
	<?php } ?>
	<!-- end modal popup -->



	<div class="page-loading">
		<div class="loading-content">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="Logo">
			<div class="loading">
				<div class="bullet"></div>
				<div class="bullet"></div>
				<div class="bullet"></div>
				<div class="bullet"></div>
			</div>
		</div>
	</div>
	
	<div class="page-wrapper">
		<header class="pageheader clearfix">
			<div class="pageheader-wrap clearfix">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>#home" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="Logo">
				</a>
				<nav class="mainnav navbar" role="navigation">
					<div class="navbar-header clearfix">
						<button type="button" class="navbar-toggle visible-sm-block visible-xs-block">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div> <!-- /.navbar-header -->
					<div class="navbar-collapse clearfix">
						<ul class="navbar-nav clearfix">

							<?php
								$rows = get_field('menus',74 );
								$menu_0 = $rows[0];
								$menu_1 = $rows[1];
								$menu_2 = $rows[2];
								$menu_3 = $rows[3];
								$menu_4 = $rows[4];
								$menu_5 = $rows[5];
								$menu_6 = $rows[6];
								$menu_7 = $rows[7];
								$menu_8 = $rows[8];
								$menu_9 = $rows[9];
							?>

							<li class=""><a class="active" href="<?php echo esc_url( home_url( '/' ) ); ?>#home"><?php echo $menu_0['menu']; ?></a></li>
							<li>
								<?php if (ICL_LANGUAGE_CODE=='de') { ?>
									<a href="<?php echo get_the_permalink(273); ?>"><?php echo get_the_title(273); ?></a>
								<?php } elseif (ICL_LANGUAGE_CODE=='en') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='fr') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='pl') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='sk') { ?>
								<?php } ?>
							</li>
							<!--
							<li class="has-sub"><span class="produkte"><?php echo $menu_9['menu']; ?></span>
								<ul>
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#schnuller"><?php echo $menu_2['menu']; ?></a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#beissring"><?php echo $menu_3['menu']; ?></a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#zahnbuerste"><?php echo $menu_4['menu']; ?></a></li>
								</ul>
							</li>
							 -->
							<!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#bio"><?php echo $menu_1['menu'];	?></a></li> -->
							<!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#blog"><?php echo $menu_5['menu']; ?></a></li> -->
							<li>
								<?php if (ICL_LANGUAGE_CODE=='de') { ?>
									<a href="<?php echo get_the_permalink(275); ?>"><?php echo get_the_title(275); ?></a>
								<?php } elseif (ICL_LANGUAGE_CODE=='en') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='fr') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='pl') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='sk') { ?>
								<?php } ?>
							</li>
							<li>
								<?php if (ICL_LANGUAGE_CODE=='de') { ?>
									<a href="<?php echo get_the_permalink(252); ?>"><?php echo get_the_title(252); ?></a>
								<?php } elseif (ICL_LANGUAGE_CODE=='en') { ?>
									<a href="<?php echo get_the_permalink(254); ?>"><?php echo get_the_title(254); ?></a>
								<?php } elseif (ICL_LANGUAGE_CODE=='fr') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='pl') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='sk') { ?>
								<?php } ?>
							</li>
							<!-- <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>#glossar"><?php echo $menu_6['menu']; ?></a></li> -->
							<li>
								<?php if (ICL_LANGUAGE_CODE=='de') { ?>
									<a href="<?php echo get_the_permalink(277); ?>"><?php echo get_the_title(277); ?></a>
								<?php } elseif (ICL_LANGUAGE_CODE=='en') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='fr') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='pl') { ?>
								<?php } elseif (ICL_LANGUAGE_CODE=='sk') { ?>
								<?php } ?>
							</li>
							<?php if (is_front_page() || is_home()) { ?>
							<li class="has-sub"><span class="science"><?php echo $menu_7['menu']; ?></span>
								<ul>
									<li><a class="ov" href="#lussi">Adrian Lussi</a></li>
									<li><a class="ov" href="#kellerhoff">Nadja Kellerhoff</a></li>
									<li><a class="ov" href="#pick">Herbert Pick</a></li>
								</ul>
							</li>
							<?php } ?>
							<li><a class="ov" href="#about"><?php echo $menu_8['menu'];	?></a></li>
							<li>
								<?php if (ICL_LANGUAGE_CODE=='de') { ?>
									<a href="https://shop.curaprox.com/de/7-curaprox-baby" class="shop-link hidden-sm hidden-xs" target="_blank">Shop</a>
								<?php } elseif (ICL_LANGUAGE_CODE=='en') { ?>
									<a href="https://shop.curaprox.com/en/7-curaprox-baby" class="shop-link hidden-sm hidden-xs" target="_blank">Shop</a>
								<?php } elseif (ICL_LANGUAGE_CODE=='fr') { ?>
									<a href="https://shop.curaprox.com/fr/7-curaprox-baby" class="shop-link hidden-sm hidden-xs" target="_blank">Shop</a>
								<?php } elseif (ICL_LANGUAGE_CODE=='pl') { ?>
									<a href="https://shop.curaprox.pl/7-dziecko" class="shop-link hidden-sm hidden-xs" target="_blank">Sklep</a>
								<?php } elseif (ICL_LANGUAGE_CODE=='sk') { ?>
									<a href="https://shop.curaprox.sk/7-curaprox-baby" class="shop-link hidden-sm hidden-xs" target="_blank">Kupit’</a>
								<?php } ?>
							</li>
						</ul>
						<button type="button" class="navbar-toggle visible-sm-block visible-xs-block"><span class="close-icon">close</span></button>
					</div> <!-- /.navbar-collapse -->
				</nav> <!-- /.main-nav -->

				<?php if (ICL_LANGUAGE_CODE=='de') { ?>
					<a href="https://shop.curaprox.com/de/7-curaprox-baby" class="shop-link-mobile hidden-lg hidden-md" target="_blank">Shop</a>
				<?php } elseif (ICL_LANGUAGE_CODE=='en') { ?>
					<a href="https://shop.curaprox.com/en/7-curaprox-baby" class="shop-link-mobile hidden-lg hidden-md" target="_blank">Shop</a>
				<?php } elseif (ICL_LANGUAGE_CODE=='fr') { ?>
					<a href="https://shop.curaprox.com/fr/7-curaprox-baby" class="shop-link-mobile hidden-lg hidden-md" target="_blank">Shop</a>
				<?php } elseif (ICL_LANGUAGE_CODE=='pl') { ?>
					<a href="https://shop.curaprox.pl/7-dziecko" class="shop-link-mobile hidden-lg hidden-md" target="_blank">Sklep</a>
				<?php } elseif (ICL_LANGUAGE_CODE=='sk') { ?>
					<a href="https://shop.curaprox.sk/7-curaprox-baby" class="shop-link-mobile hidden-lg hidden-md" target="_blank">Kupit’</a>
				<?php } ?>

			</div>
		</header>

		<main class="content" role="main">
			<div class="main-content">