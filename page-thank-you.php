<?php
/*
Template Name: Thank you page
*/

get_header('thank-you'); ?>

<body>
<!--Start of DoubleClick Floodlight Tag: Please do not remove
Activity name of this tag: Purchase_NonGift
URL of the webpage where the tag is expected to be placed: http://vinylmeplease.com/select-your-plan/thank-you/
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 06/29/2015-->
<script type="text/javascript">// <![CDATA[
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://4896308.fls.doubleclick.net/activityi;src=4896308;type=purch0;cat=purch0;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
// ]]></script>
<noscript>
<iframe src="https://4896308.fls.doubleclick.net/activityi;src=4896308;type=purch0;cat=purch0;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of DoubleClick Floodlight Tag: Please do not remove -->

<!— Google Code for Membership purchase Conversion Page —>
<script type=“text/javascript”>
/* <![CDATA[ */
var google_conversion_id = 974129497;
var google_conversion_language = “en”;
var google_conversion_format = “3”;
var google_conversion_color = “ffffff”;
var google_conversion_label = “YzuTCPaWlF0Q2ZLA0AM”;
var google_remarketing_only = false;
/* ]]> */
</script>
<script type=“text/javascript”  
src=“//www.googleadservices.com/pagead/conversion.js”>
</script>
<noscript>
<div style=“display:inline;”>
<img height=“1” width=“1” style=“border-style:none;” alt=“”  
src=“//www.googleadservices.com/pagead/conversion/974129497/?label=YzuTCPaWlF0Q2ZLA0AM&guid=ON&script=0”/>
</div>
</noscript>

<!--Bronto Conversion Tracking -->
<script type="text/javascript">
	document.write(unescape("%3Cscript src='"
		+ ((document.location.protocol == "https:") ? "https:" : "http:")
		+ "//p.bm23.com/bta.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
	var bta = new __bta('avvtpzkimkbqerntqmjahwbpkrlybpk');
	bta.setHost("app.bronto.com");
</script>
<!--Close Bronto-->

<!-<script type="text/javascript">
    $(window).load(function(){
        $('#myModal').modal('show');
    });
</script>-->

<script>
    window['friendbuy'] = window['friendbuy'] || [];
    window['friendbuy'].push(['widget', "3t-cJG"]);
</script>

<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Your friends will be pissed if they find out you kept VMP all to yourself</h4>
      </div>
      <div class="modal-body">
        <p>Record clubs are better with friends!</p>
        <p>SHARE this with your music loving friends by clicking the buttons below!</p>
        <p>OH, and if you didn't already know, Vinyl Me, Please makes for a <a href="/give-a-gift">great gift</a>.</p>
        <p class="margin-bottom"><div class="fb-like pull-left margin-bottom margin-right" data-href="https://www.facebook.com/VinylMePlease" data-width="200" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
          <a class="twitter-share-button" href="https://twitter.com/share" data-url="http://vinylmeplease.com" data-text="I just signed up for @vinylmeplease, the best damn record club out there" data-related="VinylMePlease" data-hashtags="vinylme">Tweet</a>
          <script>// <![CDATA[
            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
            // ]]></script><button class="btn btn-default"><a href="mailto:?subject=Check out Vinyl Me, Please&body=Hey amigo, I just became a member of a record of the month club called Vinyl Me, Please and I think you'd really dig it. Each month they send you an awesome record which is pressed exclusively for their members plus a custom art print and cocktail pairing. You also get The Standard, their weekly digital digest featuring the best new music, gear and lifestyle + access to their members-only store. They’ve already featured some really cool stuff. Check out their archive here: http://vinylmeplease.com/archive/. You usually have to request an invite, but since we’re friends, you can sign up right now using this link: http://vinylmeplease.com/get-started/. Peace!">Send an email!</a></button></p>
      </div>
      <div class="modal-footer no-border-bottom"></div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</section>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=389902621086907";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <section class='bg-cover-full'
  	<?php

      if ( $thumbnail_id = get_post_thumbnail_id() ) {
          if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
              printf( ' style="background-image: url(%s);"', $image_src[0] );     
      }

  ?>>
  </section>
  <section class='padding-top padding-bottom border-bottom double-margin-bottom'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12 text-center'>
          <h1>
            <?php the_title(); ?>
          </h1>
          <h3>
          	<?php while ( have_posts() ) : the_post(); ?>
  					 <?php the_field('page-subheader'); ?>
   
  					<?php endwhile; // end of the loop. ?>
          </h3>
        </div>
      </div>
    </div>
  </section>
  <section class='padding-top padding-bottom border-bottom double-margin-bottom'>
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
        <div class='col-md-1'></div>
      </div>
    </div>
  </section>
<!--Bronto Conversion-->
<script type="text/javascript">
	// In most cases, values in the cookie are used to associate an order
	// with a contact and a delivery, so there is no need to pass in email or
	// contact_id. If you do pass in email or contact_id and these values do not
	// match what is in the cookie (or the cookie does not exist), then the order
	// will only be associated with the email or contact_id passed in. If you pass
	// in email or contact_id and these values match what is in the cookie, then the
	// order will be associated with the email or contact_id passed in, and the delivery
	// from the cookie.
	bta.addOrder({ "order_id": "", "email": "", "contact_id": "", "date": "", "items": [
		{ "item_id":"item1", "desc":"description", "amount":"", "quantity":"1", "name":"name", "category":"category", "image":"http://imageUrl", "url":"http://itemUrl" },
		{ "item_id":"item2", "desc":"description 2", "amount":"", "quantity":"1", "name":"name", "category":"category", "image":"http://imageUrl", "url":"http://itemUrl" }
	]});
</script>
<!--Close Bronto -->
</body>

<?php get_footer('stripped'); ?>