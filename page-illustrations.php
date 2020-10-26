<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
	<div id="container">
      
      <div class="grid-x">
        <div class="cell">
          <section id="illustrations">
          <h1 id="illustrations-title">ILLUSTRATIONS</h1>
		  <p>all hand-drawn</p>
          </section>
        </div>
      </div>
    
	<section id="illustrations-gallery">
	<div id="illustrations-gallery-widget" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

	<?php if ( is_active_sidebar( 'illustrations' ) ) : ?>

		<?php dynamic_sidebar( 'illustrations' ); ?>

	<?php endif; ?>

</div>
	 </section>

  </div>

<footer>
  <?php get_footer(); ?>
</footer>