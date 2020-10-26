<!--<style>-->
<!--	.gameImg{-->
<!--		width: 30em;-->
<!--	}-->
<!--</style>-->

<link rel="stylesheet" href="assets/css/game.css">


	<div id="unity-container" class="unity-desktop" >
		<canvas id="unity-canvas"></canvas>
		<div id="unity-loading-bar">
			<div id="unity-logo"></div>
			<div id="unity-progress-bar-empty">
				<div id="unity-progress-bar-full"></div>
			</div>
		</div>
		<div id="unity-footer">
<!--		<div id="unity-webgl-logo"></div>-->
			<div id="unity-fullscreen-button"></div>
<!--		<div id="unity-build-title">ProjectShark</div>-->
		</div>
	</div>

<script>
	var buildUrl = "assets/js/Game";
	var loaderUrl = buildUrl + "/QuizGame.loader.js";
	var config = {
		dataUrl: buildUrl + "/QuizGame.data",
		frameworkUrl: buildUrl + "/QuizGame.framework.js",
		codeUrl: buildUrl + "/QuizGame.wasm",
		streamingAssetsUrl: "StreamingAssets",
		companyName: "DefaultCompany",
		productName: "ProjectShark",
		productVersion: "1.0",
	};

	var container = document.querySelector("#unity-container");
	var canvas = document.querySelector("#unity-canvas");
	var loadingBar = document.querySelector("#unity-loading-bar");
	var progressBarFull = document.querySelector("#unity-progress-bar-full");
	var fullscreenButton = document.querySelector("#unity-fullscreen-button");

	if (/iPhone|iPad|iPod|Android/i.test(navigator.userAgent)) {
		container.className = "unity-mobile";
		config.devicePixelRatio = 1;
	} else {
		canvas.style.width = "960px";
		canvas.style.height = "600px";
	}
	loadingBar.style.display = "block";

	var script = document.createElement("script");
	script.src = loaderUrl;
	script.onload = () => {
		createUnityInstance(canvas, config, (progress) => {
			progressBarFull.style.width = 100 * progress + "%";
		}).then((unityInstance) => {
			loadingBar.style.display = "none";
			fullscreenButton.onclick = () => {
				unityInstance.SetFullscreen(1);
			};
		}).catch((message) => {
			// alert(message);
		});
	};
	document.body.appendChild(script);
</script>
