<div class="py-4 px-3 content">
	<!-- Thumbnail -->

	<?php if (has_post_thumbnail()): ?>

		<?php the_post_thumbnail( 'post-thumbnail', ['class' => 'img-fluid'] ); ?>

	<?php endif ?>

	<!-- Header -->

	<h1 class="mt-4"><?php the_title(); ?></h1>

	<p><?php the_time('F jS Y g:i a'); ?></p>			

	<?php 

		$categories = get_the_category();

		$separator = " ";

		$output = '';

		if ($categories) {

			foreach ($categories as $category){

				$output .= '<a href="'.get_category_link($category->term_id).'" class="content__badge">'.$category->cat_name.'</a>'.$separator;

			}
			
			echo trim($output, $separator);
		}
		
	?>	<br><br>		

	<b>Created by : <?php the_author(); ?></b> <br>

	<p><?php the_content(); ?></p>

	<!-- Comment -->
	<?php  

		if (comments_open()) {

			comments_template();					

		} 

	?>	
</div>