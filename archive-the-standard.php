<?php
/*
Template Name: The Standard
*/

get_header(); ?>


<section class='triple-padding-bottom'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12 text-center'>
				<h1>
          The Standard
        </h1>
        <h3>
        	Archive
      </div>
    </div>
  </div>
</section>

<section class='no-padding-top border-bottom triple-margin-bottom triple-padding-bottom'>
  <div class='container'>
    <div class='row'>
    	<div class='col-md-1'></div>
        <div class='col-md-10 text-center'>
          <p class="text-left">The Standard is a weekly digest of the latest music digs from across the internet. Available exclusively to Vinyl Me, Please members, we'll showcase new music, interviews and product features to keep you on point. Request your invite today and get immediate access. Already a Vinyl Me, Please subscriber? Click on anyone of the links below and enter the password you were given upon signing up.</p>
          <?php 
            $paged = get_query_var('paged');
            $paged = ($paged) ? $paged : 1;
          ?>
          <?php
            $args = array( 'post_type' => 'the-standard', 'posts_per_page' => 12, 'paged' => $paged );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <p>
            	<?php the_date();?><br />
              <a href="<?php the_permalink(); ?>"><span class='no-margin bold-font-name'><?php the_title (); ?></span> - <?php the_field('page-subheader'); ?></a>              
            </p>
          <?php endwhile; ?>
            <p class='pull-left'>
              <?php next_posts_link( '&#171; Previous' , $loop->max_num_pages); ?>
            </p>
              
            <p class='pull-right'>
              <?php previous_posts_link( 'Next &#187;' , $loop->max_num_pages);  ?>
            </p>
        </div>
        <?php wp_reset_query(); ?>
  		</div class="col-md-1"></div>
    </div>
  </div>
</section>

<?php get_footer(); ?>