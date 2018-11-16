// Avoid `console` errors in browsers that lack a console.
!function(){for(var e,n=function(){},o=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeline","timelineEnd","timeStamp","trace","warn"],i=o.length,r=window.console=window.console||{};i--;)e=o[i],r[e]||(r[e]=n)}();

(function($) {

	//-----------//
	// DEFINES 
	//-----------//
	
	var screen_size;
	var media_test = $('#media-test');
	var mainnav_wrap = $('.navbar-collapse');
	var mainnav = $('.navbar-nav');
	var langnav = $('.lang-nav');
	var home_fullscreen = $('#home .fullscreen');
	var scroll_offset;
	var window_height;
	var window_width;
	var player;

	//-----------//
	// FUNCTIONS 
	//-----------//
	
	// SCREEN SIZE
	function get_screen_size(old_size) {
		if (media_test.find('.visible-xs').css('display') == 'block') {
			if(screen_size != 'xs')
				screen_size = 'xs';
		} else if (media_test.find('.visible-sm').css('display') == 'block') {
			if(screen_size != 'sm')
				screen_size = 'sm';
		} else if (media_test.find('.visible-md').css('display') == 'block') {
			if(screen_size != 'md')
				screen_size = 'md';
		} else if (media_test.find('.visible-lg').css('display') == 'block') {
			if(screen_size != 'lg')
				screen_size = 'lg';
		}
		// call breakpoint_change function
		if (old_size != screen_size) {
			breakpoint_change();
		}
	}

	// BREAKPOINT CHANGE
	function breakpoint_change() {
		define_scroll_offset();
		home_image();
	}

	// WINDOW SIZE
	function windowSize() {
		window_width = $(window).width();
		window_height = $(window).height();
	}

	// DEFINE SCROLL OFFSET
	// 1 px weniger als die Höhe der Navbar
	function define_scroll_offset() {
		var nav_height = $('.pageheader').height();
		scroll_offset = nav_height - 1;
	}

	// MENU ACTIVE
	function menu_active_state(element, prevelement, direction) {
		if(direction == 'down') {
			var issubele = $('.mainnav a[href="#'+element+'"]').parents('ul li ul li').length;
			$('.mainnav a, .mainnav span').removeClass('active');
			$('.mainnav a[href="#'+element+'"]').addClass('active');
			if (issubele)
				$('.mainnav a[href="#'+element+'"]').parents('ul li').find('span').addClass('active');
		}
		if(direction == 'up') {
			var issubele = $('.mainnav a[href="#'+prevelement+'"]').parents('ul li ul li').length;
			$('.mainnav a').removeClass('active');
			$('.mainnav a[href="#'+prevelement+'"]').addClass('active');
			if (issubele)
				$('.mainnav a[href="#'+prevelement+'"]').parents('ul li').find('span').addClass('active');
		}
	}

	// FULLSCREEN
	function go_fullscreen() {
		$('.fullscreen').css('min-height', window_height - $('.pageheader').height());
	}

	// HOME IMAGE
	function home_image() {
		if (screen_size == 'xs') {
			home_fullscreen.attr('data-img-width', '960');
			home_fullscreen.attr('data-img-height', '960');
		} else if (screen_size == 'sm' || screen_size == 'md') {
			home_fullscreen.attr('data-img-width', '1700');
			home_fullscreen.attr('data-img-height', '1100');
		} else {
			home_fullscreen.attr('data-img-width', '2200');
			home_fullscreen.attr('data-img-height', '1100');
		}
	}

	/* set parallax background-position */
	function parallaxPosition(e){
		var windowH = $(window).height();
		var topWindow = $(window).scrollTop();
		var bottomWindow = topWindow + windowH;
		var currentWindow = (topWindow + bottomWindow) / 2;
		$(".parallax").each(function(i){
			var path = $(this);
			var height = path.height();
			var top = path.offset().top;
			var bottom = top + height;
			var alignTop = false;
			var contW = path.width();
			var contH = path.height();
			var imgW = path.attr("data-img-width");
			var imgH = path.attr("data-img-height");
			var ratio = imgW / imgH;
			// overflowing difference
			var diff = parseFloat(path.attr("data-diff"));
			diff = diff ? diff : 0;
			// remaining height to have fullscreen image only on parallax
			var remainingH = 0;
			if(path.hasClass("parallax") && !$("html").hasClass("touch")){
					var maxH = contH > windowH ? contH : windowH;
					remainingH = windowH - contH;
			}
			// set img values depending on cont
			imgH = contH + remainingH + diff;
			imgW = imgH * ratio;
			// fix when too large
			if(contW > imgW){
					imgW = contW;
					imgH = imgW / ratio;
			}
			// check align top
			if (path.attr('data-align-top'))
				alignTop = path.attr('data-align-top');
			// only when in range
			if(bottomWindow > top && topWindow < bottom){
				// min when image touch top of window
				var min = 0;
				// max when image touch bottom of window
				var max = - imgH + windowH;
				// overflow changes parallax
				var overflowH = height < windowH ? imgH - height : imgH - windowH; // fix height on overflow
				top = top - overflowH;
				bottom = bottom + overflowH;
				// value with linear interpolation
				var value = 0;
				if (alignTop)
					value = ((min + (max - min) * (currentWindow - top) / (bottom - top)) + ((imgH - height) / 2));
				else
					value = (min + (max - min) * (currentWindow - top) / (bottom - top));
				// set background-position
				var orizontalPosition = path.attr("data-oriz-pos");
				orizontalPosition = orizontalPosition ? orizontalPosition : "50%";
				$(this).css("background-position", orizontalPosition + " " + value + "px");
			}
		});
	}

	// OVERLAY
	function create_overlay(content, video, extraclass) {
		var overlay = '<div class="overlay '+extraclass+'"><div class="ov-inner-wrap"><div class="ov-content"><button class="ov-close"><span class="close-icon">close</span></button>'+content+'</div></div></div>';
		$('body').append(overlay);
		if (video) {
			var this_video = $('.overlay video');
			$('.overlay').addClass('video')
			player = videojs(this_video.attr('id'), { "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": this_video.attr('data-video')}], "controls": true, "autoplay": false, "preload": "auto" });
		}
		if (!$('.overlay').hasClass('fov') || $('.overlay').hasClass('negative')) {
			var ov_margin_top = $('.overlay .ov-inner-wrap').height() / 2;
			$('.overlay .ov-inner-wrap').css('margin-top', -ov_margin_top+'px');
		}
		$('.overlay').animate({opacity: 1}, 'fast', function() {
			$('body').addClass('overlay-open');
			bind_close_overlay(video);	
		});
	}

	function bind_close_overlay(video) {
		$('.overlay .ov-close').on('click', function(event) {
			event.preventDefault();
			if (video)
				player.dispose();
			$('body').removeClass('overlay-open');
			$(this).parents('.overlay').animate({opacity: 0}, 'fast', function() {
				$(this).remove();
			});
		});
	}
	
	String.prototype.trimToLength = function(m) {
  return (this.length > m) 
    ? jQuery.trim(this).substring(0, m).split(" ").slice(0, -1).join(" ") + "..."
    : this;
	};

	//-----------//
	// DOM READY 
	//-----------//

	$(document).ready(function(){

		// LOADING SCREEEN
		$(window).load(function() {
			$('.page-loading').fadeOut(400);
		});

		// WINDOW SIZE
		windowSize();

		// GET SCREEN SIZE
		get_screen_size(screen_size);

		// FULLSCREEN
		go_fullscreen();

		// SCROLLED
		var onTop = true;
		$(window).scroll(function() {
			if ($(this).scrollTop() >= 90 && onTop) {
				$('body').addClass('scrolled');
				onTop = false;
			}
			if ($(this).scrollTop() < 90 && !onTop) {
				$('body').removeClass('scrolled');
				onTop = true;
			}
		});

		// YOUTUBE OVERLAY
		$('.ov-open.youtube').on('click', function(event) {
			event.preventDefault();
			var video_url = $(this).attr('href');
			// var video = '<video width="720" height="405" id="player" preload="none"><source type="video/youtube" src="'+video_url+'" /></video>';
			var video = '<video id="player" class="video-js vjs-default-skin" data-video="'+video_url+'"></video>';
			create_overlay(video, true);
		});

		// TEXT OVERLAY
		$('.prod-abs').on('click', function(event) {
			event.preventDefault();
			if (screen_size == 'sm' || screen_size == 'xs') {
				var content = $(this).find('.abs-content').clone();
				content.find('picture').remove();
				create_overlay(content.html(), false);
				$('.overlay').addClass($(this).parents('section.slide').attr('id'));
			}
		});

		// OVERLAY
		$('a.ov').on('click', function(event) {
			event.preventDefault();
			var ov_content = $($(this).attr('href'));
			if (ov_content.hasClass('about-content')) {
				create_overlay(ov_content.html(), false, 'fov negative');
			} else {
				create_overlay(ov_content.html(), false, 'fov');
			}
		});

		// NAV
		$('.navbar-toggle').click(function() {
			if(mainnav_wrap.is(':hidden')) {
				mainnav_wrap.stop().fadeIn('fast', function() {
					$('body').addClass('overlay-open');
				});
			} else {
				$('body').removeClass('overlay-open');
				mainnav_wrap.stop().fadeOut('fast');
			}
		});

		$('.has-sub span').on('click', function(event) {
			event.preventDefault();
			if (screen_size === 'sm' || screen_size === 'xs') {
				$(this).parent().find('ul').slideToggle('fast', function() {
					
				});
			}
		});

		var bH = ($('.lang-nav-toggle').outerHeight()/10);
		var lang_ul = langnav.find('ul');
		var lang_items = langnav.find('li');
		var item_height = lang_items.outerHeight();
		var mT = (lang_items.length * (item_height)/10) + bH;
		$('.lang-nav-toggle').click(function() {
			if(!langnav.hasClass('lang-nav-visible')) {
				langnav.addClass('lang-nav-visible');
				lang_ul.stop().animate({height: bH+'rem'}, 'fast');
			} else {
				lang_ul.stop().animate({height: 0}, 'fast', function() {
					langnav.removeClass('lang-nav-visible');
				});
			}
		});

		// SUPPORT
		var support_title = $('#support .tipps h3');
		var tip;
		for (var i = support_title.length - 1; i >= 0; i--) {
			support_title.eq(i).add(support_title.eq(i).nextAll('p')).wrapAll('<div class="tip col-md-6"></div>');
			support_title.eq(i).nextAll('p').wrapAll('<div class="tip-content"></div>');
			tip = support_title.eq(i).parents('.tip');
			if (tip.find('.tip-content p:first-child').text().length > 200 || tip.find('.tip-content p').length > 2) {
				var short_text = tip.find('.tip-content p:first-child').clone(false, false).html().trimToLength(200);

				var lang = document.documentElement.lang;
				    lang = lang || document.documentElement.lang;
				if (lang.indexOf('-') !== -1)
				    lang = lang.split('-')[0];

				if (lang.indexOf('_') !== -1)
				    lang = lang.split('_')[0];

				if(lang=='de'){ var readmore = "weiter lesen"; var readless = "weniger";}
				else if(lang=='en'){ var readmore = "read more"; var readless = "less"; }
				else if(lang=='fr'){ var readmore = "lire la suite"; var readless = "moins"; }
				else if(lang=='pl'){ var readmore = "czytaj dalej"; var readless = "mniej";}
				else if(lang=='sk'){ var readmore = "prečítať viac"; var readless = "menej";}
				else{var readmore = "weiter lesen"; var readless = "weniger";}

				tip.find('.tip-content').css('display', 'none').append('<a href="#" class="read-less">'+readless+'</button></p>');
				tip.append('<p class="short">'+short_text+'</p><a href="#" class="read-more">'+readmore+'</a>');
				$('a.read-more').on('click', function(event) {
					event.preventDefault();
					$(this).slideUp('fast');
					$(this).parents('.tip').find('.short').slideUp('fast', function() {
						$(this).parents('.tip').find('.tip-content').slideDown('fast');
					});
				});
				$('a.read-less').on('click', function(event) {
					event.preventDefault();
					$(this).parent().slideUp('fast');
					$(this).parents('.tip').find('.short, .read-more').slideDown('fast');
				});
			}
		};

		// GLOSSAR
		var glossar_title = $('#glossar .terms h3');
		for (var i = glossar_title.length - 1; i >= 0; i--) {
			glossar_title.eq(i).add(glossar_title.eq(i).nextAll('p')).wrapAll('<div class="term col-md-6"></div>');
		};

		var glossar_full_title = $('#glossar-full .terms h3');
		for (var i = glossar_full_title.length - 1; i >= 0; i--) {
			glossar_full_title.eq(i).add(glossar_full_title.eq(i).nextAll('p')).wrapAll('<div class="term col-md-6"></div>');
		};

		// INFO
		$('.popup-info > img').on('click', function(event) {
			event.preventDefault();
			var this_content = $(this).parent().find('.info-content-wrap');
			if(this_content.is(':hidden')) {
				$('.info-content-wrap').fadeOut('fast');
				this_content.fadeIn('fast');
			} else { 
				this_content.fadeOut('fast');
			}
		});
		$('.info-close').on('click', function(event) {
			event.preventDefault();
			$(this).parents('.info-content-wrap').fadeOut('fast');
		});

		// SLIDES 
		var slides = Array();
		for (var i = 0; i < $('.slide').length; i++) {
			var slide_id = $('.slide').eq(i).attr('id');
			slides.push(slide_id);
		};

		// VERTICAL CENTER
		// var content_b = $('.content-b');
		// for (var i = 0; i < content_b.length; i++) {
		// 	var c_margin_top = (content_b.eq(i).height()/2);
		// 	content_b.eq(i).css('margin-top', '-'+c_margin_top+'px');
		// };

		// slide change events
		for (var i = 0; i < slides.length; i++) {
			var scroll_offset_tmp = scroll_offset;
			$('#'+slides[i]).waypoint({
				offset: scroll_offset_tmp+10,
				handler: function(direction) {
					var element = $(this).attr('id');
					var prevelement = $(this).prevAll('.slide').attr('id');
					// Menu active state
					if(i!=0)
						menu_active_state(element, prevelement, direction);
					// info
					if (element == 'shop' && direction == 'down' && screen_size == 'xs')
						$('.info').fadeOut('fast');
					if (element == 'shop' && direction == 'up' && screen_size == 'xs')
						$('.info').fadeIn('fast');
				}
			}); 
		}

		// scroll to slide

		// Copied from jQuery Easing v1.3 - http://gsgd.co.uk/sandbox/jquery/easing/
		jQuery.extend( jQuery.easing,{
			easeInOutQuint: function (x, t, b, c, d) {
				if ((t/=d/2) < 1) return c/2*t*t*t*t*t + b;
				return c/2*((t-=2)*t*t*t*t + 2) + b;
			}
		});

		// for (var i = 0; i < slides.length; i++) {
		// 	var this_slide = slides[i];
		// 	$('a[href="#'+this_slide+'"]').click(function(event) {
		// 		event.preventDefault();
		// 		scrollto( $(this).attr('href'), 500);
		// 		//$.scrollTo( $(this).attr('href'), 800, {easing: 'easeInOutQuint', offset: scroll_offset} );
		// 		if (screen_size == 'sm' || screen_size == 'xs') {
		// 			if(mainnav_wrap.is(':visible')) 
		// 				$('.navbar-toggle').trigger('click');
		// 		}
		// 	});
		// };

		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top - scroll_offset
					}, 1000);
					if (screen_size == 'sm' || screen_size == 'xs') {
						if(mainnav_wrap.is(':visible')) 
							$('.navbar-toggle').trigger('click');
					}
					return false;
				}
			}
		});

		// PARALLAX IMAGES
		/* detect touch */
		if('ontouchstart' in window){
			document.documentElement.className = document.documentElement.className + ' touch';
			// $('.scrollme').removeClass('scrollme');
		}
		if(!$('html').hasClass('touch')){
			/* background fix */
			$('.parallax').css('background-attachment', 'fixed');
		}
		
		if(!$('html').hasClass('touch')){
			$(window).scroll(parallaxPosition);
			parallaxPosition();
		}

		$(window).resize(function() {
			var newWidth = $(window).width();
			if(newWidth !== window_width) {
				windowSize();	
				go_fullscreen();
				get_screen_size(screen_size);
				if(!$('html').hasClass('touch'))
					parallaxPosition();
			}
		});


	});

})(jQuery);