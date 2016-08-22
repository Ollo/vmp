<?php
/*
Template Name: Gift
*/

get_header(''); ?>

<!--Start Header-->
<section class='bg-cover-2 invert-section margin-bottom padding-bottom'
	<?php

    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="padding-top:160px; background-image: url(%s);"', $image_src[0] );     
    }
    ?>>
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
			<div class='col-md-8 text-center'>
        <h1 class="half-margin-bottom"><?php the_title(); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
          <h5 class="margin-bottom"><?php the_field('page-subheader'); ?></h5>
        <?php endwhile; // end of the loop. ?>
        <a class="btn btn-wire half-margin-bottom" href="#pricing">Get started <i class="margin-left fa fa-angle-down"></i></a><br />
        </p>
			</div>
			<div class='col-sm-2'></div>
		</div>
	</div>
</section>
<!--End Header-->

<a id="pricing" class="anchor"></a>
<section class='padding-top no-padding-bottom margin-bottom'>
  <div class='container'>
    <div class='row'>
      <!--Option 1-->
      <div class="col-md-4 text-center margin-bottom">
        <div class="panel-plan">
          <div class="plan-header no-padding-right no-padding-left">
            <h2 class="half-margin-top half-margin-bottom">3-month</h2>
          </div>
          <div class="plan-content padding-right padding-left">
            <div class="plan-price half-margin-bottom"><sup>$</sup>99</span></div>
            <p class="half-margin-bottom">$139 international</p>
            <p><em>Includes 1 bonus archive record</em></p>
            <div><a class="btn btn-wire-green btn-primary full-width margin-bottom" href="http://holiday.vinylmeplease.com/collections/gift-memberships/products/3-month-membership-gift-includes-1-bonus-archive-record">GIVE <i class="fa fa-play-circle"></i></a></div>
          </div>
        </div>
      </div>
      <!--Option 2-->
      <div class="col-md-4 text-center margin-bottom">
        <div class="panel-plan">
          <div class="plan-header-special no-padding-right no-padding-left">
            <h2 class="half-margin-top half-margin-bottom">6-month</h2>
          </div>
          <div class="plan-content padding-right padding-left">
            <div class="plan-price half-margin-bottom"><sup>$</sup>175</span></div>
            <p class="half-margin-bottom">$249 international</p>
            <p><em>Includes 2 bonus archive records</em></p>
            <div><a class="btn btn-default btn-primary full-width margin-bottom" href="http://holiday.vinylmeplease.com/collections/gift-memberships/products/6-month-membership-gift-includes-2-bonus-archive-records">GIVE <i class="fa fa-play-circle"></i></a></div>
            <p><span class="special"><i class="fa fa-star"></i> MOST POPULAR <i class="fa fa-star"></i></span></p>
          </div>
        </div>
      </div>
      <!--Option 3-->
      <div class="col-md-4 text-center margin-bottom">
        <div class="panel-plan">
          <div class="plan-header no-padding-right no-padding-left">
            <h2 class="half-margin-top no-margin-bottom">12-month</h2>
          </div>
          <div class="plan-content padding-right padding-left">
            <div class="plan-price half-margin-bottom"><sup>$</sup>299</span></div>
            <p class="half-margin-bottom">$479 international</p>
            <p><em>Includes 3 bonus archive records</em></p>
            <div><a class="btn btn-wire-green btn-primary full-width margin-bottom" href="http://holiday.vinylmeplease.com/collections/gift-memberships/products/12-month-membership-gift-includes-3-bonus-archive-records">GIVE <i class="fa fa-play-circle"></i></a></div>
            <p><span class="special"><i class="fa fa-dollar"></i> BEST VALUE <i class="fa fa-dollar"></i></span></p>
          </div>
        </div>
      </div>
      <!--End Options-->
    </div>
    <!--End Dom-->
    </div>
  </div>
