<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package the-bountiful-dish
 */

?>
	
	<section class="instagram large-margin">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-bottom">
				<div class="auto cell">
					<h2 class="no-margin upper">From Instagram</h2>
				</div>
				<div class="auto cell align-self-right text-right">
					<a href="#" class="gray">Follow Us &gt;</a>
				</div>
			</div>
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<hr class="small-margin">
				</div>
			</div>
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<div class="grid-x grid-padding-x large-up-4 medium-up-4 small-up-2">
						<div class="cell"><img class="margin-bottom" src="http://placehold.it/500x500" alt=""></div>
						<div class="cell"><img class="margin-bottom" src="http://placehold.it/500x500" alt=""></div>
						<div class="cell"><img class="margin-bottom" src="http://placehold.it/500x500" alt=""></div>
						<div class="cell"><img class="margin-bottom" src="http://placehold.it/500x500" alt=""></div>
					</div>
					<?php //get instagram shortcode ?>
						
				</div>
			</div>
		</div>
	</section>

	<footer id="colophon" class="site-footer">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-3 cell">
					<h3>About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat dicta autem dolorum natus laborum reprehenderit amet voluptates doloremque facere doloribus.</p>
				</div>
				<div class="large-3 cell">
					<h3>Follow Us</h3>
					<ul class="menu">
						<li class="instagram"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-footer.svg" alt="Instagram"></a></li>
						<li class="twitter"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-footer.svg" alt="Twitter"></a></li>
						<li class="facebook"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-footer.svg" alt="Facebook"></a></li>
					</ul>
				</div>
				<div class="large-3 cell">
					<h3>Contact Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, quas.</p>
					<a href="/contact">Get In Touch</a>
					<?php //form shortcode ?>
				</div>
				<div class="large-3 cell">
					<h3>Talk About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, voluptate.</p>
					<a href="/media-inquiries" class="media">Media Inquiries</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<section class="sub-footer">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell text-center"><p class="gray small-margin"><a class="gray" href="/advertisers">Advertise With Us</a> &bull; <a class="gray" href="/legal">Privacy Policy</a></p></div>
			</div>
		</div>
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
