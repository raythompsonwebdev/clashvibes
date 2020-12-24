var toggleSide = document.querySelector('#sidebar_toggle')

//side nav
toggleSide.addEventListener('click', function (event) {
	event.preventDefault()

	// create menu variables
	var slideoutSideMenu = document.querySelector('#clashvibes_left_column')

	var slideoutSideMenuWidth = slideoutSideMenu.offsetWidth

	// toggle open class
	slideoutSideMenu.classList.toggle('open')

	slideoutSideMenu.style.transition = 'all 0.3s ease-in 0s'

	// slide menu
	if (slideoutSideMenu.classList.contains('open')) {
		slideoutSideMenu.style.left = '0px'
	} else {
		slideoutSideMenu.style.transition = 'all 0.3s ease-in 0s'
		slideoutSideMenu.style.left = -slideoutSideMenuWidth + 'px'
	}
})
