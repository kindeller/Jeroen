<?php
/**
 * The template part for displaying offcanvas content
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="off-canvas position-right" id="off-canvas" data-off-canvas>
	<br>
	<br>
	 <button class="close-button" aria-label="Close alert" type="button" data-close>
    <span aria-hidden="true">&times;</span>
  </button>

	<div class="mobile-menu">
	<?php joints_off_canvas_nav(); ?>

	<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

		<?php dynamic_sidebar( 'offcanvas' ); ?>

	<?php endif; ?>
	</div>

</div>
