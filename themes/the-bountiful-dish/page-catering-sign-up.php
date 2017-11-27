<?php get_header(); ?>
<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post() ?>
		<section class="hero interior mission-hero text-center">
			<h1 class="white no-margin">Social Catering Events</h1>
		</section>

		<section class="catering-form large-pad">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="medium-10 cell white-bg large-margin-bottom text-center lead">
						<div class="large-pad-full"><?php the_content(); ?></div>
					</div>
				</div>
				<div class="grid-x grid-padding-x align-center">
					<div class="medium-10 cell white-bg">
						<div class="large-pad-full"><?php echo do_shortcode( '[contact-form-7 id="370" title="Contact form 1"]' ); ?></div>		
					</div>
				</div>
			</div>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>