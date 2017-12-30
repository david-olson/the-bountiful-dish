<?php
/**
 * the-bountiful-dish functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package the-bountiful-dish
 */

if ( ! function_exists( 'the_bountiful_dish_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function the_bountiful_dish_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on the-bountiful-dish, use a find and replace
		 * to change 'the-bountiful-dish' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'the-bountiful-dish', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'the-bountiful-dish' ),
		) );

		add_theme_support('menus');
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'the_bountiful_dish_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
		function my_jquery_enqueue() {
		   wp_deregister_script('jquery');
		   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js", false, null);
		   wp_enqueue_script('jquery');
		}
	}
endif;
add_action( 'after_setup_theme', 'the_bountiful_dish_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_bountiful_dish_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_bountiful_dish_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_bountiful_dish_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_bountiful_dish_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-bountiful-dish' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-bountiful-dish' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'the_bountiful_dish_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_bountiful_dish_scripts() {
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Dosis:400,700|Sacramento');

	wp_enqueue_style( 'foundation-icons', '//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' );

	wp_enqueue_style( 'the-bountiful-dish-style', get_template_directory_uri() . '/assets/css/build/app.min.css' );

	wp_enqueue_script( 'the-bountiful-dish-vendors', get_template_directory_uri() . '/assets/js/build/vendors.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'the-bountiful-dish-main', get_template_directory_uri() . '/assets/js/build/main.min.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_bountiful_dish_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

add_image_size('featured_meal', 300, 200, true);
add_image_size('sample_catering_menu', 600, 480, true);
add_image_size('category_overview', 360, 500, true);
add_image_size('single_heros', 1300, 9999, false);
add_image_size('single_loader', 16, 9, true);



// Foundation Walker Menu

class F6_DRILL_MENU_WALKER extends Walker_Nav_Menu {
	function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"vertical menu\">\n";
	}
}

function f6_drill_menu_fallback($args) {
	$walker_page = new Walker_Page();
	$fallback = $walker_page->walk(get_pages(), 0);
	$fallback = str_replace('children', 'children vertical menu', $fallback);
	echo '<ul class="vertical medium-horizontal menu align-right" data-responsive-menu="drilldown medium-dropdown" style="width: 100%">'.$fallback.'</ul>';
}

function word_count($text, $limit) {
	if (str_word_count($text, 0) > $limit) {
		$words = str_word_count($text, 2);
		$pos = array_keys($words);
		$text = substr($text, 0, $pos[$limit]);
		if (substr($text, -1) === '.' || substr($text, -1) === '!' || substr($text, -1) == '?' || substr($text, -1) == ',') {

		} else {
			$text .= '...';
		}
	}
	return $text;
}

function get_hero_slider()
{
	$args = array(
		'post_type' => 'hero_slide',
		'posts_per_page' => 5,
	);
	$hero_slider_loop = new WP_Query($args);

	if ($hero_slider_loop->have_posts()) : 
		while ($hero_slider_loop->have_posts()) : $hero_slider_loop->the_post();
			get_template_part('template-parts/hero-slider');
		endwhile;
	endif; 
	wp_reset_postdata();
}

function get_featured_meal_slider()
{
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => 6,
		'meta_key' => 'featured_post',
		'meta_value' => true,
	);

	$featured_meal_loop = new WP_Query($args);

	if ($featured_meal_loop->have_posts()) :
		while($featured_meal_loop->have_posts()) : $featured_meal_loop->the_post();
			get_template_part('template-parts/featured-meals');
		endwhile;
	endif;
	wp_reset_postdata();
}

function get_newsletter_signup()
{
	?>
	<section class="newsletter-signup">
		<div class="grid-container">
			<?php echo do_shortcode('[contact-form-7 id="728" title="Homepage Signup"]'); ?>
		</div>
	</section>
	<?
}

function get_meals_teaser($category_slug)
{
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => 3,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => $category_slug,
				'operator' => 'IN',
			),
		),
	);

	$teaser_query = new WP_Query($args);

	$term = get_term_by('slug', $category_slug, 'product_cat');

	if ($teaser_query->have_posts()) : 
		echo '<section class="meals-teaser giant-margin teaser-'.$category_slug.'">'; 
		echo '<div class="grid-container">';
		echo '<div class="grid-x grid-padding-x">';
		echo '<div class="auto cell">';
		echo '<h3 class="upper no-margin">'.$term->name.'</h3>';
		echo '</div>';
		echo '<div class="auto cell align-self-right text-right">';
		echo '<a class="upper gray no-margin" href="/menu/category/'.$term->slug.'">View All &gt;</a>';
		echo '</div>';
		echo '<div class="large-12 cell"><hr class="small-margin"></div>';
		echo '</div>';
		echo '<div class="grid-x grid-margin-x large-up-3 medium-up-3 small-up-1 large-margin floating-cell">';
		while($teaser_query->have_posts()) : $teaser_query->the_post();
			get_template_part('woocommerce/content-product');
		endwhile; 
		echo '</div>';
		echo '</div>';
		echo '</section>';
	endif; 
	wp_reset_postdata();
}

