<?php
/**
 * Footer Section for our theme.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>
      </div><!-- .main-wrapper -->

      <footer id="colophon">
         <div class="inner-wrap">

            <div class="row" id="footer-top">
               <div class="medium-8 large-9 columns hide-for-small-only" id="footer-button">
                  <a href="#" class="button"><img src="http://localhost:8888/wordpress/wp-content/uploads/2016/04/pawprint.png"/>Sponsor a Puppy</a>
                  <a href="#" class="button"><img src="http://localhost:8888/wordpress/wp-content/uploads/2016/04/donate.png"/>Make a Donation</a>
               </div><!-- end #footer-button -->
               <div class="medium-4 large-3 columns" id="social-media">
                  <p>Get in touch with us:</p>
                  <i class="fa fa-facebook-square facebook-color"></i>
                  <i class="fa fa-twitter-square twitter-color"></i>
                  <i class="fa fa-instagram instagram-color"></i>
               </div><!-- end #social-media -->
            </div><!-- end #footer-top -->

            <div class="row">
               <div class="medium-8 large-9 columns" id="sitemap">
                  <div class="row">
                     <div class="medium-4 columns">
                        <ul>
                           <li class="section-title">Contact</li>
                           <li>Mailing List</li>
                           <li>Volunteer</li>
                        </ul>
                        <ul>
                           <li class="section-title">Apply</li>
                           <li>Apply for a Service Dog</li>
                           <li>Apply for a Released Dog</li>                     
                        </ul>
                     </div>
                     <div class="medium-4 columns">
                        <ul>
                           <li class="section-title">About Us</li>
                           <li>Our Programs</li>
                           <li>FAQ</li>
                           <li>Puppy Placement</li>                     
                        </ul>
                        <ul>
                           <li class="section-title">Awards and Publications</li>
                           <li>PBB &amp; C2W Awards</li>
                           <li>Publications</li>                     
                        </ul>                        
                     </div>
                     <div class="medium-4 columns">
                        <ul>
                           <li class="section-title">Photos &amp; Videos</li>
                           <li>Holiday Cards</li>
                           <li>Videos</li>                     
                        </ul>
                     </div>
                  </div>
               </div><!-- end #sitemap -->
               <div class="medium-4 large-3 columns" id="footer-contact">
                  <p>263 West 38th Street, 4th Floor.<br>
                     New York, NY 10018<br>
                     Tel. 212.680.9562<br>
                     Fax 212.689.9330<br>
                     programs@puppiesbehindbars.com
                  </p>
               </div><!-- end #footer-contact -->
            </div>

            <?php get_sidebar( 'footer' ); ?>

            <div class="footer-bottom clearfix">
               <div class="footer-nav">
               <?php
                  if ( has_nav_menu( 'footer' ) ) {
                     wp_nav_menu( array( 'theme_location' => 'footer', 'depth' => -1 ) );
                  }
               ?>
               </div>
            </div>

         </div>
      </footer>
      <div class="copyright-info">
         <?php do_action( 'ample_footer_copyright' ); ?>
      </div>
      <a href="#masthead" id="scroll-up"><i class="fa fa-angle-up"></i></a>
   </div><!-- #page -->
   <?php wp_footer(); ?>
</body>
</html>