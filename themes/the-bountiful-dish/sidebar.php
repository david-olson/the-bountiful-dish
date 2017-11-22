<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-bountiful-dish
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php get_search_form(); ?>
	<h3>Categories</h3>
	<hr class="small-margin">
	<?php wp_dropdown_categories(); ?>
</aside><!-- #secondary -->
