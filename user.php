<!DOCTYPE HTML>
<html>
<head>
	<!--<meta http-equiv="refresh" content="3;url=index.html">-->
	<meta charset="utf-8">
	<title>Yadaco - Yet Another Data Analytics Company</title>
	<meta name="description" content="Yadaco yet Another Data Analytics Company">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar">
	<div class="container">
		<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a href="index.html" class="navbar-brand">YADA</a>
		</div><!--Navbar-header-->
		<div class="collapse navbar-collapse" id="navbar-collapse">
		<a href="password.html" class="btn btn-warning navbar-btn navbar-right">Login <span class="glyphicon glyphicon-log-in"></span></a>

			<ul class="nav navbar-nav">
				<li><a href="index.html">Home</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="products.html">Products</a></li>
				<li><a href="news.html">News</a></li>
				<li><a href="contacts.php">Contacts</a></li>
				<li><a href="user.html">Users</a></li>
			</ul>

		</div>

	</div> <!-- End container-->

</nav> <!--End navbar-->

<!-- jumbotron -->
<div class="jumbotron">
	<div class="container text-center">
		<h2>YADA -Yet Another Data Analytics Co.</h2>
		<p>We develop cool apps</p>

		<div class="btn-group">
			<a href="https://github.com/n3o-Bhushan/CodeRectifierDemo" a target="_blank" class="btn btn-lg btn-info">Github</a>		
			
		</div>
	</div>
</div><!--end jumbotron-->

<div class="jumbotron">
		
<div class="container">
	<section>
		<div class="page-header text-center" id="about">
			<h2>USER SIGN UP</h2>
		</div>
		<div class="row">
			<div class="col-lg-2"></div>
			<div class="col-lg-8">
			
	
   
  
      <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost' ;
            $dbuser = 'bhushan125';
            $dbpass = 'bhushan123';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $address = $_POST['address'];
           	$phone_no = $_POST['phone_no'];
            $cell_no = $_POST['cell_no'];
            
            $sql = "INSERT INTO `users` (`uid`, `first_name`, `last_name`, `email`, `address`, `phone_no`, `cell_no`) VALUES(NULL,'$first_name','$last_name','$email', '$address', '$phone_no', '$cell_no')";

               
            mysql_select_db('Yadacomp');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "<center><h4>User created successfully</center></h4>\n";

            header( 'Location: yadacomp.com/index.html' ) ;
            
            
            mysql_close($conn);
         }else {
            ?>
            
               <form method = "post" action = "<?php $_PHP_SELF ?>">
            <div class="form-group">
   		 	<label for="first_name">First Name:</label>
    		<input type="text" class="form-control" id="first_name" name="first_name">
  			</div>
 			<div class="form-group">
  			<label for="last_name">Last Name:</label>
   		 	<input type="text" class="form-control" id="last_name" name="last_name">
  			</div>
  			<div class="form-group">
   		 	<label for="email">Email:</label>
    		<input type="text" class="form-control" id="email" name="email">
  			</div>
 			<div class="form-group">
  			<label for="address">Address:</label>
   		 	<input type="text" class="form-control" id="address" name="address">
  			</div>
  			 <div class="form-group">
   		 	<label for="phone_no">Phone #:</label>
    		<input type="text" class="form-control" id="phone_no" name="phone_no">
  			</div>
 			<div class="form-group">
  			<label for="cell_no">Cell #:</label>
   		 	<input type="text" class="form-control" id="cell_no" name="cell_no">
  			</div> 
  			<center><input name = "add" type = "submit" id = "add" 
                              value = "Add User" class="btn btn-success"></center>

               </form>
            
            <?php
         }
      ?>
   

			
		</div>
		<div class="col-lg-2"></div>
	</section>
	</div>
</div>
</div>>
</div><!--end container-->


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>