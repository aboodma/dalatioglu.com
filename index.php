<?php include "vareables.php"; ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title><?=$websiteTitle?></title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Owl Carousel -->
		<link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
		<link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" />

		<!-- Magnific Popup -->
		<link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		  <!-- <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> -->


    </head>
	<body>
		<!-- Header -->
		<header id="header">

			<!-- Top Header -->
			<div id="top-navbar" class="navbar">
				<div class="container">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#" class="text-link"><i class="fa fa-map-marker"></i><span>Istanbul / Fatih - Findikzade</span></a></li>
						<li><a href="#" class="text-link"><i class="fa fa-phone"></i><span>00905375280964</span></a> 	</li>
						<li><a href="#" class="text-link"><i class="fa fa-envelope"></i><span>info@dalatioglu.com</span></a></li>
					</ul>
				</div>
			</div>
			<!-- /Top Header -->

			<!-- Main Header -->
			<div id="main-navbar" class="navbar" style="background-color: #ffd626;">
				<div class="container">
					<div class="navbar-header">
						<!-- Logo -->
						<div class="navbar-brand">
							<a class="logo" href="#"><img src="img/logo.png" alt="logo"></a>
						</div>
						<!-- Logo -->

						<!-- Mobile toggle -->
						<button class="navbar-toggle-btn">
							<span></span>
						</button>
						<!-- Mobile toggle -->

						<!-- Mobile Search toggle -->
						<button class="search-toggle-btn">
							<i class="fa fa-search"></i>
						</button>
						<!-- Mobile Search toggle -->
					</div>

					<!-- Search -->
					<div class="navbar-search">
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div class="search-form">
							<form>
								<input type="text" name="search" value="" placeholder="Search">
							</form>
						</div>
					</div>
					<!-- Search -->

					<!-- Navigation -->
					<ul class="main-navbar nav navbar-nav navbar-right">
						<li class="text-link"><a class="text-link" href="#"><span><?=$nav5?></span></a>

						</li>

						<li class="text-link"><a class="text-link" href="#service"><span><?=$nav4?></span></a>

						</li>
						<li class="text-link"><a class="text-link" href="#about"><span><?=$nav3?></span></a>

						</li>
						<!-- <li class="text-link"><a class="text-link" href="#news"><span><?=$nav2?></span></a>

						</li> -->
						<li><a class="text-link" href="#"><span><?=$nav1?>	</span></a></li>
					</ul>
					<!-- Navigation -->

				</div>
			</div>
			<!-- /Main Header -->

		</header>
		<!-- /Header -->

		<!-- Home Section -->
		<div id="home" class="banner-area">

			<!-- Background Image -->
			<div id="bg-img" class="bg-img overlay" style="background-image:url('./img/background4.jpg')"></div>
			<!-- /Background Image -->

			<!-- home wrapper -->
			<div class="home-wrapper">
				<div class="container">
					<div class="row">

						<!-- home content -->
						<div class="col-md-10 ">
							<h1 draggable="true"><?=$maintext?></h1>
							<p draggable="true"	 class="lead"><?=$secoundtext?></p>
							<div class="col-md-8 col-sm-offset-4">
								<button data-toggle="modal" data-target="#exampleModal" class="secondary-button"><?=$button?></button>

							</div>
						</div>
						<!-- /home content -->

					</div>
				</div>
			</div>
			<!-- /home wrapper -->

		</div>
		<!-- /Home Section -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
			<div class="modal-dialog" role="document">
				<div class="modal-content" style="background-color:rgba(255, 206, 0, 0.8);">
					<div class="modal-header">
						<h5 class="modal-title text-center" id="exampleModalLabel">Contact</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="" action="index.html" method="post">

							  <fieldset class="form-group">
							    <label for="formGroupExampleInput">Example label</label>
							    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
							  </fieldset>
							  <fieldset class="form-group">
							    <label for="formGroupExampleInput2">Another label</label>
							    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
							  </fieldset>

						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="secondary-button" data-dismiss="modal">Close</button>
						<button type="button" class="main-button">Save changes</button>
					</div>
				</div>
			</div>
		</div>
		<!-- About Section -->

			<section id="about">
			<!-- About section 02 -->
			<div class="section md-section bg-grey">

				<!-- Half Background Image -->
				<div class="bg-img bg-half overlay" style="background-image:url('./img/about4.jpg')"></div>
				<!-- /Half Background Image -->

				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">

						<!-- About content -->
						<div class=" col-md-6">
							<h4 class="sub-title"><?=$subtitle?></h4>
							<h2 class="title"><?=$title?></h2>
							<p class="lead"><?=$lead?> </p>
						</div>
						<!-- /About content -->

					</div>
					<!-- /row -->

				</div>
				<!-- /container -->

			</div>
			</section>
			<!-- /About section 02 -->

		</div>

		<!-- /About Section -->

		<!-- Numbers Section -->
		<div id="numbers" class="section sm-section bg-main" style="padding-bottom: 0px;padding-top: 21px;">

			<!-- container -->

			<!-- /container -->

		</div>
		<!-- /Numbers Section -->


		<!-- Portfolio Section -->

		<!-- /Portfolio Section -->

		<!-- Services Section -->
		<section id="service">
		<div id="service" class="section md-section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- section header -->
					<div class="section-header text-center">

						<h2 class="title"><?=$servicetitle?></h2>
					</div>
					<!-- /section header -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-building"></i>
							<div class="service-content">
								<h3><?=$Tourist?></h3>
								<p><?=$TouristText?></p>
								<!-- <a href="#" class="text-link"><span>Read more</span></a> -->
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-wrench"></i>
							<div class="service-content">
								<h3><?=$Business?></h3>
								<p><?=$BusinessText?></p>
								<!-- <a href="#" class="text-link"><span>Read more</span></a> -->
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-university"></i>
							<div class="service-content">
								<h3><?=$Visa?></h3>
								<p><?=$VisaText?></p>
								<!-- <a href="#" class="text-link"><span>Read more</span></a> -->
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-paint-brush"></i>
							<div class="service-content">
								<h3><?=$Founding?></h3>
								<p><?=$FoundingText?></p>
								<!-- <a href="#" class="text-link"><span>Read more</span></a> -->
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-magic"></i>
							<div class="service-content">
								<h3><?=$Identification?></h3>
								<p><?=$IdentificationText?></p>
								<!-- <a href="#" class="text-link"><span>Read more</span></a> -->
							</div>
						</div>
					</div>
					<!-- /service -->

					<!-- service -->
					<div class="col-md-4 col-sm-6">
						<div class="service">
							<i class="fa fa-bullhorn"></i>
							<div class="service-content">
								<h3><?=$Tourist?></h3>
								<p><?=$TouristText?></p>
								<!-- <a href="#" class="text-link"><span>Read more</span></a> -->
							</div>
						</div>
					</div>
					<!-- /service -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		</section>
		<!-- /Services Section -->

		<!-- Why Choose us Section -->

		<!-- /Why Choose us Section -->

		<!-- Call to Action Section -->
		<div id="cta-1" class="section md-section bg-main">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- CTA content -->
					<div class="col-md-10 col-md-offset-1 text-center">
						<h2><?=$contentlead?></h2>
						<h4><?=$contentsub?></h4>
						<button  data-toggle="modal" data-target="#exampleModal" class="main-button"><?=$contentbtn?></button>
					</div>
					<!-- /CTA content -->

				</div>
				<!-- /row -->

			</div>
			<!-- /container -->

		</div>
		<!-- /Call to Action Section -->




		<!-- Blog Section -->

		<!-- /Blog Section -->

		<!-- Call to Action Section -->

		<!-- /Call to Action Section -->


		<!-- Footer Section -->
		<footer id="footer" class="bg-dark">

			<!-- Top footer -->
			<div id="top-footer" class="section sm-section">

				<!-- container -->
				<div class="container">

					<!-- row -->
					<div class="row">

						<!-- footer about -->
						<div class="col-md-4 footer-widget">
							<div class="footer-logo">
								<a class="logo" href="index.html">
									<img src="img/logo.png" alt="logo">
								</a>
								<p><?=$footertext?></p>
							</div>
							<ul class="footer-contact">
								<li><a href="#" class="text-link"><i class="fa fa-map"></i><span>Istanbul / Fatih - Findikzade</span></a></li>
								<li><a href="#" class="text-link"><i class="fa fa-phone"></i><span>00905375280964</span></a></li>
								<li><a href="#" class="text-link"><i class="fa fa-envelope"></i><span>info@dalatioglu.com</span></a></li>
							</ul>
						</div>
						<!-- /footer about -->

						<!-- footer links -->

						<!-- /footer links -->

						<!-- footer subscribe -->
						<div class="col-md-4 col-md-offset-4 footer-widget">
							<h3 class="title white-text">إبقى على تواصل معنا </h3>
							<p>إترك بريدك الإلكتروني ليصلك كل جديد في خدماتنا والاخبار الجديدة</p>
							<div class="footer-subscribe">
								<form>
									<input class="input" type="email" placeholder="Enter your email">
									<button>تابعنا</button>
								</form>
							</div>
							<ul class="footer-social">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<!-- /footer subscribe -->

					</div>
					<!-- /row -->

				</div>
				<!-- /container -->

			</div>
			<!-- /Top footer -->

			<!-- Bottom footer -->
			<div id="bottom-footer" class="section xs-section text-center">
				<div class="container">
					<div class="row">
						<span>&copy; Copyright 2018. All Rights Reserved, Created by <a href="http://Griffindesign.cf">Griffin Design</a></span>
					</div>
				</div>
			</div>
			<!-- /Bottom footer -->

		</footer>
		<!-- /Footer Section -->

		<!-- Preloader -->
		<div id="preloader">
			<div class="preloader">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<!-- /Preloader -->

		<!-- jQuery Plugins -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

	</body>
</html>
