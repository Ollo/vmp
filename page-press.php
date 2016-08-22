<?php
/*
Template Name: Press
*/

get_header(); ?>

<!--Start Header-->
<section class='bg-cover invert-section no-margin-bottom'
	<?php

    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="padding-top:180px; background-image: url(%s);"', $image_src[0] );     
    }

?>>
  <div class='container'>
    <div class='row'>
      <div class='col-md-3'></div>
			<div class='col-md-6 text-center'>
        <h1 class="half-margin-bottom"><?php the_title(); ?></h1>
        <?php while ( have_posts() ) : the_post(); ?>
          <h5><?php the_field('page-subheader'); ?></h5>
        <?php endwhile; // end of the loop. ?></p>
        <div class='row'>
					<div class='col-sm-3'></div>
					<div class='col-sm-6'>
            <a class='btn btn-default navbar-btn full-width margin-bottom' href='mailto:"press@vinylmeplease.com'>press@vinylmeplease.com</a>
            <a href="https://vinylmeplease.box.com/s/38aofc7zk0drw8d9l22ptdzo1mm5k686" class="white-text-color">Download Press Pack</a>
					</div>
					<div class='col-sm-3'></div>
				</div>
				<!--End Row-->
			</div>
			<div class='col-sm-3'></div>
		</div>
	</div>
</section>
<!--End Header-->
<?php
          if (have_posts()) :
             while (have_posts()) :
                the_post();
                   the_content();
             endwhile;
          endif;
          ?>
<!--Start Body Section 1-->
<section class="padding-top no-padding-bottom margin-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class='col-md-8'>
        <p>Vinyl Me, Please is a record of the month club. The best damn record club, in fact. Every month, Vinyl Me, Please features 1 album that is essential to the modern vinyl collection and sends it to thousands of members worldwide. Each record is pressed exclusively for Vinyl Me, Please members with features you can’t get anywhere else--things like bonus tracks, inserts, colored variants--and comes packed with a 12”x12” album-inspired art print and custom cocktail pairing recipe.</p>

