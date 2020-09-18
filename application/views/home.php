<h1> Welcome to Project: Shark </h1>

<?php

foreach($quiz as $row)
{
	$busStop = $row->quizID;
	echo "<th>".$busStop."</th>";

}
?>
