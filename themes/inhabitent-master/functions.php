<?php
/**
 * Inhabitent Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Inhabitent_Theme
 */

if ( ! function_exists( 'inhabitent_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function inhabitent_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // inhabitent_starter_setup
add_action( 'after_setup_theme', 'inhabitent_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function inhabitent_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'inhabitent_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'inhabitent_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function inhabitent_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'inhabitent_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function inhabitent_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'inhabitent_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function inhabitent_starter_scripts() {
	wp_enqueue_style( 'inhabitent-starter-style', get_stylesheet_uri() );
	wp_enqueue_style('inhabitent-starter-fontawsome','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css');

	wp_enqueue_script( 'inhabitent-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'inhabitent-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'inhabitent_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

function my_custom_logo() { ?>
	<style type="text/css">
		#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text-dark.svg);
			height:100px;
			width:100px;
			background-size: 100px 100px;
			background-repeat: no-repeat;
			margin-bottom: 10px;
		}
	</style>
<?php } 
add_action( 'login_enqueue_scripts', 'logo-text-dark.svg' );

// Add widgets in the footer area
function inhabitent_start_footer_widgets() {
    // Widget code goes here...
    register_sidebar( array(
        'name'          => 'Footer',
        'id'            => 'footer',
        'description'   => 'Widgets for the footer',
        'before_widget' => '<section class="footer-area footer-area-one">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init', 'inhabitent_start_footer_widgets' );
