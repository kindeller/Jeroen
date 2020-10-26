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
          <h1>THE ART OF JERRY VERSCHOOR</h1>
            <p>creative design artist</p>
            <!--<a class="fas fa-arrow-circle-down" href="#second" title="see more"></a>--->
            <svg id="curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1700 400">
              <path d="M0,288L60,272C120,256,240,224,360,202.7C480,181,600,171,720,186.7C840,203,960,245,1080,240C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
          </section>

        </div>
      </div>

    <!--<div id="welcome"></div><!--I commented this out as I'm not sure what it's for and also by not having it, it makes sure the background of the curve and the background of the categories section flows to one another-->
    
	<section id="second">
    <div class="grid-container">
          <div class="grid-x grid-margin-x">
            <div class="cell large-4">
             <div class="card">
                <a href="film"><div id="category1">
				<div id="text">
                  <h3>FILM</h3>
                </div>
				
              </div></a>
                
            </div>
            </div>
			
            <div class="cell large-4">
            <div class="card">
                <a href="theater"><div id="category2">
				<div id="text">
                  <h3>THEATER</h3>
                </div>
              </div></a>
                
              </div>
            </div>
			
            <div class="cell large-4">
            <div class="card">
                <a href="design"><div id="category3">
				<div id="text">
                  <h3>DESIGN</h3>
                </div>
              </div></a>
              </div>
            </div>
          </div>
		  
		  <p id="line">From the coffee stain of dreams the inspiration flows into passion, reality, and fantasy</p>
		  
          <div class="grid-x grid-margin-x">
            <div class="cell large-4">
            <div class="card">
                <a href="poetry"><div id="category4">
				<div id="text">
                  <h3>POETRY</h3>
                </div>
              </div></a>
                
              </div>
            </div>
            <div class="cell large-4">
            <div class="card">
                <a href="illustrations"><div id="category5">
				<div id="text">
                  <h3>ILLUSTRATIONS</h3>
                </div>
              </div></a>
                
              </div>
            </div>
            <div class="cell large-4">
            <div class="card">
                <a href="lizi"><div id="category6">
				<div id="text">
                  <h3>LiZi</h3>
                </div>
              </div></a>
                
              </div>
            </div>
          </div>
        </div>
    </section>

  </div>

<footer>
  <?php get_footer(); ?>
</footer>