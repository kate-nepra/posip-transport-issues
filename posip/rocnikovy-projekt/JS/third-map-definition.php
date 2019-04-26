<script>
function createthirdmap(){
	var map;	
	var bounds = new google.maps.LatLngBounds();
	var Marker = {
		lat: <?php print($latitudeindegrees); ?>,
		lng: <?php print($longitudeindegrees); ?>
	};
	map = new google.maps.Map(document.getElementById('map'), {
		center: Marker,
		zoom: 19,
		gestureHandling: "greedy"
	});
	var position = new google.maps.LatLng(<?php print($latitudeindegrees)?>, <?php print($longitudeindegrees)?>);
	bounds.extend(position);
	    marker = new google.maps.Marker({
			
            position:position,
            map: map,
		});	
	google.maps.event.addListener(map, 'click', function (event) {

		if (marker != null) {
			marker.setMap(null);
		}

		marker = new google.maps.Marker({
			position: event.latLng,
			map: map,
		});
		
		function getlatitude() {
			var latitude = event.latLng.lat();
			document.getElementById("lat").setAttribute('value', latitude);
		}
		getlatitude();

		function getlongitude() {
			var longitude = event.latLng.lng();
			document.getElementById("lng").setAttribute('value', longitude);
		}
		getlongitude();
		
	});
}
</script>
		