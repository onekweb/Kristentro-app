<?php
if(session_id() == '') {
    // session isn't started
    session_start(); 
} 
?>
  <head>
      <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <title>Kristentro</title>
        <link rel="stylesheet" href="jquery.mobile-1.2.0.css" />
        <script src="jquery-1.7.2.min.js">
        </script>
        <script src="jquery.mobile-1.2.0.js">
        </script>
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load("jquery", "1"); google.load("jqueryui", "1");</script>
<script src="http://maps.google.com/maps?file=api&v=2&sensor=false&key=AIzaSyBEeTuHBJty5SjERigmMnjINuIp1vMi_2E" typ
e="text/javascript"></script>

<script>
if(navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(
		function(position) {
			//alert(position.coords.latitude + "," + position.coords.longitude);
			showOnMap(position.coords.latitude, position.coords.longitude);
		}
	);
}

var map;
var mapCenter
var geocoder;
var fakeLatitude;
var fakeLongitude;

function showOnMap(latitude, longitude) {
	var mapCenter = new GLatLng(latitude, longitude);
	map = new GMap2(document.getElementById("map"));
	map.setCenter(mapCenter, 15);
	map.addOverlay(new GMarker(mapCenter));

	geocoder = new GClientGeocoder();
	geocoder.getLocations(latitude+','+longitude, addAddressToMap)
}

function addAddressToMap(response)
{
	if (!response || response.Status.code != 200) {
		alert("Sorry, we were unable to geocode that address");
	} else {
		place = response.Placemark[0];
		$('#address').html('Your address: '+place.address);
	}
}

</script>

        <script src="js/main.js">
        </script>
        
        <link rel="stylesheet" href="css/main.css" />
		<link rel="stylesheet" href="css/main-responsive.css" /
        <!-- User-generated css -->
        <style>
        </style>
        <!-- User-generated js -->
        <script>
            try {

    $(function() {

    });

  } catch (error) {
    console.error("Your javascript has an error: " + error);
  }
        </script>
 </head>
 

