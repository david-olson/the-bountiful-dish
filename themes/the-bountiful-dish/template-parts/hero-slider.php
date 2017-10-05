<article class="slide hero-slide" id="slide_<?php echo the_ID(); ?>" style="background-image: url('<?php the_post_thumbnail_url('hero'); ?>');">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell text-center">
				<?php $icon = get_field('icon'); ?>
				<img src="<?php echo $icon['sizes']['medium']; ?>" alt="">
				<p class="tagline"><?php the_field('tagline'); ?></p>
				<p class="caption"><?php the_field('caption'); ?></p>
			</div>
		</div>
	</div>
</article>