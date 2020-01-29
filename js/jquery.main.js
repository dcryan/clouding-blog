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