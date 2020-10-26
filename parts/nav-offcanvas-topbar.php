<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left show-for-medium">
		<a href="<?php echo home_url(); ?>"><div class="logo"></div></a>
	</div>
	
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	
	<div class="top-bar-right float-right show-for-small-only">
		<div class="logo" data-toggle="off-canvas"></div>
	</div>
	
	
</div>