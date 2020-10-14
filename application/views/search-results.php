<?php

foreach ($SearchResult as $rows){

	?>

<a href="detail?id=<?php echo $rows->id?>" class="list-group-item list-group-item-action">

	<?php
	echo $rows->species;
	?>

</a>
<?php
}
?>

<!--search results-->
