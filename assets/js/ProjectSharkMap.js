function myMap() {

	var sharkSampleLocation = {lat: -23.2301768, lng: 150.8243029};

	var mapProp= {
		center:new google.maps.LatLng(-22.120754, 148.734105),
		zoom:6,
		mapTypeControl: false,
		scaleControl: false,
		navigationControl: false,
		streetViewControl: false,
		fullscreenControl: false,
	};

	var map = new google.maps.Map(document.getElementById("sharkMap"),mapProp);

	var marker = new google.maps.Marker(
		{
			position: sharkSampleLocation,
			animation:google.maps.Animation.DROP,
			icon:'assets/img/fins.png',
			map: map
		})
	;

}
