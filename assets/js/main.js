/* eslint-disable-next-line no-undef */

jQuery(document).ready(($) => {
  let position;
  let direction;
  let previous;

  // eslint-disable-next-line func-names
  $(window).scroll(function () {
    // eslint-disable-next-line no-invalid-this
    if ($(this).scrollTop() >= position) {
      direction = "down";
      if (direction !== previous) {
        $("#tog-menu").addClass("hide");

        previous = direction;
      }
    } else {
      direction = "up";
      if (direction !== previous) {
        $("#tog-menu").removeClass("hide");
        previous = direction;
      }
    }
    // eslint-disable-next-line no-invalid-this
    position = $(this).scrollTop();
  });
});
