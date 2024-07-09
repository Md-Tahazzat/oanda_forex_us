<?php
/**
 * ondaforexus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ondaforexus
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
function ondaforexus_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ondaforexus, use a find and replace
		* to change 'ondaforexus' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ondaforexus', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'ondaforexus' ),
		)
	);

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
			'ondaforexus_custom_background_args',
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
add_action( 'after_setup_theme', 'ondaforexus_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ondaforexus_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ondaforexus_content_width', 640 );
}
add_action( 'after_setup_theme', 'ondaforexus_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ondaforexus_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ondaforexus' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ondaforexus' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ondaforexus_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ondaforexus_scripts() {
	// ======CSS Files =======
	// wp_enqueue_style( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $media:string )
	wp_enqueue_style('ondaforexus-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data('ondaforexus-style', 'rtl', 'replace' );

	// external css 
	//   wp_enqueue_style('fontawesome-local', get_template_directory_uri() . '/assets/css/fontawesome.min.css', array(), '6.5.2');
	//   wp_enqueue_style('fontawesome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2');
	//   wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.6.0');
	//   wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '4.1.1');
	//   wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', array(), '2.3.4');
	//   wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), '1.0.0');
	//   wp_enqueue_style('datatables', get_template_directory_uri() . '/assets/css/datatables.min.css', array(), '1.10.21');
	//   wp_enqueue_style('notify', get_template_directory_uri() . '/assets/css/notify.css', array(), '1.0.0');
	//   wp_enqueue_style('custom', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0');
	//   wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.1.0');
	//   wp_enqueue_style('aos', get_template_directory_uri() . '/assets/css/aos.css', array(), '2.3.1');
	//   wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0');



	// ==== Scripts Files =======
	// wp_enqueue_script( $handle:string, $src:string, $deps:array, $ver:string|boolean|null, $in_footer:boolean )
	// wp_enqueue_script("jquery");
	wp_deregister_script('jquery');
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ondaforexus_scripts' );

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



// Filter body class
function add_custom_body_class($classes) {
        $classes[] = 'dark-theme';
    return $classes;
}
add_filter('body_class', 'add_custom_body_class');


// ======== include payments & login functionality functions =======
require get_template_directory() . '/payments/custom_route.php';
require get_template_directory() . '/payments/payments.php';
require get_template_directory() . '/payments/authentication.php';

