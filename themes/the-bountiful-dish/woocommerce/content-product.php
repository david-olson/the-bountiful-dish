<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="cell">
	<article <?php post_class(' match-height-all'); ?> id="menu-item-<?php the_ID(); ?>">
		<?php if (has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php the_post_thumbnail_url('featured_meal'); ?>" alt="<?php the_title(); ?>">
			</a>
		<?php else : ?>
			<a href="<?php the_permalink(); ?>">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/meal-fallback.png" alt="<?php the_title(); ?>">
			</a>
		<?php endif; ?>
		<?php
	/**
	 * woocommerce_before_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * woocommerce_before_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	// do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * woocommerce_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	// do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item_title hook.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * woocommerce_after_shop_loop_item hook.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	// do_action( 'woocommerce_after_shop_loop_item' );
	?>
	<div class="content-pad">
		<div class="grid-x grid-margin-x align-middle">
			<div class="large-12 cell">
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<?php if ($product->get_stock_quantity() > 0) : ?>
				<?php elseif ($product->get_stock_quantity() == '0') : ?>
					<span class="no-margin stock out-of-stock">None Left This Week</span>
				<?php endif; ?>
			</div>
			<div class="large-12 cell">
				<p class="excerpt"><?php $excerpt =  get_the_excerpt(); 
			echo word_count($excerpt, 20);
			?></p>
			</div>
			<div class="button-wrap">
				<div class="grid-x grid-margin-x align-middle">
					<div class="shrink cell">
						<a class="gray upper" href="<?php the_permalink(); ?>">More Info</a>
					</div>
					<div class="auto cell">
						<?php if ($product->get_stock_quantity() > 0 || $product->get_stock_quantity() !== 0) : ?>
							<a href="/menu/?add-to-cart=<?php the_ID(); ?>" data-quantity="1" data-product_id="<?php the_ID(); ?>" class="button alternate ajax_add_to_cart add_to_cart_button no-margin expanded">Add to Cart</a>
						<?php else : ?>
							<a href="<?php the_permalink(); ?>" class="button secondary disabled no-margin expanded">Out Of Stock</a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	</article>
</div>
