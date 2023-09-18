/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
(function () {
	const isIe = /(trident|msie)/i.test(navigator.userAgent);

	const { doc } = { ...document.ownerDocument };
	const win = doc.defaultView || doc.parentWindow;

	if (isIe && document.getElementById && win.addEventListener) {
		win.addEventListener(
			"hashchange",
			() => {
				// eslint-disable-next-line no-restricted-globals
				const id = location.hash.substring(1);
				let element = null;

				if (!/^[A-z0-9_-]+$/.test(id)) {
					return;
				}

				element = document.getElementById(id);

				if (element) {
					if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
						element.tabIndex = -1;
					}

					element.focus();
				}
			},
			false
		);
	}
})();
