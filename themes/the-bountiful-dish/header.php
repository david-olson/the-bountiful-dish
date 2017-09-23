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

	<header class="header" id="header">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-2 cell">
					<a href="/" alt="The Bountiful Dish"><?php get_template_part('assets/img/logo'); ?></a>
				</div>
				<div class="large-10 cell">
					<ul class="menu">
						<li><a href="/">Home</a></li>
						<li><a href="/menu">This Week's Menu</a></li>
						<li><a href="/our-mission">Our Mission</a></li>
						<li><a href="/catering">Catering</a></li>
						<li><a href="/faqs">FAQs</a></li>
						<li><a href="/blog">Blog</a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>

	<div id="content" class="site-content">
