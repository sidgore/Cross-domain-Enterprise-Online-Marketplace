<!DOCTYPE HTML>
<html>
<head>
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
  
    
    <div class="row text-center">
    <div class="col-lg-2"></div>
      <div class="col-lg-8">
      <blockquote>
      <p class="text-justify">
<?php

  $lastfiveproducts = array_reverse($_COOKIE, true);
  $products = array_slice($lastfiveproducts, 0, 5); 
  
  echo "<h4> LAST FIVE VISITED PRODUCTS ARE: </h4>";
  
  foreach( $products as $key => $value  ) {

    echo "<h4>" . $key . "</h4>";
    echo "<br />";
  }
  echo  "<a href=\"products.php\">
   <h4>Back</h4>
        </a>";
?>
    </div><div class="col-lg-2"></div>
  </section>
</div><!--end container-->


<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
