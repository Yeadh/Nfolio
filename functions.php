<?php
/**
 * nextfolio functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nextfolio
 */

if ( ! function_exists( 'nextfolio_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function nextfolio_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on nextfolio, use a find and replace
		 * to change 'nextfolio' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'nextfolio', get_template_directory() . '/languages' );

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

		add_theme_support( 'post-thumbnails', array( 'post', '', '' ) );
		add_image_size( 'blog-image', 500, 500, true ); 
		add_image_size( 'sidebar-image', 80, 80, true ); 
		add_image_size( 'single_post', 1030, 707, true ); 
		
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'nextfolio' ),
		) );

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
		add_theme_support( 'custom-background', apply_filters( 'nextfolio_custom_background_args', array(
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
	}
endif;
add_action( 'after_setup_theme', 'nextfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nextfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nextfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'nextfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nextfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nextfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'nextfolio' ),
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title">
							<h4>',
		'after_title'   => '</h4>
							</div>',
	) );
}
add_action( 'widgets_init', 'nextfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nextfolio_scripts() {
	wp_enqueue_style( 'nextfolio-style', get_stylesheet_uri() );
	wp_enqueue_style( 'plugins', 	get_template_directory_uri() . '/assets/rs-plugin/css/settings.css', array(), '1.0' );
	wp_enqueue_style( 'animate', 		get_template_directory_uri() . '/assets/css/animate.css', array(), '1.0' );
	wp_enqueue_style( 'bootstrap', 	get_template_directory_uri() . '/assets/css/bootstrap.css' );
	wp_enqueue_style( 'prettyPhoto', 	get_template_directory_uri() . '/assets/css/prettyPhoto.css' );
	wp_enqueue_style( 'carousel', 	get_template_directory_uri() . '/assets/css/carousel.css' );
	wp_enqueue_style( 'bootstrap-select', 	get_template_directory_uri() . '/assets/css/bootstrap-select.css' );
	wp_enqueue_style( 'jquery', 	get_template_directory_uri() . '/assets/css/jquery-ui.css' );
	wp_enqueue_style( 'testimonial', 	get_template_directory_uri() . '/assets/css/testimonial.css' );
	wp_enqueue_style( 'load', 	get_template_directory_uri() . '/assets/css/load.css' );
	wp_enqueue_style( 'nextfolio', 	get_template_directory_uri() . '/assets/css/nextfolio.css' );
	wp_enqueue_style( 'style', 	get_template_directory_uri() . '/assets/css/style.css' );
	wp_enqueue_style( 'custom', 	get_template_directory_uri() . '/assets/css/custom.css' );
	
	wp_enqueue_script( 'premise-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'bootstrap', 	get_template_directory_uri() . '/assets/js/bootstrap.js', array('jquery'), '', false );
	wp_enqueue_script( 'plugins', 	get_template_directory_uri() . '/assets/js/plugins.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'custom', 	get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'isotope', 	get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), '', false );
	wp_enqueue_script( 'imagesloaded.pkgd', 	get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', array('jquery'), '', false );
	wp_enqueue_script( 'masonry', 	get_template_directory_uri() . '/assets/js/masonry.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'jquery-ui', 	get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'jquery-ui-timepicker-addon', 	get_template_directory_uri() . '/assets/js/jquery-ui-timepicker-addon.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'isotope', 	get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'bootstrap-select', 	get_template_directory_uri() . '/assets/js/bootstrap-select.js', array('jquery'), '1.0', false );
	wp_enqueue_script( 'themepunch', 	get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '', false );
	wp_enqueue_script( 'revolution', 	get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.0', false );
	
	
	wp_enqueue_script( 'premise-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nextfolio_scripts' );


/**************************************************
	Next Folio Start from here
*************************************************/


add_filter('the_excerpt', function ($content){
	$post_content = explode(" ", $content);
	$less_content = array_slice($post_content, 0, 26);
	$excert =  implode(" ", $less_content);
	$excert = sprintf('<p>%s</p> <a href="%s" class="btn btn-primary btn-block">%s</a>',$excert, get_the_permalink(),__('Read More','nextfolio')) ;
	return $excert;	
});



































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
