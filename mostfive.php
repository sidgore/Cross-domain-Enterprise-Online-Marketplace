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
  
    arsort($_COOKIE);
  $mostfiveproducts = array_slice($_COOKIE, 0, 5); 

  echo "<h4> MOST FIVE VISITED PRODUCTS ARE: </h4>";
  
  foreach( $mostfiveproducts as $key => $value  ) {

    echo "<h4>" . $key . " - No. of times visited: " .$value. "</h4>";
    echo "<br />";
  }
  echo  "<a href=\"products.php\">
   <h4>Back to Products section</h4>
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
