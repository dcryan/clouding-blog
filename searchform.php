<?php $sq = get_search_query() ? get_search_query() : __('', 'clouding'); ?>
<form method="get" class="search-form"
	action="<?php echo home_url(); ?>">
	<fieldset>

		<div id="search-input" class="form-input form-input--has-button">
			<img class="form-input__icon"
				src="<?php bloginfo('template_url'); ?>/images/magnifying-glass.svg"
				alt="mail icon">
			<input type="text" class="form-input__element"
				placeholder="<?php _e('Search term', 'clouding'); ?>"
				name="s" value="<?php echo $sq; ?>" />
			<div class="form-input__right-padding"></div>
			<div class="form-input__bottom-border"></div>
			<button class="form-input__button" type="submit">
				<img class="form-input__button-chevron"
					src="<?php bloginfo('template_url'); ?>/images/down-chevron-white.svg"
					alt="chevron">
			</button>
		</div>

	</fieldset>
</form>