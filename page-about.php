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
         
          <section id="about">
          <h1>ABOUT</h1>
   
          </section>

        </div>
      </div>
    
	<section id="about2">
        <div class="grid-x grid-margin-x">
          <div class="cell large-6">
            <div
              class="orbit"
              role="region"
              aria-label="About"
              data-orbit
            >
              <div class="orbit-wrapper">
                <div class="orbit-controls">
                  <button class="orbit-previous">
                    <span class="show-for-sr">Previous Slide</span
                    >&#9664;&#xFE0E;
                  </button>
                  <button class="orbit-next">
                    <span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;
                  </button>
                </div>
                <ul class="orbit-container">
                  <li class="is-active orbit-slide">
                    <figure class="orbit-figure">
                      <img
                        class="orbit-image"
                        src="https://via.placeholder.com/400x300"
                        alt="Space"
                      />
                      <figcaption class="orbit-caption">
                        Lorem ipsum dolor sit amet.
                      </figcaption>
                    </figure>
                  </li>
                  <li class="orbit-slide">
                    <figure class="orbit-figure">
                      <img
                        class="orbit-image"
                        src="https://via.placeholder.com/400x300"
                        alt="Space"
                      />
                      <figcaption class="orbit-caption">
                        Lorem ipsum dolor sit amet.
                      </figcaption>
                    </figure>
                  </li>
                  <li class="orbit-slide">
                    <figure class="orbit-figure">
                      <img
                        class="orbit-image"
                        src="https://via.placeholder.com/400x300"
                        alt="Space"
                      />
                      <figcaption class="orbit-caption">
                        Lorem ipsum dolor sit amet.
                      </figcaption>
                    </figure>
                  </li>
                  <li class="orbit-slide">
                    <figure class="orbit-figure">
                      <img
                        class="orbit-image"
                        src="https://via.placeholder.com/400x300"
                        alt="Space"
                      />
                      <figcaption class="orbit-caption">
                        Lorem ipsum dolor sit amet!
                      </figcaption>
                    </figure>
                  </li>
                </ul>
              </div>
              <nav class="orbit-bullets">
                <button class="is-active" data-slide="0">
                  <span class="show-for-sr">First slide details.</span>
                  <span class="show-for-sr" data-slide-active-label
                    >Current Slide</span
                  >
                </button>
                <button data-slide="1">
                  <span class="show-for-sr">Second slide details.</span>
                </button>
                <button data-slide="2">
                  <span class="show-for-sr">Third slide details.</span>
                </button>
                <button data-slide="3">
                  <span class="show-for-sr">Fourth slide details.</span>
                </button>
              </nav>
            </div>
          </div>
          <div class="cell large-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget risus quam. Cras sollicitudin placerat mi, et laoreet tellus fermentum eget. In congue metus eget odio tempor, eu cursus nibh auctor. Praesent tincidunt magna vel risus pharetra, sit amet aliquam sapien lacinia. Nunc congue eleifend enim pellentesque rutrum. Aliquam pretium, magna non mollis placerat, velit est rutrum neque, vel pharetra lacus sapien a lacus. Nunc iaculis ex a libero ullamcorper, a ornare dolor vulputate. 
            </p>
            <p>
              Aliquam ut cursus lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Praesent vitae libero sed ante facilisis rhoncus. Aenean ornare tempus odio, sed tincidunt risus blandit et. In sit amet imperdiet leo, sit amet ullamcorper turpis. Fusce at lacus sed odio suscipit porta quis a risus. Mauris iaculis rutrum volutpat. Morbi dignissim lectus nec enim egestas laoreet.
            </p>
          </div>
        </div>
		</section>
      </div>

<footer>
  <?php get_footer(); ?>
</footer>