/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

(function () {
  const siteNavigation = document.getElementById("site-navigation");

  // Return early if the navigation don't exist.
  if (!siteNavigation) {
    return;
  }

  // eslint-disable-next-line prefer-destructuring
  const button = siteNavigation.getElementsByTagName("button")[0];

  // Return early if the button don't exist.
  if (typeof button === "undefined") {
    return;
  }
  // eslint-disable-next-line prefer-destructuring
  const menu = siteNavigation.getElementsByTagName("ul")[0];

  // Hide menu toggle button if menu is empty and return early.
  if (typeof menu === "undefined") {
    button.style.display = "none";
    return;
  }

  if (!menu.classList.contains("nav-menu")) {
    menu.classList.add("nav-menu");
  }

  // Toggle the .toggled class and the aria-expanded value each time the button is clicked.
  button.addEventListener("click", () => {
    siteNavigation.classList.toggle("toggled");

    if (button.getAttribute("aria-expanded") === "true") {
      button.setAttribute("aria-expanded", "false");
    } else {
      button.setAttribute("aria-expanded", "true");
    }
  });

  // Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
  // eslint-disable-next-line prefer-destructuring
  const doc = document.ownerDocument;
  const win = doc.defaultView || doc.parentWindow;

  win.addEventListener("click", (event) => {
    const isClickInside = siteNavigation.contains(event.target);

    if (!isClickInside) {
      siteNavigation.classList.remove("toggled");
      button.setAttribute("aria-expanded", "false");
    }
  });

  /**
   * Sets or removes .focus class on an element.
   *
   *
   * @param {Object} event
   */
  // eslint-disable-next-line func-style
  function toggleFocus(event) {
    if (event.type === "focus" || event.type === "blur") {
      let self = this;
      // Move up through the ancestors of the current link until we hit .nav-menu.
      while (!self.classList.contains("nav-menu")) {
        // On li elements toggle the class .focus.
        if (self.tagName.toLowerCase() === "li") {
          self.classList.toggle("focus");
        }
        // eslint-disable-next-line prefer-destructuring
        self = self.parentNode;
      }
    }

    if (event.type === "touchstart") {
      // eslint-disable-next-line prefer-destructuring
      const menuItem = this.parentNode;
      event.preventDefault();
      // eslint-disable-next-line no-restricted-syntax
      for (const link of menuItem.parentNode.children) {
        if (menuItem !== link) {
          link.classList.remove("focus");
        }
      }
      menuItem.classList.toggle("focus");
    }
  }

  // Get all the link elements within the menu.
  const links = Array.from(menu.getElementsByTagName("a"));

  // Get all the link elements with children within the menu.
  const linksWithChildren = menu.querySelectorAll(
    ".menu-item-has-children > a, .page_item_has_children > a"
  );

  // Toggle focus each time a menu link is focused or blurred.
  // eslint-disable-next-line no-restricted-syntax
  for (const link of links) {
    link.addEventListener("focus", toggleFocus, true);
    link.addEventListener("blur", toggleFocus, true);
  }

  // Toggle focus each time a menu link with children receive a touch event.
  // eslint-disable-next-line no-restricted-syntax
  for (const link of linksWithChildren) {
    link.addEventListener("touchstart", toggleFocus, false);
  }
})();
