<?php get_header(); ?>
	
	<?php if (have_posts()): ?>
		
		<div class="starter-template">

			<div class="row">

				<div class="col-sm-8">

					<?php while (have_posts()): the_post(); ?>
							
								<?php get_template_part( 'template-parts/content', get_post_format() ); ?>				

					<?php endwhile ?>

					<!-- Post number paginate -->
					<?= fellowtuts_wpbs_pagination(); ?>

				</div>				

				<div class="col-sm-4">
					
					<?php dynamic_sidebar('sidebar1'); ?>

				</div>

			</div>

		</div>

	<?php endif ?>

<?php get_footer(); ?>