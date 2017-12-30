<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-bountiful-dish
 */

get_header(); ?>
	<section class="hero interior blog-hero">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell text-center">
					<h1 class="white">Latest Blog Posts</h1>
				</div>
			</div>
		</div>
	</section>
	<main id="main" class="site-main blog-container">
		<div class="grid-container">
			<div class="grid-x grid-margin-x large-pad">
				<div class="large-8 cell">
						<div class="grid-x grid-padding-x">
							<?php
							if ( have_posts() ) :
												
								/* Start the Loop */
								while ( have_posts() ) : the_post(); ?>

									<?php /*
									 * Include the Post-Format-specific template for the content.
									 * If you want to override this in a child theme, then include a file
									 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
									 */
									get_template_part( 'template-parts/content', get_post_format() );
												
								endwhile; ?>

								<?php the_posts_navigation();
												
							else :
												
								get_template_part( 'template-parts/content', 'none' );
												
							endif; ?>
								
						</div>
					</div>
					<div class="large-4 cell white-bg">
						<?php get_sidebar(); ?>
					</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
