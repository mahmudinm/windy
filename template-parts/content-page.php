<div class="py-4 px-3 content">

	<h1><?php the_title(); ?></h1>

	<p><?php the_content(); ?></p>

	<?php 
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'windy' ),
			'after'  => '</div>',
		) );
	?>
</div>