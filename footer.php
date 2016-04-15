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