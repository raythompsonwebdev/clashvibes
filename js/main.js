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
})




