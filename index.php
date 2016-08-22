<?php
/*
Template Name: Dedicated Sign Up
*/

get_header(); ?>


<!--Start Header-->
<section class='bg-cover no-margin-bottom' id='index-hero'
  <?php

    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="padding-top:180px; background-image: url(%s);"', $image_src[0] );     
    }
  ?>>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
      <div class='col-md-10 text-center'>
        <h1>Join the best damn record club today</h1>
           <div class='row'>
          <div class='col-sm-2'></div>
          <div class='col-sm-4'>
            <a class='btn btn-default navbar-btn full-width' href='<?php bloginfo('url'); ?>/select-your-plan/'>Sign Up <i class="fa fa-play-circle"></i></a>
          </div>
          <div class='col-sm-4'>
            <a class='btn btn-wire navbar-btn full-width' style="color:#1e1f20 !important; border-color:#1e1f20 !important" href='<?php bloginfo('url'); ?>/gift/'>Give a gift <i class="fa fa-play-circle"></i></a>
          </div>
          <div class='col-sm-2'></div>
        </div>
        <!--End Row-->
      </div>
      <div class='col-sm-1'></div>
    </div>
  </div>
</section>
<!--End Header-->

<!--Start Post Header Section-->
<section class="no-padding double-margin-bottom double-padding-bottom invert-section" style="background-color:#1e1f20;">
  <div class="container">
    <div class="row">
        <div class="padding-top no-padding-bottom col-md-12 text-center">
            <h2 class="half-margin-bottom">Discover essential albums, build your collection</h2>
            <p>Scroll down to learn more</p>
            <img src="http://vinylmeplease.com/wp-content/uploads/2014/11/scroll-arrow.png" class="img-responsive" style="position: absolute; margin-top:-1.5px; margin-left: 47%;">
        </div>
    </div>
  </div>
</section>

<!--End Post Header Section-->



<!--Start Body Section 1-->
<section class='no-padding-top margin-bottom padding-bottom'>
  <div class="container">
    <div class="row">
      <div class='col-md-12 text-center margin-bottom padding-bottom'>
        <h1>Your new music friends with plenty of benefits:</h1>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-2">
            <p><img class="img-responsive center-block double-margin-bottom" src="http://vinylmeplease.com/wp-content/uploads/2014/04/home-page_03.png" /></p>
          </div>
          <div class="col-xs-8">
              <p>Special-edition LP pressed exclusively for Vinyl Me, Please members</p>
          </div>
          <div class="col-xs-1"></div>
        </div>
        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-2">
            <p><img class="img-responsive center-block double-margin-bottom" src="http://vinylmeplease.com/wp-content/uploads/2014/11/cocktail.png" /></p>
          </div>
          <div class="col-xs-8">
              <p>Original 12” x 12” art print and a custom cocktail pairing</p>
          </div>
          <div class="col-xs-1"></div>
        </div><!--End Row-->
      </div><!--End Col-->
      <div class="col-sm-6">
        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-2">
            <p><img class="img-responsive center-block double-margin-bottom" src="http://vinylmeplease.com/wp-content/uploads/2014/11/shopping-cart.png" /></p>
          </div>
          <div class="col-xs-8">
              <p>Special members-only pricing on additional curated albums & gear</p>
          </div>
          <div class="col-xs-1"></div>
        </div>
        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-2">
            <p><img class="img-responsive center-block double-margin-bottom" src="http://vinylmeplease.com/wp-content/uploads/2014/11/play.png" /></p>
          </div>
          <div class="col-xs-8">
              <p>The Standard: Playlists, vinyl releases & free downloads delivered to your inbox every Friday</p>
          </div>
          <div class="col-xs-1"></div>
        </div><!--End Row-->
      </div><!--End Col-->
      <div class='col-md-12 text-center no-margin-bottom padding-bottom'>
        <h4>Plans starting at $23 / month</h1>
        <p><a href="/select-your-plan/">Sign Up <i class="fa fa-angle-right"></i></a></p>
      </div>
    </div><!--End Row-->
  </div><!--End Container-->
</section>
<!--End Body Section 1-->

<!--Start Body Section 2-->
<section class='bg-cover invert-section triple-margin-bottom' style='background-image: url(http://vinylmeplease.com/wp-content/uploads/2015/06/opening-gif.gif);'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
        <div class='col-md-8 text-center padding-top half-padding-bottom' style="background-color:rgba(0,0,0,0.7);">
          <blockquote style="border-left:none;">It's like Record Store Day with free delivery and no line
            <footer>Cool Material</p>
          </blockquote>
        </div>
        <div class='col-md-2'></div>
      </div>
      <div class='col-md-1'></div>
    </div>
  </div>
</section>
<!--End Body Section 2-->

<!--Start Body Section 3-->
<section class='padding-top padding-bottom border-bottom triple-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-1'></div>
      <div class='col-sm-3 margin-bottom'>
        <img class="img-responsive center-block" src="http://vinylmeplease.com/wp-content/uploads/2014/11/exclusive-pressings.png" />
      </div>
      <div class='col-sm-1'></div>
      <div class='col-sm-6'>
        <h4>Exclusive pressings, original artwork, delivered monthly</h4>
        <ul class="half-margin-left double-margin-bottom" style="color:#666">
          <li class="half-margin-bottom">Special-edition vinyl LP pressed exclusively for Vinyl Me, Please members</li>
          <li class="half-margin-bottom">Original, 12” x 12” album-inspired art print</li>
          <li class="half-margin-bottom">Custom cocktail pairing recipe to accompany your listening experience</li>
        </ul>
      </div>
      <div class='col-sm-1'></div>
    </div>
  </div>
