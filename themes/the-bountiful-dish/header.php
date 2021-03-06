<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *;
 * @package the-bountiful-dish
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="off-canvas position-right mobile-off-canvas" id="mobile_menu" data-off-canvas data-content-scroll="false">
		<?php if (is_user_logged_in()) : ?>
			<ul class="vertical menu drilldown user-logged-in-menu" data-responsive-menu="drilldown">
				<?php $current_user = wp_get_current_user(); ?>
				<li>
					<a href="#" class="username"><?php echo $current_user->data->display_name; ?></a>
					<ul class="menu">
						<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">My Account</a></li>
						<li><a href="<?php echo wc_logout_url( wc_get_page_permalink( 'myaccount' ) ); ?>">Logout</a></li>
					</ul>
				</li>
				<?php $count = WC()->cart->cart_contents_count; ?>
				<li><a class="cart" href="/cart"><?php echo $count; ?></a></li>
			</ul>

		<?php else : ?>
			<ul class="menu vertical user-sign-up-menu">
				<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">Log In</a></li>
				<li>
					<a href="/register">Sign Up</a>
				</li>
				<?php $count = WC()->cart->cart_contents_count; ?>
				<li><a class="cart" href="/cart"><?php echo $count; ?></a></li>
			</ul>
		<?php endif; ?>
		<?php 
		wp_nav_menu(array(
			'container' => false,
			'menu' => 'menu-1',
			'menu_class' => 'vertical menu align-left mobile-main-menu',
			'theme_location' => 'primary',
			'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown" style="width: 100%;">%3$s</ul>',
			'fallback_cb' => 'f6_drill_menu_fallback',
			'walker' => new F6_DRILL_MENU_WALKER()
		));
		?>
		
	</div>
<div id="page" class="site off-canvas-content" data-off-canvas-content>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-bountiful-dish' ); ?></a>

	<div data-sticky-container>
		<header class="header sticky" data-sticky data-margin-top="0" id="header">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-middle">
					<div class="large-2 medium-3 small-6 cell">
						<a href="/" alt="The Bountiful Dish"><?php get_template_part('assets/img/logo'); ?></a>
					</div>
					<div class="large-7 cell show-for-large">
						<?php 
						wp_nav_menu(array(
							'container' => false,
							'menu' => 'menu-1',
							'menu_class' => 'vertical medium-horizontal menu align-right',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="%1$s" class="%2$s" data-responsive-menu="drilldown medium-dropdown" style="width: 100%;">%3$s</ul>',
							'fallback_cb' => 'f6_drill_menu_fallback',
							'walker' => new F6_DRILL_MENU_WALKER()
						));
						?>
					</div>
					<?php if (is_user_logged_in()) : ?>
						<div class="large-3 show-for-large cell">
							<ul class="menu dropdown" data-dropdown-menu>
								<?php $current_user = wp_get_current_user(); ?>
								<?php //var_dump($current_user); ?>
								<li>
									<a class="username" href="#"><?php echo $current_user->data->display_name; ?></a>
									<ul class="menu">
										<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">My Account</a></li>
										<li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>/orders">Order History</a></li>
										<li><a href="<?php echo wc_logout_url( wc_get_page_permalink( 'myaccount' ) ); ?>">Logout</a></li>
									</ul>
								</li>
								<?php $count = WC()->cart->cart_contents_count; ?>
								<li><a class="cart" href="/cart"><?php echo $count; ?></a></li>
							</ul>
						</div>
					<?php else : ?>
						<div class="large-3 show-for-large cell">
							<ul class="menu">
								<li><a class="login" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">Log In</a></li>
								<li>
									<a href="/register" class="button small">Sign Up</a>
								</li>
								<?php $count = WC()->cart->cart_contents_count; ?>
								<li><a class="cart" href="/cart"><?php echo $count; ?></a></li>
							</ul>
						</div>
					<?php endif; ?>
					<div class="medium-9 small-6 cell hide-for-large text-right">
						<button class="menu-icon dark" type="button" data-toggle="mobile_menu"></button>
					</div>
				</div>
			</div>
		</header>
	</div>
