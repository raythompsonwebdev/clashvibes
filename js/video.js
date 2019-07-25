	jQuery(document).ready(function ($) {

		//Stop if HTML5 video isn't supported
		if (!document.createElement('video').canPlayType) {
			$("#videocontrols").hide();
			return;
		}

		var video = document.querySelector('video');

		var play = document.getElementById('play_toggle');
		
		play.addEventListener('click', function (e) {

			e.preventDefault;

			if (video.paused) {
				video.play();
				video.preload = 'metadata';
				$(this).html('<i class="fa fa-pause" aria-hidden="true" title="Pause"></i>');
			} else {
				video.pause();
				$(this).html('<i class="fa fa-play" aria-hidden="true" title="Play"></i>');
			}
		});
	
		

	}); //end of jquery