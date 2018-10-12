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

	wp_enqueue_style( 'windy-starter', get_template_directory_uri(). '/css/starter.css' );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_style( 'windy-style', get_template_directory_uri(). '/style.css' );

	wp_enqueue_script( 'windy-bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js' );
	
	wp_register_script( 'script-script', get_template_directory_uri() . '/js/script.js','','1.1', true );

	wp_enqueue_script( 'script-script' );

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


function windy_setup() {

	add_theme_support( 'post-thumbnails' );			
	add_theme_support( 'custom-background' );
	add_theme_support( 'custom-logo', array(
		'width'       => 200,
		'height'      => 50,
		'flex-width'  => true,
	) );	

}
add_action( 'after_setup_theme', 'windy_setup' );



require_once get_template_directory() .'/inc/filter_menu_nav.php';

require_once get_template_directory() .'/inc/extras.php';

require_once get_template_directory() .'/inc/class-wp-bootstrap-navwalker.php';

require_once get_template_directory() .'/inc/bootstrap-pagination.php';

require_once get_template_directory() .'/inc/customizer.php';

require_once get_template_directory() .'/inc/custom-comment.php';

require_once get_template_directory() .'/inc/custom-comment.php';

require_once get_template_directory() .'/inc/social-nav.php';

?>