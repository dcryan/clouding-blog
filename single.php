<?php get_header(); ?>
	<div class="main-holder">
		<div class="center">
			<div id="content">
				<div class="content-holder">
					<?php while ( have_posts() ) : the_post(); ?>

						<?php if( has_post_thumbnail() ): 
							$img_id = get_post_thumbnail_id(get_the_ID());
							$img_array = wp_get_attachment_image_src( $img_id, 'thumbnail_300x225' );
							$alt_text = get_post_meta($img_id , '_wp_attachment_image_alt', true); ?>
							<div class="alignleft post-thumbnail" style="background-image: url('<?php echo $img_array[0]; ?>'"></div>
						<?php endif; ?>

						<?php the_title('<h2>', '</h2>'); ?>
						<div class="date-holder">
							<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php _e( 'Published ', 'clouding' ); the_time( 'd M, Y' ) ?></time>
							<?php get_template_part( 'blocks/sharethis' ); ?>
						</div>
						<?php the_content(); ?>
						<?php edit_post_link( __( 'Edit', 'clouding' ) ); ?>
						<div class="post-info">
							<?php $posttags = get_the_tags();
							if ($posttags): ?>
								<div class="holder">
									<span class="title"><?php _e( 'Tags:', 'clouding' ); ?></span>
									<ul>
										<?php $tags_count = count($posttags); $current_item_count = 1;
										foreach($posttags as $tag) {
											$separator = $tags_count != $current_item_count++ ? ',' : '';
											echo '<li><a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . $separator . '</a></li>';
										} ?>
									</ul>
								</div>
							<?php endif;
							$post_categories = get_the_category();
							if ($post_categories): ?>
								<div class="tags-holder">
									<span class="title"><?php _e( 'Categories:', 'clouding' ); ?></span>
									<ul>
										<?php $categories_count = count($post_categories); $current_item_count = 1;
										foreach($post_categories as $category) {
											$separator = $categories_count != $current_item_count++ ? ',' : '';
											echo '<li><a href="' . get_category_link( $category->cat_ID ) . '">' . $category->cat_name . $separator . '</a></li>';
										} ?>
									</ul>
								</div>
							<?php endif; ?>
						</div>
						<?php comments_template(); ?>
						<?php get_template_part( 'blocks/pager-single', get_post_type() ); ?>
					<?php endwhile; ?>
				</div>
			</div>
			<?php get_sidebar(); ?>
		</div>
	</div>
<?php get_footer(); ?>