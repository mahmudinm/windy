<?php get_header(); ?>

	<?php if (have_posts()): ?>

		<?php while (have_posts()): the_post(); ?>

			<!-- Header -->

			<h1><?php the_title(); ?></h1>

			<p><?php the_time('F jS Y g:i a'); ?></p>			

			<?php 

				$categories = get_the_category();
				$separator = ", ";
				$output = '';

				if ($categories) {
					foreach ($categories as $category){
						$output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
					}
					echo trim($output, $separator);
				}
				
			?>	<br>		

			<b>Created by : <?php the_author(); ?></b> <br>

			<!-- Content -->
			<?php if (has_post_thumbnail()): ?>

				<?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>

			<?php endif ?>

			<p><?php the_content(); ?></p>

			<!-- Comment -->
			<?php  

				if (comments_open()) {

					comments_template();					

				} 

			?>

		<?php endwhile ?>

	<?php else: ?>
			
			<h1>No Content Found</h1>
		
	<?php endif ?>

<?php get_footer(); ?>