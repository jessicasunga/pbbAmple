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

            <div class="row collapse" id="footer-top">
               <div class="medium-8 large-9 columns hide-for-small-only" id="footer-button">
                  <a href="<?php echo site_url('/index.php/donate/'); ?>" class="button"><img src="http://sulley.cah.ucf.edu/~dig4104c0002/developPhase/wordpress/wp-content/uploads/2016/04/pawprint.png"/>Sponsor a Puppy</a>
                  <a href="<?php echo site_url('/index.php/donate/'); ?>" class="button"><img src="http://sulley.cah.ucf.edu/~dig4104c0002/developPhase/wordpress/wp-content/uploads/2016/04/donate.png"/>Make a Donation</a>
               </div><!-- end #footer-button -->
               <div class="medium-4 large-3 columns" id="social-media">
                  <p>Get in touch with us:</p>
                  <a href="https://www.facebook.com/Puppies-Behind-Bars-108038285422/"><i class="fa fa-facebook-square facebook-color"></i></a>
                  <a href="https://twitter.com/pbbassociation"><i class="fa fa-twitter-square twitter-color"></i></a>
                  <a href="https://www.instagram.com/_puppiesbehindbars/"><i class="fa fa-instagram instagram-color"></i></a>
               </div><!-- end #social-media -->
            </div><!-- end #footer-top -->

            <div class="row collapse">
               <div class="medium-8 large-9 columns" id="sitemap">
                  <div class="row collapse">
                     <div class="medium-4 columns">
                        <ul>
                           <li><a href="<?php echo site_url('/index.php/contact-us'); ?>" class="section-title">Contact</a></li>
                           <li><a href="<?php echo site_url('/index.php/contact-us/'); ?>">Mailing List</a></li>
                           <li><a href="<?php echo site_url('/index.php/apply/apply-volunteer/'); ?>">Volunteer</a></li>
                        </ul>
                        <ul>
                           <li><a href="<?php echo site_url('/index.php/apply/'); ?>" class="section-title">Apply</a></li>
                           <li><a href="<?php echo site_url('/index.php/apply/apply-service-dog/'); ?>">Apply for a Service Dog</a></li>
                           <li><a href="<?php echo site_url('/index.php/apply/apply-release-dog/'); ?>">Apply for a Release Dog</a></li>                     
                        </ul>
                     </div>
                     <div class="medium-4 columns">
                        <ul>
                           <li><a href="<?php echo site_url('/index.php/about/'); ?>" class="section-title">About Us</a></li>
                           <li><a href="<?php echo site_url('/index.php/about/programs/'); ?>">Our Programs</a></li>
                           <li><a href="<?php echo site_url('/index.php/about/faq/'); ?>">FAQ</a></li>
                           <li><a href="<?php echo site_url('/index.php/about/puppy-placement/'); ?>">Puppy Placement</a></li>
                        </ul>
                        <ul>
                           <li><a href="<?php echo site_url('/index.php/awards/'); ?>" class="section-title">Awards and Publications</a></li>
                           <li><a href="<?php echo site_url('/index.php/awards/'); ?>">PBB &amp; C2W Awards</a></li>
                           <li><a href="<?php echo site_url('/index.php/awards/'); ?>">Publications</a></li>
                        </ul>                        
                     </div>
                     <div class="medium-4 columns">
                        <ul>
                           <li><a href="<?php echo site_url('/index.php/media/'); ?>" class="section-title">Photos &amp; Videos</a></li>
                           <li><a href="<?php echo site_url('/index.php/media/'); ?>">Holiday Cards</a></li>
                           <li><a href="<?php echo site_url('/index.php/media/'); ?>">Videos</a></li>
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