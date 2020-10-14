<!--<h2>Home</h2>-->
<h1 class="header_logo"> Welcome to Project: Shark </h1>

<div class="container-fluid">

	<div class="row-fluid">
		<div class="col map">
			<!--Google Map-->
			<div id="sharkMap"></div>
		</div>

		<!--Play Game, Dropdown box-->
		<div class="col detail">
			<!--Details-->
			<a class="btn play_game" href="game">Play Game</a>

			<script>

			</script>

			<form name="filter-form">
				<div class="filter-group row">
					<!--Dropdown for Filter-->
					<div class="col">
						<select class="select-filter" id="area" name="arealist" onchange="areaForm()"  method="post">
							<option value="">All Area</option>
							<option>Bribie Island</option>
							<option>Bundaberg</option>
							<option>Cairns</option>
							<option>Capricorn Coast</option>
							<option>Gladstone</option>
							<option>Gold Coast</option>
							<option>Mackay</option>
							<option>Nth Stradbroke ls.</option>
							<option>Rainbow Beach</option>
							<option>Sunshine Coast North</option>
							<option>Sunshine Coast South</option>
							<option>Townsville</option>
						</select>

					</div>

					<div class="col">
						<select class="select-filter" id="species" name="specieslist" onchange="areaForm()" method="post">
							<option value="">All Species</option>
<!--							<option value="">View All</option>-->
<!--							<option value="TIGER SHARK">Tiger Shark</option>-->
<!--							<option value="BULL WHALER">Bull Whaler</option>-->
						</select>
					</div>
				</div>
			</form>

			<div class="sharkbgContainer">
				<img class="sharkbg" src="assets/img/sharkMouth.png">
			</div>

		</div>
	</div>
</div>

<script src="assets/js/ProjectSharkMap.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZTPs8bhCOPEbuXS0hrR0H3SeUSPQzuE&callback=myMap"></script>


<?php

//foreach($sharkDetail as $row)
//{
//	$species = $row->species;
//	echo "<th>".$species."</th>";
//
//}
?>
<!--<script src="assets/js/ProjectSharkFilterButtonStyle.js" type="text/javascript"></script>-->

