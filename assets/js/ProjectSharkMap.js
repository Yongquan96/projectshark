function myMap() {
	zoom = 6;
	var lng = -22.120754;
	var lat = 148.734105;
	var mapProp = mapProperties(zoom,lng,lat);

	var map = new google.maps.Map(document.getElementById("sharkMap"),mapProp);

	return map;
}

function mapProperties(zoom, lng, lat) {
	var mapProp= {
		center:new google.maps.LatLng(lng, lat),
		zoom:zoom,
		mapTypeControl: false,
		scaleControl: false,
		navigationControl: false,
		streetViewControl: false,
		fullscreenControl: false,
	};
	return mapProp;
}

function sharkmarkers(map, long, lat, SpeciesName){
	var sharkDemoImage = "";//https://thumbor.forbes.com/thumbor/fit-in/1200x0/filters%3Aformat%28jpg%29/https%3A%2F%2Fspecials-images.forbesimg.com%2Fdam%2Fimageserve%2F1149870280%2F0x0.jpg%3Ffit%3Dscale";

	var sharkSampleLocation = {
		lat: lat,
		lng: long
	};
	var marker = new google.maps.Marker(
		{
			position: sharkSampleLocation,
			animation:google.maps.Animation.BOUNCE,
			icon:'assets/img/fins.png',
			map: map
		})

	var contentInfo = "<div style='font-family: Berlin Sans FB Demi;font-size: 20px;text-align: center;color: #6E8CA4'>"
		+"<h4>"+SpeciesName+"</h4>"
		+"<img style='width: 200px;border-radius: 15px' src='"+sharkDemoImage+"'>"
		+"<br/><a style='text-decoration: underline;color:#97C0E2;' href='#'>Learn more</a>"
		+"</div>";

	var infowindow = new google.maps.InfoWindow({
		content: contentInfo
	});

	google.maps.event.addListener(marker, 'click', function(event) {
		if(!marker.open){
			infowindow.open(map,marker);
			marker.open = true;

			map.setCenter(marker.getPosition());
		}
		else {
			infowindow.close();
			marker.open = false;
		}
		//map.setZoom(10);
		google.maps.event.addListener(map, "click", function(event) {
			infowindow.close();
		});
	});



}



function iterateRecords(data) {

	 //console.log(data);
	var map = myMap();

	$.each(data.result.records, function(recordKey, recordValue) {

		var Location = recordValue["Location"];
		var SpeciesName = recordValue["Species Name"];
		//var Length = recordValue["Length (m)"]
		var lat = Number(recordValue["Latitude"]);
		var long = Number(recordValue["Longitude"]);

		if(Location && SpeciesName){
			sharkmarkers(map, long, lat, SpeciesName);
		}

	});




}
function areaForm() {
	var species = document.getElementById("species").value;
	var area = document.getElementById("area").value;
	if (area!="" && species == ""){
		ajaxMap(area);
		console.log(area);
	}
	else if(species!="" && area==""){
		ajaxMap(species);
		console.log(species);
	}
	else if(species && area){
		ajaxMapSA(species,area);
		console.log("Both selected");
	}else{
		ajaxMap("");
	}

}

$(document).ready(function() {
	var filter ="";
	ajaxMap(filter);
	ajaxMapSA("","");
});



function ajaxMap(filter){
	var data = {
		resource_id: "a0c22786-3087-43ed-8975-882aeb3ba60c",
		q: filter//"TIGER SHARK"
	}

	$.ajax({
		url: "https://www.data.qld.gov.au/api/3/action/datastore_search",
		data: data,
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function(data) {
			//alert('Total results found: ' + data.result.total)
			iterateRecords(data);
		}
	});
}

function ajaxMapSA(species,area){
	var data = {
		sql: "SELECT * from \"a0c22786-3087-43ed-8975-882aeb3ba60c\" WHERE \"Species Name\" = '"+species+"' AND \"Area\" = '"+area+"'"
	}

	$.ajax({
		url: "https://www.data.qld.gov.au/api/3/action/datastore_search_sql",
		data: data,
		dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
		cache: true,
		success: function(data) {
			//alert('Total results found: ' + data.result.total)
			iterateRecords(data);
			console.log(data);
		}
	});
}
