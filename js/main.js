jQuery(document).ready(function ($) {
	var position, direction, previous

	$(window).scroll(function () {
		if ($(this).scrollTop() >= position) {
			direction = 'down'
			if (direction !== previous) {
				$('#tog-menu').addClass('hide')

				previous = direction
			}
		} else {
			direction = 'up'
			if (direction !== previous) {
				$('#tog-menu').removeClass('hide')
				previous = direction
			}
		}
		position = $(this).scrollTop()
	})
}) //end of jquery

//USE  IIFE
// ( function( $ ) {
// 	var position, direction, previous

// 	$(window).scroll(function () {
// 		if ($(this).scrollTop() >= position) {
// 			direction = 'down'
// 			if (direction !== previous) {
// 				$('#tog-menu').addClass('hide')

// 				previous = direction
// 			}
// 		} else {
// 			direction = 'up'
// 			if (direction !== previous) {
// 				$('#tog-menu').removeClass('hide')
// 				previous = direction
// 			}
// 		}
// 		position = $(this).scrollTop()
// 	})
// } )( jQuery );

// Hide/show toggle button on scroll

// var prevScrollpos = window.pageYOffset;

// window.onscroll = function() {

// 	var currentScrollPos = window.pageYOffset;

// 	if (prevScrollpos > currentScrollPos) {

// 		document.querySelector('#tog-menu').classList.remove('hide');

// 	} else {
// 		document.querySelector('#tog-menu').classList.add('hide');
// 	}

// 	prevScrollpos = currentScrollPos;

// }
