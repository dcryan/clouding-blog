jQuery(function animateDropdowns() {
		// We have to do it this way because there's an existing bug
		// in chrome that can temporarily display :hover attributes.
		//
		// see https://stackoverflow.com/questions/14389566/stop-css-transition-from-firing-on-page-load
		// tried workaround of empty script block, but still seeing the problem.
		jQuery('.nav-row__nav-item').mouseover(function () {
			jQuery(this).addClass('active');
		});

		jQuery('.nav-row__nav-item').mouseout(function () {
			jQuery(this).removeClass('active');
		});
});

jQuery(function mobileMenuFunctionality() {

	jQuery('.hamburger').click(function () {
		jQuery('.hamburger').toggleClass('active');
		jQuery('.mobile-menu').toggleClass('active');

		if (!jQuery('.hamburger').hasClass('active')) {
			// Remove after 300ms because we don't want the collapsing animation
			// to be visible when closing the full menu.
			setTimeout(function () {
				jQuery('.mobile-menu__item').removeClass('active');
			}, 300);
		}
	});

	// Select all caracteristicas menus (including the floating header)
	// and open both on click.
	const caracteristicas = jQuery('.js-mobile-menu__header-caracteristicas');
	const nosotros = jQuery('.js-mobile-menu__header-nosotros');
	const soporte = jQuery('.js-mobile-menu__header-soporte');

	caracteristicas.click(function () {
		// Close other tabs
		nosotros.parent().removeClass('active');
		soporte.parent().removeClass('active');

		caracteristicas.parent().toggleClass('active');
	});

	nosotros.click(function () {
		// Close other tabs
		caracteristicas.parent().removeClass('active');
		soporte.parent().removeClass('active');

		nosotros.parent().toggleClass('active');
	});

	soporte.click(function () {
		// Close other tabs
		caracteristicas.parent().removeClass('active');
		nosotros.parent().removeClass('active');

		soporte.parent().toggleClass('active');
	});


	jQuery('.px-global-nav-dropdown').click(function () {
		jQuery('.hamburger').removeClass('active');
		jQuery('.mobile-menu').removeClass('active');

		// Remove after 300ms because we don't want the collapsing animation
		// to be visible when closing the full menu.
		setTimeout(function () {
			jQuery('.mobile-menu__item').removeClass('active');
		}, 300);
	});

});