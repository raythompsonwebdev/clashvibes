

jQuery(document).ready(function($) {
  
$('figure.thumbaud').on('hover', function(){
    
    var element = this;
        
    $(element).find('span.Morebutton').slideToggle(250).css({'display': 'block', 'top': '0px', 'opacity': '1'});

});

$('figure.thumbvid').on('hover', function(){
    
  var element = this;
      
  $(element).find('span.Morebutton').slideToggle(250).css({'display': 'block', 'top': '0px', 'opacity': '1'});

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

$('button#side-bar-btn').on('click', function(event){
    
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



