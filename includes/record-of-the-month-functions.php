<?php

function render_post_thumbnail() {
  if ( $thumbnail_id = get_post_thumbnail_id() ) {
    if ( $image_src = wp_get_attachment_image_src( $thumbnail_id, '' ) )
    printf( ' style="background-image: url(%s); background-size: cover; background-position: top center; height: 500px;"', $image_src[0] );
  }
}

?>
