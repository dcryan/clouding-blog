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

jQuery(function () {

	jQuery('.hamburger').click(function () {
		jQuery(this).toggleClass('active');
		jQuery('.mobile-menu').toggleClass('active');
	});

	jQuery('.mobile-menu__header-container').click(function () {
		jQuery(this).parent().toggleClass('active');
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