// eslint-disable-next-line no-unused-vars
/* global wp,  */
/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

// eslint-disable-next-line func-names
(function () {
  // Site title and description.
  wp.customize("blogname", (value) => {
    value.bind((to) => {
      // eslint-disable-next-line no-undef
      $(".site-title a").text(to);
    });
  });
  wp.customize("blogdescription", (value) => {
    value.bind((to) => {
      // eslint-disable-next-line no-undef
      $(".site-description").text(to);
    });
  });

  // Header text color.
  wp.customize("header_textcolor", (value) => {
    value.bind((to) => {
      if (to === "blank") {
        // eslint-disable-next-line no-undef
        $(".site-title, .site-description").css({
          clip: "rect(1px, 1px, 1px, 1px)",
          position: "absolute",
        });
      } else {
        // eslint-disable-next-line no-undef
        $(".site-title, .site-description").css({
          clip: "auto",
          position: "relative",
        });
        // eslint-disable-next-line no-undef
        $(".site-title a, .site-description").css({
          color: to,
        });
      }
    });
  });
})();
