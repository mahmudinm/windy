<h2><?php the_title(); ?></h2>

<?php if (has_post_thumbnail()): ?>

	<?php the_post_thumbnail( 'medium', ['class' => 'img-thumbnail rounded '] ); ?>

<?php endif ?>

<p>By <b><?php the_author(); ?></b> <i class="fa fa-clock-o"></i> <?php the_time( 'F jS Y g:i a' ); ?> </p>

<p>

	<?php the_excerpt(); ?>

	<a href="<?php the_permalink(); ?>">Read More</a>
	
</p>