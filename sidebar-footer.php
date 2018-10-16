<?php
/**
 * The Sidebar widget area for footer.
 *
 * @package windy
 */
?>

	<?php

	if ( ! is_active_sidebar( 'footer1' ) && ! is_active_sidebar( 'footer2' ) && ! is_active_sidebar( 'footer3' ) ) {
		return;
	}

	?>

	<!-- <div class="footer-widget-area"> -->

		<?php if ( is_active_sidebar( 'footer1' ) ) : ?>

			<div class="col-4">

				<?php dynamic_sidebar( 'footer1' ); ?>

			</div>
			
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer2' ) ) : ?>

			<div class="col-4">

				<?php dynamic_sidebar( 'footer2' ); ?>

			</div>

		<?php endif; ?>

		<?php if ( is_active_sidebar( 'footer3' ) ) : ?>

			<div class="col-4">

				<?php dynamic_sidebar( 'footer3' ); ?>

			</div>

		<?php endif; ?>

	<!-- </div> -->
