<?php global $i; ?>
<article <?php post_class('large-margin'); ?> id="post_<?php the_ID(); ?>">
	<div class="grid-x grid-padding-x large-up-2 medium-up-2">
		<div class="cell <?php if ($i%2 == 0) : ?>large-order-2 medium-order-1 small-order-1<?php endif; ?> post-image" style="background-image: url('http://source.unsplash.com/collection/160213/600x480?sig=<?php echo $i; ?><?php //the_post_thumbnail_url( 'sample_catering_menu' ); ?>');">
			
		</div>
		<div class="cell white-bg <?php if ( $i%2 == 0 ) : ?>large-order-1 medium-order-2 small-order-2<?php endif; ?>">
			<div class="giant-pad-full">
				<p>Posted <?php echo get_the_date(); ?> in <?php the_category( $separator = ', '); ?></p>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<hr class="medium-margin">
				<span class="upper bold">Share This:</span> <?php echo do_shortcode( '[ess_post]' ); ?> <?php echo do_shortcode( '[zilla_likes]' ); ?>
				<hr class="small-margin">
				<p><?php echo word_count(get_the_excerpt(), 30); ?></p>
				<a href="<?php the_permalink(); ?>" class="button">Read Post</a>
			</div>
		</div>
	</div>
</article>