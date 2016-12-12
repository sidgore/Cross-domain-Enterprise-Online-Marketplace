<!DOCTYPE HTML>
<html>
<head>
   <meta charset="utf-8">
   <title>Marketplace</title>
   <meta name="description" content="MarketPlace">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


</head>
<?php
   include("dbconnect.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT uid FROM market_user WHERE username = '$myusername' and pass = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      #$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
        if($count == 1) {
       
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
   
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body>
	
     <div class="jumbotron">
      
<div class="container">
   <section>
      <div class="page-header text-center" id="about">
         <h2>USER LOG IN</h2>
      </div>
      <div class="row">
         <div class="col-lg-4"></div>
         <div class="col-lg-4">
               
               <form action = "" method = "post">     
         <div class="form-group">
         <label for="first_name">Username:</label>
         <input type="text" class="form-control" id="username" name="username">
         </div>
         <div class="form-group">
         <label for="address">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
         </div>
         <center><input name = "add" type = "submit" id = "add" 
                              value = "Log in" class="btn btn-success"></center>
               </form>
         <br><center>
         <a href="registration.php">New member? Register here</a>               
         
      </div>
      <div class="col-lg-4"></div>
   </section>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>