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


    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $('#findme').click(function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(success, error);
                } else {
                    error('Geolocation not supported');
                }
            });
        });  


        function success(position) {
          var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
          var myOptions = {
            zoom: 15,
            center: latlng,
            mapTypeControl: false,
            navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
          var mapcanvas = $('#mapcanvas');
          var map = new google.maps.Map(mapcanvas[0], myOptions);
          var marker = new google.maps.Marker({
              position: latlng, 
              map: map, 
              title:"I am here!"
          });
        }
        

        function error(msg) {
          var errMsg = typeof msg == 'string' ? msg : "Geolocation failed";
          $('#msg').html(errMsg);
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
 

