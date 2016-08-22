<?php
/*
Template Name: Featured Record Template
*/

get_header(); ?>

<?php query_posts(array(
'posts_per_page' => 1,
'post_type' => 'record-of-the-month',
'meta_key' => 'current_feature', // the name of the custom field
'meta_compare' => '=', // the comparison (e.g. equals, does not equal, etc...)
'meta_value' => 'Yes', // the value to which the custom field is compared. In my case, 'featured_product' was a true/false checkbox. If you had a custom field called 'color' and wanted to show only those blue items, then the meta_value would be 'blue'
'paged' => $paged
)
); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <?php endwhile; ?>

<section class='bg-cover'
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
           <?php the_field('album_title'); ?>
 
          <?php endwhile; // end of the loop. ?>

        </h3>
      </div>
    </div>
  </div>
</section>
<section class='padding-top padding-bottom double-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
      <div class='col-md-4 margin-bottom'>
        <img class="img-responsive thumbnail" 
        <?php if( get_field('album_cover') ): ?>
          <img src="<?php the_field('album_cover'); ?>" />
        <?php endif; ?>
      </div>
      <div class='col-md-6'>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php the_field('vmp_review'); ?>
          <?php endwhile; // end of the loop. ?>
        <div class='col-md-1'></div>
      </div>
    </div>
  </div>
</section>

<?php if( $field = get_field('background_image_2') ): ?>
<section class='bg-cover-2 invert-section double-margin-bottom' style='padding-top:100px; padding-bottom:100px; background-image: url(<?php the_field('background_image_2'); ?>);'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
      <div class='col-md-8'>
        <?php the_field('press_quote'); ?>
      </div>
      <div class='col-md-2'></div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php if( $field = get_field('artist_bio') ): ?>
<section class='padding-top double-padding-bottom double-margin-bottom border-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-1'></div>
      <div class='col-md-10 double-padding-right'>
        <?php the_field('artist_bio'); ?>
      </div>
      <div class='col-md-1'></div>
    </div>
  </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
