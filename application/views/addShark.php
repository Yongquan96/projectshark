<div class="container">

	<h1 style="font-family: 'Berlin Sans FB Demi'">

		<img src="assets/img/shark.png" width="50px">
		Add Shark

	</h1>
	<form action="addShark" method="post">
		<div class="row-fluid">
			<label class="lead" for="speciesID"> Species ID </label>
			<input type="number" class="form-control" id="speciesID" name="speciesID" placeholder="_id from www.data.qld.gov.au" required>
			<br/>
			<label class="lead" for="speciesName"> Species Name </label>
			<input type="text" class="form-control" id="speciesName" name="speciesName" placeholder="Species Name" required>

			<br/>
			<label class="lead" for="imageUrl"> Image Url </label>
			<input type="url" class="form-control" id="imageUrl" name="imageUrl" placeholder="Image Url" required>
			<br/>
			<label class="lead" for="contentUrl"> Content Reference </label>
			<input type="url" class="form-control" id="contentUrl" name="contentUrl" placeholder="Content Url" required>
			<br/>
			<label class="lead"> Content </label>
			<textarea style="height:138px;" class="form-control" placeholder="Description about the shark species" id="content" name="content" required></textarea>
			<br/>
		</div>
		<div class="row">
			<div class="col">
				<button class="btn btn-block btn-lg btn-outline-secondary" type="submit">Add New Shark Species</button>
			</div>
		</div>

	</form>

</div>
