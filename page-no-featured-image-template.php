<?php
/*
Template Name: No Featured Image Header
*/

get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=389902621086907";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<section class='padding-bottom'>
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
<section class='padding-top double-padding-bottom double-margin-bottom'>
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

<?php get_footer(); ?>