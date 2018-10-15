<?php get_header(); ?>
	
	<?php if (have_posts()): ?>
		
		<div class="starter-template">

			<div class="row">

				<div class="col-md-9">

					<?php while (have_posts()): the_post(); ?>
							
								<?php get_template_part( 'template-parts/content', get_post_format() ); ?>				

					<?php endwhile ?>

					<div class="d-flex">

						<div class=""><?php previous_posts_link( 'Prev post' ); ?></div>

						<div class="ml-auto "><?php next_posts_link( 'Next post' ); ?></div>

					</div>

				</div>				

				<div class="col-md-3 p-4 sidebar">
					
					<?php dynamic_sidebar('sidebar1'); ?>

				</div>

			</div>

		</div>

	<?php else: ?>
			
			<h1>No Content Found</h1>
		
	<?php endif ?>			


<?php get_footer(); ?>