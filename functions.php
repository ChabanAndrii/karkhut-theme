<?php
/**
 * Igor Karkhut Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Igor_Karkhut_Theme
 */

if ( ! function_exists( 'igor_karkhut_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function igor_karkhut_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Igor Karkhut Theme, use a find and replace
	 * to change 'igor-karkhut-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'igor-karkhut-theme', get_template_directory() . '/languages' );

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
		'menu-1' => esc_html__( 'Primary', 'igor-karkhut-theme' ),
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
	add_theme_support( 'custom-background', apply_filters( 'igor_karkhut_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'igor_karkhut_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function igor_karkhut_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'igor_karkhut_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'igor_karkhut_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
/**
 * LOGO Widget.
 */
function logo_widget_init() {

register_sidebar( array(
	'name'          => 'Загрузіть новий логотип',
	'id'            => 'logo',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<span class="hidden">',
	'after_title'   => '</span>',
) );

}
add_action( 'widgets_init', 'logo_widget_init' );

/**
 * LANGUAGE Widget.
 */
function language_widget_init() {

register_sidebar( array(
	'name'          => 'Загрузіть поле вибору мови',
	'id'            => 'language',
	'before_widget' => '',
	'after_widget'  => '',
	'before_title'  => '<span class="hidden">',
	'after_title'   => '</span>',
) );

}
add_action( 'widgets_init', 'language_widget_init' );


function igor_karkhut_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'igor-karkhut-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'igor-karkhut-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'igor_karkhut_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function igor_karkhut_theme_scripts() {


	wp_enqueue_style( 'bootstrap-style', get_template_directory_uri() . '/css/bootstrap.css'); 	
	wp_enqueue_style( 'main-style',   	 get_template_directory_uri() . '/css/bundle.min.css'); 	
	wp_enqueue_style( 'sliders-style',   get_template_directory_uri() . '/css/slider.css'); 
	wp_enqueue_style( 'aos-style',		 get_template_directory_uri() . '/css/aos.css'); 

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js');
	wp_enqueue_script( 'aos-js', 	   get_template_directory_uri() . '/js/aos.js');
	wp_enqueue_script( 'isotop-js',    get_template_directory_uri() . '/js/isotop.js');
	wp_enqueue_script( 'masonty-js',   get_template_directory_uri() . '/js/masonry.js');
	wp_enqueue_script( 'main-js', 	   get_template_directory_uri() . '/js/main.js');
	
}
add_action( 'wp_enqueue_scripts', 'igor_karkhut_theme_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/**
 * Load TGM plugin compatibility file.
 */
require get_template_directory() . '/tgm//igor-karkhut.php';

require get_template_directory() . '/custom-types.php';

remove_action('wp_head', 'rsd_link');

remove_action('wp_head', 'wlwmanifest_link');

remove_action('wp_head', 'wp_generator');







