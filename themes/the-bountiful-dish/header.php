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
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'the-bountiful-dish' ); ?></a>

	<div data-sticky-container>
		<header class="header sticky" data-sticky data-margin-top="0" id="header">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-middle">
					<div class="large-2 cell">
						<a href="/" alt="The Bountiful Dish"><?php get_template_part('assets/img/logo'); ?></a>
					</div>
					<div class="large-7 cell">
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
					<div class="large-3 cell">
						<ul class="menu">
							<li><a class="login" href="/login">Log In</a></li>
							<li>
								<a href="/register" class="button small">Sign Up</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
	</div>