function get_testimonials()
{
	$args = array(
		'post_type' => 'testimonial',
		'posts_per_page' => 4,
	);

	$testimonial_query = new WP_Query($args);

	if ($testimonial_query->have_posts()) :?>
		<div class="grid-container">
			<div class="grid-x grid-padding-x align-center">
				<div class="medium-8 cell">
					<div class="testimonial-slider">
						<?php while($testimonial_query->have_posts()) : $testimonial_query->the_post(); ?>
							<?php get_template_part('template-parts/testimonial-slider'); ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif;
	wp_reset_postdata();
}

function get_sample_catering_menu()
{
	$args = array(
		'post_type' => 'product',
		'posts_per_page' => 4,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_cat',
				'field' => 'slug',
				'terms' => 'catering',
				'operator' => 'IN',
			),
		),
	);

	$catering_query = new WP_Query($args); 

	if ($catering_query->have_posts()) : 
		while ($catering_query->have_posts()) : $catering_query->the_post();
			?>
			<div class="cell margin-bottom catering-menu-sample" style="background-image: url('<?php the_post_thumbnail_url( 'sample_catering_menu' ); ?>');">
				<h2><?php the_title(); ?></h2>
			</div>
			<?php
		endwhile; 
	endif; 
	wp_reset_postdata();
}

function get_featured_posts()
{
	$args = array(
		'post_type' => 'post', 
		'meta_key' => '_zilla_likes',
		'orderby' => 'meta_value_num',
		'posts_per_page' => 5,
	);
	$top_query = new WP_Query($args);

	if ($top_query->have_posts()) : ?>
		<div class="top-posts-slider">
		<?php while ($top_query->have_posts()) : $top_query->the_post();
			?>
			
				<?php get_template_part( 'template-parts/top-posts-slider' ); ?>
		<?php endwhile; ?>
		</div>
		<?php
	endif;
	wp_reset_postdata();
}

// 
// Woocommerce Stuff
// 

function action_woocommerce_before_shop_loop_item() {
	echo 'image?';
}

add_action( 'woocommerce_before_shop_loop_item', 'action_woocommerce_before_shop_loop_item', 10, 0); 

// Ensure cart contents update when adjax add happens

function header_add_to_cart($fragments) {
	ob_start();
	$count = WC()->cart->cart_contents_count;

	?>
	<a class="cart" href="/cart"><?php echo $count; ?></a>
	<?php 
	$fragments['a.cart'] = ob_get_clean();
	return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'header_add_to_cart');

// After registration, redirect to my account page
function custom_registration_redirect() {
    return home_url('/my-account');
}
add_action('woocommerce_registration_redirect', 'custom_registration_redirect', 2);

/* =BEGIN: Add Class to first Paragraph in WordPress the_content();
    Source: http://webdevbits.com/wordpress/add-class-to-first-paragraph-in-wordpress-the_content/
   ---------------------------------------------------------------------------------------------------- */
function first_paragraph($content){
  // Adds the Lead class to the first paragraphs of the_content();
    return preg_replace('/<p([^>]+)?>/', '<p$1 class="lead">', $content, 1);
}
add_filter('the_content', 'first_paragraph');
