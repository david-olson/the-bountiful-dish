<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<section class="hero interior mission-hero text-center">
	<h1 class="white">Catering and Corporate Events</h1>
</section>
<section class="content">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="large-10 large-centered cell medium-10 medium-centered text-center large-pad">
				<?php the_content(); ?>
			</div>
		</div>
		<div class="grid-x grid-padding-x align-middle">
			<div class="large-6 cell">
				<?php the_field('copy_block'); ?>
				<a href="/catering/catering-sign-up" class="button alternate">Get Started</a>
			</div>
			<div class="large-6 cell">
				<?php $image = get_field('photo'); ?>
				<img src="<?php echo $image['sizes']['single_heros']; ?>" alt="">
			</div>
		</div>
	</div>
</section>
<section class="sample-event-menu medium-pad">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell text-center medium-pad">
				<h2 class="upper bold green">Sample Catering Menu</h2>
			</div>
		</div>
		<div class="grid-x grid-margin-x large-up-2 medium-up-2 small-up-1 medium-pad">
			<?php get_sample_catering_menu(); ?>
		</div>
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell text-center large-pad">
				<a href="/catering/catering-sign-up" class="button large">Get Started</a>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>