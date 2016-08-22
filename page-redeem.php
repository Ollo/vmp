<?php
/*
Template Name: Gift Redemption
*/

get_header('stripped'); ?>

<!--Start Header-->
<section class='bg-cover-2 invert-section'
	<?php

    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="padding-top:160px; min-height: 100px!important; height:100px!important; background-image: url(%s);"', $image_src[0] );     
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
        <!-- <a class="btn btn-wire half-margin-bottom" href="#pricing">Redeem <i class="margin-left fa fa-angle-down"></i></a><br />
        </p> -->
			</div>
			<div class='col-sm-2'></div>
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