<?php

//thumbnails
if ( function_exists( 'add_theme_support' ) ) {
  add_theme_support( 'post-thumbnails' );
}

add_theme_support( 'post-thumbnails' );

//main nav
register_nav_menu( 'main_nav', __( 'Main navigation menu', 'mytheme' ) );
register_nav_menu( 'footer1', __( 'Footer navigation 1', 'mytheme' ) );
register_nav_menu( 'footer2', __( 'Footer navigation 2', 'mytheme' ) );
register_nav_menu( 'footer3', __( 'Footer navigation 3', 'mytheme' ) );
register_nav_menu( 'footer4', __( 'Footer navigation 4', 'mytheme' ) );

function custom_type_archive_display($query) {
  if (is_post_type_archive('custom_type')) {
    $query->set('posts_per_page',1);
    return;
  }
}

add_action('pre_get_posts', 'custom_type_archive_display');

// queue up custom styles
function register_vmp_scripts_n_stylez() {
  wp_enqueue_style('vmp-styles', get_template_directory_uri() . '/stylesheets/styles.css' );
  wp_enqueue_style( 'vmp-dashicons', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );
}

add_action('wp_enqueue_scripts', 'register_vmp_scripts_n_stylez');


//create post types
function create_my_post_types() {

  register_post_type( 'record-of-the-month',
    array(
      'labels' => array(
        'name' => __( 'Record of the Month' ),
        'singular_name' => __( 'records' )
      ),
      'supports' => array( 'title', 'thumbnail', 'page-attributes' ),
      'public' => true,
    )
  );

  register_post_type('new-records',
    array(
      'labels' => array(
        'name' => __('Record of the Month v2'),
        'singular_name' => __('records'),
      ),
      'hierarchical' => true,
      'publicly_queryable' => true,
      'rewrite' => true,
      'supports' => array('title', 'thumbnail', 'page-attributes'),
      'public' => true,
    )
  );

  register_post_type( 'the-standard',
    array(
      'labels' => array(
        'name' => __( 'The Standard' ),
        'singular_name' => __( 'issues' )
      ),
      'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' ),
      'public' => true,
      'has_archive' => true,
    )
  );

  register_post_type( 'friends-family',
    array(
      'labels' => array(
        'name' => __( 'Friends & Family' ),
        'singular_name' => __( 'Friends' )
      ),
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'public' => true,
    )
  );
}

add_action( 'init', 'create_my_post_types' );


//Stop Video
function cgp_pause_video() { ?>
<script>
  $('#hiwVideo').on('hidden.bs.modal', function (e) {
    // do something...
    $('#hiwVideo iframe').attr("src", jQuery("#hiwVideo  iframe").attr("src"));
  });
</script>

<?php }

add_action( 'wp_footer','cgp_pause_video', 20 );

// Remove "Protected" from Password Protected Posts
function the_title_trim($title) {
  $title = attribute_escape($title);
  $findthese = array(
    '#Protected:#',
    '#Private:#'
  );
  $replacewith = array(
    '', // What to replace "Protected:" with
    '' // What to replace "Private:" with
  );
  $title = preg_replace($findthese, $replacewith, $title);
  return $title;
}
add_filter('the_title', 'the_title_trim');

function my_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form class="text-center margin-bottom" action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post"><p class="margin-bottom text-left">
    ' . __( "The Standard is only available to Vinyl Me, Please subscribers. Request your invite today and get immediate access or enter the password below to view this content." ) . '</p>
    <label for="' . $label . '">' . __( "Password:" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" /><input class="btn btn-default margin-left" type="submit" name="Submit" value="' . esc_attr__( "Submit" ) . '" />
    </form>
    ';
    return $o;
}
add_filter( 'the_password_form', 'my_password_form' );

?>
