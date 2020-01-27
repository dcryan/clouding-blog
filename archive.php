<?php get_header(); ?>
<div class="main-holder">
	<div class="center">
		<div id="content">
			<div class="content-holder">
				<?php if ( have_posts() ) : ?>
					<div class="title">
						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						<?php /* If this is a category archive */ if (is_category()) { ?>
						<h1><?php printf( __( 'Archive for the &#8216;%s&#8217; Category', 'clouding' ), single_cat_title( '', false ) ); ?></h1>
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h1><?php printf( __( 'Posts Tagged &#8216;%s&#8217;', 'clouding' ), single_tag_title( '', false ) ); ?></h1>
						<?php /* If this is a daily archive */ } elseif ( is_day() ) { ?>
						<h1><?php _e( 'Archive for', 'clouding' ); ?> <?php the_time( 'F jS, Y' ); ?></h1>
						<?php /* If this is a monthly archive */ } elseif ( is_month() ) { ?>
						<h1><?php _e( 'Archive for', 'clouding' ); ?> <?php the_time( 'F, Y' ); ?></h1>
						<?php /* If this is a yearly archive */ } elseif ( is_year() ) { ?>
						<h1><?php _e( 'Archive for', 'clouding' ); ?> <?php the_time( 'Y' ); ?></h1>
						<?php /* If this is an author archive */ } elseif ( is_author() ) { ?>
						<h1><?php _e( 'Author Archive', 'clouding' ); ?></h1>
						<?php /* If this is a paged archive */ } elseif ( isset( $_GET['paged'] ) && !empty( $_GET['paged'] ) ) { ?>
						<h1><?php _e( 'Blog Archives', 'clouding' ); ?></h1>
						<?php } ?>
					</div>
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