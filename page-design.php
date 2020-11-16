<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */
global $HeadType;
$HeadType = "Design";
get_header(); ?>
	<div id="container">
      
      <div class="grid-x">
        <div class="cell">
          <section id="design">
          <h1 id="design-title"><?php the_title(); ?></h1>
          </section>
        </div>
      </div>
    
	<section id="design-gallery">
	<div id="design-gallery-widget" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

	<?php if ( is_active_sidebar( 'design' ) ) : ?>

		<?php dynamic_sidebar( 'design' ); ?>

	<?php endif; ?>

</div>
	 </section>

  </div>

<footer>
  <?php get_footer(); ?>
</footer>