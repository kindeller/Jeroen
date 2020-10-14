<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left show-for-medium">
		<!--<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><img src="wp-content/themes/verschoor-vision-imagination/assets/images/logo.png" width="100" height="150" alt="logo"></a></li>
		</ul>-->
		<a href="<?php echo home_url(); ?>"><img src="wp-content/themes/verschoor-vision-imagination/assets/images/logo.png" width="100" height="150" alt="logo"></a>
	</div>
	
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	
	<div class="top-bar-right float-right show-for-small-only">
		<!--<ul class="menu">
			<li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li>
			
			<!--<li><a data-toggle="off-canvas"><?php //_e( 'Menu', 'jointswp' ); ?></a></li>
		</ul>-->
		<img src="wp-content/themes/verschoor-vision-imagination/assets/images/logo.png" width="100" height="150" alt="logo" data-toggle="off-canvas"></a>
	</div>
	
	
</div>