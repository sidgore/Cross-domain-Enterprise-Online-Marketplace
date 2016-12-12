<?php
   include('session.php');
?>

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
							<h1 id="logo"><a href="welcome.php">Online Market Place </a></h1>
							<p>Find and shop for products from three different companies</p>

						   	<nav id="nav">
								
									 
     							 Welcome <?php echo $login_session; ?> 
     							 <a href = "logout.php">Sign Out</a>
   
								
							</nav>





</div>
</div>

</div>

<center>

<?php
$cSession = curl_init(); 

curl_setopt($cSession,CURLOPT_URL,"http://www.formationfourfourtwo.com/productsformation.html");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false); 

$result=curl_exec($cSession);

curl_close($cSession);

echo $result;
?>

<a href="welcome.php">Back </a>

</center>
	<div id="banner-wrapper">
					<div class="inner">
						<section id="banner" class="container">
							<p></p>
						</section>
					</div>
				</div>
		</div>
		</div>
		</div></body></html>
