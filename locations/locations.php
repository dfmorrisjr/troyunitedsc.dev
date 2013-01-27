<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Official Website of Troy United Socccer Club - Locations</title>

<?php include('../header.php') ?>
<!-- Begin Main Content -->


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!--
<script type="text/javascript" src="/scripts/jquery.ui.map.js"></script>
-->

<script type="text/javascript"> 
//<![CDATA[
      // this variable will collect the html which will eventually be placed in the side_bar 
      var side_bar_html = ""; 
    
      // arrays to hold copies of the markers and html used by the side_bar 
      // because the function closure trick doesnt work there 
      var gmarkers = []; 
      var map = null;

function initialize() {
  // create the map
  var myOptions = {
    zoom: 10,
    center: new google.maps.LatLng(38.82901,-90.714569),
    mapTypeControl: true,
    mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
    navigationControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  map = new google.maps.Map(document.getElementById("map_canvas"),
                                myOptions);
 
  google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
        });

  // Add markers to the map
  // Set up three markers with info windows 
  // add the points    
   	  //var point = new google.maps.LatLng(38.976876,-90.977612); 
      //var marker = createMarker(point,'Home','<div style="width:240px"><a href="http://globalsolutionsdev.com">Home<\/a><\/div>')
 
      var point = new google.maps.LatLng(39.00161,-90.970745);
      var marker = createMarker(point,'Dugan Field','Dugan Field','Outdoor Practices','77 Dugan Ln, Troy, MO 63379','77 Dugan Ln, Troy, MO 63379');
 
      var point = new google.maps.LatLng(38.987251,-90.910106);
      var marker = createMarker(point,'Cuiver Park Elementary','Cuiver Park Elementary', 'Indoor Practices', '100 Wieman Lane Troy, Missouri 63379', '38.987251,-90.910106');

      var point = new google.maps.LatLng(38.935995,-90.929958);
      var marker = createMarker(point,'William Cappel Elementary','William Cappel Elementary', 'Indoor Practices','121 Hampel Road Moscow Mills, MO 63362','William Cappel Elementary 121 Hampel Road Moscow Mills, MO 63362');

      var point = new google.maps.LatLng(38.942304,-90.93429);
      var marker = createMarker(point,'9th Grade Center','9th Grade Center', 'Outdoor Practice, Club wide meetings','80 Elm Tree Road Moscow Mills, MO 63362','9th Grade Center 80 Elm Tree Road Moscow Mills, MO 63362');

      var point = new google.maps.LatLng(39.046053,-90.861679);
      var marker = createMarker(point,'Asbury United Methodist Church','Asbury United Methodist Church', 'Indoor Practice, Keeper Training','2704 S Highway W  Foley, MO 63347','39.046019,-90.861678');

      var point = new google.maps.LatLng(38.984032,-90.984849);
      var marker = createMarker(point,'Main Street Elementary','Main Street Elementary', 'Indoor Practices','51 North Main Street Troy, Missouri 63379','Main Street Elementary 51 North Main Street Troy, Missouri 63379');

      var point = new google.maps.LatLng(38.972485,-90.964456);
      var marker = createMarker(point,'First Assembly of God','First Assembly of God','Outdoor Practices','432 South Lincoln Drive Troy, MO 63379','First Assembly of God 432 South Lincoln Drive Troy, MO 63379');

      var point = new google.maps.LatLng(38.825533,-90.538938);
      var marker = createMarker(point,'SLYSA','SLYSA', 'SLYSA Outdoor Games','3901 Huster Road, St. Charles, MO 63301','SLYSA Soccer Complex 3901 Huster Road, St. Charles, MO 63301');

      var point = new google.maps.LatLng(38.827472,-90.510373);
      var marker = createMarker(point,'SCCYSA','SCCYSA', 'SCCYSA Outdoor Games','3801 Mueller Rd St Charles 63301','Mueller Soccer Park 3801 Mueller Rd St Charles 63301');

      var point = new google.maps.LatLng(38.799584,-90.573044);
      var marker = createMarker(point,'Omni Sports Plex/Gametime Sports','Omni Sports Plex/Gametime Sports', 'Futsol','4160 Ehlmann Rd St. Peters, MO 63376-6456','Omni Sports Plex 4160 Ehlmann Rd St. Peters, MO 63376-6456');
      
      var point = new google.maps.LatLng(38.648157,-90.467822);
      var marker = createMarker(point,'C4 Competitive Courts & Conditioning Center','C4 Competitive Courts & Conditioning Center', 'Futsol','12691 Conway Road Creve Coeur, MO 63141','C4 12691 Conway Road Creve Coeur, MO 63141');
      
      var point = new google.maps.LatLng(38.699282,-90.407069);
      var marker = createMarker(point,'Christian Academy','Christian Academy', 'Futsol','11050 North Warson Road, Overland, MO','Christian Academy 11050 North Warson Road, Overland, MO');

      var point = new google.maps.LatLng(38.735027,-90.499001);
      var marker = createMarker(point,'Sportport','SportPort', 'SLYSA Outdoor Games','12525 Sportport, Maryland Heights, MO','Sportport 12525 Sportport, Maryland Heights, MO');

      var point = new google.maps.LatLng(38.461293,-90.379544);
      var marker = createMarker(point,'Kolping Kicks','Kolping Kicks', 'SLYSA Outdoor Games','4680 Meramec Bottom Rd, St Louis, MO','Kolping Kicks Soccer Club 4680 Meramec Bottom Rd, St Louis, MO');

      var point = new google.maps.LatLng(38.697862,-90.498999);
      var marker = createMarker(point,'Lou Fusz Soccer Club','Lou Fusz Soccer Club', 'SLYSA Outdoor Games','2155 Creve Coeur Mill Road, St. Louis, MO','Lou Fusz Soccer Club 2155 Creve Coeur Mill Road, St. Louis, MO');

      var point = new google.maps.LatLng(38.766628,-90.636929);
      var marker = createMarker(point,'Vetta Sports St. Charles','Vetta Sports St. Charles', 'Indoor Games','1425 Saint Peters Cottleville Rd, Saint Peters, MO','Vetta Sports St Charles 1425 Saint Peters Cottleville Rd, Saint Peters, MO');
      
      var point = new google.maps.LatLng(38.772856,-90.6427);
      var marker = createMarker(point,'Woodlands Park','Woodlands Park', 'SCCYSA Outdoor Games','200 Woodlands Pkwy, Saint Peters, MO','Woodlands Park 200 Woodlands Pkwy, Saint Peters, MO 63376');
            


  // put the assembled side_bar_html contents into the side_bar div
  document.getElementById("side_bar").innerHTML = side_bar_html;
}
 
