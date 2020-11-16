<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */
global $HeadType;
$HeadType = "Home";
get_header(); ?>
	<div id="container">
      
      <div class="grid-x">
        <div class="cell">
         
          <section id="landing">
          <h1>THE ART OF JERRY VERSCHOOR</h1>
            <p id="tagline">creative design artist</p>
			<!--<div="desc"><?php //the_content(); ?></div>-->
			
            <svg id="curve" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1700 400">
              <path d="M0,288L60,272C120,256,240,224,360,202.7C480,181,600,171,720,186.7C840,203,960,245,1080,240C1200,235,1320,181,1380,154.7L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
            </svg>
          </section>

        </div>
      </div>
    
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
                  <h3>ART OF LiZi</h3>
                </div>
              </div></a>
                
              </div>
            </div>
          </div>
        </div>
		
    </section>

	<section id="third">
	
	<a href="about"><h3 id="third-title">About Us</h3></a>
	<div class="grid-x grid-margin-x">
		<div class="cell medium-4" id="photo">
		
		<div class="card2"><br>
           <div id="jerry-photo"></div>
        </div>
                
              </div>
			  
  <div class="cell medium-4">
    <p id="desc">The art of creativity is to play with imagination, sight, spiritual energy and techniques. 
			To meet a soul who shares the same visions and spiritual connections on a creative level is rare. 
			These two imaginative individuals of LiZi and Jerry have this deep understanding and connection, creating a partnership that elevates both their passionate powers to new innovative realms. 
			Deep family respect and connection brings their talents together. </p>
			<br>
			<p id="desc2"> With each in their own space as well as the circle of other artistic friends the group, driven by LiZi and Jerry  endeavors to push the possibilities of this varied world of art into peaceful, positive and energetic mixtures and adventures,  to open the spiritual and esthetic views of art as a whole to unexplored universes, bringing the viewer to experience the world of creativity themselves, letting them enjoy and feel that life and peace is about attitude.
			All they need is to feel and believe. This is LiZi and Jerry Creatives.</p>
			
  </div>
  <div class="cell medium-4" id="photo2">
    <div class="card2"><br>
           <div id="lizi-photo"></div>
        </div>
    </div>
  </div>
	
	</section>
  
  </div>

<footer>
  <?php get_footer(); ?>
</footer>