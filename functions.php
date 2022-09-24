<?php
/**
 * divergeai-22 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package divergeai-22
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function divergeai_22_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on divergeai-22, use a find and replace
		* to change 'divergeai-22' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'divergeai-22', get_template_directory() . '/languages' );

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
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'divergeai-22' ),
		)
	);

	// Adds Stylesheets and Javascript files to the page
function divergeai22_scripts() {
    
    // bootstrap
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css', array(), '5.2.1');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css', array(), '6.1.1');

    // Owl carousel
    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/owl_carousel/owl.carousel.css');
    wp_enqueue_style('owl_carousel', get_template_directory_uri() . '/owl_carousel/owl.theme.default.css');

    // SlickNav CSS
    wp_enqueue_style('slicknav-css', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.10');

    // CSS Style
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', [], filemtime(get_template_directory() . '/assets/css/styles.css'));


    /** Load Scripts **/

    // JQuery
    wp_enqueue_script('jquery');
    
    // Boostrap JS Bundle
    wp_enqueue_script('bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.2.1', true);

    // Owl carousel JS plugin
    wp_enqueue_script('owl_carousel', get_template_directory_uri() . '/owl_carousel/owl.carousel.js', array('jquery'), '2.0.0', true);

    // SlickNav JS
    wp_enqueue_script('slicknav-js', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

    // Main JavaScript
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/js/main.js', array('jquery'), '2.0.0', true);
}
add_action('wp_enqueue_scripts', 'divergeai22_scripts');

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'divergeai_22_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'divergeai_22_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function divergeai_22_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'divergeai_22_content_width', 640 );
}
add_action( 'after_setup_theme', 'divergeai_22_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function divergeai_22_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'divergeai-22' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'divergeai-22' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'divergeai_22_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function divergeai_22_scripts() {
	wp_enqueue_style( 'divergeai-22-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'divergeai-22-style', 'rtl', 'replace' );

	wp_enqueue_script( 'divergeai-22-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'divergeai_22_scripts' );

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

