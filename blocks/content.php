<article class="post">
	<?php if ( is_single() ) :
		the_title( '<h1>', '</h1>' );
	else :
		the_title( '<h2><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif; ?>
	<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php _e( 'Published ', 'clouding' ); the_time( 'd M, Y' ) ?></time>
	<div class="text-block">
		<?php if( has_post_thumbnail() ): 
			$img_id = get_post_thumbnail_id(get_the_ID());
			$img_array = wp_get_attachment_image_src( $img_id, 'thumbnail_220x165' );
			$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>
			<img class="alignleft" src="<?php echo $img_array[0]; ?>" alt="<?php echo $alt_text; ?>" />
		<?php endif; ?>
		<div class="text-holder">
			<?php the_excerpt();
			$link_text = __( 'Read more', 'clouding' );
			echo '<a href="' . get_permalink() . '" class="more">' . $link_text . '</a>'; ?>
		</div>
		<?php wp_link_pages(); ?>
	</div>
	<?php //get_template_part( 'blocks/sharethis' ); ?>
</article>