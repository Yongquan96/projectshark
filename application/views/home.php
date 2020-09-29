<!--<h2>Home</h2>-->

<div class="container-fluid">

	<div class="row-fluid">
		<div class="col map">
			<!--Google Map-->
			<div id="sharkMap"></div>
		</div>

		<!--Play Game, Dropdown box-->
		<div class="col detail">
			<!--Details-->
			<a class="btn play_game" href="#">Play Game</a>

			<script>

			</script>

			<form name="filter-form" method="post" onclick="return areaForm()">
				<div class="filter-group row">
					<!--Dropdown for Filter-->
					<div class="filter-select col">
						<select id="area" name="arealist">
							<option value="">Area</option>
							<option value="">View All</option>
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
<!--					<div class="filter-select col">-->
<!--						<select>-->
<!--							<option>Month</option>-->
<!--							<option>January</option>-->
<!--							<option>February</option>-->
<!--							<option>March</option>-->
<!--							<option>April</option>-->
<!--							<option>May</option>-->
<!--							<option>June</option>-->
<!--							<option>July</option>-->
<!--							<option>August</option>-->
<!--							<option>September</option>-->
<!--							<option>October</option>-->
<!--							<option>November</option>-->
<!--							<option>December</option>-->
<!--						</select>-->
<!---->
<!--					</div>-->

					<div class="filter-select col">
						<select id="species" name="specieslist">
							<option value="">Species</option>
							<option value="">View All</option>
							<option value="TIGER SHARK">Tiger Shark</option>
							<option value="BULL WHALER">Bull Whaler</option>
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
//
//foreach($quiz as $row)
//{
//	$quizID = $row->quizID;
//	echo "<th>".$quizID."</th>";
//
//}
?>
<script src="assets/js/ProjectSharkFilterButtonStyle.js" type="text/javascript"></script>

