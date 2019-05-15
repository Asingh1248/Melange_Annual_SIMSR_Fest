

<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Rotating gallery section</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/new_css/bootstrap.css" rel="stylesheet">
        <!-- Add custom CSS here -->
       
        <style type="text/css">

            /* .galleryBody{
                height=100%;
                width=100%;
            } */
            
            .container{
                /* //my Testing */
                perspective: 1200px; 
				background:#dcdcdc;
				height:400px;
				width:75%;
				margin:auto;
			}
			.gallery{
				margin: auto;
				width: 250px;
				height: 100px;
				position: relative;
				perspective: 400px;
			}
			#carousel{
				width: 100%;
				height: 100%;
				top:25px;
				position: absolute;
				transform-style: preserve-3d;
				animation: rotation 40s infinite linear;
			}
			#carousel:hover{
				animation-play-state: paused;
			}
			#carousel figure{
				display: block;
				position: absolute;
				width: 100px;
				height: 50px;
				left: 10px;
				top: 10px;
				overflow: hidden;
				border: solid 5px black;
			}
			#carousel figure:nth-child(1) { transform: rotateY(-24deg) translateZ(288px);}
			#carousel figure:nth-child(2) { transform: rotateY(0deg) translateZ(288px);}
			#carousel figure:nth-child(3) { transform: rotateY(24deg) translateZ(288px);}
			#carousel figure:nth-child(4) { transform: rotateY(48deg) translateZ(288px);}
			#carousel figure:nth-child(5) { transform: rotateY(72deg) translateZ(288px);}
			#carousel figure:nth-child(6) { transform: rotateY(96deg) translateZ(288px);}
			#carousel figure:nth-child(7) { transform: rotateY(120deg) translateZ(288px);}
			#carousel figure:nth-child(8) { transform: rotateY(144deg) translateZ(288px);}
			#carousel figure:nth-child(9) { transform: rotateY(168deg) translateZ(288px);}
			#carousel figure:nth-child(10) { transform: rotateY(192deg) translateZ(288px);}
			#carousel figure:nth-child(11) { transform: rotateY(216deg) translateZ(288px);}
			#carousel figure:nth-child(12) { transform: rotateY(240deg) translateZ(288px);}
			#carousel figure:nth-child(13) { transform: rotateY(264deg) translateZ(288px);}
			#carousel figure:nth-child(14) { transform: rotateY(288deg) translateZ(288px);}
			#carousel figure:nth-child(15) { transform: rotateY(312deg) translateZ(288px);}
			#carousel figure:nth-child(16) { transform: rotateY(336deg) translateZ(288px);}
			#carousel figure:nth-child(17) { transform: rotateY(360deg) translateZ(288px);}

			#carousel img{
				
				cursor: pointer;
				transition: all .5s ease;
				width:100%;
			}
			#carousel img:hover{
				
				transform: scale(1.2,1.2);
			}


			@keyframes rotation{
				from{
					transform: rotateY(0deg);
				}
				to{
					transform: rotateY(360deg);
				}
			}

			/* The Modal (background) */
			.modal {
			  display: none;
			  position: relative;
			  z-index: 1;
			  left: 0;
			  top: 0;
			  width: 100%;
			  overflow: auto;
			  background-color: #dcdcdc;
			}

			/* Modal Content */
			.modal-content {
			  position: relative;
			  background-color: #dcdcdc;
			}

			
			.mySlides {
			  display: none;
			}

			.cursor {
				cursor:pointer;
			}
			
			img {
			  margin-bottom: -4px;
			}

			.active
			{
			  opacity: 1;
			}

			img.hover-shadow {
			  transition: 0.3s;
			}

			.hover-shadow:hover {
			  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			}
			/* The Close Button */
			.close {
			  cursor: pointer;
			  padding: 16px;
			  color: black;
			  font-weight: bold;
			  font-size: 30px;
			  transition: 0.6s ease;
			  border-radius: 0 0 0 3px;
			  position: absolute;
			  top: 0;
			  right:0;
			  width: auto;
			}

			

			/* Next & previous buttons */
			.prev,
			.next {
			  cursor: pointer;
			  position: absolute;
			  top: 50%;
			  width: auto;
			  padding: 16px;
			  margin-top: -50px;
			  color: black;
			  font-weight: bold;
			  font-size: 20px;
			  transition: 0.6s ease;
			  border-radius: 0 3px 3px 0;
			  user-select: none;
			  -webkit-user-select: none;
			}

			/* Position the "next button" to the right */
			.next {
			  right: 0;
			  border-radius: 3px 0 0 3px;
			}

			/* On hover, add a black background color with a little bit see-through */
			.prev:hover,
			.next:hover,
			.close:hover{
			  background-color: rgba(0, 0, 0, 0.8);
			  color:white;
			}

			/* Number text (1/3 etc) */
			.numbertext {
			  color: black;
			  font-size: 12px;
			  padding: 8px 12px;
			  position: absolute;
			  top: 0;
			}
			.caption-container {
			
			  text-align: center;
			  background-color: black;
			  padding: 2px 16px;
			  color: white;
			  overflow:hidden;
			}
			.capt{
				
			}
			
		</style>
	</head>

