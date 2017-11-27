<?php get_header(); ?>
<?php $term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy')); ?>
<?php $image = get_field('featured_image', 'term_'.$term->term_id); ?>
<?php // var_dump($image); ?>
<section class="intro text-center" style="background-image: url('<?php echo $image['sizes']['single_heros']; ?>');">
	<h1 class="script white"><?php echo $term->name;  ?></h1>
	<h3 class="white"><?php echo $term->description; ?></h3>
</section>
<?php // var_dump($term); ?>
<div class="grid-container">
	<div class="grid-x grid-padding-x align-center">
		<div class="medium-8 cell large-pad">
			<?php the_field('intro', 'term_'.$term->term_id); ?>
		</div>
	</div>
</div>

<?php if (have_posts()) : ?>
	<section class="btd-product-container">
	<div class="grid-container">
	<div class="grid-x grid-margin-x">
		<div class="large-12 cell large-pad">
	<?php
		/**
		 * woocommerce_before_shop_loop hook.
		 *
		 * @hooked wc_print_notices - 10
		 * @hooked woocommerce_result_count - 20
		 * @hooked woocommerce_catalog_ordering - 30
		 */
		do_action( 'woocommerce_before_shop_loop' );
	?>
	<?php woocommerce_product_loop_start(); ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php
			/**
			 * woocommerce_shop_loop hook.
			 *
			 * @hooked WC_Structured_Data::generate_product_data() - 10
			 */
			do_action( 'woocommerce_shop_loop' );
		?>

		<?php wc_get_template_part( 'content', 'product' ); ?>
	<?php endwhile; ?>
	<?php woocommerce_product_loop_end(); ?>
	<?php
		/**
		 * woocommerce_after_shop_loop hook.
		 *
		 * @hooked woocommerce_pagination - 10
		 */
		do_action( 'woocommerce_after_shop_loop' );
	?>
	</div></div></div></section>
<?php endif; ?>

<?php get_footer(); ?>