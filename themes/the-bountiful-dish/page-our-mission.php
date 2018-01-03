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
				<?php if (have_rows('copy_block_image')) : ?>
					<div class="mission-slider">
						<?php while (have_rows('copy_block_image')) : the_row(); ?>
							<?php $image = get_sub_field('image'); ?>
							<div class="slide" style="background-image: url('<?php echo $image['sizes']['single_heros']; ?>');"></div>
						<?php endwhile; ?>		
					</div>
					<script>
						$(document).ready(function() {
							$('.mission-slider').slick({
								slidesToShow: 1,
								infinite: true,
								arrows: true,
								prevArrow: '<button type="button" class="slick-prev"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-35.000000, -1392.000000)" stroke="#ffffff" stroke-width="2"><g id="Group-Copy-2" transform="translate(36.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
								nextArrow: '<button type="button" class="slick-next"><svg width="45px" height="45px" viewBox="0 0 45 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="Homepage" transform="translate(-1354.000000, -1392.000000)" stroke="#ffffff" stroke-width="2"><g id="Group-Copy-3" transform="translate(1376.500000, 1414.500000) rotate(-180.000000) translate(-1376.500000, -1414.500000) translate(1355.000000, 1393.000000)"><circle id="Oval-2" cx="21.5" cy="21.5" r="21.5"></circle><polyline id="Path-2" points="26.7996845 10 15 21.7996845 25.933171 32.7328555"></polyline></g></g></g></svg></button>',
								<?php if (get_field('slide_show_autoplay')) : ?>autoplay: true,
								autoplaySpeed: <?php $number = get_field('slideshow_delay');
								$number = $number * 1000; 
								echo $number; ?>,
								<?php endif; ?>
							});
						});
					</script>
				<?php endif; ?>
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