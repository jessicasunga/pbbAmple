<?php
/**
 * Template Name: Release Dog(Apply) Template
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

   <div class="section group">
		<div class="col span_2_of_6">
			<img src="http://placehold.it/300x300" alt="release dog" id="releaseimg">
		</div>
		<div class="col span_4_of_6">
			<div id="releasep">
				<p>Since our standards for service dogs and explosive detection canines are so high, some dogs do not complete the program for either behavioral or health reasons .  These dogs will be released as pets for a charge of $4,000.00.   They will come to you spayed or neutered, current on all their vaccines, and incredibly bonded to humans.  The feedback we’ve gotten from everyone who has ever adopted one of our dogs is that they never knew that dogs could be as focused on people as are ours.

				If you are interested in adopting one of our released dogs, please print </p>
			</div>
			<button type="button" id="button"><a href="http://www.puppiesbehindbars.com/files/pdfs/releasedpuppyapplication.pdf">Download the Release Dog<br>APPLICATION</a></button>
		</div>
		
</div>
	
   <?php
      if( is_active_sidebar( 'ample_business_sidebar' ) ) {
         // Calling the business sidebar if it exists.
         if ( !dynamic_sidebar( 'ample_business_sidebar' ) ):
         endif;
      }
   ?>
   <?php do_action( 'ample_after_body_content' );
get_footer(); ?>