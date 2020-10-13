<div class="container">

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
		<p>
			Sources:
			<a href="<?php echo $row->contentUrl?>">
				<?php echo $row->contentUrl?>
			</a>
		</p>
	</div>
<!--	<div id="readMoreButton">-->
<!--		<input type="button" class="btn btn-secondary" id="readMore" value="Read More">-->
<!--	</div>-->

	<?php
	}
	?>

		<?php
		if(!$getSharkDetail){
			echo "Details of shark is not available yet";
		}

		?>



</div>
