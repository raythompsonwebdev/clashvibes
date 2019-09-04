

  var position, direction, previous;

  var toggleNav = document.getElementById("toggle-nav");
  var toggleSide = document.getElementById("toggle-side");

  window.scroll(function() {

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
  });



  toggleNav.addEventListener("click", function(event) {

    event.preventDefault();

    // create menu variables
    var slideoutMenu = document.querySelector("nav");
    var slideoutMenuWidth = slideoutMenu.style.width;

    // toggle open class
    slideoutMenu.classList.toggle("open");

    // slide menu
    if (slideoutMenu.classList.contains("open")) {

      slideoutMenu.animate({
        left: "0px"
      });
    } else {
      slideoutMenu.animate(
        {
          left: -slideoutMenuWidth + 1
        },
        450
      );
    }
  });

  toggleSide.addEventListener("click", function(event) {

    event.preventDefault();

    // create menu variables
    var slideoutSideMenu = document.getElementById("clashvibes_left_column");
    var slideoutSideMenuWidth = slideoutSideMenu.style.width;

    // toggle open class
    slideoutSideMenu.toggle("open");

    // slide menu
    if (slideoutSideMenu.classList.contains("open")) {
      slideoutSideMenu.animate({
        left: "0px"
      });
    } else {
      slideoutSideMenu.animate(
        {
          left: -slideoutSideMenuWidth
        },
        250
      );
    }
  });


