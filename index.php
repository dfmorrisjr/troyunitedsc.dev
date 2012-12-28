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
    <script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>
	
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

	<div class="sixteen columns maincontent row">
		<div class="twelve columns alpha" >
			<section id="contentslider" class="noborder">
			<div class="slider-wrapper theme-light">
            <div id="slider" class="nivoSlider">
                 <img src="images/u11showmegames640x480.jpg" data-thumb="images/u11showmegames640x410.jpg" alt="" title="#htmlcaption0"/>
                <img src="images/u12toddabbiecoachingemup640x480.jpg" data-thumb="images/u12toddabbiecoachingemup640x480.jpg" alt="" title="#htmlcaption1" />
                <img src="images/2012summercamp640x480.jpg" data-thumb="images/2012summercamp640x480.jpg" alt="" title="#htmlcaption2" />
               <img src="images/u8seasonopener640x480.jpg" data-thumb="images/u8seasonopener640x480.jpg" alt="" title="#htmlcaption3" />
               
            </div>
            <div id="htmlcaption0" class="nivo-html-caption">
                2012 Show Me State Games - U11 at Show Me State Games Semi-Finals 
            </div>
            <div id="htmlcaption1" class="nivo-html-caption">
                Coachin' em up - Coaches Todd and Abbie coaching U12 up during halftime of the Dec 16 2012 match. 
            </div>
            <div id="htmlcaption2" class="nivo-html-caption">
                2012 Summer Camp - Director of Coaching Daniel Olsted putting them through thier paces.
            </div>
            <div id="htmlcaption3" class="nivo-html-caption">
                U8 Season Opener - Director of Coaching and U8 Coach Daniel Olsted preps the team for the spring 2012 season opener.
            </div>
        </div>
			</section>
			<section>
			<div class="sectiontitle"><span class="yellowsquare">.</span>
					recent results
				</div>
			<div id="ticker" class="query"></div>
			<!--
			<style type="text/css">
      #ticker {
        height: 4em;
        overflow-y: hidden;
        position: relative;
      }
      #ticker ul.tweet_list {
        position: absolute;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
      }
      #ticker ul.tweet_list li {
        height: 4em;
      }
    </style>-->
			</section>
			<section>
				<div class="sectiontitle"><span class="yellowsquare">.</span>
					SLYSA Rainout
				</div>
			<iframe style="width:475px;height:60px;border:0px none #ccc;background-color:#FFFFFF; margin: 10px 0px 10px 160px;" src="http://a.statushare.com/embed/1/scroll468x60.php?d=6364121512" frameborder="0" scrolling="no"></iframe>
			</section>
		</div>
		<div class="four columns omega row">
			<article id="missionstatement" style="line-height:1.25 em;">
				<div class="sectiontitle"><span class="yellowsquare">.</span>
					Mission Statement
				</div>
				Our mission at Troy United SC is to provide each player the opportunity to play soccer in a supportive and rewarding environment emphasizing skill learning, team development and overall enjoyment for the game of soccer, and to create a challenging environment allowing players to reach their full potential. Our philosophy at Troy United SC is to create a positive atmosphere where kids can try the things we teach them without the fear of being reprimanded for making a mistake. The best way to learn and have fun is to allow the kids to try the things we are teaching them in practice and games. This is more essential than “winning”. The best way to succeed is to allow players to develop a love for the game of soccer.
			</article>
			<section>
			<div class="sectiontitle"><span class="yellowsquare">.</span>
					Links
				</div>
			<br>
			<br>
			<br>
			<br>
			<br>
			</section>
			<section>
				<div class="sectiontitle"><span class="yellowsquare">.</span>
					calendar
				</div>
				<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=275&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=br6bksm8cos1vh6tvdgoou3ktc%40group.calendar.google.com&amp;color=%23691426&amp;src=hmjuktdmalaj207fcm3f0l3sd4%40group.calendar.google.com&amp;color=%23B1440E&amp;src=mfsrirumtpvvik4bo13e0av39c%40group.calendar.google.com&amp;color=%2323164E&amp;src=u5o5krervl3i6smfm1vjovqcmc%40group.calendar.google.com&amp;color=%23182C57&amp;src=9kcml1tuqnb823qq914btamtmg%40group.calendar.google.com&amp;color=%23125A12&amp;src=f38g9jcb4t28kuqrra3rre6pg8%40group.calendar.google.com&amp;color=%23711616&amp;src=ihr58q36436pjcaah3ar1sg0ko%40group.calendar.google.com&amp;color=%23125A12&amp;src=q9fovqsaare4h7k34i76gdtqos%40group.calendar.google.com&amp;color=%23853104&amp;src=troyunitedsc%40gmail.com&amp;color=%23182C57&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23A32929&amp;ctz=America%2FChicago" style=" border-width:0 " width="200" height="275" frameborder="0" scrolling="no"></iframe>
			<br>
			<br>
			<br>
			</section>	
		</div>
		<!--<br class="clear" />-->
		<div id="recentresults" class="twelve columns alpha">
			
		</div>
		<div id="importantlinks" class="four columns omega">

		</div>
		<br class="clear" />
		<div id="SLYSArainoutnumner" class="twelve columns alpha">
			
		</div>
		<div id="calendar" class="four columns omega">
			
		</div>
		<br class="clear" />
	</div>


  <div class="navfooter">
  <div class="five columns"><span class="navfootertoplevel">About</span>
    <ul>
    	<li>History</li>
        <li>We Love Soccer</li>
        <li>Staff</li>
 		<li>Contact</li>
        <li>Locations</li>
        <li>Register</li>       
    </ul>
    
    </div>
    <div class="five columns"><span class="navfootertoplevel">Teams</span>
  		<ul>
        	<li>Girls
                <ul>
                    <li>U8</li>
                    <li>U11</li>
                    <li>U12</li>
                    <li>U13</li>
                    <li>U14</li>
                    <li>U16</li>
                    <li>U18</li>
                </ul>
            </li>
       </ul>
       <ul>
            <li>Boys
            	<ul>
					<li>U12</li>
                    <li>U14</li>                
                </ul>
            </li>
        </ul>
    </div>
  <div class="five columns"><span class="navfootertoplevel">Programs</span>
  	<ul>
    	<li>Development</li>
        <li>Academy</li>
        <li>Camps and Mini Camps</li>
    </ul>
  </div>
  
  <br class="clear" />
  </div> <!-- navfooter -->
  
  <div class="sixteen columns footer">
  <span class="footerClubTitle">Troy United Soccer Club </span><br />
  &copy; 2013 Troy United Soccer Club
  </div>

<?php include("footer.html"); ?>

</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>