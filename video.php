<?php
	session_start();
	if(!isset($_SESSION["username"])){
		header("location:login.html");
		
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>EDUCATURE</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CLato:300,400" rel="stylesheet"> 
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />
		
		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style1.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
	
		<!-- Header -->
		<header id="header">
			<!-- Top Header -->
			<div id="top-header" style="background-color:black;">
				<div class="container">
					<div class="header-links">
							<ul>
							<li><a href="about.html">About us</a></li>
							<li><a href="contact.html">Contact</a></li>
							
							<li><a href="enquiry1.html">Enquiry</a></li>
							<?php if(!isset($_SESSION["username"])){?><li><a href="login.html"><i class="fa fa-sign-in"></i> Login</a></li>
							<?php }else{?><li><a href="logout.php"><i class="fa fa-sign-in"></i> Logout</a></li>
							<?php }?>
						</ul>
					</div>
					<div class="header-social">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-youtube"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Top Header -->
			
			<!-- Center Header -->
			<div id="center-header">
				<div class="container">
					<div class="header-logo">
					<div class=".logo">
	<link type="text/css" rel="stylesheet" href="a.css">
						<a href="#" class="logo"><img height="100px" width="50px"src="logo2.png" alt=""></a>
					</div>
					<div class="header-ads">
						<img class="center-block" src="./img/ad-2.jpg" alt=""> 
					</div>
					</div>
				</div>
			</div>
			<!-- /Center Header -->
			
			<!-- Nav Header -->
			<div id="nav-header">
				<div class="container">
					<nav id="main-nav">
						<div class="nav-logo">
							<a href="#" class="logo"><img src="logo2.png" alt=""></a>
						</div>
						<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="index.html">Home</a></li>
							<li><a href="news.html">News</a></li>
														
							<li><a href="video.html">Videos</a></li>
						<li><a href="events.html">Event</a></li>
							<li><a href="ddd.html">Students Zone</a></li>
						</ul>
					</nav>
					<div class="button-nav">
						<button class="search-collapse-btn"><i class="fa fa-search"></i></button>
						<button class="nav-collapse-btn"><i class="fa fa-bars"></i></button>
						<div class="search-form">
							<form>
								<input class="input" type="text" name="search" placeholder="Search">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Nav Header -->
		</header>
		<!-- /Header -->
			

			<!-- ARTICLE -->
			<article class="article thumb-article">
				<div class="article-img">
					<img height="500px" width="80px"src="demo.jpg" alt="">
				</div>
				<div class="article-body">
				
					
				</div>
			</article>
			<!-- /ARTICLE -->
			
			
	
			  
			  
			  



<!-- SECTION -->
		<div class="section">
			<!-- CONTAINER -->
			<div class="container">
				<!-- ROW -->
				<div class="row">
					<!-- Main Column -->
					<div class="col-md-12">
						<!-- section title -->
						<div class="section-title">
							<h2 class="title">CHOOSE YOUR VIDEO LECTURE HERE</h2>
							<div id="nav-carousel-2" class="custom-owl-nav pull-right"></div>
						</div>
						<!-- /section title -->
						
						<!-- owl carousel 2 -->
						<div id="owl-carousel-2" class="owl-carousel owl-theme">
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img height="300px"width="100px"src="python.jpeg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="python.html">PYTHON TUTORIALS</a></li>
										
									</ul>
								
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img  height="300px"width="100px"src="java.jpg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="java.html">JAVA TUTORIALS</a></li>
										
									</ul>
									
								
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img  height="300px"width="100px"src="c.jpg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="c.html">C TUTORAILS</a></li>
										
									</ul>
								
									</ul>
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img height="300px"width="100px"src="web.jpg" alt="">
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="web.html">WEB DEVELOPMENT TUTORIALS</a></li>
									</ul>
									
								</div>
							</article>
							<!-- /ARTICLE -->
							
							<!-- ARTICLE -->
							<article class="article thumb-article">
								<div class="article-img">
									<img height="300px"width="100px"src="m.jpg" alt="">
									
								</div>
								<div class="article-body">
									<ul class="article-info">
										<li class="article-category"><a href="am3.html">MATHEMATICS TUTORIALS </a></li>
									</ul>
									
								</div>
							</article>
							<!-- /ARTICLE -->
						</div>
						<!-- /owl carousel 2 -->
					</div>
					<!-- /Main Column -->
				</div>
				<!-- /ROW -->
			</div>
			<!-- /CONTAINER -->
		</div>
		<!-- /SECTION -->



			<!-- FOOTER -->
		<!-- FOOTER -->
		<div class="footer">
			<div class="inner-footer">
			<div class="footer-items">
				<h1>Computers & Codes</h1>
					<p>
						 programming languages are very different to natural languages. Natural languages are ambiguous, with many different layers of meaning – sarcasm, innuendo, and those sorts of things. That’s great if you’re communicating with a human, but computers don’t understand any of that.
					</p>
			</div>
			
			<div class="footer-items">
				<h2>Quick linkss</h2>
				<div class="border"></div>
					<ul>
						<a href="/"><li>Home</li></a>
						<a href="contact.html"><li>Contact Us</li></a>
						<a href="about.html"><li>About Us</li></a>
						<a href="vides.html"><li>Videos</li></a>
						
					</ul>
			</div>
			<div class="footer-items">
				<h2>Tutorials</h2>
				<div class="border"></div>
					<ul>
						<a href="python.html"><li>Python</li></a>
						<a href="c.html"><li>C & C++</li></a>
						<a href="java.html"><li>Java</li></a>
						<a href="web.html"><li>Webo Development</li></a>
						<a href="am3.html"><li>AM-III</li></a>
					</ul>
			</div>
			<div class="footer-items">
				<h2>Contact Us</h2>
				<div class="border"></div>
					<ul>
						<li><i class="fa fa-map-marker" aria-hidden="true">W.T.Patil Marg near Dukes Company,Chembur</i></li>
						<li><i class="fa fa-phone" aria-hidden="true">022-225-678</i></li>
						<li><i class="fa fa-envelope" aria-hidden="true">amisha.das@sakec.ac.in</i></li>
					</ul>
				<div class="social-media">
					<a href="/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="/"><i class="fa fa-google-plus" aria-hidden="true"></i></a>

					
				</div>
			</div>
			</div>
			<div class="footer-bottom">
			Copyrighto & copy;Educature 2019.All right reserved.
			
			</div>
		</div>
		<!-- Back to top -->
		<div id="back-to-top"></div>
		<!-- Back to top -->
		
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>