<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
      .text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
	color: color;
	font-size: 13px;
	padding: 8px 12px;
	position: absolute;
	top: 0;
            }
            
   .gallery{
       align:center;
       color:white;


   }         

   </style>
</head>
<body>

<div class="container" style="padding-bottom: 5%; height: auto;">
    <center><h1 class="arrow">Gallery</h1></center>
    <br><hr style="border: solid 1px #fb1b35 !important; margin: auto;"><Br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
<!--    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol> -->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <div class="numbertext">1 / 16</div>
        <img src="assets/images/gallery_images/1.jpg"  style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
        <div class="numbertext">2 / 16</div>
        <img src="assets/images/gallery_images/2.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
        <div class="numbertext">3/ 16</div>
        <img src="assets/images/gallery_images/3.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
         <div class="numbertext">4/ 16</div>
        <img src="assets/images/gallery_images/4.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
         <div class="numbertext">5/ 16</div>
        <img src="assets/images/gallery_images/5.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
         <div class="numbertext">6 / 16</div>
        <img src="assets/images/gallery_images/6.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
        <div class="numbertext">7 / 16</div>
        <img src="assets/images/gallery_images/7.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
        <div class="numbertext">8 / 16</div>
        <img src="assets/images/gallery_images/8.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
        <div class="numbertext">9 / 16</div>
        <img src="assets/images/gallery_images/9.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
        <div class="numbertext">10 / 16</div>
        <img src="assets/images/gallery_images/10.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
      <div class="numbertext">11 / 16</div>
        <img src="assets/images/gallery_images/11.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
      <div class="numbertext">12/ 16</div>
        <img src="assets/images/gallery_images/12.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>


      <div class="item">
        <div class="numbertext">13 / 16</div>
        <img src="assets/images/gallery_images/13.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
        <div class="numbertext">14/ 16</div>
        <img src="assets/images/gallery_images/14.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
      <div class="numbertext">15/ 16</div>
        <img src="assets/images/gallery_images/15.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>

      <div class="item">
       <div class="numbertext">16 / 16</div>
        <img src="assets/images/gallery_images/16.jpg" style="width:100%;">
        <div class="text">Caption Text</div>
      </div>


    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</body>
</html>
