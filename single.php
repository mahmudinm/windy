<?php get_header(); ?> 

	<?php if (have_posts()): ?>
		
		<div class="starter-template">

			<div class="row">

				<div class="col-md-9">

					<?php while (have_posts()): the_post(); ?>
							
								<?php get_template_part( 'template-parts/content-single', get_post_format() ); ?>				

					<?php endwhile ?>
					
				</div>				

				<div class="col-md-3 p-4 sidebar">
					
					<?php dynamic_sidebar('sidebar1'); ?>

				</div>

			</div>

		</div>

	<?php endif ?>

<?php get_footer(); ?>