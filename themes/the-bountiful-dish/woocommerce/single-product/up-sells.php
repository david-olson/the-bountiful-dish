<?php
/**
 * Single Product Up-Sells
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/up-sells.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $upsells ) : ?>

	<section class="up-sells upsells products">

		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell text-center">
					<h2><?php esc_html_e( 'You May Also Like', 'woocommerce' ) ?></h2>
				</div>
				<?php woocommerce_product_loop_start(); ?>
				
					<?php foreach ( $upsells as $upsell ) : ?>
				
						<?php
						 	$post_object = get_post( $upsell->get_id() );
				
							setup_postdata( $GLOBALS['post'] =& $post_object );
				
							wc_get_template_part( 'content', 'product' ); ?>
				
					<?php endforeach; ?>
				
				<?php woocommerce_product_loop_end(); ?></div>
		</div>
	</section>

<?php endif;

wp_reset_postdata();
