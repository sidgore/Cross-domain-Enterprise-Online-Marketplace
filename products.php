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
$curl = curl_init('http://yadacomp.com/products.html');
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
 
$page = curl_exec($curl);
 
if(curl_errno($curl)) // check for execution errors
{
	echo 'Scraper error: ' . curl_error($curl);
	exit;
}
 
curl_close($curl);
 
$regex = '/<div class="col-lg-8">(.*?)<\/div>/s';
if ( preg_match($regex, $page, $list) )
    echo "<center>".$list[0];
else 
    print "Not found"; 
?>

<a href="welcome.php" class="btn btn-warning navbar-btn navbar-right">Back </a>

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
