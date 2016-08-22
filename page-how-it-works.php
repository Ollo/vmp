<?php
/*
Template Name: How it works
*/

get_header(); ?>

<body>
  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=389902621086907";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <section id="hiw-header"></section>
  </section>
  <section class='padding-top no-padding-bottom border-bottom margin-bottom'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12 text-center'>
          <h2>The Monthly Box</h2>
        </div>
        <div class='col-md-5 margin-bottom'></div>
        <div class="col-md-2 text-center"><img src="http://vinylmeplease.com/wp-content/uploads/2015/02/hiw-spacer.png" class="img-responsive"></div>
        <div class="col-md-5 margin-bottom"><p> </p></div>
        
        <div class="col-md-2 margin-bottom"></div>
        <div class="col-md-8 margin-bottom text-center">
          <p>Special-edition vinyl delivered to your door complete with an album-inspired 12" x 12" art print and custom cocktail pairing recipe. Discover amazing albums and build your vinyl collection.</p>
          <p><a href="/select-your-plan/">Sign Up <i class="fa fa-angle-right"></i></a></p>
        </div>
        <div class="col-md-2 margin-bottom"></div>
      </div>
    </div>
  </section>
  <section class='padding-top no-padding-bottom margin-bottom'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-12'>
          <h2 class="text-center">Additional Member Perks</h2>
        </div>
        <div class='col-sm-5 margin-bottom'></div>
        <div class="col-sm-2"><img src="http://vinylmeplease.com/wp-content/uploads/2015/02/hiw-spacer.png" class="img-responsive"></div>
        <div class="col-sm-5 margin-bottom"><p> </p></div>
        
        <div class="col-md-4 margin-bottom">
          <p class="no-margin-bottom"><strong>The Standard</strong></p>
          <p>Sent out each week via email, this includes playlists, downloads, interviews and member-exclusive content.</p>
        </div>
        <div class="col-md-4 margin-bottom">
          <p class="no-margin-bottom"><strong>The Store</strong></p>
          <p>Members get access to our store, where you can buy records from the VMP archive as well as a healthy-selection of curated records at special pricing & free shipping (U.S. domestic only).</p>
        </div>
        <div class="col-md-4 margin-bottom">
          <p class="no-margin-bottom"><strong>Bonuses & Giveaways</strong></p>
          <p>We give away a TON of stuff just to our members. Keep an eye for something special to show up at your doorstep, or extra goodies in your box.</p>
        </div>
      </div>
    </div>
  </section>
  <section class='double-padding-top double-padding-bottom shaded-background'>
    <div class='container'>
      <div class='row'>
        <div class="col-md-1"></div>
        <div class="col-md-5 col-md-push-6 margin-bottom">
          <img src="http://vinylmeplease.com/wp-content/uploads/2015/02/hiw-header-abum.png" class="img-responsive">
        </div>
        <div class='col-md-6 col-md-pull-6'>
          <h2>Our Philosophy: The Album Lives</h2>
          <p>Vinyl Me, Please is a record of the month club that believes in the power of the album as an art form. For us, music isn’t just something we listen to, it’s a part of us. We believe that albums are meant to be connected with and enjoyed as a complete work of art. Vinyl, as a medium, creates an environment for this connection through deep, active listening…the music as the focus, rather than just background noise.</p>
          <p>Each month we feature one album that is worthy of your time & attention, work with the artist & label on a custom pressing with exclusive features available only to Vinyl Me, Please. We package each record with a 12” x 12” album-inspired art print and custom cocktail pairing recipe and send it to your doorstep.</p>
        </div>
      </div>
    </div>
  </section>
  <section class='double-padding-top no-padding-bottom'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-5 margin-bottom'>
          <img src="http://vinylmeplease.com/wp-content/uploads/2015/02/hiw-header-selection.png" class="img-responsive">
        </div>
        <div class="col-md-7">
          <h2>The Selection Process</h2>
          <p>Over the course of a year we feature a broad spectrum of great music. We want to highlight new artists, essential releases from artists you may have heard of before, as well as a healthy dose of must-have reissues from decades past.</p>
          <p>We’re constantly listening to new music and looking for albums that are complete works of art from start to finish. We don’t want just one or two great tracks, but entire albums that are worthy of taking up precious space on your shelf - the kind people will fight over when you die.</p>
          <p>Over the course of your membership, you’re likely to receive a wide variety of music, spanning various genres, times periods, and artists. You may not have heard of every artist or record, but you can bet your ass it will be worthy of multiple spins.</p>
          <p>We work closely with both the label and the artist to come up with a truly special version of the record-- creating a pressing made exclusively for our members. Every Vinyl Me, Please record comes with a unique feature set (custom lyric books, art, color vinyl, inserts) you can’t get anywhere else.</p>    
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
</body>

<?php get_footer(); ?>