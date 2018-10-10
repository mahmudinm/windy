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
			.bg-dark {
				background-color: <?= get_theme_mod( 'navbar_color', '#343a40' ); ?> !important;
			}
			.social_icon {
		    background: <?= get_theme_mod( 'social_color', '#1e73be' ); ?>;
			}			
		</style>
	</head>

	<body>
		
		<nav class="navbar navbar-expand-md navbar-dark bg-dark">
			<div class="container">
				<a class="navbar-brand" href="<?php home_url(); ?>"><?= get_bloginfo( 'title' ); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 2,
					'container'         => 'div',
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav '.get_theme_mod( 'navbar_align', 'mr-auto' ) ,
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				) );
				?>

			</div>
		</nav>

		<div class="container">
			
			<div class="">
				<?= learn_featured_slider(); ?>
			</div>