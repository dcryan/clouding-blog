			</main>
			<?php if( function_exists('icl_get_languages')):
				$languages = icl_get_languages('skip_missing=0&orderby=code');
				$prefix_field = '';
				if(!empty($languages)){
					foreach($languages as $l){
						if($l['active']){
							$prefix_field = $l['language_code'];
							break;
						}
					}
					$title_footer = get_field('option_title_footer_' . $prefix_field, 'option');
					$text_link_footer = get_field('option_text_link_footer_' . $prefix_field, 'option');
					$link_footer = esc_url( get_field('option_link_footer_' . $prefix_field, 'option') );
					$address_footer = get_field('option_address_footer_' . $prefix_field, 'option');
					if( $title_footer or ($text_link_footer and $link_footer) or $address_footer ): ?>
						<footer id="footer">
							<div class="center">
								<?php if( $title_footer or ($text_link_footer and $link_footer) ): ?>
									                  <div class="terms-holder">
										<?php if($title_footer){
											echo '<span>' . $title_footer . '</span>';
										}
										if($text_link_footer and $link_footer)
											echo '<a href="' . esc_url($link_footer) . '">' . $text_link_footer . '</a>';
										?>
									</div>
                  								<?php endif;
								if($address_footer){
									echo '<address>' . $address_footer . '</address>';
								} ?>
							</div>
						</footer>
					<?php endif;
				}
			endif; ?>
		</div>
		<!--<script type="text/javascript">var switchTo5x=true;</script>
		<script type="text/javascript" src="https://ws.sharethis.com/button/buttons.js"></script>
		<script type="text/javascript">stLight.options({publisher: "c1bcc98d-82f8-42b9-9d15-66cbad590de8"}); </script>-->
		<?php wp_footer(); ?>



	</body>
</html>
