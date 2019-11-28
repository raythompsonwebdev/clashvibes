

  /*
  var position, direction, previous;
 
  window.onscroll = function() {

      if (this.scrollTop() >= position) {

      direction = "down";
      if (direction !== previous) {
        toggleNav.ClassList.add("hide");
        toggleSide.ClassList.add("hide-side");
        previous = direction;
      }
    } else {
      direction = "up";
      if (direction !== previous) {

         toggleNav.ClassList.remove("hide");
         toggleSide.ClassList.remove("hide-side");

        previous = direction;
      }
    }
    position = this.scrollTop();
  };
*/
  var toggleNav = document.querySelector("#toggle-nav");
  var toggleSide = document.querySelector("#toggle-side");
  


  //main nav
  toggleNav.addEventListener("click", function(event) {

    event.preventDefault();

    // create menu variables
    var slideoutMenu = document.querySelector("#mainNav");
        
    var slideoutMenuHeight = slideoutMenu.offsetHeight;
	
	// toggle open class
    slideoutMenu.classList.toggle("open");

    slideoutMenu.style.transition = 'all 0.3s ease-in 0s';

    // slide menu
    if (slideoutMenu.classList.contains("open")) {

      slideoutMenu.style.top = "0px";
      

    } else {

      
      slideoutMenu.style.transition = 'all 0.3s ease-in 0s';
      slideoutMenu.style.top = -slideoutMenuHeight + 'px';
    }


  });

  
  //side nav
  toggleSide.addEventListener("click", function(event) {

    event.preventDefault();

    // create menu variables
    var slideoutSideMenu = document.querySelector("#clashvibes_left_column");
    
    var slideoutSideMenuWidth = slideoutSideMenu.offsetWidth;
	
	// toggle open class
    slideoutSideMenu.classList.toggle("open");

    slideoutSideMenu.style.transition = 'all 0.3s ease-in 0s';

    // slide menu
    if (slideoutSideMenu.classList.contains("open")) {

      slideoutSideMenu.style.left = "0px";
      

    } else {

      
      slideoutSideMenu.style.transition = 'all 0.3s ease-in 0s';
      slideoutSideMenu.style.left = -slideoutSideMenuWidth + 'px';
    }
  });


