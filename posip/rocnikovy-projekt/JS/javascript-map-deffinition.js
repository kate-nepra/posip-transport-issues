// JavaScript Document

	var map;
	var marker;

function createthemap() {

	var Czechia = {
		lat: 49.61,
		lng: 15.35
	};
	map = new google.maps.Map(document.getElementById('map'), {
		center: Czechia,
		zoom: 8,
		gestureHandling: "greedy"
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


 
