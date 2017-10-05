<?php global $product; ?>
<article class="featured-meal slide" id="featured_meal_slide_<?php the_ID(); ?>">
	<a href="<?php the_permalink(); ?>">
		<img src="<?php the_post_thumbnail_url('featured_meal'); ?>" alt="<?php the_title(); ?>">
	</a>
	<p class="category"><?php echo get_the_category_list(', '); ?></p>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="excerpt"><?php the_excerpt(); ?></p>
	<p class="price"><?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></p>
	<a href="<?php the_permalink(); ?>" class="more-info">More Info</a>
	<form action="/" class="add-to-cart cart">
		<button data-quantity="1" data-product_id="<?php the_ID(); ?>" type="submit" class="button ajax_add_to_cart add_to_cart_button">Add To Cart</button>
		<?php //Still need to create JS Function to Add to Cart ?>
	</form>
</article>