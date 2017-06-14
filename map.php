<?php 
  include 'includes.php'; 
  $locations = get_map_details();
	$lat = $locations['lat'];
	$lang = $locations['lang'];
?>
	
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Simple markers</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 700px;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>

      function initMap() {
        var myLatLng = {lat: <?php print $lat; ?>, lng: <?php print $lang; ?>};

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
		
			
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRYtR6zRs-pngNTj6Si-mHJNhV0iD3hoc&callback=initMap">
    </script>
  </body>
</html>








