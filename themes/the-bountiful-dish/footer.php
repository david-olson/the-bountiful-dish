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
	
	<section class="instagram">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell"><h2>From Instagram</h2>
					<?php //get instagram shortcode ?></div>
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
						<li class="instagram"><a href="#"><img src="/assets/img/instagram-footer.svg" alt="Instagram"></a></li>
						<li class="twitter"><a href="#"><img src="/assets/img/twitter-footer.svg" alt="Twitter"></a></li>
						<li class="facebook"><a href="#"><img src="/assets/img/facebook-footer.svg" alt="Facebook"></a></li>
					</ul>
				</div>
				<div class="large-3 cell">
					<h3>Contact Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, quas.</p>
					<?php //form shortcode ?>
				</div>
				<div class="large-3 cell">
					<h3>Talk About Us</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, voluptate.</p>
					<a href="/media-inquieries" class="media">Media Inquieries</a>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
