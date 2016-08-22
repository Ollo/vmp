<?php
/*
Template Name: Invite Landing Page
*/

get_header(); ?>

<section class='bg-cover invert-section double-margin-bottom'
	<?php

    if ( $thumbnail_id = get_post_thumbnail_id() ) {
        if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
            printf( ' style="padding-top:160px; background-image: url(%s);"', $image_src[0] );     
    }

?>>
	<div class='container'>
		<div class='row'>
			<div class='col-md-2'></div>
			<div class='col-md-8 text-center'>
				<h1><?php the_title(); ?></h1>
				<h3><?php while ( have_posts() ) : the_post(); ?><?php the_field('page-subheader'); ?>
				<?php endwhile; // end of the loop. ?></h3>
        			<div class='row'>
					<div class='col-sm-1'></div>
					<div class='col-sm-10'>
						<!-- Begin Bronto Signup Form -->
						<form action="http://app.bronto.com/public/webform/process/" method="post">
							<input type="hidden" name="fid" value="13pb9gn206kswwp5ebzvbq9nmsmw9" />
							<input type="hidden" name="sid" value="b1e48bd33d7592a72d34b9dc7cddfb24" />
							<input type="hidden" name="delid" value="" />
							<input type="hidden" name="subid" value="" />
							<input type="hidden" name="td" value="" />
							<input type="hidden" name="formtype" value="addcontact" />
							<script type="text/javascript">
								var fieldMaps = {};
							</script>
							<div class="section" id="row_23348">
								<div id="column_28810">
									<div class="email field_block">
										<div class="input-append">
											<span><input type="text" id="appendedInputButton" class="span2 text field fb-email margin-bottom half-margin-left margin-right" size="35" name="51579" value="" placeholder="Enter your email address" style="padding:11px 0px; text-indent:5px; min-width:350px;"/></span>
											<button type="submit button" value="Request an invite" class="btn btn-default"/>Request an invite</button>
											<div class="field_error"></div>
										</div>
									</div>
									<div class="field_block"></div>
									<input type="hidden" name="51603[412205]" value="true" />
									<input type="hidden" name="51604[412633]" value="true" />
								</div>
								<div class="container" id="column_28811" style="text-align: left; width: 357px;"></div>
								<div style="clear: both;">&nbsp;</div>
							</div>
						</form>
						<!-- End Bronto signup -->
					</div>
					<div class='col-sm-1'></div>
				</div>
				<!--End Row-->
			</div>
			<div class='col-sm-2'></div>
		</div>
	</div>
</section>
   <section class='no-padding-top triple-margin-bottom triple-padding-bottom border-bottom'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-12 text-center double-margin-bottom padding-bottom'>
            <h1>
              Plans starting at $23 / month
            </h1>
            <h3>
              Music delivered straight to your door and inbox
            </h3>
          </div>
          <div class='col-md-3 double-margin-top'>
            <p>
              <img class="img-responsive center-block" src="/wp-content/uploads/2014/04/home-page_03.png" />
            </p>
            <p class='text-center'>
              Limited edition LP pressed exclusively for Vinyl Me, Please members
            </p>
          </div>
          <div class='col-md-3 double-margin-top'>
            <p>
              <img class="img-responsive center-block" src="/wp-content/uploads/2014/04/home-page_05.png" />
            </p>
            <p class='text-center'>
              Original 12” x 12” art print and a custom cocktail pairing
            </p>
          </div>
          <div class='col-md-3 double-margin-top'>
            <p>
              <img class="img-responsive center-block" src="/wp-content/uploads/2014/04/home-page_08.png" />
            </p>
            <p class='text-center'>
              Access to The Standard, a weekly music and gear digest
            </p>
          </div>
          <div class='col-md-3 double-margin-top'>
            <p>
              <img class="img-responsive center-block" src="/wp-content/uploads/2014/11/shopping-cart.png" />
            </p>
            <p class='text-center'>
              Special members-only pricing on additional records & gear
            </p>
          </div>
        </div>
      </div>
    </section>

<section class='padding-top padding-bottom border-bottom triple-margin-bottom'>
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
      </div>
    </div>
  </div>
</section>

<section class='no-padding-top triple-padding-bottom triple-margin-bottom border-bottom'>
      <div class='container'>
        <div class='row'>
          <div class='col-md-12'>
            <h3 class='text-center'>
              As seen on:
            </h3>
          </div>
          <div class='col-md-3'>
            <p>
              <img class="img-responsive center-block" src="/wp-content/uploads/2014/04/yahoo.png" />
            </p>
          </div>
          <div class='col-md-3'>
            <p>
              <img class="img-responsive center-block" src="/wp-content/uploads/2014/04/urbandaddy.png" />
            </p>
          </div>
          <div class='col-md-3'>
            <p>
              <img class="img-responsive center-block" src="/wp-content/uploads/2014/04/product-hunt.png" />
            </p>
          </div>
          <div class='col-md-3'>
            <p>
              <img class="img-responsive center-block" src="/wp-content/uploads/2014/04/vinyl-district.png" />
            </p>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(''); ?>