<style>
	p.info_content{
		overflow: auto;height: 200px;
	}

	p.info_content::-webkit-scrollbar {
		display: none;
	}
	td.speciesIdInfo{
		width: 5%;
	}
</style>




<table class="table" style="overflow: auto">
	<thead class="thead-dark">
	<tr>
<!--		<th scope="col">id</th>-->
		<th scope="col">Species & ID</th>
		<th scope="col">Image</th>
		<th scope="col">Content</th>
		<th scope="col">Reference</th>
		<th scope="col"></th>

	</tr>
	</thead>
<?php
	foreach ($allSharkDetail as $row) {
?>


	<tbody>
	<tr>
<!--		<th scope="row"></th>-->
		<td class="speciesIdInfo">
			<b>(<?php echo $row->id; ?>)</b> <br/>
			<?php echo $row->species; ?>
		</td>
		<td style="width: 20%"><img src="<?php echo $row->imageurl; ?>" height="200px" ></td>
		<td style="width:50vh;">
			<p class="info_content">
				<?php echo $row->content; ?>
			</p>
		</td>
		<td><a href="<?php echo $row->contentUrl; ?>"><?php echo $row->contentUrl; ?></a></td>
		<td>
			<form action="allShark" method="post">
				<button type="button" id="delete" data-id="<?php echo $row->id?>" class="btn btn-danger"><i class="fas fa-trash"></i></button>

			</form>
		</td>
	</tr>


	<?php
}
?>
	</tbody>
</table>

<script>
	$(document).ready(function() {

		$("#delete").click(function () {
			$.ajax({
				url: "<?php echo base_url()?>AllShark/deleteSpecies",
				type: "POST",
				cache: false,
				data: {
					id: $(this).attr("data-id")
				},
				success: function () {
					alert('Deleted');
				}
			});
		})
	});
</script>
