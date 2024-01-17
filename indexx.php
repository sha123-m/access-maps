<html>
	<head>
	<title>Access Google Maps API in PHP</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script type="text/javascript" src="js/googlemap1.js"></script>
	<style type="text/css">
		.container {
			height: 450px;
		}
		#map {
			width: 100%;
			height: 100%;
			border: 1px solid blue;
		}
		#data {
			display: none;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<center><h1>Access Google Maps API in PHP</h1></center>
		<?php 
			require 'education.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

		?>
		
		<div id="map"></div>
	</div>
</body>
<script async defer
 src="https://maps.googleapis.com/maps/api/
js?key=AIzaSyDtGwcxcqnCfIsMYnFGuw7z8eMf1FYlQyg&callback=initMap"></script>
 
</html>