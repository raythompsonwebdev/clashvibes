const toggleSide = document.querySelector("#toggle-side");

// side nav
if (toggleSide) {
	toggleSide.addEventListener("click", (event) => {
		event.preventDefault();

		// create menu variables
		const slideoutSideMenu = document.querySelector("#secondary");

		// eslint-disable-next-line prefer-destructuring
		const slideoutSideMenuWidth = slideoutSideMenu.offsetWidth;

		// toggle open class
		slideoutSideMenu.classList.toggle("open");

		slideoutSideMenu.style.transition = "all 0.3s ease-in 0s";

		// slide menu
		if (slideoutSideMenu.classList.contains("open")) {
			slideoutSideMenu.style.left = "0px";
		} else {
			slideoutSideMenu.style.transition = "all 0.3s ease-in 0s";
			slideoutSideMenu.style.left = `${-slideoutSideMenuWidth}px`;
		}
	});
}
