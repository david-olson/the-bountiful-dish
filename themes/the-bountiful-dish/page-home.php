<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while(have_posts()) : the_post(); ?>
		<?php $template_dir = get_template_directory_uri(); ?>
		<?php $template_dir = str_replace(array('http://', 'https://'), '', $template_dir); ?>
		<section class="home-hero" id="home_hero">
			<img src="https://i2.wp.com/www.<?php echo $template_dir; ?>/assets/img/home-hero-left.png" alt="" class="hero-left" id="hero_left">
			<div class="hero-health-happiness" id="hero_health_happiness">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-plate-hero.svg" alt="No Plate Like Home" />
				<h2 class="margin-bottom">Delivering Raleigh &bull; Durham<br />Chapel Hill &bull; Cary &bull; NC Triangle</h2>
				<a href="/menu" class="button text-center">Start Shopping Now</a>
			</div>
			<img src="https://i2.wp.com/www.<?php echo $template_dir; ?>/assets/img/home-hero-right.png" alt="" class="hero-right" id="hero_right">
		</section>

		<section class="cta-bar">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="medium-8 cell">
						<div class="grid-padding-x grid-x align-middle">
							<div class="large-8 cell">
								<h3 class="gray">First Time Orders: Special Offer Here!</h3>
							</div>
							<div class="large-4 cell">
								<a href="/first-time" class="button expanded">Redeem Offer</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="new-meal-slider">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-bottom">
					<div class="large-6 cell">
						<h4 class="upper no-margin">New Meals This Week</h4>
					</div>
					<div class="large-6 cell text-right">
						<a href="/menu" class="upper gray no-margin">View All &gt;</a>
					</div>
				</div>
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<hr class="small-margin">
					</div>
				</div>
				<div class="grid-x grid-padding-x large-margin">
					<div class="large-12 cell">
						<div class="featured-meal-slider">
							<?php get_featured_meal_slider(); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

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

		<?php get_newsletter_signup(); ?>

		<section class="benefits">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell text-center large-margin">
						<h2 class="white bold">Benefits</h2>
					</div>
				</div>
				<div class="grid-x grid-padding-x white-tab align-center">
					<?php if ( have_rows('homepage_benefits') ) : ?>
						<?php while( have_rows('homepage_benefits') ) : the_row(); ?>
							<div class="large-4 cell text-center">
								<h4><?php echo the_sub_field('benefit'); ?></h4>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>

		</section>

		<section class="personas">
			<div class="grid-container">
				<hr>
				<div class="grid-x grid-margin-x large-up-3 medium-up-2 small-up-1 align-middle">
					<?php $personas = get_terms('persona', array('hide_empty' => false)); ?>
					<?php foreach ($personas as $persona) : ?>
						<?php $term_image = get_field('featured_image', 'term_'.$persona->term_id); ?>
						<div class="cell">
							<a style="background-image: url('<?php echo $term_image['sizes']['category_overview']; ?>');" href="/persona/<?php echo $persona->slug; ?>">
								<h2><?php echo $persona->name; ?></h2>
								<p><?php echo $persona->description; ?></p>
								<button class="button outline" type="button">More Info</button>
							</a>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</section>

		<div class="fade-in"><?php get_meals_teaser('lunch-dinner'); ?></div>

		<section class="testimonials">
			<?php get_testimonials(); ?>
		</section>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>