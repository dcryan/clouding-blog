<?php $sq = get_search_query() ? get_search_query() : __( '', 'clouding' ); ?>
<form method="get" class="search-form" action="<?php echo home_url(); ?>" >
	<fieldset>
		<input type="search" name="s" placeholder="<?php _e( 'Search term', 'clouding' ); ?>" value="<?php echo $sq; ?>" />
		<input type="submit" value="<?php _e( 'search', 'clouding' ); ?>" />
	</fieldset>
</form>