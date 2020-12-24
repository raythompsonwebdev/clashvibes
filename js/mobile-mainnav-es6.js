var toggleNav = document.querySelector('#toggle-nav')

//main nav
toggleNav.addEventListener('click', function (event) {
	event.preventDefault()

	// create menu variables
	let slideoutMenu = document.querySelector('#mobileNav')

	let slideoutMenuHeight = slideoutMenu.offsetHeight

	// toggle open class
	slideoutMenu.classList.toggle('open')

	slideoutMenu.style.transition = 'all 0.3s ease-in 0s'

	// slide menu
	if (slideoutMenu.classList.contains('open')) {
		slideoutMenu.style.top = '0px'
	} else {
		slideoutMenu.style.transition = 'all 0.3s ease-in 0s'
		slideoutMenu.style.top = -slideoutMenuHeight + 'px'
	}
})
