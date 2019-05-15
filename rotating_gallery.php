<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Rotating gallery section</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/new_css/bootstrap.css" rel="stylesheet">
		<!--Gallery CSS-->
		<link href="assets/css/new_css/rotating_gallery.css" rel="stylesheet">

	</head>

<body>

    <div class="container-fluid container" id="container"> 
		<h1 class="arrow" align="center">Gallery </h1>
		<hr style="border: solid 1px #fb1b35 !important; margin:auto">

		<div id="myModal" class="modal">

		<div class="modal-content">
		<a id="close" onclick="closeModal()">&times;</a>
			<div class="mySlides"align="center">
			<div class="numbertext">1 / 16</div>
				<img class="img-responsive capt" src="assets/images/gallery_images/1.jpg" alt="Caption 1">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">2 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/2.jpg" height="350px" alt="Caption 2">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">3 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/3.jpg" height="350px" alt="Caption 3">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">4 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/4.jpg" height="350px" alt="Caption 4">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">5 / 16</div>
				<img class="img-responsive capt" src="assets/images/gallery_images/5.jpg" height="350px" alt="Caption 5">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">6 / 16</div>
			  <img class="img-responsive capt" src="aassets/images/gallery_images/6.jpg" height="350px" alt="Caption 6">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">7 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/7.jpg" height="350px" alt="Caption 7">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">8 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/8.jpg" height="350px" alt="Caption 8">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">9 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/9.jpg" height="350px" alt="Caption 9">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">10 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/10.jpg" height="350px" alt="Caption 10">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">11 / 16</div>
				<img class="img-responsive capt" src="assets/images/gallery_images/11.jpg" height="350px" alt="Caption 11">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">12/ 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/12.jpg" height="350px" alt="Caption 12">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">13 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/13.jpg" height="350px" alt="Caption 13">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">14 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/14.jpg" height="350px" alt="Caption 14">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">15 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/15.jpg" height="350px" alt="Caption 15">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">16 / 16</div>
			  <img class="img-responsive capt" src="assets/images/gallery_images/16.jpg" height="350px" alt="Caption 16">
			</div>

		</div>
			<a id="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a id="next" onclick="plusSlides(1)">&#10095;</a>

			<div id="caption-container">
				<p id="caption"></p>
			</div>


		</div>

        <div id="gallery">
            <div id="carousel" align="center">
				<figure><img src="assets/images/gallery_images/2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets/images/gallery_images/3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets/images/gallery_images/4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets/images/gallery_images/5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets/images/gallery_images/7.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets/images/gallery_images/9.jpg" onclick="openModal();currentSlide(9)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets/images/gallery_images/6.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets/images/gallery_images/8.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow cursor" alt></figure>					 -->
				<figure><img src="assets/images/gallery_images/1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor" alt></figure>
           </div>
        </div>



	</div>
        	<!-- JavaScript -->

        <script src="https://apis.google.com/js/platform.js" async defer></script>
		<script lang="javascript">
		function openModal() {
		  document.getElementById('myModal').style.display = "block";
		  document.getElementById('carousel').style.display = "none";
		}

		function closeModal() {
		  document.getElementById('myModal').style.display = "none";
		  document.getElementById('carousel').style.display = "block";
		}

		var slideIndex = 1;
		showSlides(slideIndex);


		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function plusSlides(n) {
		showSlides(slideIndex += n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("capt");
			var captionText = document.getElementById("caption");

		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";
		  }

		  slides[slideIndex-1].style.display = "block";
		  captionText.innerHTML = dots[slideIndex-1].alt;
		}
	</script>
    	</body>
</html>
