<!DOCTYPE html>
<html>
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- FAVICON -->
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- TITLE -->
		<title>Melange 2019 - The Flagship Event of SIMSR</title>
		
		<!-- DESCRIPTION -->
		<meta name="author" content="Mayur Chawda, Kashyap Salvi, Maheshwaran, Ramith Nambiar, Nihar, Surbhi, Akshay, Advait Joshi, joshiadvait8" />
		<meta name="descripton" content="Melange is the annual festival of the management institure, K J SIMSR, Mumbai, organized in the month of February. This festival has a range of events and competitions like business quizes, case study competitions, Dance and Music competitions, etc. Major highlight this year is going to be NUCLEYA's live performance on 16th Feb at the college campus." />
		<meta name="keywords"  content="K J SIMSR annual festival, melange 2019, melange, management festivals, management events" />

		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,300,200,100,800,900' rel='stylesheet' type='text/css'> 
		<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- STYLESHEETS -->
		<!-- <link href="assets/css/panel.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/gridgallery.css" rel="stylesheet" type="text/css"  />
		<link href="assets/css/venobox.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/queries.css" rel="stylesheet"/>
		<link href="assets/css/schedule.css" rel="stylesheet"> -->

		<!-- <link href="assets/css/style.css" rel="stylesheet"/> -->
                <link href="assets/css/new_css/animate.css" rel="stylesheet">
                <link href="assets/css/new_css/bootstrap.css" rel="stylesheet">
                <link href="assets/css/new_css/font-awesome.min.css" rel="stylesheet" type="text/css" />
                <link href="assets/css/new_css/menu.css" rel="stylesheet">
                <link href="assets/css/new_css/sponsors.css" rel="stylesheet">
                <link href="assets/css/new_css/homePageCustom.css" rel="stylesheet">
                <link href="assets/css/new_css/about.css" rel="stylesheet">


	  	<!-- <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-90776919-1', 'auto');
		  ga('send', 'pageview');

		</script> -->

		<style type="text/css">
		
			.numbers {
			    width: 55px;
			    text-align: center; 
			    font-family: Arial; 
			    font-size: 28px;
			    font-weight: bold;    /* options are normal, bold, bolder, lighter */
			    font-style: normal;   /* options are normal or italic */
			    color: #ffffff;       /* change color using the hexadecimal color codes for HTML */
			}
			.title {/* the styles below will affect the title under the numbers, i.e., "Days", "Hours", etc. */
			    width: 55px;
			    text-align: center; 
			    font-family: Arial; 
			    font-size: 10px;
			    font-weight: bold;    /* options are normal, bold, bolder, lighter */
			    color: #dddddd;       /* change color using the hexadecimal color codes for HTML */
			}
			#table {
			    width: 400px;
			    height: 48px;
			    border-style: none;
			    background-color: transparent;
			    margin: 0px auto;
			    position: relative;   /* leave as "relative" to keep timer centered on your page, or change to "absolute" then change the values of the "top" and "left" properties to position the timer */
			    top: 0px;             /* change to position the timer */
			    left: 0px;            /* change to position the timer; delete this property and it's value to keep timer centered on page */
			}
			.nav>li>a{
				padding-left:11px !important;
				padding-right:11px !important;
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
			
		<script type="text/javascript"> 
			
			/*  Change the items noted in light blue below to create your countdown target date and announcement once the target date and time are reached.  */
			var current="";//-->enter what you want the script to display when the target date and time are reached, limit to 20 characters
			var year=2016;      //-->Enter the count down target date YEAR
			var month=02;        //-->Enter the count down target date MONTH
			var day=11;         //-->Enter the count down target date DAY
			var hour=00;        //-->Enter the count down target date HOUR (24 hour clock)
			var minute=00;      //-->Enter the count down target date MINUTE
			var tz=-5;          //-->Offset for your timezone in hours from UTC (see http://wwp.greenwichmeantime.com/index.htm to find the timezone offset for your location)
			
			//-->    DO NOT CHANGE THE CODE BELOW!    <--
			var montharray=new Array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
			
			function countdown(yr,m,d,hr,min){
			    theyear=yr;themonth=m;theday=d;thehour=hr;theminute=min;
			    var today=new Date();
			    var todayy=today.getYear();
			    if (todayy < 1000) {todayy+=1900;}
			    var todaym=today.getMonth();
			    var todayd=today.getDate();
			    var todayh=today.getHours();
			    var todaymin=today.getMinutes();
			    var todaysec=today.getSeconds();
			    var todaystring1=montharray[todaym]+" "+todayd+", "+todayy+" "+todayh+":"+todaymin+":"+todaysec;
			    var todaystring=Date.parse(todaystring1)+(tz*1000*60*60);
			    var futurestring1=(montharray[m-1]+" "+d+", "+yr+" "+hr+":"+min);
			    var futurestring=Date.parse(futurestring1)-(today.getTimezoneOffset()*(1000*60));
			    var dd=futurestring-todaystring;
			    var dday=Math.floor(dd/(60*60*1000*24)*1);
			    var dhour=Math.floor((dd%(60*60*1000*24))/(60*60*1000)*1);
			    var dmin=Math.floor(((dd%(60*60*1000*24))%(60*60*1000))/(60*1000)*1);
			    var dsec=Math.floor((((dd%(60*60*1000*24))%(60*60*1000))%(60*1000))/1000*1);
			    if(dday<=0&&dhour<=0&&dmin<=0&&dsec<=0){
			        document.getElementById('count2').innerHTML=current;
			        document.getElementById('count2').style.display="inline";
			        document.getElementById('count2').style.width="390px";
			        document.getElementById('dday').style.display="none";
			        document.getElementById('dhour').style.display="none";
			        document.getElementById('dmin').style.display="none";
			        document.getElementById('dsec').style.display="none";
			        document.getElementById('days').style.display="none";
			        document.getElementById('hours').style.display="none";
			        document.getElementById('minutes').style.display="none";
			        document.getElementById('seconds').style.display="none";
			        document.getElementById('spacer1').style.display="none";
			        document.getElementById('spacer2').style.display="none";
			        return;
			    }
			    else {
			        document.getElementById('count2').style.display="none";
			        document.getElementById('dday').innerHTML=dday;
			        document.getElementById('dhour').innerHTML=dhour;
			        document.getElementById('dmin').innerHTML=dmin;
			        document.getElementById('dsec').innerHTML=dsec;
			        setTimeout("countdown(theyear,themonth,theday,thehour,theminute)",1000);
			    }
			}
			
		</script>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!-- <script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=286827421358487";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script> -->

	</head>
<body id="top" style="margin-left: 6vh !important;">
	<?php include_once 'menu.php';?>

	<?php include_once 'first.php'; ?>

	<?php include_once 'about.php'; ?>

	<?php include_once 'rotating_gallery.php'; ?>
            <div style="padding:20% !importamt;"></div>
	<?php include_once 'sponsors.php'; ?>

	<?php include_once 'statistics.php'; ?>

	<?php include_once 'contact.php'; ?>	

	<?php include_once 'footer.php'; ?>
</body>
</html>
