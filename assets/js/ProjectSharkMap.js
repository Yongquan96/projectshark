function myMap() {
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
}
