<?php get_header(); ?>
<section class="sign-up-form">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center">
			<div class="medium-5 cell large-margin form-holder">
				<?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>
				
				
						<h2 class="large-margin upper gray"><?php _e( 'Register', 'woocommerce' ); ?></h2>
						<?php wc_print_notices(); ?>
						<form method="post" class="register">
				
							<?php do_action( 'woocommerce_register_form_start' ); ?>
				
							<?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>
				
								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
									<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="reg_username" value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( $_POST['username'] ) : ''; ?>" />
								</p>
				
							<?php endif; ?>
				
							<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
								<label class="gray" for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
								<input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" value="<?php echo ( ! empty( $_POST['email'] ) ) ? esc_attr( $_POST['email'] ) : ''; ?>" />
							</p>
				
							<?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>
				
								<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
									<label class="gray" for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
									<input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" />
								</p>
				
							<?php endif; ?>
				
							<?php do_action( 'woocommerce_register_form' ); ?>
				
							
							<div class="grid-x grid-padding-x large-margin">
								<div class="large-6 cell">	<?php wp_nonce_field( 'woocommerce-register', 'woocommerce-register-nonce' ); ?>
									<input type="submit" class="woocommerce-Button button expanded" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
																</div>
							</div>
							<?php do_action( 'woocommerce_register_form_end' ); ?>
				
						</form>
				
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>