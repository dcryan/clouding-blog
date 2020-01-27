<?php get_header(); ?>
<div class="main-holder">
	<div class="center">
		<div id="content">
			<div class="content-holder">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_title( '<div class="title"><h1>', '</h1></div>' ); ?>
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Edit', 'clouding' ) ); ?>
				<?php endwhile; ?>
				<?php wp_link_pages(); ?>
				<?php comments_template(); ?>
			</div>
		</div>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>