var infowindow = new google.maps.InfoWindow(
  { 
    size: new google.maps.Size(150,50)
  });
    
// This function picks up the click and opens the corresponding info window
function myclick(i) {
  google.maps.event.trigger(gmarkers[i], "click");
}

// A function to create the marker and set up the event window function 
function createMarker(latlng, name, html, subtitle, address, destaddress) {

	
	
	
    var contentString = html;
		contentString += ' <div class="contentsubtitle">' + subtitle + '</div>';
		contentString += '<div class="address">' + address + '</div>';
		contentString += '<div class="directions"><a href="http://maps.google.com/maps?t=m&daddr=';
		contentString += destaddress + '"';
		contentString += 'target="_blank">Directions</div>';
		
    var image = new google.maps.MarkerImage('/images/soccerios.png');
    
    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        zIndex: Math.round(latlng.lat()*-100000)<<5,
        icon: image
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString); 
        infowindow.open(map,marker);
        });
    // save the info we need to use later for the side_bar
    gmarkers.push(marker);
    // add a line to the side_bar html
    side_bar_html += '<p class="sidebar"><a class="sidebar" href="javascript:myclick(' + (gmarkers.length-1) + ')">' + name + '<\/a></p>';
}
 
 
 $(document).ready(function() {
    initialize();
});

   
//]]>
</script> 


	<div class="sixteen columns maincontent row">
    <div id="side_bar" class="three columns alpha omega">
    </div>
	<div id="map_canvas" class="thirteen columns omega" style="height: 600px;"></div>
	</div>
	<br class="clear" />
<!-- End Main Content -->
<?php include("../footer.php"); ?>
