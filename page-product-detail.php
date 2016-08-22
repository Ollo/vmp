<?php
/*
Template Name: Product Detail
*/

get_header('stripped2'); ?>

<section class='no-padding-bottom' style="padding-top:168px;">
  <div class='container'>
    <div class='row'>
      <div class="col-md-2"></div>
      <div class='col-md-8'>
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</section>
<section class='padding-top double-padding-bottom border-bottom double-margin-bottom'>
  <div class='container'>
    <div class='row'>
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <?php
        if (have_posts()) :
           while (have_posts()) :
              the_post();
                 the_content();
           endwhile;
        endif;
        ?>
      </div>
      <div class="col-md-2">
    </div>
  </div>
</section>

<? get_footer('stripped'); ?>