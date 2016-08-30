<?php
/**
 * The Header for our theme
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php bloginfo('name'); ?> &#124; <?php wp_title('&laquo;', true, 'right'); ?></title>
<!--Optimizely-->
<script src="//cdn.optimizely.com/js/484190032.js"></script>
<!--End Optimizely-->
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
<!--Google Analytics-->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-32926169-1', 'vinylmeplease.com');
    ga('send', 'pageview');
  </script>
<!--End Analytics-->

<!-- Segment Pixel - VinylMePlease - DO NOT MODIFY -->
<script src="http://ib.adnxs.com/seg?add=2465385,2454384&t=1" type="text/javascript"></script>
<!-- End of Segment Pixel -->

<!--Kiss Metrics-->
<script type="text/javascript">var _kmq = _kmq || [];
var _kmk = _kmk || '323455d0745ff4a24a0b57ee6cb3f3349c23d9e1';
function _kms(u){
  setTimeout(function(){
    var d = document, f = d.getElementsByTagName('script')[0],
    s = d.createElement('script');
    s.type = 'text/javascript'; s.async = true; s.src = u;
    f.parentNode.insertBefore(s, f);
  }, 1);
}
_kms('//i.kissmetrics.com/i.js');
_kms('//scripts.kissmetrics.com/' + _kmk + '.2.js');
</script>
<!--End Kiss Metrics-->

<!--FRIENDBUY SMARTPIXEL-->
<script>
    window['friendbuy'] = window['friendbuy'] || [];
    window['friendbuy'].push(['site', 'site-c34415b4-vinylmeplease.com']);
    window['friendbuy'].push(['track', 'customer',
        {
            id: '', //INSERT CUSTOMER ID PARAMETER
            email: '' //INSERT CUSTOMER EMAIL PARAMETER
        }
    ]);
    (function (f, r, n, d, b, y) {
        b = f.createElement(r), y = f.getElementsByTagName(r)[0];b.async = 1;b.src = n;y.parentNode.insertBefore(b, y);
    })(document, 'script', '//djnf6e5yyirys.cloudfront.net/js/friendbuy.min.js');
</script>
<!--END FRIENDBUY SMARTPIXEL-->
	<?php wp_head(); ?>
</head>

<nav class='navbar navbar-default navbar-fixed-top main-nav no-margin-bottom' role='navigation'>
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class='container'>
    <div class='navbar-header padding-bottom margin-bottom'>
      <button class='navbar-toggle' data-target='#bs-example-navbar-collapse-1' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      <a class='navbar-brand' href='<?php echo get_option('home'); ?>'>
        <div class='logo'></div>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
  </div>
</nav>
