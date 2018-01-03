$(document).ready(function() {
	$(document).foundation();

	$('.match-height').matchHeight(); 
	$('.match-height-all').matchHeight({
		byRow: false,
	})

	var windowHeight = window.innerHeight;

	$('.hero-slide').css({
		height: windowHeight*0.66 + 'px',
	});

	$('.featured-meal-slider').slick({
		slidesToShow: 3,
		infinite: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-35.000000, -1392.000000)" stroke="#9B9B9B" stroke-width="2"><g id="Group-Copy-2" transform="translate(36.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
		nextArrow: '<button type="button" class="slick-next"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-1354.000000, -1392.000000)" stroke="#9B9B9B" stroke-width="2"><g id="Group-Copy-3" transform="translate(1376.500000, 1414.500000) rotate(-180.000000) translate(-1376.500000, -1414.500000) translate(1355.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					arrows: false,
					slidesToShow: 2,
					dots: true,
				}
			},
			{
				breakpoint: 640,
				settings: {
					arrows: false,
					slidesToShow: 1,
					dots: true,
				}
			}
		]
	});

	$('.featured-meal-slider').on('beforeChange', function(slick, currentSlide, nextSlide) {
		$('.match-height').matchHeight();
	});

	$('.testimonial-slider').slick({
		slidesToShow: 1,
		infinite: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-35.000000, -1392.000000)" stroke="#9B9B9B" stroke-width="2"><g id="Group-Copy-2" transform="translate(36.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
		nextArrow: '<button type="button" class="slick-next"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-1354.000000, -1392.000000)" stroke="#9B9B9B" stroke-width="2"><g id="Group-Copy-3" transform="translate(1376.500000, 1414.500000) rotate(-180.000000) translate(-1376.500000, -1414.500000) translate(1355.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
	});
	$('.top-posts-slider').slick({
		slidesToShow: 3,
		infinite: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-35.000000, -1392.000000)" stroke="#9B9B9B" stroke-width="2"><g id="Group-Copy-2" transform="translate(36.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
		nextArrow: '<button type="button" class="slick-next"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-1354.000000, -1392.000000)" stroke="#9B9B9B" stroke-width="2"><g id="Group-Copy-3" transform="translate(1376.500000, 1414.500000) rotate(-180.000000) translate(-1376.500000, -1414.500000) translate(1355.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
	});
	$('.top-posts-slider').on('beforeChange', function(slick, currentSlide, nextSlide) {
		$('.match-height').matchHeight();
	});
	
	$('.foundation-datepicker').fdatepicker({
		closeButton: true, 
		// leftArrow: '<',
		// rightArrow: '>',
	});
	$('input.qty').change(function(){
		console.log('Changed');
		var number = $(this).val();
		console.log(number);
		document.getElementsByClassName('add_to_cart_button')[0].dataset.quantity = number;
	});
	if ($('body').hasClass('home') || $('body').hasClass('page-id-58') || $('body').hasClass('page-id-499')) {
		// var controller = new ScrollMagic.Controller({
		// 	globalSceneOptions: {
		// 		triggerHook: 'onEnter',
		// 		duration: '200%'
		// 	}
		// });

		// new ScrollMagic.Scene({triggerElement: '#home_hero'})
		// .setTween('#hero_health_happiness', {y: '40%'})
		// .addIndicators()
		// .addTo(controller);
		// var controller = new ScrollMagic.Controller();
		// var scene = new ScrollMagic.Scene({triggerElement: '#no_plate_like_home', triggerHook: 0.5, reverse: false})
		// 	.setClassToggle('#no_plate_like_home', 'basil-in')
		// 	.addIndicators()
		// 	.addTo(controller);
		
		// Line Draw

		// Position Line
		var lineTop = $('.order').position();
		var lineHeight = $('.order').innerHeight() + $('.heat').innerHeight() + ($('.enjoy').innerHeight()/2);
		$('.line-draw-wrapper').css({
			top: (lineTop.top + ($('.order').innerHeight() * 0.5)) + 'px',
			height: (lineHeight - ($('.order').innerHeight() * 0.5)) + 'px',
		});
		function pathPrepare($el) {
			var lineLength = $el[0].getTotalLength();
			$el.css("stroke-dasharray", lineLength);
			$el.css("stroke-dashoffset", lineLength);
		}

		var $theLine = $('path#line_draw');

		pathPrepare($theLine);

		var controller = new ScrollMagic.Controller();

		var tween = new TimelineMax()
			.add(TweenMax.to($theLine, 0.9, {strokeDashoffset: 0, ease:Linear.easeNone}));

		var scene = new ScrollMagic.Scene({triggerElement: '#no_plate_like_home', duration: lineHeight + 'px', tweenChanges: true})
			.setTween(tween)
			// .addIndicators()
			.addTo(controller);

		var offsets = $('.order').innerHeight() * 0.5;

		var orderToggle = new ScrollMagic.Scene({triggerElement: '#no_plate_like_home'})
			.setClassToggle('.order', 'active')
			// .addIndicators()
			.addTo(controller);
		var heatToggle = new ScrollMagic.Scene({triggerElement: '.heat', offset: -offsets })
			.setClassToggle('.heat', 'active')
			// .addIndicators()
			.addTo(controller);
		var enjoyToggle = new ScrollMagic.Scene({triggerElement: '.enjoy', offset: -offsets})
			.setClassToggle('.enjoy', 'active')
			// .addIndicators()
			.addTo(controller);

		var homeHeroRellax = new Rellax('#hero_health_happiness', {
			speed: -5,
			center: false,
			round: false,
			vertical: true,
			horizontal: false
		});
		var homeLeftRellax = new Rellax('#hero_left', {
			speed: -2,
			center: false,
			round: false,
			vertical: true,
			horizontal: false,
		});
		var homeLeftRellax = new Rellax('#hero_right', {
			speed: 4,
			center: false,
			round: false,
			vertical: true,
			horizontal: false,
		});
	}
	if ($('div').hasClass('fade-in')) {
		var fadeInController = new ScrollMagic.Controller();
		$('.fade-in').each(function() {
			var fadeIn = new ScrollMagic.Scene({
				triggerElement: this.children[0],
				triggerHook: 0.8,
			})
			.setClassToggle(this, 'in')
			// .addIndicators()
			.addTo(fadeInController);
		});
	}
	if ($('div').hasClass('fade-from-left')) {
		var fadeFromLeftController = new ScrollMagic.Controller();
		$('.fade-from-left').each(function() {
			var fadeInLeft = new ScrollMagic.Scene({
				triggerElement: this.children[0],
				triggerHook: 0.8,
			})
			.setClassToggle(this, 'in')
			// .addIndicators()
			.addTo(fadeFromLeftController);
		});
	}	
	if ($('div').hasClass('fade-from-right')) {
		var fadeFromRightController = new ScrollMagic.Controller();
		$('.fade-from-right').each(function() {
			var fadeInRight = new ScrollMagic.Scene({
				triggerElement: this.children[0],
				triggerHook: 0.8,
			})
			.setClassToggle(this, 'in')
			// .addIndicators()
			.addTo(fadeFromRightController);
		});
	}	
});