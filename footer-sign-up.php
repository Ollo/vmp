<!--Beging Crazy Egg-->
<script type="text/javascript">
setTimeout(function(){var a=document.createElement("script");
var b=document.getElementsByTagName("script")[0];
a.src=document.location.protocol+"//dnn506yrbagrg.cloudfront.net/pages/scripts/0027/0293.js?"+Math.floor(new Date().getTime()/3600000);
a.async=true;a.type="text/javascript";b.parentNode.insertBefore(a,b)}, 1);
</script>
<!--End Crazy Egg-->

<section class='padding-top padding-bottom invert-section invert-section' style="background-color:#1e1f20;">
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8 text-center'>
        <h1 class="no-margin-bottom">Sign Up Today!</h1>
	<h3 class='margin-bottom'>Plans starting at $23 / month</h3>
        <div class='row'>
          <div class='col-sm-2'></div>
          <div class='col-sm-4'>
            <a class='btn btn-default navbar-btn full-width' href='<?php bloginfo('url'); ?>/select-your-plan/'>Sign Up <i class="fa fa-play-circle"></i></a>
          </div>
          <div class='col-sm-4'>
            <a class='btn btn-wire navbar-btn full-width' href='<?php bloginfo('url'); ?>/select-your-plan/gift/'>Give a gift <i class="fa fa-play-circle"></i></a>
          </div>
          <div class='col-sm-2'></div>
        </div>
      </div>
      <div class='col-sm-2'></div>
    </div>
  </div>
</section>

<footer class='double-margin-bottom double-margin-top double-padding-top'>
  <section class="no-padding">
    <div class='container'>
      <div class='row'>
        <div class='col-md-12 text-center double-margin-bottom double-padding-bottom' id='footer-top'>
          <img src="<?php bloginfo('template_directory');?>/images/chicago-star.png">
        </div>
        <div class='row double-margin-bottom double-padding-bottom margin-left'>
          <div class='col-sm-2'></div>
          <div class='col-sm-2 margin-bottom'>
            <p><strong>ABOUT VMP</strong></p>
            <nav class='margin-bottom'>
              <?php wp_nav_menu( array('theme_location' => 'footer1' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
            </nav>
          </div>
          <div class='col-sm-2 margin-bottom'>
            <p><strong>MEMBER RESOURCES</strong></p>
            <nav class='margin-bottom'>
              <?php wp_nav_menu( array('theme_location' => 'footer2' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
            </nav>
          </div>
          <div class='col-sm-2 margin-bottom'>
            <p><strong>JOIN THE COMMUNITY</strong></p>
            <nav class='margin-bottom'>
              <?php wp_nav_menu( array('theme_location' => 'footer3' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
            </nav>
          </div>
          <div class='col-sm-2 margin-bottom'>
            <p><strong>QUESTIONS & ANSWERS</strong></p>
            <nav class='margin-bottom'>
              <?php wp_nav_menu( array('theme_location' => 'footer4' , 'container' => '', 'items_wrap' => '<ul class="list-unstyled">%3$s</ul>' )); ?>
            </nav>
          </div>
          <div class='col-sm-2'></div>
        </div>
      <div class='col-md-12 text-center double-margin-bottom'>
          <small class="gray-text-color">&copy; 2016 Offbeat Ventures, LLC</small>
      </div>
      </div>
    </div>
  </section>
  <?php wp_footer(); ?>
</footer>