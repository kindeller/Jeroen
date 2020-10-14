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
<div class="grid-container">
    <br>
        <h2>contact</h2>
        <div class="grid-x grid-margin-x">
          <div class="cell large-12 about">
          <form>
              <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                  <label>Name:</label>
                  <input type="text" placeholder="Your Name" />
                </div>
              </div>
              <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                  <div class="grid-x">
                    <label>Email:</label>
                    <div class="input-group">
                      <input
                        type="text"
                        placeholder="Your Email"
                        class="input-group-field"
                      />
                      <span class="input-group-label">.com</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                  <label>Phone Number:</label>
                  <input type="text" placeholder="Your Phone Number" />
                </div>
              </div>
              <div class="grid-x grid-padding-x">
                <div class="large-6 medium-6 cell">
                  <label
                    >Would you like to be subscribed to a mailing list?</label
                  >
                  <input
                    type="radio"
                    name="mailing-list"
                    value="yes"
                    id="mailing-list-yes"
                  /><label for="mailing-list">Yes</label>
                  <input
                    type="radio"
                    name="mailing-list"
                    value="no"
                    id="mailing-list-no"
                  /><label for="mailing-list">No</label>
                </div>
                <div class="large-6 medium-6 cell">
                  <label>Your preferred method of contact?</label>
                  <input id="checkbox1" type="checkbox" /><label for="checkbox1"
                    >Email</label
                  >
                  <input id="checkbox2" type="checkbox" /><label for="checkbox2"
                    >Phone</label
                  >
                </div>
              </div>
              <div class="grid-x grid-padding-x">
                <div class="large-12 cell">
                  <label>Your Message</label>
                  <textarea
                    placeholder="Leave your comments and/or questions here and a member of our staff will get back to you as soon as possible!"
                    cols="4"
                    rows="7"
                  ></textarea>
                </div>
                <div class="large-12 cell">
                  <input type="submit" class="button" value="Submit" />
                  <input type="reset" class="button" value="Clear" />
                </div>
              </div>
            </form>
        </div>
      </div>
</div>
<?php get_footer(); ?>