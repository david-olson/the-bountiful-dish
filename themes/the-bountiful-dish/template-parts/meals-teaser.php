<div class="cell">
	<?php global $product; ?>
	<?php $attributes = get_post_meta( get_the_ID() , '_product_attributes' ); ?>
	<?php //var_dump($attributes); ?>

	<article <?php post_class(); ?> id="featured-meal-<?php the_id(); ?>">
		<a href="<?php the_permalink(); ?>">
			<img src="<?php the_post_thumbnail_url('featured_meal'); ?>" alt="<?php the_title(); ?>">
		</a>
		<h4>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h4>
		<?php if ($attributes) : echo $attributes[0]['feeds']['name'] . ' ' .$attributes[0]['feeds']['value']; endif;?> &bull; <a href="<?php the_permalink(); ?>" class="order-now">Order Now</a>
	</article>
</div>