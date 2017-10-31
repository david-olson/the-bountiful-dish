<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<div class="grid-container">
	<div class="grid-x grid-padding-x align-center large-margin">
		<div class="medium-8 cell">
			<?php if (have_rows('faqs')) : ?>
				<ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true" data-deep-link="true">
					<?php $i = 0; ?>
				<?php while (have_rows('faqs')) : the_row(); ?>
					<li class="accordion-item" data-accordion-item>
						<a href="#faq<?php echo $i; ?>" class="accordion-title"><?php the_sub_field('question'); ?></a>
						<div class="accordion-content" data-tab-content>
							<?php the_sub_field('answer'); ?>
						</div>
					</li>
					<?php ++$i; ?>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>