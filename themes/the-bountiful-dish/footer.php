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
					<a href="https://www.instagram.com/bountifuldish/" class="gray">Follow Us &gt;</a>
				</div>
			</div>
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<hr class="small-margin">
				</div>
			</div>
			<div class="grid-x grid-margin-x">
					<?php echo do_shortcode('[instagram-feed]'); ?>
			</div>
		</div>
	</section>

	<footer id="colophon" class="site-footer">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-3 cell">
					<h3>About Us</h3>
					<p>We take great pride in our ability to accommodate diverse taste buds, address dietary needs and serve as a mealtime companion for our clients as they make their way on their healthy eating journey.</p>
				</div>
				<div class="large-3 cell">
					<h3>Follow Us</h3>
					<ul class="menu">
						<li class="instagram"><a href="https://www.instagram.com/bountifuldish/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram-footer.svg" alt="Instagram"></a></li>
						<li class="twitter"><a href="https://twitter.com/BountifulDish"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/twitter-footer.svg" alt="Twitter"></a></li>
						<li class="facebook"><a href="https://www.facebook.com/BountifulDish/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook-footer.svg" alt="Facebook"></a></li>
					</ul>
				</div>
				<div class="large-3 cell">
					<h3>Contact Us</h3>
					<p>We love hearing from our hungry customers! If you have any questions regarding menu, delivery, or nutrition, <a href="/contact" style="text-decoration: underline">get in touch.</a></p>
					<?php //form shortcode ?>
				</div>
				<div class="large-3 cell">
					<h3>Partner with Us</h3>
					<p>The Bountiful Dish is more than just meals. We strive to make an impact in our community and would love to partner with you.</p>
					<a href="/media-inquiries" class="media" style="text-decoration: underline;">More Info</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<section class="sub-footer">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell text-center"><p class="gray small-margin">&copy; 2017 The Bountiful Dish &bull; <a class="gray" href="/advertisers">Advertise With Us</a> &bull; <a class="gray" href="/legal">Privacy Policy</a></p></div>
			</div>
		</div>
	</section>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
