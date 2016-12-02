<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>

   
</html>
<!DOCTYPE HTML>
<!--
	Strongly Typed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Online Marketplace</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div id="header" class="container">

						<!-- Logo -->
							<h1 id="logo"><a href="index.html">Online Market Place </a></h1>
							<p>Find and shop for products from three different companies</p>

						<!-- Nav -->
							<nav id="nav">
								
									 
      Welcome <?php echo $login_session; ?> 
      <a href = "logout.php">Sign Out</a>
   
								
							</nav>

					</div>
				</div>

			<!-- Features -->
				<div id="features-wrapper">
					<section id="features" class="container">
						<header>
							<h2>Gentlemen, behold! This is <strong>Our Market Place</strong>!</h2>
						</header>
						<div class="row">
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
										<header>
											<h3>SIDTOURSANDTRAVELS</h3>
										</header>
										<p>This is <strong>Strongly Typed</strong>, a free, fully responsive site template
										by <a href="http://html5up.net">HTML5 UP</a>. Free for personal and commercial use under the
										<a href="http://html5up.net/license">CCA 3.0 license</a>.</p>
										<ul class="actions">
											<li><a href="#" class="button icon fa-file">SHOP HERE</a></li>
										</ul>
									</section>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>YADACOMP</h3>
										</header>
										<p><a href="http://html5up.net">HTML5 UP</a> is a side project of <a href="http://twitter.com/ajlkn">AJ’s</a> (= me).
										I started it as a way to both test my <strong>skel</strong> framework and sharpen up my coding
										and design skills a bit.</p>
										<ul class="actions">
											<li><a href="products.php" class="button icon fa-file">SHOP HERE</a></li>
										</ul>
									</section>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>FORMATIONFOURFOURTWO</h3>
										</header>
										<p><strong>Skel</strong> is a lightweight framework for building responsive
										sites and apps. All of my stuff at <a href="http://html5up.net">HTML5 UP</a> (including this
										one) are built on this framework.</p>
										<ul class="actions">
											<li><a href="#" class="button icon fa-file">SHOP HERE</a></li>
										</ul>
									</section>

							</div>
						</div>
						
					</section>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div class="inner">
						<section id="banner" class="container">
							<p>Use this space for <strong>profound thoughts</strong>.<br />
							Or an enormous ad. Whatever.</p>
						</section>
					</div>
				</div>
		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
