<?php  

/*
	Register Navigation Menu
*/
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'learn' )
	// ,
	// 'social' => __( 'Social Menu', 'learn' )
) );

/*
	File Css Dan Javascript
*/
function learn_scripts() {

	wp_enqueue_style( 'learn-bootstrap', get_template_directory_uri(). '/css/bootstrap.css' );

	wp_enqueue_style( 'learn-font-awesome', get_template_directory_uri(). '/css/font-awesome.css' );

	wp_enqueue_style( 'learn-starter', get_template_directory_uri(). '/css/starter.css' );

	wp_enqueue_style( 'learn-style', get_template_directory_uri(). '/style.css' );

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'learn-bootstrapjs', get_template_directory_uri(). '/js/bootstrap.js' );

}
add_action( 'wp_enqueue_scripts', 'learn_scripts' );


/*
	Register Widget
*/
function learn_widget() {

	register_sidebar([
		'name' => 'Sidebar 1',
		'id' => 'sidebar1'
	]);

	register_widget( 'laern_social_widget' );

}
add_action( 'widgets_init', 'learn_widget' );

require_once( get_template_directory() . '/inc/widgets/widget-social.php' );

// Replaces the excerpt "Read More" text by a link
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function learn_setup() {

	add_theme_support( 'post-thumbnails' );			
	add_theme_support( 'custom-background' );

}
add_action( 'after_setup_theme', 'learn_setup' );

require_once get_template_directory() .'/inc/extras.php';

require_once get_template_directory() .'/inc/class-wp-bootstrap-navwalker.php';

require_once get_template_directory() .'/inc/bootstrap-pagination.php';

require_once get_template_directory() .'/inc/customizer.php';

require_once get_template_directory() .'/inc/custom-comment.php';

require_once get_template_directory() .'/inc/custom-comment.php';

require_once get_template_directory() .'/inc/social-nav.php';

?>