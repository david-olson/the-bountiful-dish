<?php get_header(); ?>
<section class="intro" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/bg-media-hero.jpg');">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell text-center">
				<h1>Media Inquiries</h1>
			</div>
		</div>
	</div>
</section>
<?php if (have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-center">
				<div class="large-8 cell large-pad">
					<?php the_content(); ?>
					<?php echo do_shortcode('[contact-form-7 id="456" title="Media Form"]'); ?>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>