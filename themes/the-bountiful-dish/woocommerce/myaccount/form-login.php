<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
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
 * @version 3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php wc_print_notices(); ?>

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>
<section class="sign-up-form">
	<div class="grid-container">
		
		<div class="grid-x grid-padding-x align-center">
			<div class="medium-5 cell form-holder large-margin">
						<h2 class="gray upper large-margin"><?php _e( 'Login', 'woocommerce' ); ?></h2>
				
						<form class="woocommerce-form woocommerce-form-login login" method="post">
				
							<?php do_action( 'woocommerce_login_form_start' ); ?>
				
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label class="gray" for="username"><?php _e( 'Username or email address', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
							</p>
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label class="gray" for="password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" />
							</p>
				
							<?php do_action( 'woocommerce_login_form' ); ?>
							<div class="grid-x grid-padding-x align-middle large-margin">
								<div class="large-6 cell">
									<?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
									<input type="submit" class="woocommerce-Button button expanded no-margin" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
								</div>
								<div class="large-6 cell">
									<label class="woocommerce-form__label woocommerce-form__label-for-checkbox inline">
										<input class="woocommerce-form__input woocommerce-form__input-checkbox no-margin gray" name="rememberme" type="checkbox" id="rememberme" value="forever" /> <span class="gray"><?php _e( 'Remember me', 'woocommerce' ); ?></span>
									</label>
								</div>
							</div>
							<p class="form-row">
								
								
							</p>
							<div class="grid-x grid-padding-x align-center align-middle">
								<div class="shrink cell">
									<p class="woocommerce-LostPassword lost_password no-margin">
										<a href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
									</p>
								</div>
								<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
									<div class="auto cell">
										<a href="/register" class="no-margin">Need an account? Sign up.</a>	
									</div>
								<?php endif; ?>
							</div>
							
				
							<?php do_action( 'woocommerce_login_form_end' ); ?>
				
						</form>
			</div>
		</div>
	</div>
</section>
<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
