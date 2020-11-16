<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */
global $HeadType;
$HeadType = "Lizi";
get_header(); ?>
	<div id="container">
      
      <div class="grid-x">
        <div class="cell">
          <section id="lizi">
         <!-- <h1 id="lizi-title">THE ART OF LiZi</h1>
		  <p>performance fine artist</p>-->
          </section>
        </div>
      </div>
    
	<section id="lizi-gallery">
	<div id="lizi-gallery-widget" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

	<?php if ( is_active_sidebar( 'lizi' ) ) : ?>

		<?php dynamic_sidebar( 'lizi' ); ?>

	<?php endif; ?>

</div>
	 </section>

  </div>

<footer>
  <?php get_footer(); ?>
</footer>