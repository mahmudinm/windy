<?php  

/*
	Register Navigation Menu
*/
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'windy' )
	// 'social' => __( 'Social Menu', 'windy' )
) );

/*
	File Css Dan Javascript
*/
function windy_scripts() {

	wp_enqueue_style( 'windy-bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css' );

	wp_enqueue_style( 'windy-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );

	wp_enqueue_style( 'windy-style', get_template_directory_uri(). '/style.css' );

	wp_enqueue_style( 'windy-starter', get_template_directory_uri(). '/css/starter.css' );

	wp_enqueue_style( 'windy-custom-style', get_template_directory_uri(). '/css/custom-style.css' );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'windy-bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js' );
	
	wp_register_script( 'script-script', get_template_directory_uri() . '/js/script.js','','1.1', true );

	wp_enqueue_script( 'script-script' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'windy_scripts' );


/*
	Register Widget
*/
function windy_widget() {

	register_sidebar([
		'name' => 'Sidebar 1',
		'id' => 'sidebar1'
	]);

	register_sidebar([
		'name' => 'Footer 1',
		'id' => 'footer1'
	]);

	register_sidebar([
		'name' => 'Footer 2',
		'id' => 'footer2'
	]);

	register_sidebar([
		'name' => 'Footer 3',
		'id' => 'footer3'
	]);

	register_widget( 'windy_social_widget' );

}
add_action( 'widgets_init', 'windy_widget' );

require_once( get_template_directory() . '/inc/widgets/widget-social.php' );

// Replaces the excerpt "Read More" text by a link

function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Next Prev Post Custom 
add_filter('next_posts_link_attributes', 'posts_link_attributes_1');
add_filter('previous_posts_link_attributes', 'posts_link_attributes_2');

function posts_link_attributes_1() {
    return 'class="btn btn-outline-primary btn--pagination"';
}
function posts_link_attributes_2() {
    return 'class="btn btn-outline-primary btn--pagination"';
}


// Setup Windy
function windy_setup() {


	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Windy, use a find and replace
	 * to change 'windy' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'windy', get_template_directory() . '/languages' );

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

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );		

	add_theme_support( 'post-thumbnails' );			
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-logo', array(
		'width'       => 200,
		'height'      => 50,
		'flex-width'  => true,
	) );	

}
add_action( 'after_setup_theme', 'windy_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function windy_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'windy_content_width', 640 );
}
add_action( 'after_setup_theme', 'windy_content_width', 0 );




require_once get_template_directory() .'/inc/filter_menu_nav.php';

require_once get_template_directory() .'/inc/extras.php';

require_once get_template_directory() .'/inc/class-wp-bootstrap-navwalker.php';

require_once get_template_directory() .'/inc/customizer.php';

require_once get_template_directory() .'/inc/custom-comment.php';

require_once get_template_directory() .'/inc/social-nav.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


?>