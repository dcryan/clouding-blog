<?php get_header(); ?>
	<div class="main-holder">
		<div class="center">
			<div id="content">
				<div class="content-holder">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'blocks/content', get_post_type() ); ?>
						<?php endwhile; ?>
						<?php if( function_exists('wp_pagenavi') ){
							wp_pagenavi();
						}else{
							get_template_part( 'blocks/pager' );
						} ?>
					<?php else : ?>
						<?php get_template_part( 'blocks/not_found' ); ?>
					<?php endif; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>