<div class="panel-group" id="accordion">
          <div class="panel-default half-margin-bottom">
            <div class="panel-heading">
              <p class="panel-title">
                  <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How does Vinyl Me, Please work?</a>
              </p>
            </div>
            <div id="collapseOne" class="panel-collapse collapse">
              <div class="panel-body">
                  <p>Each month, the VMP team picks 1 album that is essential to the modern vinyl collection. They package it up alongside a 12” x 12” album-inspired art print and a custom cocktail pairing recipe and send it out to members worldwide.</p>
                  <p>Once signed up, new members will start getting The Standard and are able to access the members-only store where they can buy additional records to upcoming shipments.</p>
              </div>
            </div>
          </div>
        <div class="panel-default half-margin-bottom">
          <div class="panel-heading">
            <p class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">How does Vinyl Me, Please work with record labels and artists?</a>
            </p>
          </div>
          <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
              <p>The team works closely with both the label and the artist to come up with a truly special version of the record - creating a pressing made exclusively for members. We create at least 2-3 product features that set the VMP edition apart from others. In most cases, we defer to the artists on what those might be.</p>
              <p>In the past, we have included handwritten notes, color vinyl, diary excerpts from the when the record was being recorded, drawings, listening notes, and many other things to make the package unique.</p>
            </div>
          </div>
        </div>
        <div class="panel-default half-margin-bottom">
            <div class="panel-heading">
              <p class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What kinds of albums does VMP feature?</a>
              </p>
            </div>
          <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                  <p>Vinyl Me, Please features a broad spectrum of great music. Highlighting new artists, essential releases from artists you may have never heard of, as well as a healthy dose of must-have reissues from decades past.</p>
                  <p>The team is constantly listening to new music and looking for albums that are complete works of art from start to finish. Not just content with just one or two great tracks, but entire albums that are worthy of taking up precious space on your record shelf - the kind people will fight over when you die.</p>
                  <p>Over the course of a membership, Vinyl Me, Please members will receive a wide variety of music, spanning various genres, times periods, and artists. Not all may be familiar but all will be worthy of multiple spins.</p>
                  <p>The team works closely with both the label and the artist to come up with a truly special version of the record - creating a pressing made exclusively for members. Every Vinyl Me, Please record comes with a unique feature set (custom lyric books, art, color vinyl, inserts) you can’t get anywhere else.</p>
            </div>
          </div>
        </div>
        <div class="panel-default half-margin-bottom">
          <div class="panel-heading">
            <p class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">What albums has VMP featured in the past?</a>
            </p>
          </div>
          <div id="collapseFour" class="panel-collapse collapse">
            <div class="panel-body">
            <p>Vinyl Me, Please has featured everything from classic soul / jazz records, to hip hop/rap, to indie rock, to the hottest new releases coming out today. A couple of major releases include:</p>
                  <ul>
                    <li>Wilco – A.M. (August, 2015)</li>
                    <li>Lee “Scratch” Perry & The Upsetters – Super Ape (July, 2015)</li>Menomena – Friend & Foe (April, 2015)
                    <li>J Dilla – Donuts (March, 2015)</li>
                    <li>Father John Misty – I Love You, Honeybear (February, 2015)</li>
                    <li>The Ben Webster Quintet – Soulville (December, 2014)</li>
                    <li>The War on Drugs – Lost in the Dream (August, 2014)</li>
                  </ul>
                  <p>A full archive can be seen <a href="/archive">here</a></p>
            </div>
          </div>
        </div>
        <div class="panel-default half-margin-bottom">
          <div class="panel-heading">
            <p class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">How much does it cost and what do you get with a membership?</a>
            </p>
          </div>
          <div id="collapseFive" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Memberships include:</p>
              <p class="margin-left">
                <i class="fa fa-check-circle-o half-margin-right secondary-text-color"></i>Featured Album packaged with 12" x 12" art print and custom cocktail pairing recipe<br />
                <i class="fa fa-check-circle-o half-margin-right secondary-text-color"></i>Access to the members-only store<br />
                <i class="fa fa-check-circle-o half-margin-right secondary-text-color"></i>Accces to The Standard<br />
                <i class="fa fa-check-circle-o half-margin-right secondary-text-color"></i>Exclusive benefits offered by VMP partners<br />
                <i class="fa fa-check-circle-o half-margin-right secondary-text-color"></i>Automatic entry for members-only bonuses and giveaways<br />
              </p>
              <p>Memberships start at $23.50 / month for U.S. Domestic residents and $38 / month for international members. Plans and pricing are listed below.</p>
              <p class="no-margin-bottom">DOMESTIC MEMBERSHIPS</p>
              <ul>
                <li>12-month: $23.50 / mo billed $284 annually (saves $40 per year)</li>
                <li>3-month: $25 / mo billed $75 every 3 months (saves $24 per year)</li>
                <li>Monthly: $27 / mo</li>
              </ul>
              <p class="no-margin-bottom">INTERNATIONAL MEMBERSHIPS</p>
              <ul>
                <li>12-month: $33 / mo billed $399 annually (save $105 per year)</li>
                <li>3-month: $36 / mo billed $108 every 3 months (save $72 per year)</li>
                <li>Monthly: $42 / month</li>
              </ul>
              <p>New members can sign up <a href="/select-your-plan/">here</a>.</p>
            </div>
          </div>
        </div>
        <div class="panel-default half-margin-bottom">
          <div class="panel-heading">
            <p class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Can you give VMP as a gift?</a>
            </p>
          </div>
          <div id="collapseSix" class="panel-collapse collapse">
            <div class="panel-body">
              <p>You bet! 3, 6, and 12-month give plans are available for both U.S. domestic and international people. Pricing is listed below:</p>
              <p class="no-margin-bottom">DOMESTIC / INTERNATIONAL</p>
              <ul>
                <li>3 months: $99 / $139 (comes with 1 bonus archive record)</li>
                <li>6 months: $175 / $249 (comes with 2 bonus archive records)</li>
                <li>12 months: $299 / $479 (comes with 3 bonus archive records)</li>
              </ul>
              <p>Gift plans are available <a href="/gift/">here</a>.</p>
            </div>
          </div>
        </div>
        <div class="panel-default half-margin-bottom">
          <div class="panel-heading">
            <p class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">How is VMP funded?</a>
            </p>
          </div>
          <div id="collapseSeven" class="panel-collapse collapse">
            <div class="panel-body">
              <p>Vinyl Me, Please is bootstrapped and proud of it. Tyler and Matt maxed out their personal credit cards to get it off the ground but the company has been self-sustaining since then. Despite numerous investment offers, we’ve chosen to remain bootstrapped. We appreciate our independence and want to build a company that serves our members first and foremost.</p>
            </div>
          </div>
        </div>
        <h3>Founding Story</h3>
        <p class="bold-font-name">Vinyl Me, Please was born out of a passion for a passion for music and a desire for something that didn't exist.</h3>
        <p>Matt and Tyler met and lived together while working at a tech company in Chicago. A record player became the focal point of their apartment but didn’t have any records. Going to the local record store was great, but the boys often left overwhelmed and empty-handed. One day at work they began talking about record clubs of old. They thought that would be a cool way to build their own collections but after some Google-ing, they couldn’t find anything like that so they said, “Why don’t we start our own?”</p>
        <p>VMP officially launched on January 1, 2013 with 12 paying members. Many of the original members said they enjoyed the service so Matt & Tyler asked if they’d tell their friends. Little by little, the membership grew from 12 members to 50 to 100 to almost 300 by the end of the 2013.</p>
        <p>The membership continued to grow, eventually hitting 500 by April of 2014 when they featured Diarrhea Planet’s ‘I’m Rich Beyond Your Wildest Dreams.’ It was the first ever Vinyl Me, Please exclusive pressing and set the trend for months to come.</p>
        <p>It wasn’t until July / August of 2014 when were Matt & Tyler finally able to quit their jobs and do VMP full-time alongside fellow team members, Cameron and Severan who had both been assisting behind the scenes for the previous couple of months.</p>
        <p>Now in 2015, VMP serves more than 10,000 members across more than 40 countries worldwide.</p>
        <div class="col-md-2"></div>
      </div>
    </div>
  </section>
        <section class="no-padding-top no-padding-bottom margin-bottom">
          <div class='container'>
            <div class='row'>
              <div class='col-md-1'></div>
              <div class='col-md-10'>
                <img src="http://vinylmeplease.com/wp-content/uploads/2015/09/team-press1.jpg" class="img-responsive margin-bottom">
                <div class="row">
                  <div class="col-md-6">
                    <p class="bold-font-name half-margin-bottom">Cameron Schaefer</p>
                    <p>Cameron Schaefer is partner and Head of Label Relations. Cameron graduated from the U.S. Air Force Academy in 2006, and served as an Air Force pilot for 8 years before leaving to take the obvious next step - a career in the music industry.  He also co-founded the Vinyl + Cocktails blog in 2012.</p>
                  </div>
                  <div class="col-md-6">
                    <p class="bold-font-name half-margin-bottom">Matt Fiedler</p>
                    <p>Matt is co-founder and CEO. Matt graduated from Belmont University in 2011 with a dual degree in Music Business & Entrepreneurship. One time he introduced himself as "Math".</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <p class="bold-font-name half-margin-bottom">Tyler Barstow</p>
                    <p>Tyler is a co-founder of Vinyl Me, Please and currently serves as their Head of Content. While working on the idea for, and early stages of, Vinyl Me, Please, he worked as a Support Agent at CoSupport in Chicago. Prior to that he worked with a non-profit in Raleigh, NC.</p>
                  </div>
                  <div class="col-md-6">
                    <p class="bold-font-name half-margin-bottom">Severan Johnson</p>
                    <p>Severan Johnson is Partner and Head of Partnerships and Business Development. He has extensive experience in leadership roles across the non-profit and tech sectors and is an avid traveller. When not gallivanting about the globe, he is a hardcore hermit.</p>
                  </div>
                </div>
              </div>
              <div class='col-md-1'></div>
            </div>
          </div>
        </section>
        <section class='double-padding-top padding-bottom margin-bottom border-bottom muted'>
          <div class='container'>
            <div class='row'>
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <p class="half-margin-bottom text-center"><em>Last 3 @VinylMePlease albums: reggae, pop, rock, hip-hop... Each was an artist I didn't know, each was an album I've loved.</em></p>
                <p class="no-margin-bottom text-center"><a href="https://twitter.com/rklau/status/620759684882927616"><img src="https://pbs.twimg.com/profile_images/552231448317415424/o3HzKnjB.jpeg" class="img-circle margin-bottom" width="75px"></a></p>
                <p class="text-center">Rick Klau</p>
              </div>
              <div class="col-md-3"></div>   
            </div>
            <div class='row'>
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <p class="half-margin-bottom text-center"><em>I'm telling you all right now sign up for this club - killer albums, and stellar service. WTF are you waiting for I'm serious @VinylMePlease</em></p>
                <p class="no-margin-bottom text-center"><a href="https://twitter.com/yahareena/status/636194127869161472"><img src="https://pbs.twimg.com/profile_images/378800000438974226/6ff7e7318d213a91c3315cd2d6ca8d26.jpeg" class="img-circle margin-bottom" width="75px"></a></p>
                <p class="text-center">c javorina</p>
              </div>
              <div class="col-md-3"></div>   
            </div>
            <div class='row'>
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <p class="half-margin-bottom text-center"><em>A company owned and operated by trustworthy people who are passionate about music and put quality and artistic vision above all else? What's not to love?</em></p>
                <p class="no-margin-bottom text-center"><img src="https://yt3.ggpht.com/-EuxH_NRikw8/AAAAAAAAAAI/AAAAAAAAAAA/llBU-WTbEJw/s900-c-k-no/photo.jpg" class="img-circle margin-bottom" width="75px"></p>
                <p class="text-center">Jeremy deVine<br /> <strong>Founder, Temporary Residence</strong></p>
              </div>
              <div class="col-md-3"></div>   
            </div>
            <div class='row'>
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <p class="half-margin-bottom text-center"><em>We are big believers in physical media and attentive listening, and Vinyl Me Please are such champions of that same ethos.</em></p>
                <p class="no-margin-bottom text-center"><img src="http://www.partisanrecords.com/wp-content/uploads/2014/02/SYLVAN_ESSO-self_titled-900x900.jpg" class="img-circle margin-bottom" width="75px"></p>
                <p class="text-center">Nick Sanborn<br /><strong>Sylvan Esso</strong></p>
              </div>
              <div class="col-md-3"></div>   
            </div>
            <div class='row'>
              <div class="col-md-3"></div>
              <div class="col-md-6">
                <p class="half-margin-bottom text-center"><em>Vinyl Me, Please has been one of the most impactful channels for us to not only introduce music from our artists to new fans, but to actually put their records in people's hands.  VMP is a trusted curator with an engaged subscriber base of dedicated music fans - what they do for our artists is every bit as important as record stores and media outlets.</em></p>
                <p class="no-margin-bottom text-center"><img src="https://pbs.twimg.com/profile_images/552947737495216130/a4jCXaDB.jpeg" class="img-circle margin-bottom" width="75px"></p>
                <p class="text-center">Andy Hsueh<br /><strong>Partisan Records</strong></p>
              </div>
              <div class="col-md-3"></div>   
            </div>
          </div>
        </section>
        <section class='padding-top padding-bottom margin-bottom border-bottom'>
          <div class='container'>
            <div class='row'>
              <div class="col-md-12 text-center">
                <h3 class="no-margin-bottom"><a href="mailto:press@vinylmeplease.com">Email us</a> or download our <a href="https://vinylmeplease.box.com/s/38aofc7zk0drw8d9l22ptdzo1mm5k686">press pack</a></h3>
                <h3 class="secondary-text-color"><a href="http://facebook.com/vinylmeplease"><i class="fa fa-facebook-square half-margin-left" ></i></a> <a href="http://twitter.com/vinylmeplease"><i class="fa fa-twitter-square half-margin-left"></i></a> <a href="http://instagram.com/vinylmeplease"><i class="fa fa-instagram half-margin-left"></i></a></h3>
              </div>
            </div>
          </div>
        </section>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>



<?php get_footer('stripped'); ?>