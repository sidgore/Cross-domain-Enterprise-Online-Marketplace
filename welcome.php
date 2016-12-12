
<?php
   include('session.php');
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>

   
</html>
<!DOCTYPE HTML>

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
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
						  <a href="mostproducts.php">Most visited products</a>
							<h2>Gentlemen, behold! This is <strong>Our Market Place</strong>!</h2>
						</header>
						<div class="row">
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="http://sidtoursandtravels.com" class="image featured"><img src="sidtours.jpg" alt="" /></a>
										<header>
											<h3>SIDTOURSANDTRAVELS</h3>
										</header>
										<p>Place for attractive tourist packages</p>
										<ul class="actions">
											<li><a href="sidproducts.php" class="button icon fa-file">SHOP HERE</a></li>
										</ul>
									</section>

							</div>
							<div class="4u 12u(mobile)">

								<!-- Feature -->
									<section>
										<a href="http://yadacomp.com" class="image featured"><img src="yadaco.jpg" alt="" /></a>
										<header>
											<h3>YADACOMP</h3>
										</header>
										<p>Cool Data Analytics tools for you</p>
										<ul class="actions">
											<li><a href="products.php" class="button icon fa-file">SHOP HERE</a></li>
										</ul>
									</section>

							</div>
								<div class="4u 12u(mobile)">

							
								<!-- Feature -->
									<section>
										<a href="http://formationfourfourtwo.com" class="image featured"><img src="formfour.jpg" alt="" /></a>
										<header>
											<h3>FORMATIONFOURFOURTWO</h3>
										</header>
										<p>For all your football needs.</p>
										<ul class="actions">
											<li><a href="formationproducts.php" class="button icon fa-file">SHOP HERE</a></li>
										</ul>
									</section>

							</div>
						</div>
						
					</section>
				</div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div class="inner">
						<div class="fb-page" data-href="https://www.facebook.com/Marketplace-Yada-Sid-tours-and-fourfourtwo-648193578680148/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Marketplace-Yada-Sid-tours-and-fourfourtwo-648193578680148/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Marketplace-Yada-Sid-tours-and-fourfourtwo-648193578680148/">Marketplace Yada, Sid tours and fourfourtwo</a></blockquote></div>
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
