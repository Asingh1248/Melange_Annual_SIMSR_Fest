<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
	<script type="text/javascript">
		var angle = 0;
		function galleryspin(sign) { 
		spinner = document.querySelector("#spinner");
		if (!sign) { angle = angle + 45; } else { angle = angle - 45; }
		spinner.setAttribute("style","-webkit-transform: rotateY("+ angle +"deg); -moz-transform: rotateY("+ angle +"deg); transform: rotateY("+ angle +"deg);");
		}
	</script>
        <link href="assets/css/new_css/gallery.css" rel="stylesheet">
</head>
<body>
	<!-- <base href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/wanaka-tree.jpg"> -->
	<div id="carousel">
	  <figure id="spinner">
	    <!-- <img src="wanaka-tree.jpg" alt>
	    <img src="still-lake.jpg" alt>
	    <img src="pink-milford-sound.jpg" alt>
	    <img src="paradise.jpg" alt>
	    <img src="morekai.jpg" alt>
	    <img src="milky-blue-lagoon.jpg" alt>
	    <img src="lake-tekapo.jpg" alt>
	    <img src="milford-sound.jpg" alt> -->

			<img src="assets/images/new_sponsors/1.png" alt>
                        <img src="assets/images/new_sponsors/1.png" alt>
			<img src="assets/images/new_sponsors/1.png" alt>
			<img src="assets/images/new_sponsors/1.png" alt>
			<img src="assets/images/new_sponsors/1.png" alt>
			<img src="assets/images/new_sponsors/1.png" alt>
			<img src="assets/images/new_sponsors/1.png" alt>
			
		</figure>
	</div>
	<span style="float:left" class="ss-icon" onclick="galleryspin('-')">&lt;</span>
	<span style="float:right" class="ss-icon" onclick="galleryspin('')">&gt;</span>
</body>
</html>