<body class="galleryBody">
  
	<br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="container">
		<div id="myModal" class="modal">
		
		<div class="modal-content">
		<a class="close" onclick="closeModal()">&times;</a>
			<div class="mySlides"align="center">
			<div class="numbertext">1 / 16</div>
				<img class="capt" src="assets\gallery_images\1.jpg" height="350px" alt="Caption 1">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">2 / 16</div>
			  <img class="capt" src="assets\gallery_images\2.jpg" height="350px" alt="Caption 2">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">3 / 16</div>
			  <img class="capt" src="assets\gallery_images\3.jpg" height="350px" alt="Caption 3">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">4 / 16</div>
			  <img class="capt" src="assets\gallery_images\4.jpg" height="350px" alt="Caption 4">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">5 / 16</div>
				<img class="capt" src="assets\gallery_images\5.jpg" height="350px" alt="Caption 5">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">6 / 16</div>
			  <img class="capt" src="assets\gallery_images\6.jpg" height="350px" alt="Caption 6">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">7 / 16</div>
			  <img class="capt" src="assets\gallery_images\7.jpg" height="350px" alt="Caption 7">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">8 / 16</div>
			  <img class="capt" src="assets\gallery_images\8.jpg" height="350px" alt="Caption 8">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">9 / 16</div>
			  <img class="capt" src="assets\gallery_images\9.jpg" height="350px" alt="Caption 9">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">10 / 16</div>
			  <img class="capt" src="assets\gallery_images\10.jpg" height="350px" alt="Caption 10">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">11 / 16</div>
				<img class="capt" src="assets\gallery_images\11.jpg" height="350px" alt="Caption 11">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">12/ 16</div>
			  <img class="capt" src="assets\gallery_images\12.jpg" height="350px" alt="Caption 12">
			</div>

			<div class="mySlides"align="center">
			<div class="numbertext">13 / 16</div>
			  <img class="capt" src="assets\gallery_images\13.jpg" height="350px" alt="Caption 13">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">14 / 16</div>
			  <img class="capt" src="assets\gallery_images\14.jpg" height="350px" alt="Caption 14">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">15 / 16</div>
			  <img class="capt" src="assets\gallery_images\15.jpg" height="350px" alt="Caption 15">
			</div>
			
			<div class="mySlides"align="center">
			<div class="numbertext">16 / 16</div>
			  <img class="capt" src="assets\gallery_images\16.jpg" height="350px" alt="Caption 16">
			</div>
			
			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			<div class="caption-container">
				<p id="caption"></p>
			</div>

		</div>
		</div>
        
        <div class="div-center gallery">
            <div id="carousel">
				
				<figure><img src="assets\gallery_images\1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\2.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\3.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\4.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\5.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\6.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\7.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\8.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\9.jpg" onclick="openModal();currentSlide(9)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\10.jpg" onclick="openModal();currentSlide(10)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\11.jpg" onclick="openModal();currentSlide(11)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\12.jpg" onclick="openModal();currentSlide(12)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\13.jpg" onclick="openModal();currentSlide(13)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\14.jpg" onclick="openModal();currentSlide(14)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\15.jpg" onclick="openModal();currentSlide(15)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\16.jpg" onclick="openModal();currentSlide(16)" class="hover-shadow cursor" alt></figure>
				<figure><img src="assets\gallery_images\1.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor" alt></figure>
    
            </div>
        </div>
		
    
		
	</div>
        	<!-- JavaScript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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

