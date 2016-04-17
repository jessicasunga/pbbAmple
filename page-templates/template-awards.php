<?php
/**
 * Template Name: Awards Template
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
  </div>
  <!-- .inner-wrap --> 
</div>
<!-- .single-page --> 
<!-- Charity Navigator -->
<div class="add-bottom">
<div class="column row">
  <h2> Charity Navigator </h2>
  <h6><i>4-Star Rating</i></h6>
  <p>PBB HAS EARNED CHARITY NAVIGATOR'S 4-STAR RATING FOR THE 9TH CONSECUTIVE YEAR!</p>
  <p> Puppies Behind Bars is committed to respecting the privacy of our donors. We have developed this privacy policy to ensure our donors that donor information will not be shared with any third party. Puppies Behind Bars provides this Donor Privacy Policy to make you aware of our privacy policy, and to inform you of the way your information is used. We also provide you with the opportunity to remove your name from our mailing list, if you desire to do so. We collect and maintain the following types of donor information: contact information, payment information, and requests to receive periodic updates. </p>
  <p> Only 1% of the charities rated have received at least nine consecutive 4-star evaluations. Charity Navigator is America's premier independent charity evaluator. <a href="http://www.puppiesbehindbars.com/files/8403_2015.pdf">Click here</a> to view the announcement from Charity Navigator.</p>
</div>
</div>
<div class="add-bottom">
<div class="column row">
  <h2> Publications </h2>
  <p> We’re honored that Charity Navigator has placed Puppies Behind Bars on their “10 Charities Worth Watching” list.  We join 9 other charities that operate on less than $2 million a year, but that all earn a four-star rating.<a href="http://www.charitynavigator.org/index.cfm?bay=topten.detail&listid=7#.VxLrlRMrJ0t">Click here</a> to see the list and learn more.</p>
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
