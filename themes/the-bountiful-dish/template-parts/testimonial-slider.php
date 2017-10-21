<article <?php post_class('slide'); ?> id="testimonial-<?php the_ID(); ?>">
	<div class="quote"><?php the_content(); ?></div>
	<p class="attribution"><?php the_field('attribution'); ?><?php if (get_field('attribution_job_description')) : ?>, <?php the_field('attribution_job_description'); ?><?php endif; ?></p>
</article>