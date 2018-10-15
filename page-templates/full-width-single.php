<?php  
/*
Template Name: Full Width 
*/
get_header();
?>
	<?php if (have_posts()): ?>

		<?php if (has_post_thumbnail()): ?>

			<?php the_post_thumbnail( 'large', ['class' => 'thumbnail-page'] ); ?>
			
		<?php endif ?>
		
		<div class="starter-template">

			<div class="row">

				<div class="col-sm-12">

					<?php while (have_posts()): the_post(); ?>
							
								<?php get_template_part( 'template-parts/content', 'page' ); ?>				

					<?php endwhile ?>

				</div>				

			</div>

		</div>

	<?php endif ?>

<?php get_footer(); ?>