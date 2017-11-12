<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );

if ( ! empty( $tabs ) ) : ?>
<section class="large-pad">
	
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<ul class="tabs" role="tablist" data-tabs id="product_info">
						<?php $n = 0; ?>
						<?php $i = 0; ?>
						<?php foreach ( $tabs as $key => $tab ) : ?>
							<li class="<?php echo esc_attr( $key ); ?>_tab tabs-title <?php if ($n == 0) : ?>is-active<?php endif; ?>" id="tab-title-<?php echo esc_attr( $key ); ?>" role="tab" aria-controls="tab-<?php echo esc_attr( $key ); ?>">
								<a href="#tab-<?php echo esc_attr( $key ); ?>"><?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?></a>
							</li>
							<?php ++$n; ?>
						<?php endforeach; ?>
					</ul>
					<div class="tabs-content" data-tabs-content="product_info">
						<?php foreach ( $tabs as $key => $tab ) : ?>
							<div class="tabs-panel <?php if ($i == 0) : ?>is-active<?php endif; ?>" id="tab-<?php echo esc_attr( $key ); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr( $key ); ?>">
								<?php if ( isset( $tab['callback'] ) ) { call_user_func( $tab['callback'], $key, $tab ); } ?>
							</div>
							<?php ++$i; ?>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
</section>
<?php endif; ?>
