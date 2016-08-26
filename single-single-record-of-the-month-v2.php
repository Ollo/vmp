<?php get_header(); ?>


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
				  <?php the_field('album_title'); ?>
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
					<img src="<?php the_field('album_cover'); ?>" />
      </div>
      <div class='col-md-6'>
				<?php the_field('vmp_review'); ?>
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