</section>
<section class='padding-top padding-bottom border-bottom triple-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class="col-sm-1"></div>
      <div class='col-sm-3 col-sm-push-7 margin-bottom'>
        <img class="img-responsive center-block" src="http://vinylmeplease.com/wp-content/uploads/2014/11/members-only.png" />
      </div>
      <div class='col-sm-6 col-sm-pull-3'>
        <h4>Music discovery + vinyl deals in our Member's Only Store</h4>
        <ul class="half-margin-left double-margin-bottom" style="color:#666">
          <li class="half-margin-bottom">Build your collection with additional curated records</li>
          <li class="half-margin-bottom">Limited-edition exclusive store pressings</li>
          <li class="half-margin-bottom">Purchase VMP Archive LPs</li>
          <li class="half-margin-bottom">Free shipping for U.S. domestic orders</li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class='padding-top padding-bottom border-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-sm-1'></div>
      <div class='col-sm-3 margin-bottom'>
        <img class="img-responsive center-block" src="http://vinylmeplease.com/wp-content/uploads/2014/11/events.png"/>
      </div>
      <div class='col-sm-1'></div>
      <div class='col-sm-6'>
        <h4>The Standard: The VMP weekly digest</h4>
        <ul class="half-margin-left double-margin-bottom" style="color:#666">
          <li class="half-margin-bottom">Playlists, exclusive downloads & vinyl releases</li>
          <li class="half-margin-bottom">Hi-fi gear reviews & discounts, how-to guides</li>
          <li class="half-margin-bottom">Profiles & reviews of leading vinyl lifestyle brands</li>
        </ul>
      </div>
      <div class='col-sm-1'></div>
    </div>
  </div>
</section>
<!--End Body Section 3-->

<!--Start Body Section 4-->
<section class="padding-top padding-bottom border-bottom no-margin-bottom" style="background-color:#f9fafb;">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 text-center">
        <blockquote class="twitter-tweet" lang="en"><p>I think my subscription to <a href="https://twitter.com/VinylMePlease">@VinylMePlease</a> is the best music decision I&#39;ve made in a long time.</p>&mdash; ALPHAOMEGABABY (@_black_dalia_) <a href="https://twitter.com/_black_dalia_/status/532221012847251456">November 11, 2014</a></blockquote>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="col-sm-3 text-center">
        <blockquote class="twitter-tweet" data-cards="hidden" lang="en"><p>I just signed up for <a href="https://twitter.com/VinylMePlease">@vinylmeplease</a>, the best damn record club out there <a href="http://t.co/dkBxrA5uwa">http://t.co/dkBxrA5uwa</a> <a href="https://twitter.com/hashtag/vinylme?src=hash">#vinylme</a></p>&mdash; EvokeLove (@evoke_love) <a href="https://twitter.com/evoke_love/status/532222935155482625">November 11, 2014</a></blockquote>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="col-sm-3 text-center">
        <blockquote class="twitter-tweet" lang="en"><p>The <a href="https://twitter.com/VinylMePlease">@VinylMePlease</a> mailer is the most beautiful record packaging I&#39;ve ever gotten in the mail. Vinyl Luxury! Next ROTM: new band, please!</p>&mdash; Geoffrey Rickly (@GeoffRickly) <a href="https://twitter.com/GeoffRickly/status/502870901512499200">August 22, 2014</a></blockquote>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div class="col-sm-3 text-center">
        <blockquote class="twitter-tweet" data-cards="hidden" lang="en"><p>If you haven&#39;t subscribed yet to <a href="https://twitter.com/VinylMePlease">@VinylMePlease</a>, what the hell are you waiting for? No, seriously. What. <a href="http://t.co/JuF5hXxD5x">http://t.co/JuF5hXxD5x</a></p>&mdash; doug carter (@dougcarter4) <a href="https://twitter.com/dougcarter4/status/454325322347864064">April 10, 2014</a></blockquote>
        <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
  </div>
</section>


<!--End Body Section 3-->

<!-- <section class='padding-top padding-bottom border-bottom triple-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
        <?php
        if (have_posts()) :
           while (have_posts()) :
              the_post();
                 the_content();
           endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</section> -->

<!-- <section class='no-padding-top triple-padding-bottom triple-margin-bottom border-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <h3 class='text-center'>As seen on:</h3>
      </div>
      <div class='col-md-3'>
        <p><img class="img-responsive center-block" src="/wp-content/uploads/2014/04/yahoo.png" /></p>
      </div>
      <div class='col-md-3'>
        <p><img class="img-responsive center-block" src="/wp-content/uploads/2014/04/urbandaddy.png" /></p>
      </div>
      <div class='col-md-3'>
        <p><img class="img-responsive center-block" src="/wp-content/uploads/2014/04/product-hunt.png" /></p>
      </div>
      <div class='col-md-3'>
        <p><img class="img-responsive center-block" src="/wp-content/uploads/2014/04/vinyl-district.png" /></p>
      </div>
    </div>
  </div>
</section> -->

<?php get_footer('sign-up'); ?>