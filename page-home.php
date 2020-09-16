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
         
          <section id="landing">
          <h1>title</h1>
            <p>tagline</p>
            <a class="fas fa-arrow-circle-down" href="#welcome" title="see more"></a>
            <svg id="curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path d="M0,288L60,272C120,256,240,224,360,202.7C480,181,600,171,720,186.7C840,203,960,245,1080,240C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
          </section>

        </div>
      </div>

    <div id="welcome"></div>

    <section id="categories">

      <div class="margin-x grid-x">

        <div class="cell large-4">
          <div class="cat-container" id="film-bg">
            <div class="middle">
              <div class="cat-text">Film</div>
            </div>
          </div>
        </div>

        <div class="cell large-4">
          <div class="cat-container" id="theatre-bg">
            <div class="middle">
              <div class="cat-text">Theatre</div>
            </div>
          </div>
        </div>

        <div class="cell large-4">
          <div class="cat-container" id="design-bg">
            <div class="middle">
              <div class="cat-text">Design</div>
            </div>
          </div>
        </div>

      </div>

      <div class="margin-x grid-x">

        <div class="cell large-4">
          <div class="cat-container" id="poetry-bg">
            <div class="middle">
              <div class="cat-text">Poetry</div>
            </div>
          </div>
        </div>

        <div class="cell large-4">
          <div class="cat-container" id="illustrations-bg">
            <div class="middle">
              <div class="cat-text">Illustrations</div>
            </div>
          </div>
        </div>

        <div class="cell large-4">
          <div class="cat-container" id="lizi-bg">
            <div class="middle">
              <div class="cat-text">Lizi</div>
            </div>
          </div>
        </div>

      </div>

    </section>

  

<footer>
  <?php get_footer(); ?>
</footer>