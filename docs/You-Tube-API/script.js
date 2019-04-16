
$(document).ready(function(){

  var channelTitle = 'MrBullitan';

  $.get(
    'https://www.googleapis.com/youtube/v3/channels', {
      part:'contentDetails',
      forUsername:channelTitle,
      key: 'AIzaSyDL65vupvyPVLWGnzBTWLOtkCFX8rQtIgs'},//

      function(data){

        $.each(data.items, function(i, item){

         // console.log(item);

          var pid = item.contentDetails.relatedPlaylists.uploads;

          getVids(pid);

        })//each
      }//function

  );//get

  function getVids(pid){
    $.get(
      "https://www.googleapis.com/youtube/v3/playlistItems",{
        part:'snippet',
        maxResults: 10,
        playlistId:pid,
        key:'AIzaSyDL65vupvyPVLWGnzBTWLOtkCFX8rQtIgs'},////Api Key

        function(data){

          var output;

          $.each(data.items, function( i, item){

            console.log(item);

            var VideoId = item.snippet.resourceId.VideoId;
            var videTitle = item.snippet.title;

            output = '<li><iframe src\"//www.youtube.cmo/embed/'+VideoId+'\"></iframe></li>';

            //Append to results listStyleType
            $('#results').append(output);


          })//each
        }//function

    );//get

  }//function


});
