

jQuery(document).ready(function($) {

	var position, direction, previous;

	$(window).scroll(function(){
		
		if( $(this).scrollTop() >= position ){
			direction = 'down';
			if(direction !== previous){
		$('button#toggle-nav').addClass('hide');
		$('button#toggle-side').addClass('hide-side');
				previous = direction;
			}
		} else {
			direction = 'up';
			if(direction !== previous){
		$('button#toggle-nav').removeClass('hide');
		$('button#toggle-side').removeClass('hide-side');
				previous = direction;
			}
	}
	
		position = $(this).scrollTop();
	});

	$('button#toggle-nav').on('click', function(event){

		event.preventDefault();

		// create menu variables
		var slideoutMenu = $('nav');
		var slideoutMenuWidth = $('nav').width();

		// toggle open class
		slideoutMenu.toggleClass("open");

		// slide menu
		if (slideoutMenu.hasClass("open")) {
		slideoutMenu.animate({
			left: "0px"
		});	
		} else {
		slideoutMenu.animate({
			left: -slideoutMenuWidth + 1
		}, 450);	
		}

	});

	$('button#toggle-side').on('click', function(event){
		
		event.preventDefault();

		// create menu variables
		var slideoutMenu = $('#clashvibes_left_column');
		var slideoutMenuWidth = $('#clashvibes_left_column').width();

		// toggle open class
		slideoutMenu.toggleClass("open");

		// slide menu
		if (slideoutMenu.hasClass("open")) {
		slideoutMenu.animate({
			left: "0px"
			
		});	
		} else {
		slideoutMenu.animate({
			left: -slideoutMenuWidth
		}, 250);	
		}
				
		

	});

});//end of jquery


