<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?= get_bloginfo( 'title' ); ?></title>
		<?php wp_head(); ?>
		<style>
			.bg-custom {
				background-color: <?= get_theme_mod( 'navbar_color', '#3f72af' ); ?> !important;
			}
			.social_icon {
		    background: <?= get_theme_mod( 'social_color', '#1e73be' ); ?>;
			}
		</style>
		<?php if (is_admin_bar_showing()): ?>
			<style>
				.fixed-top{
					top: 32px;
				}
			</style>
		<?php endif ?>
	</head>

	<body>
		
		<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-custom">
			<div class="container">
				<a class="navbar-brand" href="<?= esc_url( home_url('/') ); ?>"><?= get_bloginfo( 'title' ); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>

<?php  
// turn it on
add_filter( 'wp_nav_menu_objects', function( $items )
{
    add_filter( 'the_title', 'change_nav_title' );
    return $items;
});
// turn it off
add_filter( 'wp_nav_menu', function( $nav_menu )
{
    remove_filter( 'the_title', 'change_nav_title' );
    return $nav_menu;
});

// change the title
function change_nav_title( $title )
{
    return sprintf(
        '<span data-hover="%1$s">%2$s</span>',
        esc_attr( $title ),
        $title
    );
}
?>

				</button>
				<?php
					wp_nav_menu( array(
						'theme_location'    => 'primary',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => 'collapse navbar-collapse',
						'container_id'      => 'bs-example-navbar-collapse-1',
						'menu_class'        => 'nav navbar-nav '.get_theme_mod( 'navbar_align', 'ml-auto' ) ,
						'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
						'walker'            => new WP_Bootstrap_Navwalker(),
					) );
				?>
			</div>
		</nav>

		<div class="container">
			
			<div class="">
				<?= windy_featured_slider(); ?>
			</div>