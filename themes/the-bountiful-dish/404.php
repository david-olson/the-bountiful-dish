<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package the-bountiful-dish
 */

get_header(); ?>
	<section class="sign-up-form error-404 not-found">
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-center">
				<div class="medium-8 cell large-pad text-center">
					<div class="large-pad-full white-bg">
						<h1>Oops! We can't find what you're looking for.</h1>
						<p>It might be that you got a bad link, or that there was a mistake in typing in the url. The page you are looking for may have also moved. Whatever the case, you can try going <a href="/">home</a>, or to our <a href="/menu">menu</a> to find what you are looking for.</p>
					</div>
				</div>
			</div>
		</div>
	</section><!-- .error-404 -->
<?php
get_footer();
