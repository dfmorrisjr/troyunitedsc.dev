
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
	  
	<link rel="stylesheet" href="../stylesheets/base.css">
	<link rel="stylesheet" href="../stylesheets/skeleton.css">
	<link rel="stylesheet" href="../stylesheets/layout.css">
	<link rel="stylesheet" href="../stylesheets/tusc.css">
	<link rel="stylesheet" type="text/css" href="../stylesheets/nivo-slider.css">
    <link rel="stylesheet" type="text/css" href="../stylesheets/themes/light/light.css">
    <link rel="stylesheet" href="../stylesheets/jquery.tweet.css" media="all"  type="text/css"/>
    <!--<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css">-->
    <link rel="stylesheet" type="text/css" href="../stylesheets/jquery-ui-1.9.2.custom.min.css">
    
    
    
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
    
    <!-- Scripts -->
    <!--<script type="text/javascript" src="scripts/jquery-1.7.1.min.js"></script>-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
		//$("#dropdownteams").hide();
		//$("#dropdownlocations").hide();
		//$("#dropdownprograms").hide();
    });
    </script>
    
	<script type="text/javascript" src="../scripts/jquery.nivo.slider.js"></script>
    
    
    <script type="text/javascript" src="../scripts/jquery.tweet.js"></script>
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
    
    <script>
    $(function () {
		
		$("#dropdownteams").hide();
		$("#dropdownlocations").hide();
		$("#dropdownprograms").hide();
		
    	$("#navteams").mouseover(function() {
			$("#dropdownteams").show();
			$("#dropdownprograms").hide();
			$("#dropdownlocations").hide();
			});
			
		$("#navteams").mouseout(function() {
			$("#dropdownteams").hide();
			
			});
		
		$("#dropdownteams").mouseover(function() {
			$("#dropdownteams").show();
		});	
		
		$("#dropdownteams").mouseout(function() {
			$("#dropdownteams").hide();
		});
		
		
		$("#navlocations").mouseover(function() {
			$("#dropdownlocations").show();
			$("#dropdownteams").hide();
			$("#dropdownprograms").hide();
			});
			
		$("#navlocations").mouseout(function() {
			$("#dropdownlocations").hide();
			
			});
			
		$("#dropdownlocations").mouseover(function() {
			$("#dropdownlocations").show();
		});
		
		$("#dropdownlocations").mouseout(function() {
			$("#dropdownlocations").hide();
		});
			
		$("#navprograms").mouseover(function() {
			$("#dropdownprograms").show();
			$("#dropdownteams").hide();
			$("#dropdownlocations").hide();
			});
			
		$("#navprograms").mouseout(function() {
			$("#dropdownprograms").hide();
			
			});
		
		$("#dropdownprograms").mouseover(function() {
			$("#dropdownprograms").show();
		});
		
		$("#dropdownprograms").mouseout(function() {
			$("#dropdownprograms").hide();
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
			<img src="../images/tuscshieldmainlogo.png">
		</div>
		<div class="ten columns">
			<h4 class="tagline">Official Website</h5>
			<h1 class="remove-bottom maintitle">Troy United Soccer Club</h1>
			<br class="clear" />
		</div>
        <div class="two columns">
        	<h5 class="tagline" style="text-align:center;">Join our Mailing List</h5>
        	<a href="http://eepurl.com/kJLaX" target="_blank">
        		<img src="../images/mailinglist_tu35px.png" alt="Join our Mailing List" class="maillisticon"></a>
        	
        </div>
        <div class="two columns" id="socialmedia">
        	<h5 class="tagline topmargin55" style="text-align:left;">Follow Us</h5>
            <img src="../images/twitter_tu.png" alt="Follow TUSC on Twitter" class="socialicon leftmargin15 ">
            <img src="../images/facebook_tu.png" alt="Like us on Facebook" class="socialicon">
            <br />
            <img src="../images/youtube_tu.png" alt="Find us on YouTube" class="socialicon leftmargin15">
            <img src="../images/flickr_tu.png" alt="Find us on Flickr" class="socialicon">
        </div>
		<div class="sixteen columns">
			<hr class="navigationhr"/>
		</div>
	  <div id="navbanner" class="sixteen columns">
			<div class="three columns"><a href="../join/join.php">Join Our Club</a></div>
			<div class="three columns" ><a href="../teams/teams.php" id="navteams">Teams</a></div>
			<div class="three columns" id="navlocations"><a href="../locations/locations.php">Locations</a></div>
			<div class="three columns" id="navprograms"><a href="../programs/programs.php">Programs</a></div>
			<div class="three columns menuregister"><a href="../register/register.php">Register</a></div>
			
			<br class="clear" />
            
            <div class="hidden navdropdown sixteen columns" id="dropdownteams">
                <img src="../images/cornerlogo3.png" style="position: absolute; left: 650px; top: 40px;"/>
                Girls
                        <ul>
                            <li>U8</li>
                            <li>U9</li>
                            <li>U10</li>
                            <li>U11</li>
                            <li><a href="../teams/teamsu12.php">U12</a></li>
                            <li>U14</li>
                            <li>U16</li>
                            <li>U18</li>
                        </ul>
                <br>
                Boys
                        <ul>
                            <li>U10</li>
                            <li>U11</li>
                            <li>U16</li>                
                        </ul>
                    
                <br class="clear" />
                
            </div>
            
            <div class="hidden navdropdown sixteen columns" id="dropdownprograms">
                 
			    	Programs
			        <ul>
			          <li>Minis</li>
			          <li>Developmental</li>
			          <li>Juniors</li>
			          <li>Seniors</li>
			        </ul>
			        <br />
			        Camps and Mini Camps
			    
                <img src="../images/cornerlogo3.png" style="position: absolute; left: 650px; top: 40px;"/>
                <br class="clear" />
            </div>
       
            <div class="hidden navdropdown sixteen columns" id="dropdownlocations">
                locations go here
                <img src="../images/cornerlogo3.png" style="position: absolute; left: 650px; top: 40px;"/>
                <br class="clear" />	
            </div>
            
		</div>
         
        
        	
	</header>
    