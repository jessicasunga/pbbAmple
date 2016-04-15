<?php
/**
 * Template Name: Donate Template
 *
 * Displays the Business Template of the theme.
 *
 * @package ThemeGrill
 * @subpackage Ample
 * @since Ample 0.1
 */
?>

<?php get_header();

   do_action( 'ample_before_body_content' ); ?>
   
   <div class="single-page clearfix">
         <div class="inner-wrap">
            <div id="primary" class="content-box">
               <div id="content">
                  <?php while ( have_posts() ) : the_post(); ?>
                     <?php get_template_part( 'content', 'page' ); ?>
                  <?php endwhile; ?>
               </div>
               <?php ample_both_sidebar_select(); ?>
            </div>
            <?php ample_sidebar_select();hh ?>
      </div><!-- .inner-wrap -->
   </div><!-- .single-page -->
   
   <?php
      if( is_active_sidebar( 'ample_business_sidebar' ) ) {
         // Calling the business sidebar if it exists.
         if ( !dynamic_sidebar( 'ample_business_sidebar' ) ):
         endif;
      }
   ?>
   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>