</section>
<section class='no-padding-top double-padding-bottom border-bottom double-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class="col-md-12 text-center margin-bottom">
        <h1>Frequently asked questions</h1>
      </div>
      <div class="col-md-6">
        <p class="bold-font-name no-margin-bottom">How do gifts work?</p>
        <p>After purchasing a gift membership, we will ship a VMP Gift Box that includes 1-3 archive records (depending on which membership you purchased) plus a redemption card with a unique code and instructions for redeeming the gift. The Gift Box will be mailed to the shipping address you enter in the checkout process. You can wrap it up and give it to the recipient whenever you'd like. After opening the gift, all the recipient has to do is follow the instructions on the redemption card to claim their gift.</p>
        <p>Don't lose the redemption card as it includes a unique, one-time code specific to your gift.</p>
        <p class="bold-font-name no-margin-bottom">Who will you ship the gift box to?</p>
        <p>We will ship the gift box to the shipping address you enter when checking out. You can have it shipped to you first, or directly to the recipient. If you want to keep the gift a secret, we recommend putting in your name, shipping address and email.</p>
        <p>An email with tracking information will be sent to the email address associated with the order when the VMP Gift Box ships.</p>
        <p class="bold-font-name no-margin-bottom">Are gifts refundable?</p>
        <p>No, gifts are not refundable.<p>
        <p class="bold-font-name no-margin-bottom">Can I include a gift note?</p>
        <p>Unfortunately, gift notes are not available at this time.<p>
        <p class="bold-font-name no-margin-bottom">Do I get to pick what archive record(s) you send?</p>
        <p>No, archive records are selected at random based on what is in stock. You can, however, purchase the full 2015 VMP archive if you'd like.<p>
        <p class="bold-font-name no-margin-bottom">Can I get myself a membership?</p>
        <p>Uh, yes. <a href="http://vinylmeplease.com/select-your-plan/">Click here</a> for more info.</p> 
      </div>
      <div class="col-md-6">
<p class="bold-font-name no-margin-bottom">Will the gift automatically renew once redeemed?</p>
        <p>Yes, the gift will automatically renew once redeemed. The recipient will get an email prior to that happening and will be able to set their membership to not renew should they want to.</p>
        <p class="bold-font-name no-margin-bottom">When should I expect the VMP Gift Box?</p>
        <p>We process new gift orders approximately 2 times per week. Once processed & shipped, you will get an email with tracking information.</p>
        <p class="bold-font-name no-margin-bottom">What does the gift include?</p>
        <p>Every gift membership comes with a VMP Gift Box that includes up to 3 bonus archive records (depending on which membership you purchase) plus a one-time use code to be applied toward a membership.</p>
        <p>Every month after the gift has been redeemed (for the duration of the gift), the recipient will receive:
          <ul>
            <li>1 LP pressed exclusively for Vinyl Me, Please members</li>
            <li>An original 12”x12” art print inspired by the album</li>
            <li>A custom cocktail recipe</li>
            <li>Access to The Standard</li>
            <li>Access to our member’s only store with discounted records, gear, and VMP merch</li>
            <li>A host of other members-only benefits</li>
          </ul>
        <p>Trust us, your friends & family are going to love you for this.</p>   
      </div>
    </div>
  </div>
</section>

<!--Start Archive-->
<!-- <section class='no-margin-top no-padding-top no-padding-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <h3 class="no-margin-bottom">Get records like...</h3>
      </div>
      <div class="row">
        <div class="col-md-3">
          <img class="img-responsive no-marging-bottom" src="http://vinylmeplease.com/wp-content/uploads/2015/08/rotm-sept.png">
        </div>
        <div class="col-md-3">
          <img class="img-responsive" src="http://vinylmeplease.com/wp-content/uploads/2015/07/wilco-album.jpg">
        </div>
        <div class="col-md-3">
          <img class="img-responsive" src="http://vinylmeplease.com/wp-content/uploads/2015/06/album-art.jpg">
        </div>
        <div class="col-md-3">
          <img class="img-responsive" src="http://vinylmeplease.com/wp-content/uploads/2015/09/hot-chip.jpg">
        </div>
      </div>
    </div>
  </div>
</section> -->
<!--End Archive-->





<?php get_footer('stripped'); ?>