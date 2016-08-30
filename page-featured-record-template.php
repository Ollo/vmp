  <?php
/*
Template Name: Featured Record Template
*/

get_header();

require_once(get_template_directory() . '/includes/record-of-the-month-functions.php');

// make post query
query_posts(
  array(
    'posts_per_page' => 1,
    'post_type' => array('new-records', 'record-of-the-month'),
  )
);

if ( have_posts() ) while ( have_posts() ) : the_post(); endwhile;

$primary = get_field('primary_color');
$secondary = get_field('secondary_color');
$album_title = get_field('album_name');
$album_banner = get_field('album_banner');
$published = get_field('featured_month');
$youtube = get_field('youtube_embed');
$features = get_field('album_features');
$preview_bg = get_field('preview_background');
$audio = get_field('audio_embed');
$liner_notes_excerpt = get_field('liner_notes_excerpt');
$liner_notes_link = get_field('liner_notes_link');


// consider purchasing the repeater to make this cleaner / less brittle
$featured_post_image_1 = get_field('featured_post_image_1');
$featured_post_title_1 = get_field('featured_post_title_1');
$featured_post_url_1 = get_field('featured_post_url_1');
$featured_post_image_2 = get_field('featured_post_image_2');
$featured_post_title_2 = get_field('featured_post_title_2');
$featured_post_url_2 = get_field('featured_post_url_2');
$featured_post_image_3 = get_field('featured_post_image_3');
$featured_post_title_3 = get_field('featured_post_title_3');
$featured_post_url_3 = get_field('featured_post_url_3');

// fire off the js
renderJS();

?>
<style>
  section {
    padding: 0!important;
  }
  .background-primary {
    background-color: <?php echo $primary; ?>;
  }
  .background-secondary {
    background-color: <?php echo $secondary; ?>;
  }
  .border-primary {
    border-color: <?php echo $primary; ?>;
  }
  .btn-rotm {
    background-color: <?php echo $secondary; ?>;
  }
  .btn-rotm-inverse {
    border-color: <?php echo $secondary; ?>;
    color: #1e1f20!important;
  }
  .primary-color {
    color: <?php echo $primary; ?>;
  }
  .secondary-color {
    color: <?php echo $secondary; ?>
  }
</style>

<main id="rotm" class="scroll-container">
  <section class="page-intro" style="background-image: url('<?php echo $album_banner; ?>');">
    <figure class="page-intro__hero">
      <h1 class="page-intro__album-title"><?php echo $album_title; ?></h1>
      <p class="page-intro__label">from</p>
      <h3 class="page-intro__band"><?php the_title(); ?></h3>
      <hr />
      <p class="page-intro__date"><?php echo $published . " " . date('Y'); ?></p>
    </figure>
  </section>
  <nav id="rotm-scroll-nav" class="button-nav">
    <a class="btn btn-rotm-inverse" href="#the-vinyl">the vinyl</a>
    <a class="btn btn-rotm-inverse" href="#preview">preview</a>
    <a class="btn btn-rotm-inverse" href="#read-more">read more</a>
  </nav>
  <section id="the-vinyl" class="video-iframe" style="background-color: <?php echo $primary ?>;">
    <div class="video-iframe__container container">
      <?php echo $youtube; ?>
    </div>
    <div class="video-iframe-background"></div>
    <h4 class="video-iframe__title">watch the unboxing of '<?php echo $album_title; ?>'</h4>
  </section>
  <section class="details">
    <figure class="details__image">
      <?php the_post_thumbnail(array(400, 400)); ?>
    </figure>
    <div class="details__list ">
      <p class="details__list-title secondary-color">this month's exclusive includes:</p>
      <div class="details__list-items"><?php echo $features; ?></div>
    </div>
  </section>
  <section class="callout background-primary">
    <p>Each month, Vinyl Me, Please teams up with artists to create <span>exclusive</span> vinyl packages for our subscribers.</p>
    <p>Sign up by <?php echo $published; ?> 15th to get this record.</p>
    <a class="btn btn-rotm callout__button" href="<?php bloginfo('url'); ?>/select-your-plan/">join the club</a>
  </section>
  <section id="preview" class="preview">
    <div class="preview__hero" style="background-image: url('<?php echo $preview_bg; ?>');">
      <h1 class="preview__hero-title">Preview</h1>
    </div>
    <div class="preview__content container">
      <div class="preview__content-audio">
        <?php echo $audio; ?>
      </div>
      <article class="preview__content-excerpt">
        <?php echo  $liner_notes_excerpt; ?>
        <a class="btn btn-rotm-inverse" href="<?php echo $liner_notes_link; ?>" target="_blank">read the liner notes</a>
      </article>
    </div>
  </section>
  <section id="read-more" class="read-more">
    <hr class="border-primary" />
    <?php if ($featured_post_image_1) { ?>
      <h4 class="read-more__title"> Read more about <?php the_title() ?></h4>
      <ul class="read-more__posts">
    <?php } ?>
        <?php if ($featured_post_image_1) { ?>
          <li class="post">
            <figure class="post__wrapper">
              <img src="<?php echo $featured_post_image_1; ?>" class="post__image" />
              <a href="<?php echo $featured_post_url_1; ?>" target="_blank">
                <span class="post__icon dashicons dashicons-arrow-right-alt"></span>
              </a>
              <figcaption class="post__caption">
                <p class="post__caption-title">
                  <a href="<?php echo $featured_post_url_1; ?>" target="_blank"><?php echo $featured_post_title_1; ?></a>
                </p>
              </figcaption>
            </figure>
          </li>
        <?php } ?>
        <?php if(get_field('featured_post_image_2')) { ?>
          <li class="post">
            <figure class="post__wrapper">
              <img src="<?php echo $featured_post_image_2; ?>" class="post__image" />
              <a href="<?php echo $featured_post_url_2; ?>" target="_blank">
                <span class="post__icon dashicons dashicons-arrow-right-alt"></span>
              </a>
              <figcaption class="post__caption">
                <p class="post__caption-title">
                  <a href="<?php echo $featured_post_url_2; ?>" target="_blank"><?php echo $featured_post_title_2; ?></a>
                </p>
              </figcaption>
            </figure>
          </li>
        <?php } ?>
        <?php if(get_field('featured_post_image_3')) { ?>
          <li class="post">
            <figure class="post__wrapper">
              <img src="<?php echo $featured_post_image_3; ?>" class="post__image" />
              <a href="<?php echo $featured_post_url_3; ?>" target="_blank">
                <span class="post__icon dashicons dashicons-arrow-right-alt"></span>
              </a>
              <figcaption class="post__caption">
                <p class="post__caption-title">
                  <a href="<?php echo $featured_post_url_3; ?>" target="_blank"><?php echo $featured_post_title_3; ?></a>
                </p>
              </figcaption>
            </figure>
          </li>
        <?php } ?>
      </ul>
  </section>
  <footer class="promo">
    <div class="promo__intro container">
      <p>this kind of stuff happens every month,</p>
      <p>and plans start at just 23/mo.</p>
    </div>
    <div class="callout background-primary">
      <h5 class="callout__title">I'd like to join vinyl me please, please</h5>
      <a class="btn btn-rotm callout__button" href="<?php bloginfo('url'); ?>/select-your-plan/">join the club</a>
    </div>
    <p class="support_links">questions? <a href="http://help.vinylmeplease.com" target="_blank">reach out to support</a>, or find out <a href="<?php bloginfo('url'); ?>/how-it-works/" target="_blank">how this all works</a> works</a>
  </footer>
</main>

<?php get_footer(); ?>
