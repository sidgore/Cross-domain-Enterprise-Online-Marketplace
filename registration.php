<!DOCTYPE HTML>
<html>
<head>
	<!--<meta http-equiv="refresh" content="3;url=index.html">-->
	<meta charset="utf-8">
	<title>Marketplace</title>
   <meta name="description" content="MarketPlace">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>

<body>
<!--End navbar-->

<!--end jumbotron-->

<div class="jumbotron">
		
<div class="container">
	<section>
		<div class="page-header text-center" id="about">
			<h2>USER SIGN UP</h2>
		</div>
		<div class="row">
			<div class="col-lg-4"></div>
			<div class="col-lg-4">
	
      <?php
         if(isset($_POST['add'])) {
            $dbhost = 'localhost' ;
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            
            $username = $_POST['username'];
            $pass = $_POST['pass'];
            $email = $_POST['email'];
            
            
            $sql = "INSERT INTO `market_user` (`uid`, `username`, `email`, `pass`) VALUES(NULL,'$username','$email','$pass')";

               
            mysql_select_db('yadaco');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "<center><h4>User created successfully, now you will be redirected to the login page</center></h4>\n";


            header( "refresh:5; url=login.php" );
            
            
            mysql_close($conn);
         }else {
            ?>
            
         <form method = "post" action = "<?php $_PHP_SELF ?>">
        <div class="form-group">
   		 	<label for="first_name">Username:</label>
    		<input type="text" class="form-control" id="username" name="username">
  			</div>
 			<div class="form-group">
   		 	<label for="email">Email:</label>
    		<input type="text" class="form-control" id="email" name="email">
  			</div>
 			<div class="form-group">
  			<label for="address">Password:</label>
   		 	<input type="password" class="form-control" id="pass" name="pass">
  			</div>
  			<center><input name = "add" type = "submit" id = "add" 
                              value = "Sign up" class="btn btn-success"></center>

               </form>
            
            <?php
         }
      ?>
     <br/><center>
     <a href="login.php">Already a memeber? Login here</a>     

			
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
