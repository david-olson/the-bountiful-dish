<?php get_header(); ?>

<section class="hero-slider" id="hero_slider">
	<?php get_hero_slider(); ?>		
</section>

<section class="cta-bar">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="medium-8 cell">
				<div class="grid-padding-x grid-x align-middle">
					<div class="large-8 cell">
						<h3>First Time Orders: Special Offer Here!</h3>
					</div>
					<div class="large-4 cell">
						<button class="button expanded" type="button">Redeem Offer</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="new-meal-slider">
	<?php get_featured_meal_slider(); ?>
</section>

<section class="no-plate-like-home">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 text-center cell">
				<h2>There's no plate like home</h2>
			</div>
		</div>
		<div class="order grid-x grid-padding-x align-middle">
			<div class="large-4 cell text-right">
				<h3 class="script">order</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, fugiat!</p>
			</div>
			<div class="large-4 cell">
				<span class="script big-number-circle">1</span>
			</div>
			<div class="large-4 cell">
				<img src="/assets/img/truck.svg" alt="" class="icon">
			</div>
		</div>
		<div class="heat grid-x grid-padding-x align-middle">
			<div class="large-4 cell">
				<img src="/assets/img/oven.svg" alt="" class="icon">
			</div>
			<div class="large-4 cell">
				<span class="script big-number-circle">2</span>
			</div>
			<div class="large-4 cell">
				<h3 class="script">heat</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, error?</p>
			</div>
		</div>
		<div class="enjoy grid-x grid-padding-x">
			<div class="large-4 cell text-right">
				<h3 class="script">enjoy</h3>
			</div>
			<div class="large-4 cell">
				<span class="script big-circle-number">3</span>
			</div>
			<div class="large-4 cell">
				<img src="/assets/img/bowl.svg" alt="" class="icon">
			</div>
		</div>
		<div class="grid-x grid-padding-x align-center">
			<div class="large-6 cell text-center"><a href="/menu" class="button large expanded">Get Started</a></div>
		</div>
	</div>
</section>

<?php get_newsletter_signup(); ?>

<?php get_meals_teaser('weeknight-meals'); ?>

<?php get_meals_teaser('quick-and-easy-lunches'); ?>

<section class="benefits">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell">
				<h2>Benefits</h2>
			</div>
		</div>
		<div class="grid-x grid-padding-x white-tab align-middle">
			<?php if ( have_rows('homepage_benefits') ) : ?>
				<?php while( have_rows('homepage_benefits') ) : the_row(); ?>
					<div class="large-4 cell text-center">
						<h4><?php the_sub_field('benefit'); ?></h4>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
	<hr>
</section>

<section class="personas">
	<div class="grid-container">
		<div class="grid-x grid-padding-x large-up-3 small-up-1 align-middle">
			<div class="cell professionals">
				<h2>Professionals on the Go</h2>
				<p>Meals to fuel your brain.</p>
			</div>
			<div class="cell athletes">
				<h2>Athletes &amp; Performance</h2>
				<p>Nourish your regiment.</p>
			</div>
			<div class="cell beach">
				<h2>Beach Bound</h2>
				<p>Easy snacks to keep you moving.</p>
			</div>
			<div class="cell home">
				<h2>The Busy Healthy Home</h2>
				<p>Take a load off moms &amp; busy families.</p>
			</div>
			<div class="cell dorm">
				<h2>Dorm Room Delivery</h2>
				<p>Power up your studies.</p>
			</div>
			<div class="cell wellness">
				<h2>Wellness Minded</h2>
				<p>Conscious meals for the health minded.</p>
			</div>
		</div>
	</div>
</section>


<?php get_meals_teaser('new'); ?>

<?php get_meals_teaser('catering'); ?>

<section class="testimonials">
	<?php get_testimonials(); ?>
</section>

<?php get_footer(); ?>