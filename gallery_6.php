

<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Rotating gallery section</title>
        <!-- Bootstrap core CSS -->
<!--        <link href="assets/css/new_css/bootstrap.css" rel="stylesheet">-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Add custom CSS here -->
        <style type="text/css">

			.container{
				
				height:400px;
				width:75%;
				margin:auto;
			}
			.gallery{
				margin: auto;
				width: 210px;
				height: 140px;
				position: relative;
				perspective: 500px;
			}
			#carousel{
				width: 100%;
				height: 100%;
				top:25px;
				position: absolute;
				transform-style: preserve-3d;
				animation: rotation 20s infinite linear;
			}
			#carousel:hover{
				animation-play-state: paused;
			}
			#carousel figure{
				display: block;
				position: absolute;
				width: 90%;
				height: 75%;
				left: 10px;
				top: 10px;
				overflow: hidden;
				
			}
			#carousel figure:nth-child(1) { transform: rotateY(0deg) translateZ(288px);}
			#carousel figure:nth-child(2) { transform: rotateY(40deg) translateZ(288px);}
			#carousel figure:nth-child(3) { transform: rotateY(80deg) translateZ(288px);}
			#carousel figure:nth-child(4) { transform: rotateY(120deg) translateZ(288px);}
			#carousel figure:nth-child(5) { transform: rotateY(160deg) translateZ(288px);}
			#carousel figure:nth-child(6) { transform: rotateY(200deg) translateZ(288px);}
			#carousel figure:nth-child(7) { transform: rotateY(240deg) translateZ(288px);}
			#carousel figure:nth-child(8) { transform: rotateY(280deg) translateZ(288px);}
			#carousel figure:nth-child(9) { transform: rotateY(320deg) translateZ(288px);}
			#carousel figure:nth-child(10) { transform: rotateY(360deg) translateZ(288px);}

			#carousel img{
				/*-webkit-filter: grayscale(0.8);*/
				cursor: pointer;
				transition: all .5s ease;
				width:100%;
			}
			#carousel img:hover{
				/*-webkit-filter: grayscale(0);*/
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
			  padding-top: 40px;
			  left: 0;
			  top: 0;
			  width: 100%;
			  overflow: auto;
			  /*background-color: #fffaaa;*/			}

			/* Modal Content */
			.modal-content {
			  position: relative;
			  /*background-color: #fffaaa;*/
			}

			/* The Close Button */
			.close {
			  color: black;
			  position: absolute;
			  top: 10px;
			  right: 25px;
			  font-size: 35px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: #999;
			  text-decoration: none;
			  cursor: pointer;
			}

			.mySlides {
			  display: none;
			}

			.cursor {
			  cursor: pointer;
			}

			.caption{
				opacity: 1;
				background-color: #000000;
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
		</style>
	</head>

<body>
  
	<br/><br/><br/><br/><br/><br/><br/><br/><br/>
    <div class="container">
		<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<div class="mySlides"align="center">
				<img src="assets\gallery_images\1.jpg" height="320px"><div class="w3-display-bottomleft w3-small w3-container w3-padding-16 w3-black">
    French Alps
  </div>
			</div>

			<div class="mySlides"align="center">
			  <img src="assets\gallery_images\2.jpg" height="320px">
			</div>

			<div class="mySlides"align="center">
			  <img src="assets\gallery_images\3-sound.jpg" height="320px">
			</div>
			
			<div class="mySlides"align="center">
			  <img src="assets\gallery_images\4.jpg" height="320px">
			</div>
			
			<div class="mySlides"align="center">
				<img src="assets\gallery_images\5.jpg" height="320px">
			</div>

			<div class="mySlides"align="center">
			  <img src="assets\gallery_images\6.jpg" height="320px">
			</div>

			<div class="mySlides"align="center">
			  <img src="assets\gallery_images\7.jpg" height="320px">
			</div>
			
			<div class="mySlides"align="center">
			  <img src="assets\gallery_images\8.jpg" height="320px">
			</div>
			
			<div class="mySlides"align="center">
			  <img src="assets\gallery_images\9.jpg" height="320px">
			</div>
			
			<div class="mySlides"align="center">
			  <img src="assets\gallery_images\10.jpg" height="320px">
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
		  carousel();
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

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
			  slides[i].style.display = "none";
		  }
		  
		  slides[slideIndex-1].style.display = "block";
		  
		}
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 6000); // Change image every 2 seconds
}
	</script>
    	</body>
</html>