<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- TITLE -->
		<title>Melange 2018 - The Flagship Event of SIMSR</title>
		
		<!-- DESCRIPTION -->
		<meta name="author" content="Kashyap Salvi, Maheshwaran, Ramith Nambiar, Deepesh, Nihar, Surbhi, Akshay" />
		<meta name="description" content="Melange is the annual festival of the management institure, K J SIMSR, Mumbai, organized in the month of February. This festival has a range of events and competitions like business quizes, case study competitions, Dance and Music competitions, etc. Major highlight this year is going to be NUCLEYA's live performance on 16th Feb at the college campus." />
		<meta name="keywords"  content="K J SIMSR annual festival, melange 2017, melange, management festivals, management events" />

		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,200,100,800,900' rel='stylesheet' type='text/css'> 
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">

		<!-- STYLESHEETS -->
		
		<link href="assets/css/schedule.css" rel="stylesheet">
		<link href="assets/css/singlecss.css" rel="stylesheet" type="text/css"/>

	  	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90776919-1', 'auto');
  ga('send', 'pageview');

</script>
		
		
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>(function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id)) return;
				js = d.createElement(s); js.id = id;
				js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=286827421358487";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
	</head>
	   
   <body id="top" onload="countdown(year,month,day,hour,minute)" data-spy="scroll" data-target=".header" data-offset="80">
		<style>
			
		<!--	@media (min-width: 200px) {
				#enclose {display:block;position:fixed;text-align: right;left:17px; bottom:5px;width:10%;z-index: 2147483647;}
			} -->
			.sponsorWrap{
				position:relative;
			}
			.sponsorwriteup{
				    position: absolute;
					z-index: 1000;
					background: #fff;
					border: 2px solid black;
					padding: 10px;
					width: 200%;
					left:-50%;
					display:none;
					max-height: 300px;
					overflow-y: scroll;
			}
			@media (max-width: 1024px){
					#sec_1 .logo{
						width:20%;
					}
					.youtube-video{
						margin-top:30px
					}
					.twittersocial,.facebooksocial{
							    width: 300px;
								margin: 0 auto;
								float: none!important;
								margin-bottom: 30px;
					}
					.sponsorwriteup{
						width:200px;
						left: calc(100px - 50%);
					}
			}
			
		</style> 
		<div id="enclose" class="mel">
			<a href="../../register/?eventcode=99"><img src="images/melr.gif"></a>
	    </div>
		<!--PRELOADER-->
		<div class="preloader">
		<div class="status"></div>
		<div class="containerpreload">
		<h1 class="headingpreload" data-target-resolver></h1>
		</div>
		</div>                       
		<!--/PRELOADER-->

		<!--HEADER-->
	  	<div class="header header-hide" style="background: url(https://s5.postimg.org/wdpcwzblj/pat.png)">
			<div class="container" style="width:100%">
				<nav class="navbar navbar-default" role="navigation">
				   <div class="navbar-header">
					  <button type="button" class="navbar-toggle" data-toggle="collapse" 
						 data-target="#example-navbar-collapse">
						 <span class="sr-only">Toggle navigation</span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
						 <span class="icon-bar"></span>
					  </button>
					   <a class="navbar-brand" data-scroll href="#sec_1"><img src="assets/img/logo.png" alt="logo"/></a>
				   </div>
				   <div class="collapse navbar-collapse" id="example-navbar-collapse">
					  <ul class="nav navbar-nav">
						<li><a data-scroll href="#intro">About</a></li>
						<li><a data-scroll href="#responsive">Events</a></li>
						<!--<li><a data-scroll href="#team">Pro Night</a></li>-->
						<li><a data-scroll href="#portfolio">Sponsors</a></li>
						<!--<li><a data-scroll href="#sponsers">Hospitality</a></li>-->
						<li><a data-scroll  href="blog" target="_blank">Blog</a></li>
						<li><a data-scroll target="_blank" href="http://issuu.com/melange_simsr2017/docs/melange_2017_brochure?e=27796725/43145339">Brochure</a></li>
						<li><a data-scroll href="#contact">Contact</a></li>
						<li><a data-scroll target="_blank" href="http://melangesimsr.com/melange2017">Melange 2017</a></li>
						<?php if(@$_SESSION['user']['mememail']!=NULL){?>
							<li><a href="../../../../../../user">My Account</a></li>	
						<?php }else{ ?>
							<li><a data-scroll href="../../../../../../register">Register</a></li>
						<?php } ?>
						<li class="hidden"><a href="../../../../../../#sec_1">Home</a></li>
						<?php if(@$_SESSION['user']['mememail']!=NULL){?>
							<li><a href="../../../../../../logout">Logout</a></li>	
						<?php }else{ ?>
							<li><a href="../../../../../../user">Login</a></li>
						<?php } ?>
					  </ul>
				   </div>
				</nav>
			</div>
		</div>
		<!--/HEADER-->
		
			<!--PRICING-->        
		<section id="portfolio" class="portfolio text-center section-padding" >
			
				<div class="container" >
				<div class="row">
				  <div class="col-md-12">
					<h1 class="arrow">Sponsors</h1><hr><p></p>
				  </div>
				</div>
				
				<div class="row">
					<div class="speakers-wrap">
						<div id="portfolioSlider">
							<ul class="slides">
								<li>
