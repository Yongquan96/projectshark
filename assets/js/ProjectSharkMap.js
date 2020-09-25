function myMap() {

	var sharkSampleLocation = {lat: -23.2301768, lng: 150.8243029};
	var sharkDemoImage ="https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F1149870280%2F0x0.jpg%3Ffit%3Dscale";

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

	var contentInfo = "<div style='font-family: Berlin Sans FB Demi;font-size: 20px;text-align: center;color: #6E8CA4'>"
		+"<h4>Tiger Shark</h4>"
		+"<img style='width: 200px;border-radius: 15px' src='"+sharkDemoImage+"'>"
		+"<br/><a style='text-decoration: underline;color:#97C0E2;' href='#'>Learn more</a>"
		+"</div>";

	var infowindow = new google.maps.InfoWindow({
		content: contentInfo
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
		map.setZoom(10);
		map.setCenter(marker.getPosition());
	});

}
