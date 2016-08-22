<?php
/*
Template Name: Dedicated Sign Up (New)
*/

get_header('stripped'); ?>

<!--Start Header-->
<section class='bg-cover-2 invert-section no-margin-bottom no-padding-bottom'
	<?php

    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="padding-top:140px; background-image: url(%s);"', $image_src[0] );     
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
        <a class="btn btn-wire half-margin-bottom" href="#learn">Learn More <i class="margin-left fa fa-angle-down"></i></a><br />
        <a href="#pricing" class="white-text-color">Join the club</a>
        </p>
			</div>
			<div class='col-sm-2'></div>
		</div>
	</div>
</section>
<!--End Header-->

<!--Start Pricing-->
<!-- <section class='margin-top padding-top no-padding-bottom'>
  <div class='container'>
    <div class='row'>
      <a id="pricing" class="anchor"></a>
      <div class='col-md-12 text-center'>
        <h1 class="half-margin-bottom">Join the club</h1>
        <h3>Free shipping, plans renew automatically</h3>
      </div>
    </div>
  </div>
</section> -->
<!--Start what is-->
          <a id="learn" class="anchor"></a>
<section class='margin-top padding-top no-padding-bottom no-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-6'>
        <h3 class="half-margin-bottom">What is Vinyl Me, Please?</h3>
        <p>Our record club is built for music lovers by music lovers. We work with the best artists & labels to create special-edition vinyl pressings of albums essential to your record collection. As a member of the club you’ll be exposed to everything from 1950s jazz reissues, to first pressings of modern day classics, to the new release from an unknown indie artist that will quickly become your favorite.</p> 
        <p><strong>We believe the most meaningful music experiences often come from the unexpected and are rarely predicted by an algorithm.</strong></p>
        <p>Join the thousands of music fans who have trusted Vinyl Me, Please to help build their record collections, discovering their next favorite album and a little more of themselves in the process.</p>
      </div>
      <div class="col-md-6">
        <h3 class="half-margin-bottom">What do you get?</h3>
        <ul class="fa-ul">
          <li class="half-margin-bottom"><i class="fa-li fa fa-check-square secondary-text-color"></i>Special-edition album package pressed exclusively for club members including:</li>
            <ul class="half-margin-bottom">
              <li>Special-edition LP with features you can't get anywhere else (colored vinyl, inserts, etc.)</li>
              <li>Original 12" x 12" album-inspired art print</li>
              <li>Custom cocktail recipe</li>
            </ul>
          <li class="half-margin-bottom"><i class="fa-li fa fa-check-square secondary-text-color"></i>Access to our online members-only store:</li>
            <ul class="half-margin-bottom">
                <li>Add additional records, merch, and vinyl accessories to upcoming shipments at special pricing</li>
                <li>Purchase / pre-order limited-edition VMP Store exclusive records</li>
                <li>Free shipping on U.S. domestic orders</li>
              </ul>
          <li class="half-margin-bottom"><i class="fa-li fa fa-check-square secondary-text-color"></i>The Standard, delivered to your inbox every Friday including: </li>
            <ul>
              <li>Playlists</li>
              <li>Vinyl reviews & new releases</li>
              <li>Free downloads</li>
            </ul>
        </ul>
      </div>
    </div>
  </div>
</section>
<!--End What Is-->

<!--Start Archive-->
<section class='no-margin-top no-padding-top no-padding-bottom'>
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
</section>
<!--End Archive-->
<a id="pricing" class="anchor"></a>
<section class='margin-top padding-top no-padding-bottom no-margin-bottom'>
  <div class='container'>
    <div class='row'>
        <!-- Membership panes -->
        <div class="tab-content">
          <!--Start Dom-->
          <div role="tabpanel" class="tab-pane active" id="dom">
            <!--Option 1-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">Month-to-month</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>27</span> / mo</div>
                  <div><a class="btn btn-wire-green btn-primary full-width margin-bottom sign-up" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/monthly_domestic">SELECT <i class="fa fa-play-circle"></i></a></div>
                </div>
              </div>
            </div>
            <!--Option 2-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header-special no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">3-month</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>25</span> / mo</div>
                  <div><a class="btn btn-default btn-primary full-width margin-bottom sign-up" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/3_month_domestic">SELECT <i class="fa fa-play-circle"></i></a></div>
                  <p class="no-margin-bottom"><span class="special"><i class="fa fa-star"></i> MOST POPULAR <i class="fa fa-star"></i></span></p>
                  <p class="no-margin-bottom"><span class="special">Save $24 per year</span></p>
                  <p class="half-margin-bottom">Billed every 3 months</p>
                </div>
              </div>
            </div>
            <!--Option 3-->
            <div class="col-md-4 text-center margin-bottom">
              <div class="panel-plan">
                <div class="plan-header no-padding-right no-padding-left">
                  <h2 class="half-margin-top half-margin-bottom">Annual</h2>
                </div>
                <div class="plan-content padding-right padding-left">
                  <div class="plan-price"><sup>$</sup>23</span> / mo</div>
                  <div><a class="btn btn-wire-green btn-primary full-width margin-bottom sign-up" data-href="https://vinylmeplease.chargebee.com/hosted_pages/plans/12_Month_Domestic">SELECT <i class="fa fa-play-circle"></i></a></div>
                  <p class="no-margin-bottom"><span class="special"><i class="fa fa-dollar"></i> BEST VALUE <i class="fa fa-dollar"></i></span></p>
                  <p class="no-margin-bottom"><span class="special">Save $40 per year</span></p>
                  <p class="half-margin-bottom">Billed annually</p>
                </div>
              </div>
            </div>
            <!--End Options-->
          </div>
          <!--End Dom-->
        </div>
      </div>
      <!--End Country Select-->
    </div>
  </div>
</section>
<!--End Pricing-->
<!--Start Testimonials-->
<section class='double-padding-top padding-bottom margin-bottom border-bottom muted'>
  <div class='container'>
    <div class='row'>
      <div class="col-md-2">
        <p class="no-margin-bottom text-center"><a href="https://twitter.com/rklau/status/620759684882927616"><img src="https://pbs.twimg.com/profile_images/552231448317415424/o3HzKnjB.jpeg" class="img-circle margin-bottom" width="75px"></a></p>
      </div>
      <div class="col-md-4">
        <p class="half-margin-bottom"><em>Last 3 @VinylMePlease albums: reggae, pop, rock, hip-hop... Each was an artist I didn't know, each was an album I've loved.</em></p>
        <p>- Rick Klau</p>
      </div>
      <div class="col-md-2">
        <p class="no-margin-bottom text-center"><a href="https://twitter.com/yahareena/status/636194127869161472"><img src="https://pbs.twimg.com/profile_images/378800000438974226/6ff7e7318d213a91c3315cd2d6ca8d26.jpeg" class="img-circle margin-bottom" width="75px"></a></p>
      </div>
      <div class="col-md-4">
        <p class="half-margin-bottom"><em>I'm telling you all right now sign up for this club - killer albums, and stellar service. WTF are you waiting for I'm serious @VinylMePlease</em></p>
        <p>- c javorina</p>
      </div>
    </div>
  </div>
</section>





<?php get_footer('stripped'); ?>