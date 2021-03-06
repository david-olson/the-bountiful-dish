<?php get_header(); ?>

<section class="hero interior mission-hero text-center">
	<h1 class="white">Bountiful Dish is your Healthy Mealtime Companion</h1>
</section>
<?php if (have_posts()) : ?>
	<div class="grid-container">
		<?php while (have_posts()) : the_post(); ?>
			<div class="grid-x grid-padding-x align-center">
				<div class="medium-8 cell text-center">
					<div class="medium-pad">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
			<div class="grid-x grid-padding-x large-margin">
				<div class="large-12 cell">
					<h2 class="margin-bottom text-center">This Week's Featured Meals</h2>
					<div class="featured-meal-slider">
						<?php get_featured_meal_slider(); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
	</div>
	<section class="no-plate-like-home" id="no_plate_like_home">
				<div class="grid-container">
					<div class="grid-x grid-padding-x align-center">
						<div class="medium-8 cell">
							<div class="grid-x grid-padding-x">
								<div class="large-12 text-center cell">
									<h2>There's no plate like home<sup>&trade;</sup></h2>
								</div>
							</div>
							<div class="order grid-x grid-padding-x align-middle">
								<div class="large-4 medium-4 cell text-right large-order-1 medium-order-1 small-order-2">
									<h3 class="script">order</h3>
									<p>Choose meals from our weekly menu and have them delivered to your door.</p>
								</div>
								<div class="large-4 medium-4 cell text-center large-order-2 medium-order-2 small-order-1">
									<span class="script big-number-circle">1</span>
								</div>
								<div class="large-4 medium-4 cell large-order-3 medium-order-3 small-order-3">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-truck.svg" alt="" class="icon">
								</div>
							</div>
							<div class="heat grid-x grid-padding-x align-middle">
								<div class="large-4 medium-4 cell text-right large-order-1 medium-order-1 small-order-3">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-oven.svg" alt="" class="icon">
								</div>
								<div class="large-4 medium-4 cell text-center large-order-2 medium-order-2 small-order-1">
									<span class="script big-number-circle">2</span>
								</div>
								<div class="large-4 medium-4 cell large-order-3 medium-order-3 small-order-1">
									<h3 class="script">heat</h3>
									<p>Easy instructions and ingredients you recognize for meals ready when you are.</p>
								</div>
							</div>
							<div class="enjoy grid-x grid-padding-x">
								<div class="large-4 medium-4 cell text-right large-order-1 medium-order-1 small-order-2">
									<h3 class="script">enjoy</h3>
								</div>
								<div class="large-4 medium-4 cell text-center large-order-2 medium-order-2 small-order-1">
									<span class="script big-number-circle">3</span>
								</div>
								<div class="large-4 medium-4 cell large-order-3 medium-order-3 small-order-3">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-bowl.svg" alt="" class="icon">
								</div>
							</div>
							<div class="grid-x grid-padding-x align-center large-margin">
								<div class="large-6 cell text-center"><a href="/menu" class="button large expanded">Get Started</a></div>
							</div>
						</div>
					</div>
				</div>
				<?php get_template_part('assets/img/line'); ?>
			</section>
<?php endif; ?>

<?php get_footer(); ?>