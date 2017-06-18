<!DOCTYPE html>
<html>
  <head>
    <title>GPS Monitoring</title>

    <script type="text/javascript" src="https://pubnub.github.io/eon/v/eon/1.1.0/eon.js"></script>
    <link type="text/css" rel="stylesheet" href="https://pubnub.github.io/eon/v/eon/1.1.0/eon.css"/>

    <style type="text/css">
      body {
        margin: 0px;
      }
    </style>
	<!-- inisialisasi realtime -->
	<script src="js/jquery-latest.js"></script>
	<script>
		var refreshId = setInterval(function()
		{
			 $('#koor_lat').load('data_lat.php');
			 $('#koor_long').load('data_long.php');
		}, 1000);
	</script>
	<!-- end -->
  </head>
  <body style="font-size:11px;">
    <div style="width: 100%; height:600px" id="map"></div>
    <div id="map"></div>
	Realtime:<br><button style="float: right;" onClick="window.open('form_test.php','Input Koordinat','width=250, height=250');">Test Input Koordinat</button>
	<div id="koor_lat" style="font-size:11px;"></div>
	<div id="koor_long" style="font-size:11px;"></div>
    <script>
      var pubnub = new PubNub({
        publishKey: 'demo',
        subscribeKey: 'demo'
      });
	  
      var channel = 'pubnub-mapbox';
      eon.map({
        pubnub: pubnub,
        id: 'map',
        channels: [channel],
        connect: connect,
        options: {
          center: new L.LatLng( 1.4311149, 102.1002631), //center map
          zoom: 13
        },
        provider: 'google',
        googleKey: 'AIzaSyBYcy2l0Yf4lDADZ_U0zi6dy0M6pFZyPQA',
        googleMap: {
          type: 'roadmap'
        }
      });
	  
      function connect() {
        var point = {
          latlng: [0, 0] //koordinat awal
        };
		
        setInterval(function(){
          var new_point = JSON.parse(JSON.stringify(point));
		  
          new_point.latlng = [
		  //koordinat update
            new_point.latlng[0] + (document.getElementById("koor_lat").innerHTML), 
            new_point.latlng[1] + (document.getElementById("koor_long").innerHTML)
          ];
          pubnub.publish({
            channel: channel,
            message: [new_point]
          });
		  
        }, 1000);
      };
    </script>
	
  </body>
</html>