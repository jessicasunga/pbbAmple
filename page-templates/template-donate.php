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
  </div>
  <!-- .inner-wrap --> 
</div>
<!-- .single-page --> 
<!-- Start Donate Section --> 
<!-- Make A Donation -->
<div class="add-bottom">
  <form>
    <div class="row" style="border: 1px solid #eeeeee; padding: 18px;">
      <div class="large-6 columns">
        <h2>Make A Donation</h2>
        <label>Credit Card Number
          <input type="text" placeholder="" />
        </label>
        <label>Expiration Date
          <input type="text" placeholder="MM/YY" />
        </label>
        <label>
        CVV
        <div class="tooltip"> <span id="optional-text"> What's this?</span> <span class="tooltiptext">For MasterCard or Visa, it's the last three digits in the signature area on the back of your card. For American Express, it's the four digits on the front of the card.</span> </div>
        <input type="text" placeholder="" />
        </label>
        <label>Payment Types<img id="credit-cards" alt="Credit Cards" src="http://www.credit-card-logos.com/images/multiple_credit-card-logos-2/credit_card_paypal_logos_1.gif" width="204" height="27" border="0" /></label>
        <br>
        <input type="submit" value="Submit">
      </div>
      <div class="large-6 columns">
        <h2>&nbsp;</h2>
        <label>First Name
          <input type="text" placeholder="" />
        </label>
        <label>Middle Name(s)<span id="optional-text"> (Optional)</span>
          <input type="text" placeholder="" />
        </label>
        <label>Last Name
          <input type="text" placeholder="" />
        </label>
        <i class="fa fa-lock" aria-hidden="true"></i>  Secured Payment Processing
      </div>
    </div>
  </form>
</div>
<!-- Sponser A Puppy -->
<div class="add-bottom">
  <div class="row">
    <div class="large-6 columns">
      <div class="box-border">
        <h2> Sponser A Puppy</h2>
        <p>For a minimum donation of $6,000.00, sponsors can name a puppy that will be trained as a PBB service dog or explosive detection canine. When the puppy arrives in prison, the sponsor receives an announcement card with the dog’s photo, birth date, and name of the sire and dam. Sponsors then receive quarterly updates from the inmate puppy raiser, forwarded through the PBB office. Sponsorship offers an intimate connection to the PBB program, and makes a wonderful, and generous, tribute or holiday gift.</p>
      </div>
    </div>
    <div class="large-6 columns"><img src="https://www.placecage.com/c/500/261"> </div>
  </div>
</div>
<!-- Tribute Cards -->
<div class="add-bottom">
  <div class="row" style="border: 1px solid #eeeeee; padding: 18px;">
    <div class="large-6 columns">
      <h2> Tribute Cards And Memorial Gifts</h2>
      <p>Would you like to honor a friend or celebrate a special occasion with a gift to Puppies Behind Bars? You can make a donation in honor of a friend’s birthday, graduation, or anniversary, or in memory of a relative, friend, or pet.</p>
      <p>We will send a card letting your designated recipient(s) know that you’ve made a generous donation to Puppies Behind Bars on their behalf.</p>
      <p>By Phone:<br>
        Please call our office at 212.680.9562, Monday through Friday, 9am to 5pm (Eastern) to make your tribute or memorial gift by credit card.  Please have your credit card and the recipient’s contact information available when you call.</p>
      <p>By Mail:<br>
        If you prefer to mail a check, please include a note detailing:
        Tribute or Memorial Gift
        Card Recipient (first and last name, mailing address, zip code)
        Message/Reason for Gift (i.e., birthday, anniversary, in memory of, etc.)</p>
      <p></p>
    </div>
    <div class="large-6 columns"><img src="https://www.placecage.com/c/500/300">
      <p>Make your check payable to Puppies Behind Bars.<br>
        Mail your check and the instructions to:<br>
        Puppies Behind Bars<br>
        263 West 38th Street, 4th floor<br>
        New York, NY 10018</p>
    </div>
  </div>
</div>
<!-- Donor Privacy Policy -->
<div class="add-bottom">
  <div class="column row">
    <h2> Donor Privacy Policy </h2>
    <p> Puppies Behind Bars is committed to respecting the privacy of our donors. We have developed this privacy policy to ensure our donors that donor information will not be shared with any third party. Puppies Behind Bars provides this Donor Privacy Policy to make you aware of our privacy policy, and to inform you of the way your information is used. We also provide you with the opportunity to remove your name from our mailing list, if you desire to do so. We collect and maintain the following types of donor information: contact information, payment information, and requests to receive periodic updates. </p>
    <p> Puppies Behind Bars uses your information to complete a transaction, communicate with you, and update you on our programs and events. Credit card numbers are used only for donation or payment processing and are not retained for other purposes. Puppies Behind Bars will not sell, rent, or lease your personal information to other organizations. We assure you that the identity of all our donors will be kept confidential. Use of donor information will be limited to the internal purposes of Puppies Behind Bars. It is our desire to eliminate mail or e-mail that our donors do not want to receive. Please contact us if you wish to be removed from our mailing list and/or e-mail list.</p>
    <p> If you have comments or questions about our donor privacy policy, please send us an email at <a href="mailto:someone@example.com?Subject=Puppies" target="_top">programs@puppiesbehindbars.com</a> or call us at 212.680.9562.</p>
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
