<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="profile" href="https://gmpg.org/xfn/11">
		<?php wp_head(); ?>
		<style>
			.bg-custom {
				background-color: <?php echo get_theme_mod( 'navbar_color', '#3f72af' ); ?> !important;
			}
			.social_icon {
		    background: <?php echo get_theme_mod( 'social_color', '#fff' ); ?>;
			}
		</style>
		<?php if (is_admin_bar_showing()): ?>
			<style>
				.fixed-top{
					top: 32px;
				}
				@media (max-width: 768px) {
					.fixed-top{
						top: 0;
					}					
				}
			</style>
		<?php endif ?>
	</head>

	<body <?php body_class(); ?>>
		<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-custom">
			<div class="container">
				<?php echo get_custom_logo( 'custom-logo' ); ?>					
				<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><?php bloginfo( 'name' ); ?></a>
				<button class="navbar-toggler hamburger hamburger--spin" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
				  <span class="hamburger-box">
				    <span class="hamburger-inner"></span>
				  </span>
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
			
			<div>

				<?php windy_featured_slider(); ?>
				
			</div>