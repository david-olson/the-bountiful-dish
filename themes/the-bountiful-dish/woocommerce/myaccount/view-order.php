<?php
/**
 * View Order
 *
 * Shows the details of a particular order on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/view-order.php.
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
	exit;
}

?>
<?php $order_status = $order->get_status(); ?>
<div class="callout <?php if ($order_status == 'processing' || $order_status == 'refunded') : ?>primary<?php elseif ($order_status == 'completed') : ?>success<?php elseif ($order_status == 'on-hold' || $order_status == 'cancelled' || $order_status == 'pending') : ?>warning<?php elseif ($order_status == 'failed') : ?>alert<?php endif; ?>">
	<p><?php
		/* translators: 1: order number 2: order date 3: order status */
		printf(
			__( 'Order #%1$s was placed on %2$s and is currently %3$s.', 'woocommerce' ),
			'<mark class="order-number">' . $order->get_order_number() . '</mark>',
			'<mark class="order-date">' . wc_format_datetime( $order->get_date_created() ) . '</mark>',
			'<mark class="order-status">' . wc_get_order_status_name( $order->get_status() ) . '</mark>'
		);
	?></p>
</div>

<?php if ( $notes = $order->get_customer_order_notes() ) : ?>
	<h2><?php _e( 'Order updates', 'woocommerce' ); ?></h2>
		<?php foreach ( $notes as $note ) : ?>
			<div class="callout secondary">
				<span><?php echo date_i18n( __( 'l jS \o\f F Y, h:ia', 'woocommerce' ), strtotime( $note->comment_date ) ); ?></span>
				<p><?php echo wpautop( wptexturize( $note->comment_content ) ); ?></p>
			</div>
		<?php endforeach; ?>
<?php endif; ?>

<?php do_action( 'woocommerce_view_order', $order_id ); ?>
