<?php get_header(); ?>

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
					 <?php the_field('page-subheader'); ?>

        </h3>
      </div>
    </div>
  </div>
</section>
<section class='padding-top border-bottom padding-bottom double-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-2'></div>
				<div class="col-md-8">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  				         <?php the_content(); ?>
            <div class='pagination double-padding-top full-width no-margin'>
              <p class='pull-left'>
		<?php previous_post_link('%link', '&#171; Previous'); ?>
              </p>
              
              <p class='pull-right'>
                <?php next_post_link('%link', 'Next &#187;'); ?>
              </p>
              <?php endwhile; ?>
          <?php endif; ?>

          </div>
          <?php wp_reset_query(); ?>
        </div>
        <div class="col-md-2"></div>
			</div>
		</div>
	</div>
</section>


<?php get_footer('stripped'); ?>