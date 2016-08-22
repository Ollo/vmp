<?php
/*
Template Name: Refer a friend
*/

get_header('stripped'); ?>

<section class='bg-cover'
  	<?php

      if ( $thumbnail_id = get_post_thumbnail_id() ) {
          if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
              printf( ' style="background-image: url(%s);"', $image_src[0] );     
      }

  ?>>
</section>
<section class='padding-top padding-bottom border-bottom'>
  <div class='container'>
    <div class='row'>
	<div class="col-md-12 text-center">
      		<script>
         		window['friendbuy'] = window['friendbuy'] || [];
         		window['friendbuy'].push(['widget', "3t-cCn"]);
      		</script>
      		<div class="friendbuy-3t-cCn"></div>
	</div>
    </div>
  </div>
</section>

<? get_footer('stripped'); ?>