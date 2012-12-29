<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Official Website of Troy United Socccer Club</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="stylesheets/base.css">
	<link rel="stylesheet" href="stylesheets/skeleton.css">
	<link rel="stylesheet" href="stylesheets/layout.css">
	<link rel="stylesheet" href="stylesheets/tusc.css">
	<link rel="stylesheet" type="text/css" href="stylesheets/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="stylesheets/themes/light/light.css">
    <link rel="stylesheet" href="stylesheets/jquery.tweet.css" media="all"  type="text/css"/>
    <!--<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">-->
    <link rel="stylesheet" type="text/css" href="stylesheets/jquery-ui-1.9.2.custom.min.css">
    
    
    
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    
    <!-- Scripts -->
    <!--<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
	<script type="text/javascript" src="scripts/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
    
    <script type="text/javascript" src="scripts/jquery.tweet.js"></script>
    <script type='text/javascript'>
    jQuery(function($){
        $("#ticker").tweet({
          username: "TUSCResults",
          page: 1,
          avatar_size: 32,
          count: 10,
          loading_text: "loading ..."
        }).bind("loaded", function() {
          var ul = $(this).find(".tweet_list");
          var ticker = function() {
            setTimeout(function() {
              var top = ul.position().top;
              var h = ul.height();
              var incr = (h / ul.children().length);
              var newTop = top - incr;
              if (h + newTop <= 0) newTop = 0;
              ul.animate( {top: newTop}, 500 );
              ticker();
            }, 5000);
          };
          ticker();
        });
      });
	</script>
    
    

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
	<header>
		<div class="two columns alpha mainlogo">
			<img src="images/tuscshieldmainlogo.png">
		</div>
		<div class="ten columns">
			<h4 class="tagline">Official Website</h5>
			<h1 class="remove-bottom maintitle">Troy United Soccer Club</h1>
			<br class="clear" />
		</div>
        <div class="two columns">
        	<h5 class="tagline" style="text-align:center;">Join our Mailing List</h5>
        </div>
        <div class="two columns" id="socialmedia">
        	<h5 class="tagline" style="text-align:left">Follow Us</h5>
            <img src="images/twitter_tu.png" alt="Follow TUSC on Twitter" class="socialicon">
            <img src="images/facebook_tu.png" alt="Like us on Facebook" class="socialicon">
            <img src="images/youtube_tu.png" alt="Find us on YouTube" class="socialicon">
            <img src="images/flickr_tu.png" alt="Find us on Flickr" class="socialicon">
        </div>
		<div class="sixteen columns">
			<hr class="navigationhr"/>
		</div>
	  <div id="navbanner" class="sixteen columns">
			<div class="three columns"><a href="../join/join.php">Join Our Club</a></div>
			<div class="three columns"><a href="../teams/teams.php">Teams</a></div>
			<div class="three columns"><a href="../locations/locations.php">Locations</a></div>
			<div class="three columns"><a href="../programs/programs.php">Programs</a></div>
			<div class="three columns menuregister"><a href="../register/register.php">Register</a></div>
			
			<br class="clear" />
		</div>
	</header>
    