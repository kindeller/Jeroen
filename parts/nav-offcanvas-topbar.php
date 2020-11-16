<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
global $HeadType;
?>

<div class="top-bar <?php echo $HeadType?>" id="top-bar-menu">
	<div class="top-bar-left float-left show-for-medium">
		<a href="<?php echo home_url(); ?>"><div class="logo"><h3 id="web-title"><?php bloginfo('name'); ?></h3></div></a>
		
	</div>
	
	<div class="top-bar-right show-for-medium">
	
		<?php joints_top_nav(); ?>
	</div>
	
	<div class="top-bar-right float-right show-for-small-only">
		<div class="logo" data-toggle="off-canvas"><h3 id="web-title"><?php bloginfo('name'); ?></h3></div>
	</div>
	
	
</div>