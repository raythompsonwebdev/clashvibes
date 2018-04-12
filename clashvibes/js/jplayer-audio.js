jQuery(document).ready(function($){   

    $("#jquery_jplayer_1").jPlayer({

        ready: function () {

            $(this).jPlayer(

                "setMedia", {

                    title: "Yes",
                    m4a: "http://localhost/wordpress/clashvibes/wp-content/uploads/sites/2/2017/11/Jaro-Bass-Oddessey-1996-New-York-Part4-snippet.m4a",
                    oga: "http://localhost/wordpress/clashvibes/wp-content/uploads/sites/2/2017/11/Jaro-Bass-Oddessey-1996-New-York-Part4-snippet.ogg",
                    mp3: "http://localhost/wordpress/clashvibes/wp-content/uploads/sites/2/2017/11/Jaro-Bass-Oddessey-1996-New-York-Part4-snippet.mp3",
                     
                    poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"

                });
            },
            cssSelectorAncestor: "#jp_container_1",
            cssSelector: {
              videoPlay: ".jp-video-play",
              play: ".jp-play",
              pause: ".jp-pause",
              stop: ".jp-stop",
              seekBar: ".jp-seek-bar",
              playBar: ".jp-play-bar",
              mute: ".jp-mute",
              unmute: ".jp-unmute",
              volumeBar: ".jp-volume-bar",
              volumeBarValue: ".jp-volume-bar-value",
              volumeMax: ".jp-volume-max",
              playbackRateBar: ".jp-playback-rate-bar",
              playbackRateBarValue: ".jp-playback-rate-bar-value",
              currentTime: ".jp-current-time",
              duration: ".jp-duration",
              title: ".jp-title",
              fullScreen: ".jp-full-screen",
              restoreScreen: ".jp-restore-screen",
              repeat: ".jp-repeat",
              repeatOff: ".jp-repeat-off",
              gui: ".jp-gui",
              noSolution: ".jp-no-solution"
            },
            swfPath: "/js/jPlayer-2.9.2/dist/jplayer/jquery.jplayer.swf",
            solution:"flash, html",
            supplied: "m4a, oga, mp3",
            useStateClassSkin: true,
            autoBlur: false,
            smoothPlayBar: true,
            keyEnabled: true,
            remainingDuration: true,
            toggleDuration: true
            
            
    });
});