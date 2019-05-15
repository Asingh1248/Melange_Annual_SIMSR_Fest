<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title></title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Courgette|Raleway" rel="stylesheet">
  
  <script type="text/javascript">
		$(document).ready(function(){
			$("#home").hover(function(){$("#home-text").show("fast");$("#home");}	,	function(){$("#home-text").hide("fast");});
			$("#brochure").hover(function(){$("#brochure-text").show("fast");}	,	function(){$("#brochure-text").hide("fast");});
			$("#contact").hover(function(){$("#contact-text").show("fast");}	,	function(){$("#contact-text").hide("fast");});
			$("#register").hover(function(){$("#register-text").show("fast");}	,	function(){$("#register-text").hide("fast");});
			$("#login").hover(function(){$("#login-text").show("fast");}	,	function(){$("#login-text").hide("fast");});
      $("#sponsors").hover(function(){$("#sponsors-text").show("fast");}  , function(){$("#sponsors-text").hide("fast");});
		})
	</script>
  <!--  Styles  -->
  <link href="assets/css/new_css/menu.css" rel="stylesheet">
</head>
<body>
  
  <div class="verticle-nav" role="navigation">
    <ul class="menu_ul">
      <li class="nl" id="home">
        <a href="#" class="fa fa-home">
          <span id="home-text" hidden><b> HOME</strong></span>
        </a>
      </li>
      <li class="nl" id="brochure">
        <a href="#" class="fab fa-readme">
          <span id="brochure-text" hidden><b> BROCHURE</b></span>
        </a>
      </li>
      <li class="nl" id="sponsors">
        <a href="#" class="fas fa-dollar-sign">
          <span id="sponsors-text" hidden><b> SPONSORS</b></span>
        </a>
      </li>
      <li class="nl" id="contact">
        <a href="#" class="fa fa-phone">
          <span id="contact-text" hidden><b> CONTACT</b></span>
        </a>
      </li>
      <li class="nl" id="register">
        <a href="#" class="fas fa-user-plus">
          <span id="register-text" hidden><b> REGISTER</b></span>
        </a>
      </li>
      <li class="nl" id="login">
        <a href="#" class="fas fa-user"> 
          <span id="login-text" hidden><b> LOGIN</b></span>
        </a>
      </li>
    </ul>
  </div>
</body>
</html>