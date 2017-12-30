<?php get_header(); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
<section class="hero interior mission-hero text-center">
	<h1 class="script white">we cook because we care</h1>
</section>

<section class="content">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-center large-margin">
			<div class="large-10 cell text-center">
				<?php the_content(); ?>
			</div>
			<div class="large-12 cell">
				<hr>
			</div>
		</div>
		<div class="grid-x grid-padding-x align-middle">
			<div class="large-5 cell">
				<?php the_field('copy_block_1'); ?>
				<?php if (get_field('show_button')) : ?>
					<a href="<?php the_field('button_link'); ?>" class="button alternate"><?php the_field('button_text'); ?></a>
				<?php endif; ?>
			</div>
			<div class="large-7 cell">
				<?php $image = get_field('copy_block_image'); ?>
				<img src="<?php echo $image['sizes']['single_heros']; ?>" alt="">
			</div>
			<div class="large-12 cell">
				<hr>
			</div>
		</div>
		<div class="grid-x grid-padding-x">
			<div class="large-12 cell text-center">
				<h2 class="upper bold green">Our Team</h2>
			</div>
		</div>
		<div class="large-8 cell">
			<?php if (have_rows('main_team')) : ?>
				<?php while(have_rows('main_team')) : the_row(); ?>
					<div class="grid-x grid-padding-x align-middle">
						<div class="large-4 cell">
							<?php $image = get_sub_field('bio_photo'); ?>
							<img class="round" src="<?php echo $image['sizes']['shop_catalog']; ?>" alt="">
						</div>
						<div class="large-8 cell">
							<h3 class="upper"><?php the_sub_field('name'); ?></h3>
							<p class="upper"><?php the_sub_field('title'); ?></p>
							<p><?php the_sub_field('bio'); ?></p>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<?php if (have_rows('contributors')) : ?>
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell text-center">
					<hr>
					<h2 class="upper bold green large-margin-bottom">Our Contributors</h2>
				</div>
			</div>
			<div class="grid-x grid-padding-x align-center large-up-4">
			<?php while (have_rows('contributors')) : the_row(); ?>
				<div class="cell text-center large-margin-bottom">
					<?php $image = get_sub_field('contributor_image'); ?>
					<img src="<?php echo $image['sizes']['shop_catalog']; ?>" alt="" class="round" />
					<h3 class="no-margin"><?php the_sub_field('name'); ?></h3>
					<p class="gray"><?php the_sub_field('title'); ?></p>
				</div>
			<?php endwhile; ?>
			</div>
		<?php endif; ?>
		
	</div>
</section>

<section class="hero interior ingredients-hero">
	<h2 class="white text-center"><?php the_field('image_headline'); ?></h2>
</section>

<section class="content">
	<div class="grid-container">
		<div class="grid-x grid-padding-x align-middle large-margin">
			<div class="large-6 cell">
				<?php $image_two = get_field('copy_block_2_image'); ?>
				<img src="<?php echo $image_two['sizes']['single_heros']; ?>" alt="">
			</div>
			<div class="large-5 cell">
				<?php the_field('copy_block_2'); ?>
			</div>
		</div>
	</div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>