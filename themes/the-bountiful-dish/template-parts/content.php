<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package the-bountiful-dish
 */

?>


	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<section class="intro" style="background-image: url('<?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail_url( 'sample_catering_menu' ); ?><?php else : ?><?php echo get_template_directory_uri(); ?>/assets/img/fallback.png');<?php endif; ?>">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell text-center">
						<h1><?php the_title(); ?></h1>
						<p class="meta"><?php the_category( $separator = ', '); ?> <span class="meta-divider">|</span> <?php the_date(); ?> <span class="meta-divider">|</span> <?php echo do_shortcode( '[zilla_likes]' ); ?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="single-content">
			<div class="grid-container">
				<div class="grid-x grid-padding-x align-center">
					<div class="medium-10 cell white-bg">
						<div class="large-pad-full">
							<?php the_content(); ?>
							<hr>
							<div class="grid-x grid-padding-x">
								<div class="large-4 cell">
									<span class="upper bold">Share This:</span> <?php echo do_shortcode( '[ess_post]' ); ?>	
								</div>
								<div class="large-4 cell">
									<?php previous_post_link('Previous Post: %link'); ?>
								</div>
								<div class="large-4 cell">
									<?php next_post_link('Next Post: %link'); ?>
								</div>
							</div>
							<hr>
							<div class="grid-x grid-padding-x">
								<div class="large-12 cell">
									
									<?php $the_tags = get_the_tags(); ?>
									<?php if ($the_tags) : ?>
										<p class="bold small-margin">Tagged In:</p>
										<?php foreach ($the_tags as $tag) : ?>
											<span class="label secondary"><?php echo $tag->name; ?></span>
										<?php endforeach; ?>
									<?php endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</article>

