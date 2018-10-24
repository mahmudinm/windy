<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="d-flex flex-column flex-md-row mb-4 py-4 px-3 content">

		<?php if (has_post_thumbnail()): ?>

		  <p class="mb-3 mb-md-0 mr-md-3 w-100">

				<?php the_post_thumbnail( 'medium', ['class' => 'rounded mr-3'] ); ?>

		  </p>

		<?php endif ?>

	  <div>

			<h2 class="heading-content" >

				<a href="<?php the_permalink(); ?>">
						
					<?php the_title(); ?>
							
				</a>

			</h2>

			<p>By <b><?php the_author(); ?></b> <i class="fa fa-clock-o"></i> <?php the_time( 'F jS Y g:i a' ); ?> </p>

			<?php the_excerpt(); ?>

		  <a href="<?php the_permalink(); ?>" class="roll-link"><span data-title="Read More">Read More</span></a>		

	  </div>

	</div>  

	<?php 
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'windy' ),
			'after'  => '</div>',
		) );
	?>

</article>