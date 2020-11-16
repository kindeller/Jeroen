<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */
global $HeadType;
$HeadType = "Theater";
get_header(); ?>
	<div id="container">
      
      <div class="grid-x">
        <div class="cell">
          <section id="theater">
          <h1 id="theater-title"><?php the_title(); ?></h1>
          </section>
        </div>
      </div>
    
	<section id="theater-gallery">
	<div id="theater-gallery-widget" class="sidebar small-12 medium-4 large-4 cell" role="complementary">

	<?php if ( is_active_sidebar( 'theater' ) ) : ?>

		<?php dynamic_sidebar( 'theater' ); ?>

	<?php endif; ?>

</div>
	 </section>

  </div>

<footer>
  <?php get_footer(); ?>
</footer>