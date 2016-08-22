<?php
/*
Template Name: Invite Landing Page v2
*/

get_header(); ?>

<!--Start Header-->
<section class='bg-cover invert-section no-margin-bottom'
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
				<h1><?php the_title(); ?></h1>
				<h3><?php while ( have_posts() ) : the_post(); ?><?php the_field('page-subheader'); ?>
				<?php endwhile; // end of the loop. ?></h3>
        			<div class='row'>
					<div class='col-sm-1'></div>
					<div class='col-sm-10'>
						<!-- Begin Bronto Signup Form -->
						<form action="http://app.bronto.com/public/webform/process/" method="post">
							<input type="hidden" name="fid" value="13pb9gn206kswwp5ebzvbq9nmsmw9" />
							<input type="hidden" name="sid" value="b1e48bd33d7592a72d34b9dc7cddfb24" />
							<input type="hidden" name="delid" value="" />
							<input type="hidden" name="subid" value="" />
							<input type="hidden" name="td" value="" />
							<input type="hidden" name="formtype" value="addcontact" />
							<script type="text/javascript">
								var fieldMaps = {};
							</script>
							<div class="section" id="row_23348">
								<div id="column_28810">
									<div class="email field_block">
										<div class="input-append">
											<span><input type="text" id="appendedInputButton" class="span2 text field fb-email margin-bottom half-margin-left margin-right" size="35" name="51579" value="" placeholder="Enter your email address" style="padding:11px 0px; text-indent:5px; min-width:350px;"/></span>
											<button type="submit button" value="Request an invite" class="btn btn-default"/>Request an invite</button>
											<div class="field_error"></div>
										</div>
									</div>
									<div class="field_block"></div>
									<input type="hidden" name="51603[412205]" value="true" />
									<input type="hidden" name="51604[412633]" value="true" />
								</div>
								<div class="container" id="column_28811" style="text-align: left; width: 357px;"></div>
								<div style="clear: both;">&nbsp;</div>
							</div>
						</form>
						<!-- End Bronto signup -->
					</div>
					<div class='col-sm-1'></div>
				</div>
				<!--End Row-->
			</div>
			<div class='col-sm-2'></div>
		</div>
	</div>
</section>
<!--End Header-->

<!--Start Post Header Section-->
<section class="no-padding double-margin-bottom double-padding-bottom invert-section" style="background-color:#1e1f20;">
  <div class="container">
    <div class="row">
        <div class="padding-top no-padding-bottom col-md-12 text-center">
            <h2 class="half-margin-bottom">The album as the focus, vinyl as the medium</h2>
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
        <h1>Music worthy of your time and attention</h1>
        <h3>Every month you get:</h3>
      </div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-2">
            <p><img class="img-responsive center-block double-margin-bottom" src="http://vinylmeplease.com/wp-content/uploads/2014/04/home-page_03.png" /></p>
          </div>
          <div class="col-xs-8">
              <p>Limited edition LP pressed exclusively for Vinyl Me, Please members</p>
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
            <p><img class="img-responsive center-block double-margin-bottom" src="http://vinylmeplease.com/wp-content/uploads/2014/11/play.png" /></p>
          </div>
          <div class="col-xs-8">
              <p>Access to The Standard, a weekly music & gear digest</p>
          </div>
          <div class="col-xs-1"></div>
        </div>
        <div class="row">
          <div class="col-xs-1"></div>
          <div class="col-xs-2">
            <p><img class="img-responsive center-block double-margin-bottom" src="http://vinylmeplease.com/wp-content/uploads/2014/11/shopping-cart.png" /></p>
          </div>
          <div class="col-xs-8">
              <p>Special members-only pricing on additional records & gear</p>
          </div>
          <div class="col-xs-1"></div>
        </div><!--End Row-->
      </div><!--End Col-->
      <div class='col-md-12 text-center no-margin-bottom padding-bottom'>
        <h4>Plans starting at $23 / month</h1>
        <p><a href="/faq/#q3">View plans & pricing <i class="fa fa-angle-right"></i></a></p>
      </div>
    </div><!--End Row-->
  </div><!--End Container-->
</section>
<!--End Body Section 1-->

<!--Start Body Section 2-->
<section class='bg-cover invert-section triple-margin-bottom' style='background-image: url(http://vinylmeplease.com/wp-content/uploads/2014/11/opening-gif.gif);'>
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
          <li class="half-margin-bottom">
            Limited edition vinyl LP pressed exclusively for Vinyl Me, Please
          </li>
          <li>
            Original, 12” x 12” album-inspired art print & custom 
          </li>
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
        <h4>New music discovery, vinyl deals, straight to your inbox</h4>
        <ul class="half-margin-left double-margin-bottom" style="color:#666">
          <li class="half-margin-bottom">
            Access to The Standard, our weekly email featuring new music, gear, lifestyle
          </li>
          <li>
            Member’s-only vinyl store with curated picks & VMP archive LPs (free shipping)
          </li>
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
        <h4>Forums, events, a community as excited about music as you</h4>
        <ul class="half-margin-left double-margin-bottom" style="color:#666">
          <li class="half-margin-bottom">
            Vinyl Me, Please forums where members can talk vinyl, hardware & more
          </li>
          <li>
            Monthly Vinyl Me, Please events featuring great music, drinks & people
          </li>
        </ul>
      </div>
      <div class='col-sm-1'></div>
    </div>
  </div>
</section>
<!--End Body Section 3-->

<!--Start Body Section 4-->
<section class="padding-top padding-bottom border-bottom triple-margin-bottom" style="background-color:#f9fafb;">
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
<!--End Body Section 4-->


<?php get_footer(''); ?>