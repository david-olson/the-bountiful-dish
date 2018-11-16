<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site off-canvas-content" data-off-canvas-content>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-bountiful-dish' ); ?></a>

	<div data-sticky-container>
		<header class="header sticky medium-pad" data-sticky data-margin-top="0" id="header">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-middle">
					<div class="large-2 medium-3 small-6 cell">
						<a href="/" alt="The Bountiful Dish"><?php get_template_part('assets/img/logo'); ?></a>
					</div>
					<div class="large-10 cell medium-9 small-6 text-right">
						<a href="#form" class="button no-margin" data-smooth-scroll>Sign Up Now For Updates</a>
					</div>
			</div>
		</header>
	</div>

	<section class="home-hero" id="home_hero">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-hero-left.png" alt="" class="hero-left" id="hero_left">
		<div class="hero-health-happiness" id="hero_health_happiness">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-plate-hero.svg" alt="No Plate Like Home" />
			<h2>Raleigh, North Carolina<br />No Commitment.<br />Change, Skip, or Cancel Anytime.</h2>
		</div>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-hero-right.png" alt="" class="hero-right" id="hero_right">
	</section>
	<section class="coming-soon-sign-up-bar">
		<div class="grid-x grid-padding-x align-middle">
			<div class="large-8 cell text-center">
				<h3 class="green bold margin-bottom">Be first to find out when we are delivering.</h3>
			</div>
			<div class="large-2 cell ">
				<a href="#form" class="button expanded" data-smooth-scroll>Sign Up for Updates</a>
			</div>
		</div>
	</section>
	<section class="no-plate-like-home" id="no_plate_like_home">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="medium-8 cell">
						<div class="grid-x grid-padding-x">
							<div class="large-12 text-center cell">
								<h2>There's no plate like home</h2>
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
					</div>
				</div>
			</div>
			<?php get_template_part('assets/img/line'); ?>
		</section>

	<section class="new-meal-slider" id="form">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<h2 class="text-center green">Sign Up for Updates!</h2>
					<div class="grid-x grid-padding-x align-center">
						<div class="medium-7 cell">
							<?php echo do_shortcode('[contact-form-7 title="Sign Up Form"]'); ?>		
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
		
	<section class="instagram large-margin">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-bottom">
				<div class="auto cell">
					<h2 class="no-margin upper">From Instagram</h2>
				</div>
				<div class="auto cell align-self-right text-right">
					<a href="#" class="gray">Follow Us &gt;</a>
				</div>
			</div>
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<hr class="small-margin">
				</div>
			</div>
			<div class="grid-x grid-margin-x">
				<!-- <div class="large-12 cell"> -->
					<!-- <div class="grid-x grid-padding-x large-up-4 medium-up-4 small-up-2">
						<div class="cell"><img class="margin-bottom" src="http://placehold.it/500x500" alt=""></div>
						<div class="cell"><img class="margin-bottom" src="http://placehold.it/500x500" alt=""></div>
						<div class="cell"><img class="margin-bottom" src="http://placehold.it/500x500" alt=""></div>
						<div class="cell"><img class="margin-bottom" src="http://placehold.it/500x500" alt=""></div>
					</div> -->
					<?php echo do_shortcode('[instagram-feed]'); ?>
						
				<!-- </div> -->
			</div>
		</div>
	</section>
</div>

	<?php wp_footer(); ?>

	</body>
	</html>

