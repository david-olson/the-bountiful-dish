<div class="slide white-bg match-height">
	<article <?php post_class(); ?> id="top_post_<?php the_ID(); ?>">
		<div class="grid-x grid-padding-x align-middle">
			<div class="large-8 cell"><?php the_category( $separator = ', '); ?></div>
			<div class="large-4 cell"><?php echo do_shortcode( '[zilla_likes]' ); ?></div>
			<div class="large-12 cell"><h2 class="green"><?php the_title(); ?></h2></div>
			<div class="large-12 cell excerpt">
				<p><?php echo word_count(get_the_excerpt(), 20); ?></p>
			</div>
			<div class="button-wrap">
				<a href="<?php the_permalink(); ?>" class="button">Read Post</a>
			</div>
		</div>
	</article>
</div>