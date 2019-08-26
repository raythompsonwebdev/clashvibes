jQuery(document).ready(function ($) {

	//Stop if HTML5 video isn't supported
	if (!document.createElement('video').canPlayType) {
		$("#video_controls").hide();
		return;
	}

	var video = document.querySelector("video");

	// Play/Pause ============================//

	$("#play_toggle").on("click", function () {

					
		if (video.paused) {
			video.play();
			video.preload = 'metadata';
			$(this).html('<i class="fa fa-pause" aria-hidden="true" title="Pause"></i>');
		} else {
			video.pause();
			$(this).html('<i class="fa fa-play" aria-hidden="true" title="Play"></i>');
		}
	});

	$("#rewind").bind("click", function () {
		$(this).html('<i class="fa fa-backward" aria-hidden="true" title="Backward"></i>');
		video.currentTime -= 10.0;

	});

	$("#forward").bind("click", function () {
		$(this).html('<i class="fa fa-forward" aria-hidden="true" title="Forward"></i>');
		video.currentTime += 10.0;

	});

	// Play Progress ============================//
	$(video).bind("timeupdate", function () {
		var timePercent = (this.currentTime / this.duration) * 100;
		$("#play_progress").css({
			width: timePercent + "%"
		});
	});

	// Load Progress ============================//
	$(video).bind("progress", function () {
		updateLoadProgress();
	});
	$(video).bind("loadeddata", function () {
		updateLoadProgress();
	});
	$(video).bind("canplaythrough", function () {
		updateLoadProgress();
	});
	$(video).bind("playing", function () {
		updateLoadProgress();
	});

	function updateLoadProgress() {
		if (video.buffered.length > 0) {
			var percent = (video.buffered.end(0) / video.duration) * 100;
			$("#load_progress").css({
				width: percent + "%"
			})
		}
	}

	// Time Display =============================//
	$(video).bind("timeupdate", function () {
		$("#current_time").html(formatTime(this.currentTime));
	});
	$(video).bind("durationchange", function () {
		$("#duration").html(formatTime(this.duration));
	});

	function formatTime(seconds) {
		var seconds = Math.round(seconds);
		var minutes = Math.floor(seconds / 60);
		// Remaining seconds
		seconds = Math.floor(seconds % 60);
		// Add leading Zeros
		minutes = (minutes >= 10) ? minutes : "0" + minutes;
		seconds = (seconds >= 10) ? seconds : "0" + seconds;
		return minutes + ":" + seconds;
	}

	//volume
	var volume = document.getElementById('volume');

	$(volume).bind("change", function (event) {
		video.volume = event.target.value;
	});

	var seek = document.getElementById('seek'),
		playback = document.getElementById('playback');

	//update
	function updateseekmax(event) {
		if (event.target.duration) {
			$(seek).max = event.target.duration;
		}
	}


	function updateplaybackmax(event) {
		if (event.target.duration) {
			$(playback).max = event.target.duration;
		}
	}

	$(video).bind('durationchange', updateseekmax);
	$(video).bind('durationchange', updateplaybackmax);

	//seeker
	function seekhandler(event) {
		$(video).currentTime = event.target.value;
		$(playback).value = event.target.value;
	}

	$(seek).bind('change', seekhandler);

	

}); //end of jquery
