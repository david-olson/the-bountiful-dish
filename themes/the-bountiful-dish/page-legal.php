<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post() ?>

		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell medium-pad">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>