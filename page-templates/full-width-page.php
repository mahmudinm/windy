<?php  
/*
Template Name: Full Width 
*/
get_header();
?>
	<?php if (have_posts()): ?>
		
		<?php if (has_post_thumbnail()): ?>
			
			</div><!-- End container -->

			<div style="background: url(<?php echo get_the_post_thumbnail_url( 'large' ); ?>) no-repeat;background-size: cover;" class="hero-page">
				<?php while (have_posts()): the_post(); ?>
						
						<h2 class="text-center hero-page__heading"><?php the_title(); ?></h2>

				<?php endwhile ?>

			</div>
			
			<div class="container">
			
		<?php endif ?>

		<div class="starter-template">

			<div class="row">

				<div class="col-md-12">

					<?php while (have_posts()): the_post(); ?>
							
							<?php get_template_part( 'template-parts/content', 'page' ); ?>				

					<?php endwhile ?>

				</div>				

			</div>

		</div>

	<?php endif ?>

<?php get_footer(); ?>
