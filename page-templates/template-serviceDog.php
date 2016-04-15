<?php
/**
 * Template Name: Service Dog(Apply) Template
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

	<h1>TEST TEST TEST</h1>

   <?php
      if( is_active_sidebar( 'ample_business_sidebar' ) ) {
         // Calling the business sidebar if it exists.
         if ( !dynamic_sidebar( 'ample_business_sidebar' ) ):
         endif;
      }
   ?>
   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>