<?php for($i=0;$i<sizeof($sponsor);$i++) {?>
        <?php if($sponsor[$i]->sponsor_placed==1) { ?>
        <div class="col-md-3 col-sm-3"  id="sponsor<?= $sponsor[$i]->sponsor_id; ?>">
                <div class="overlay-effect effects clearfix">
                        <div class="">
                                <img src="sponsor/<?= $sponsor[$i]->sponsor_image ?>" width="100%" alt="<?= $sponsor[$i]->sponsor_name ?>">

                                  <div class="overlay">
                                <?php if($sponsor[$i]->sponsor_content_required==0) { ?>
                                <?php if($sponsor[$i]->sponsor_url!="") { ?>
                                        <form target="_blank" action="<?= @$sponsor[$i]->sponsor_url ?>"><button type="submit" class="md-trigger expand" ><i class="fa fa-search"></i><br>View More</button></form>
                                <?php } }
                                else{
                                ?>
                                        <button class="md-trigger expand" data-modal="modal-<?= $sponsor[$i]->sponsor_id ?>"><i class="fa fa-search"></i><br>View More</button>
                                <?php
                                }
                                 ?>
                          </div>
                          <?php if(@$sponsor[$i]->sponsor_type!=""){ echo @$sponsor[$i]->sponsor_type; }else{ echo "<br><br>"; } ?>

                        </div>
                </div>
        </div>
        <?php } ?>
<?php } ?>
								</li>
								
							</ul>
						</div>
					</div>
				</div> <!--Row Ends Here-->
				
				<div class="row">
					<div class="speakers-wrap">
						<div id="portfolioSlider">
							<ul class="slides">
								<li>
									<?php for($i=0;$i<sizeof($sponsor);$i++) {?>
										<?php if($sponsor[$i]->sponsor_placed!=1) { ?>
										<div class="col-md-2 col-sm-2 col-xs-6 sponsorHover">
											<div class="overlay-effect effects clearfix">
												<div class="">
												  <img src="sponsor/<?= $sponsor[$i]->sponsor_image ?>" width="100%" alt="<?= @$sponsor[$i]->sponsor_name ?>">
												   
												  <div class="overlay">
												  	<?php if($sponsor[$i]->sponsor_content_required==0) { ?>
												  	<?php if($sponsor[$i]->sponsor_url!="") { ?>
														<form target="_blank" action="<?= @$sponsor[$i]->sponsor_url ?>"><button type="submit" class="md-trigger expand" data-modal="modal-1"><i class="fa fa-search"></i><br>View More</button></form>
													<?php } }
													else{
													?>
														<button class="md-trigger expand" data-modal="modal-<?= $sponsor[$i]->sponsor_id ?>"><i class="fa fa-search"></i><br>View More</button>
													<?php
													}
													 ?>
												  </div>
												  <?php if(@$sponsor[$i]->sponsor_type!=""){ echo @$sponsor[$i]->sponsor_type; }else{ echo "<br><br>"; } ?>
												</div>
											</div>
											<!-- Start -->
											<?php if($sponsor[$i]->sponsor_content!="") { ?>
												
												<div class="sponsorwriteup" id="writeup<?= $sponsor[$i]->sponsor_id ?>">
											<p><?php if(@$sponsor[$i]->sponsor_name!=""){ echo @$sponsor[$i]->sponsor_name; }else{ echo "<br>"; } ?></p>
												<?php if(@$sponsor[$i]->sponsor_content!=""){ echo @$sponsor[$i]->sponsor_content; }else{ echo "<br>"; } ?>
											</div>
											
											<?php }
											?>
											<!-- End -->
										</div>
										<?php } ?>
									<?php } ?>
								</li>
								
							</ul>
						</div>
					</div>
				</div> <!--Row Ends Here-->
				
				
				
				
			</div>
			<!-- Example Speaker -->
			
			<?php for($i=0;$i<sizeof($sponsor);$i++) {?>
				<?php if($sponsor[$i]->sponsor_content_required==1) { ?>
				<div class="md-modal md-effect-9" id="modal-<?= @$sponsor[$i]->sponsor_id ?>">
					<div class="md-content">
						<div class="folio">
							<div class="avatar1"></div>
							<div class="sp-name"><strong><?= @$sponsor[$i]->sponsor_name ?></strong></div>
							<div class="sp-dsc">
								<?= @$sponsor[$i]->sponsor_content ?>
								</div>
							<div class="sp-social">
								<ul>
									<li><a target="_blank" href="<?= @$sponsor[$i]->sponsor_url ?>" class="learn-more-btn btn-effect" ><?= @$sponsor[$i]->sponsor_url_text ?></a></li>
								</ul>
							</div>
							<button class="md-close"><i class="fa fa-times"></i></button>
						</div>
					</div>
				</div> 
				<?php } ?>
				<div class="md-overlay"></div>
			<?php } ?>

					<!-- Jssor Slider Begin -->
					
					<div id="slider1_container" style=" ">
						<div class="inner_carousal" data-u="slides" style="">
							<div><!--<img alt="sp1" src="assets/img/sponsor/sp1.png" />--></div>
							
						</div>
					</div>
					
					<!-- Jssor Slider End -->
        </section>
		<!--/PRICING-->

		
		<!--CONTACT-->	
        <section class="text-center section-padding contact-wrap" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 wow animated fadeInLeft align-center" data-wow-duration="1s" data-wow-delay="0.3s">
						<h1 class="arrow">Contact</h1><hr>
						<p>
							<div style="overflow:hidden;height:250px;width:100%;">
							<div id="gmap_canvas" style="height:250px;width:100%;"></div>
							<style>
								#gmap_canvas img{
									max-width:none!important;
									background:none!important
								}
							</style>
							</div>
						</p>
						<p>
						</p>
					</div>
				</div>
				
				<div class="row contact-details">
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="light-box box-hover">
							<h2><span>Address</span></h2>
							<p>K J Somaiya Institute of Management Studies & Research </br> Vidyavihar(E), Mumbai- 400077</p>
						</div>
					</div>
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.7s">
						<div class="light-box box-hover">
							<h2><span>Phone</span></h2>
							<!--<p>Shikhar Dubey - +91 88890 87190</p>
							<p>Manveen Kaur  - +91 78208 76086</p>
							<p>Swati Khattar - +91 97699 96236</p>
							<p>Tushar Mishra - +91 98995 99305</p>
							<p>Kiran Gai     - +91 81494 08016</p>
							<p>Vaibhav Pagedar - +91 99989 69350</p>-->
							<p>Yash Nar - +91 9004666836</p>
							<p>Asawari Joshi - +91 7263808913</p>
							<p>Kanishk Jamkar - +91 9049568913</p>
							<p>Raminder Singh Sood - +91 9403161149</p>
							<p>Raman Bhalla- +91 8447514242</p>
							<p>Jimit Thakkar - +91 95377220099</p>
							<p>Abid Mushki - +91 8884356660</p>
						</div>
					</div>
					<div class="col-md-4 wow animated fadeInDown" data-wow-duration="1s" data-wow-delay="0.9s">
						<div class="light-box box-hover">
							<h2><span>Email</span></h2>
							<p><a href="#">melange.simsr@somaiya.edu</a></p>
						</div>
					</div>
				</div>
				<div class="row">
					<a id="get_directions" class="learn-more-btn btn-effect" href="https://www.google.com/maps/place/K.J+Somaiya+Institute+of+Management+Studies+and+Research/@19.0734447,72.8961903,17z/data=!4m2!3m1!1s0x0000000000000000:0x2d6190e60dcda447?hl=en-US"><i class="fa fa-map-marker"></i><span>Get Directions</span></a>
				</div>
				<div class="row">
					<div class="col-md-12">
						<ul class="social-buttons">
							<!--<li><a href="#" class="social-btn"><i class="fa fa-dribbble"></i></a></li>-->
							<li><a href="https://www.youtube.com/channel/UCymE7RepiMLsNDfoDje67Fg/" class="social-btn"><i class="fa fa-youtube"></i></a></li>
							<li><a href="https://twitter.com/melangesimsr" class="social-btn"><i class="fa fa-twitter"></i></a></li>
							<li><a href="mailto:melange.simsr@somaiya.edu" class="social-btn"><i class="fa fa-envelope"></i></a></li>
							<li><a href="https://www.facebook.com/melangesimsr?_rdr=p" class="social-btn"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://instagram.com/melangesimsr" class="social-btn"><i class="fa fa-instagram"></i></a></li>
							<!--<li><a href="#" class="social-btn"><i class="fa fa-skype"></i></a></li>-->
						</ul>
					</div>
				</div>
			</div>
        </section>
		<!-- /CONTACT -->	

		<!--FOOTER-->	
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-6 align-center">
						<ul class="legals">
							<!--<li><button class="md-trigger " data-modal="modal-11">Disclaimer</button></li>-->
							<li><a href="#">Melange Simsr 2018</a></li>
						</ul>
					</div>
					<div class="md-modal md-effect-9" id="modal-11">
						<div class="md-content padding-none">
							<div class="folio">
								<div class="sp-name disclaimer"><strong>Disclaimer</strong></div>
								<div class="sp-dsc disclaim-border">
									<br /><br />
									</div>
								<button class="md-close"><i class="fa fa-times"></i></button>
							</div>
						</div>
					</div> 
					<div class="md-overlay"></div>
				</div>
			</div>
        </footer>
		
		<!--SCRIPTS-->	
		
		<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery-ui-1.10.4.min.js"></script>
		

		
        <3D GALLERY>
        <script type="text/javascript" src="assets/js/classie.grid.gallery.js"></script>
		<script type="text/javascript" src="assets/js/modernizr.gridgallery.js"></script>		
		<script type="text/javascript" src="assets/js/cbpGridGallery.js"></script>
 
		<script type="text/javascript" src="assets/js/classie.js" ></script>
		<script type="text/javascript" src="assets/js/modalEffects.js" ></script -->
       
	    
		<script>var nlform = new NLForm( document.getElementById( 'nl-form' ) );</script>
		
        <script type="text/javascript" src="assets/js/bootstrap.min.js" ></script>
        
		<!-- TEAM SLIDER  -->
		<script type="text/javascript" src="assets/js/jquery.flexslider.js" ></script>
		
		<!-- SCHEDULE TABS  -->
        <script type="text/javascript" src="assets/js/modernizr.js" ></script>
		<script type="text/javascript" src="assets/js/cbpFWTabs.js" ></script >		
		
		<SPONSOR SLIDER>
		<script type="text/javascript" src="assets/js/jssor.core.js"></script>
		<script type="text/javascript" src="assets/js/jssor.utils.js"></script>
		<script type="text/javascript" src="assets/js/jssor.slider.js"></script>
		<script type="text/javascript" src="assets/js/sponsor_init.js"></script>
		
		<!-- SMOOTH SCROLL  -->
		<script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
		
		<!-- NICE SCROLL  -->
		<script type="text/javascript" src="assets/js/jquery.nicescroll.js"></script>
		
		
		<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
		
		<!-- ANIMATION  -->
		<script type="text/javascript" src="assets/js/wow.min.js"></script -->
		
		
		
		
		<!--triangle>
		<script type="text/javascript" src="assets/js/TweenLite.min.js"></script>
		<script type="text/javascript" src="assets/js/EasePack.min.js"></script>
		<script type="text/javascript" src="assets/js/rAF.js"></script>
		<script type="text/javascript" src="assets/js/canvas.js"></script-->		
		<!-- INITIALIZATION  -->
		<script type="text/javascript" src="assets/js/init.js"></script>	
		<script type="text/javascript" src="assets/js/preload.js"></script>
		
		
		
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>	

		<script type="">
			 function init_map(){
			 	var myOptions = {
			 		 zoom:16,
			 		 center:new google.maps.LatLng(19.0724018, 72.8978039),
			 		 mapTypeId: google.maps.MapTypeId.ROADMAP
			 		 };
			 	map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
			 	marker = new google.maps.Marker({
			 			map: map,position: new google.maps.LatLng(19.0724018, 72.8978039)
			 		});
			 	
			 	google.maps.event.addListener(marker, "click", function(){
			 			infowindow.open(map,marker);
			 		});
			 		infowindow.open(map,marker);
			 	}
			 		google.maps.event.addDomListener(window, 'load', init_map);
		</script>
		
		<script>
			jQuery("#sec_1").ready(function() {
		
				 setTimeout(function(){ 
						jQuery(".status").fadeOut();
						jQuery(".preloader").delay(100).fadeOut("slow");	
						jQuery("body").css('overflow-y','visible');
				;}, 2500);
				
			});
			jQuery(".sponsorHover").hover(function(){ 
				jQuery(this).find(".sponsorwriteup").fadeIn("slow")},
				function(){ 
				jQuery(this).find(".sponsorwriteup").fadeOut("slow")}
			);
		

		</script>
		
    </body>
</html>