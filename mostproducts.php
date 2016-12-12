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
<div class="jumbotron">
    
<div class="container">
  <section>
    <div class="page-header text-center" id="about">
      <h2>Most visited products on the whole market place</h2>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-8">
<?php

  include('session.php');
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "yadaco";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//$sql = "SELECT * FROM products_visted";

$sql = "SELECT product, sum(counts) as c FROM products_visited group by product ORDER BY c DESC" ;


//$sql = "SELECT  FROM products_visited ";
//$sql1 = "SELECT rate FROM tbl_rating";
$result = $conn->query($sql);
//$result1 = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "<br>product : " . $row["product"]. ",  counts :". $row["c"].  "  <br>";
    }
    
   
           
    
    
}

$conn->close();

?>

</div></div></section></div></div></body></html>