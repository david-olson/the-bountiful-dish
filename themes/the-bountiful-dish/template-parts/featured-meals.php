<?php global $product; ?>
<article class="featured-meal slide match-height" id="featured_meal_slide_<?php the_ID(); ?>">
	<?php if (has_post_thumbnail()) : ?>
		<a href="<?php the_permalink(); ?>">
			<img src="<?php the_post_thumbnail_url('featured_meal'); ?>" alt="<?php the_title(); ?>">
		</a>
	<?php endif; ?>
	<div class="details-holder">
		<p class="category"><?php echo get_the_category_list(', '); ?></p>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="excerpt"><?php $excerpt =  get_the_excerpt(); 
		echo word_count($excerpt, 20);
		?></p>
		<p class="price"><?php echo get_post_meta(get_the_ID(), '_regular_price', true); ?></p>
		<div class="grid-x grid-padding-x align-middle">
			<div class="shrink cell">
				<a href="<?php the_permalink(); ?>" class="more-info">More Info</a>
			</div>
			<div class="auto cell">
				<form action="/" class="add-to-cart cart">
					<button data-quantity="1" data-product_id="<?php the_ID(); ?>" type="submit" class="button ajax_add_to_cart add_to_cart_button expanded" style="margin-bottom: 0;">Add To Cart</button>
					<?php //Still need to create JS Function to Add to Cart ?>
				</form>
			</div>
		</div>
		
		
	</div>
</article>