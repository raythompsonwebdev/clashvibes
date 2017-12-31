
<?php
 echo <<<_END

 <div id="jp_container_2" class="jp-video jp-video-270p" role="application" aria-label="media player">
 <div class="jp-type-single">
   <div id="jquery_jplayer_2" class="jp-jplayer"></div>
   <div class="jp-gui">
     <div class="jp-video-play">
       <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
     </div>
     <div class="jp-interface">
       <div class="jp-progress">
         <div class="jp-seek-bar">
           <div class="jp-play-bar"></div>
         </div>
       </div>
       <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
       <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
       <div class="jp-controls-holder">
         <div class="jp-controls">
           <button class="jp-play" role="button" tabindex="0">play</button>
           <button class="jp-stop" role="button" tabindex="0">stop</button>
         </div>
         <div class="jp-volume-controls">
           <button class="jp-mute" role="button" tabindex="0">mute</button>
           <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
           <div class="jp-volume-bar">
             <div class="jp-volume-bar-value"></div>
           </div>
         </div>
         <div class="jp-toggles">
           <button class="jp-repeat" role="button" tabindex="0">repeat</button>
           <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
         </div>
       </div>
       <div class="jp-details">
         <div class="jp-title" aria-label="title">&nbsp;</div>
       </div>
     </div>
   </div>
   <div class="jp-no-solution">
     <span>Update Required</span>
     To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
   </div>
 </div>
</div>

_END;
?>