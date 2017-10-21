$(document).ready(function() {
	$(document).foundation();

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
	});

	$('.testimonial-slider').slick({
		slidesToShow: 1,
		infinite: true,
		arrows: true,
		prevArrow: '<button type="button" class="slick-prev"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-35.000000, -1392.000000)" stroke="#9B9B9B" stroke-width="2"><g id="Group-Copy-2" transform="translate(36.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
		nextArrow: '<button type="button" class="slick-next"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-1354.000000, -1392.000000)" stroke="#9B9B9B" stroke-width="2"><g id="Group-Copy-3" transform="translate(1376.500000, 1414.500000) rotate(-180.000000) translate(-1376.500000, -1414.500000) translate(1355.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
	});
});