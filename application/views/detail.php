<div class="container" style="height: 90%">

	<?php
	foreach ($getSharkDetail as $row){ ?>


	<h1 class="sharkName">
		<?php
			echo $row->species;
		?>
	</h1>

	<div class="sharkImgContainer">
		<img class="sharkImage" src="<?php echo $row->imageurl ?>">
	</div>


	<div id="information">
		<p id="sharkDescription">
		<h3>Information:</h3>

			<?php
				echo $row->content
			?>

		</p>
		<div id="readMoreButton">
			<input type="button" class="btn btn-sm btn-secondary" id="readMore" value="Read More">
		</div>
		<p>
			Sources:
			<a href="<?php echo $row->contentUrl?>">
				<?php echo $row->contentUrl?>
			</a>
		</p>
	</div>

</div>
<hr/>
<div style="height: 100%">
	<h2 class="header2logo" style="height: 10%"><i class="fas fa-map-marker-alt"></i> Where <?php echo $row->species?> are located in Queensland</h2>
	<div id="sharkDetailMap" style="width: 100%;height: 90%"></div>

</div>
<script>

	$(document).ready(function() {
		var filter = <?php echo $row->id?>;
		ajaxMap(filter);
	});

	function SharkDetailMap() {
		zoom = 5;
		var lng = -22.120754;
		var lat = 148.734105;
		var mapProp = mapProperties(zoom, lng, lat);

		var map = new google.maps.Map(document.getElementById("sharkDetailMap"),mapProp);

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
	function sharkmarkers(map, long, lat){

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
	}
	function iterateRecords(data) {

		//console.log(data);
		var map = SharkDetailMap();

		$.each(data.result.records, function(recordKey, recordValue) {

			var id = recordValue["Species Code"];
			var Location = recordValue["Location"];
			var SpeciesName = recordValue["Species Name"];
			//var Length = recordValue["Length (m)"]
			var lat = Number(recordValue["Latitude"]);
			var long = Number(recordValue["Longitude"]);

			console.log(SpeciesName+' '+id);

			if(Location && SpeciesName){
				sharkmarkers(map, long, lat, SpeciesName, id);
			}
		});
	}

	function ajaxMap(filter){
		var data = {
			resource_id: "a0c22786-3087-43ed-8975-882aeb3ba60c",
			limit: 200,
			q: filter
		}

		$.ajax({
			url: "https://www.data.qld.gov.au/api/3/action/datastore_search",
			data: data,
			dataType: "jsonp", // We use "jsonp" to ensure AJAX works correctly locally (otherwise XSS).
			cache: true,
			success: function(data) {
				iterateRecords(data);
			}
		});
	}


</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZTPs8bhCOPEbuXS0hrR0H3SeUSPQzuE&callback=SharkDetailMap"></script>

<?php
}
?>

<?php
if(!$getSharkDetail){
	echo "Details of shark is not available yet";
}

?>
