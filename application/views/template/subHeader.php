<!-- Image and text -->
<nav class="navbar  navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
	<a class="subheader_logo logo" href="home">
		<img src="assets/img/sharkMouth.png" width="60"  class="d-inline-block align-top" alt=""> Project: Shark
	</a>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse subheader_logo subheadN" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">

			<li class="nav-item">
				<a class="nav-link" href="home"><i class="fas fa-home"></i> Home </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="game"><i class="fas fa-gamepad"></i> Play Game</a>
			</li>
		</ul>
		<div class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" onkeyup="ajaxSearch(this.value)" placeholder="Search" aria-label="Search">
<!--			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->

			<ul class="list-group" id="search-results" style="position:absolute; top: 50px;">

			</ul>
		</div>
	</div>
</nav>


<script>
		function ajaxSearch(filter){
			if (filter.length==0) {
				document.getElementById("search-results").innerHTML="";
				document.getElementById("search-results").style.border="0px";
				return;
			}
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function() {
				if (this.readyState==4 && this.status==200) {
					document.getElementById("search-results").innerHTML=this.responseText;
					document.getElementById("search-results").style.border="1px #A5ACB2";
				}
			}
			xmlhttp.open("GET","searchresults?q="+filter,true);
			xmlhttp.send();
		}

</script>
