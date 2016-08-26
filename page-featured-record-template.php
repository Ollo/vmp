<?php
/*
Template Name: Featured Record Template
*/

get_header();

require_once(get_template_directory() . '/includes/record-of-the-month-functions.php');

query_posts(
  array(
    'posts_per_page' => 1,
    'post_type' => array('new-rotm', 'record-of-the-month'),
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

<script type="text/javascript">
$(document).ready(function (){
  $.fn.scrollTo = function( target, options, callback ){
    if(typeof options == 'function' && arguments.length == 2){ callback = options; options = target; }
    var settings = {
      scrollTarget  : target,
      offsetTop     : options && options.offsetTop || 0,
      duration      : options && options.duration || 500 ,
      easing        : options && options.easing || 'swing'
    };
    return this.each(function(){
      if ( this.isScrollingTo !== true) {
        var scrollPane = $(this);
        var scrollTarget = (typeof settings.scrollTarget == "number") ? settings.scrollTarget : $(settings.scrollTarget);
        var scrollY = (typeof scrollTarget == "number") ? scrollTarget : scrollTarget.offset().top + scrollPane.scrollTop() - settings.offsetTop - scrollPane.offset().top;
        this.isScrollingTo = true;
        scrollPane.animate({scrollTop : scrollY }, parseInt(settings.duration), settings.easing, function(){
          this.isScrollingTo = false;
          if (typeof callback == 'function') { callback.call(this); }
        });
      }
    });
  }

  $('#rotm-scroll-nav a').click(function(e) {
    e.preventDefault()
    $('body').scrollTo($(this).attr('href'), { duration: 1500, offsetTop: 100 })
  })
})
</script>
<main id="rotm" class="scroll-container">
  <section class="page-intro" style="background-image: url('<?php echo $album_banner; ?>');">
    <figure class="page-hero">
      <h1 class="page-hero__heading"><?php echo $album_title; ?></h1>
      <p>from</p>
      <h3 class="page-hero__sub-heading"><?php the_title(); ?></h3>
      <hr />
      <p><?php echo $published . " " . date('Y'); ?></p>
    </figure>
  </section>
  <nav id="rotm-scroll-nav" class=" button-nav">
    <a class="btn btn-rotm-inverse" href="#the-vinyl">the vinyl</a>
    <a class="btn btn-rotm-inverse" href="#preview">preview</a>
    <a class="btn btn-rotm-inverse" href="#read-more">read more</a>
  </nav>
  <section id="the-vinyl" class="video-iframe">
    <div class="video-iframe__container">
      <?php echo $youtube; ?>
    </div>
    <div class="video-iframe-background" class="" style="background-color: <?php echo $primary ?>;"></div>
    <h4 class="video-iframe__title">watch the unboxing of '<?php echo $album_title; ?>'</h4>
  </section>
  <section>
    <div class="details row">
      <figure class="details__image col-md-3 col-md-offset-2">
        <?php the_post_thumbnail(array(400, 400)); ?>
      </figure>
      <div class="details__list col-md-3 col-md-offset-1">
        <p class="details__title secondary-color">this month's exclusive includes:</p>
        <div class="details__list-items"><?php echo $features; ?></div>
      </div>
    </div>
  </section>
  <section class="callout background-primary">
    <p>Each month, Vinyl Me, Please teams up with artists to create <span>exclusive</span> vinyl packages for our subscribers.</p>
    <p>Sign up by <?php echo $published; ?> 15th to get this record.</p>
    <a class="btn btn-rotm" href="signup">join the club</a>
  </section>
  <section id="preview">
    <div class="preview__hero" style="background-image: url('<?php echo $preview_bg; ?>');">
      <h2>Preview</h2>
    </div>
    <div class="preview__content">
      <div class="">
        <p class=""><?php echo $audio; ?></p>
      </div>
      <article class="preview__content-excerpt">
        <?php echo  $liner_notes_excerpt; ?>
        <a class="btn btn-rotm-inverse" href="<?php echo $liner_notes_link; ?>">read the liner notes</a>
      </article>
    </div>
  </section>
  <section id="read-more" class="">
    <hr class="border-primary" />
    <h4> Read more about <?php the_title() ?></h4>
    <ul class="posts">
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </section>
  <footer class="promo">
    <p>this kind of stuff happens every month</p>
    <p>and plans start at just 23/mo.</p>
    <div class="background-primary">
      <h5>I'd like to join vinyl me please, please</h5>
      <a class="btn btn-rotm">join the club</a>
    </div>
    <p class="support_links">questions? <a href="mailto:">reach out to support</a>, or find out <a href="">how this all works</a>
  </footer>
</main>

<?php get_footer(); ?>
