<!--<h2>Home</h2>-->

<div class="container-fluid">

	<div class="row">
		<div class="col map">
			<!--Google Map-->
			<div id="sharkMap"></div>
		</div>

		<!--Play Game, Dropdown box-->
		<div class="col detail">
			<!--Details-->
			<a class="btn play_game" href="#">Play Game</a>

			<div class="filter-group row">
				<!--Dropdown for Filter-->
				<div class="filter-select col">
					<select>
						<option>Area</option>
						<option>Townsville</option>
						<option>Cairns</option>
					</select>

				</div>
				<div class="filter-select col">
					<select>
						<option>Month</option>
						<option>January</option>
						<option>February </option>
					</select>

				</div>

				<div class="filter-select col">
					<select>
						<option>Species</option>
						<option>Tiger Shark</option>
						<option>Bull Whaler</option>
					</select>

				</div>
			</div>


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

