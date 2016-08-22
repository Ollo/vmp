<?php
/*
Template Name: Plan Page (No CB)
*/

get_header('stripped2'); ?>

<section class='double-margin-top double-padding-top no-padding-bottom'>
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
<section class='padding-top double-padding-bottom border-bottom double-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <?php
      if (have_posts()) :
         while (have_posts()) :
            the_post();
               the_content();
         endwhile;
      endif;
      ?>
    </div>
  </div>
</section>

<? get_footer('stripped'); ?>