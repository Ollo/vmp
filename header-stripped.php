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

<!--Criteo Start-->
<script type="text/javascript" src="//static.criteo.net/js/ld/ld.js" async="true"></script>
<script type="text/javascript">
window.criteo_q = window.criteo_q || [];
var deviceType= /iPad/.test(navigator.userAgent)?"t":/Mobile|iP(hone|od)|Android|BlackBerry|IEMobile|Silk/.test(navigator.userAgent)?"m":"d";
window.criteo_q.push(
{ event: "setAccount", account: 24737},
{ event: "setSiteType", type: deviceType},
{ event: "setEmail", email: [""]},
{ event: "viewBasket", item: [ {id: 1, price: 0, quantity: 1 } ] }); </script>
<!--End Criteo-->

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

<!--ChargeBee Sign Up-->
<script type="text/javascript" >
    $(document).ready(function() {
        /*
         * binding click event to signup link for adding start date in url
         */
        $('.btn').on('click', function() {
            var url = $(this).attr('data-href');
            $(this).attr('href', checkoutUrl(url));
        });
    });

    /*
     * This function adds subscription[start_date] parameter to url
     */
     var checkoutUrl = function(planSpecificUrl) {
         var getRandom = function(min, max) { // Returns a random integer between min (included) and max (excluded)
             return Math.floor(Math.random() * (max - min)) + min;
         };
         var now = new Date(); //current date //for testing new Date(2015, 09, 31, 02, 00, 00, 00)
         now.setMinutes(now.getMinutes() + now.getTimezoneOffset()); //to manage current timezone offset
         if ((now.getDate() === 2 && now.getHours() >= 8) || (now.getDate() > 2 && now.getDate() < 16) || (now.getDate() === 16 && now.getHours() <= 7)) {
             return planSpecificUrl;
         }
         if (now.getDate() > 15) { // if date is greater than 4th of that month then increment month
             now.setDate(2); //setting date
             now.setMonth((now.getMonth() + 1)); //adding month
         } else {
             now.setDate(2); //setting only date // for 1st of month
         }
         now.setHours(getRandom(6, 23)); //setting random hour between 6 to 23
         now.setMinutes(getRandom(0, 60)); //setting random minutes
         var timestamp = Date.UTC(now.getFullYear(), now.getMonth(), now.getDate(), now.getHours(),
             now.getMinutes(), now.getSeconds(), now.getMilliseconds()); // converts date => UTC timestamp
         var futureTimestamp = Math.floor(timestamp / 1000); //converting to support timstamp
         return planSpecificUrl + '?subscription[start_date]=' + futureTimestamp;
     };
</script>
<!--End ChargeBee -->
	<?php wp_head(); ?>
</head>

<nav class='navbar navbar-default navbar-fixed-top main-nav no-margin-bottom' role='navigation'>
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class='container'>
    <div class='navbar-header padding-bottom margin-bottom'>
      <!--<button class='navbar-toggle' data-target='#bs-example-navbar-collapse-1' data-toggle='collapse' type='button'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>-->
      <a class='navbar-brand' href='<?php echo get_option('home'); ?>'>
        <div class='logo'></div>
      </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
  </div>
</nav>
