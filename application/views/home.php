<h1> Welcome to Project: Shark </h1>

<?php

foreach($quiz as $row)
{
	$quizID = $row->quizID;
	echo "<th>".$quizID."</th>";

}
?>
