<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-bountiful-dish
 */

get_header(); ?>

	<main>
		<section class="top-posts large-pad">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell text-center">
						<h1>All <?php single_cat_title(); ?> Posts</h1>
					</div>
				</div>
			</div>
			<?php if ( have_posts() ) : ?>
				<div class="grid-container">
					<div class="medium-pad">
						<?php $i = 0; ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php get_template_part('template-parts/main-loop'); ?>
							<?php ++$i; ?>
						<?php endwhile; ?>		
					</div>
					<div class="grid-x grid-padding-x">
						<div class="large-12 cell text-center">
							<ul class="pagination align-center">
								<?php $args = array(
									'type' => 'list',
									); ?>
								<?php echo paginate_links( $args ); ?>
							</ul>
						</div>
					</div>
				</div>
			<?php else : ?>
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="large-12 cell text-center">
							<p>We couldn't find any posts that match your request.</p>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</section>
	</main><!-- #main -->

<?php
get_footer();
