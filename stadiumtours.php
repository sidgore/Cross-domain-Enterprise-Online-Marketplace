<?php
include("session.php");

$cookie_name = "STADIUMTOURS";
$cookie_value = isset($_COOKIE[$cookie_name]) ? ++$_COOKIE[$cookie_name] : 1;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formation Four Four Two</title>
  <meta charset="utf-8">
  <meta name="viewport" content="widthdevice-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style_products.css" type="text/css" />

    <style>
            /****** Rating Starts *****/
            @import url(http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

            fieldset, label { margin: 0; padding: 0; }
            body{ margin: 20px; }
            h1 { font-size: 1.5em; margin: 10px; }

            .rating { 
                border: none;
                float: left;
            }

            .rating > input { display: none; } 
            .rating > label:before { 
                margin: 5px;
                font-size: 1.25em;
                font-family: FontAwesome;
                display: inline-block;
                content: "\f005";
            }

            .rating > .half:before { 
                content: "\f089";
                position: absolute;
            }

            .rating > label { 
                color: #ddd; 
                float: right; 
            }

            .rating > input:checked ~ label, 
            .rating:not(:checked) > label:hover,  
            .rating:not(:checked) > label:hover ~ label { color: #FFD700;  }

            .rating > input:checked + label:hover, 
            .rating > input:checked ~ label:hover,
            .rating > label:hover ~ input:checked ~ label, 
            .rating > input:checked ~ label:hover ~ label { color: #FFED85;  }   

             #dv1, #dv0{
                width: 408px;
                border: 1px #ccc solid;
                padding: 15px;
                margin: auto;

            }  
    </style>

     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script><script src="index_files/analytics.js" async=""></script>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
                        $(document).ready(function () {
                            $("#demo3 .stars").click(function () {
                           
                                $.post('rating.php',{rate:$(this).val(),product: 'stadiumtours'},function(d){
                                    if(d>0)
                                    {
                                        alert('You already rated');
                                    }else{
                                        alert('Thanks For Rating');
                                    }
                                });
                                $(this).attr("checked");
                            });
                        });
  </script>
</head>


<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<br />
<br />
<br />




<div id="stadiumtours"  class="container-fluid text-center formfont bg-grey ">

   <h4>Welcome <?php echo $login_session; ?><a href = "logout.php">Sign Out</a></h4>
      <br/>
     <h4>Hello <?php echo $login_session; ?>, you have seen this page <?php echo $_SESSION['count']; ?> times.</h4>
  
  <span class="glyphicon glyphicon-camera logo-small"></span>
  <h2>STADIUM TOURS</h2>
  <h4>We can help you realise that long awaited dream of yours!</h4>
  <br><br>
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="oldtraffordtour.jpg" alt="Training" class="img-responsive">
        <p><strong>A TOUR OF OLD TRAFFORD</strong></p>
        <p>Old Trafford - Home gound of Manchester United Football Club, England</p>
        <p>The chance to live the dream of millions of Manchester United Fans out there. Come and experience why this is called the 'Theatre of Dreams', sit in the famous Stretford End stand and step on the grass where once David Beckham plied his trade! And also catch a glimpse of the Manager's room, once occupied by Knights - Sir Matt Busby and Sir Alex Ferguson. </p>
        <p>Grab it for $399.99</p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="campnoutour.jpg" alt="Training" class="img-responsive">
        <p><strong>A TOUR OF CAMP NOU</strong></p>
        <p>Camp Nou - Home ground of Football Club Barcelona, Spain </p>
        <p>Fan or no fan, every football fan needs to visit this spectacular stadium. Come take a tour to the place where the beautiful game is actually played beautifully. Get a chance to walk into the dressing room where the greats of the football world have changed. Messi, Henry, Ronaldo, Rivaldo, Maradona!! SOme big names there. S</p>
        <p>Grab it for $399.99</p>
      </div>
    </div>

    <div class="col-sm-4">
      <div class="thumbnail">
        <img src="anfieldtour.jpg" alt="Training" class="img-responsive">
        <p><strong>A TOUR OF ANFIELD</strong></p>
        <p>Anfield - Home Ground of Liverpool Football Club, England </p>
        <p>If you are a Liverpool fan, then you won't  miss a chance to visit this iconic stadium. Come take a peep where great stories were written, histories made and legends were born. Your chance to touch the famous, 'This is Anfield' emblem before you enter the ground, just like Steven Gerrard used to!!</p>
        <p>Grab it for $299.99</p>
      </div>
    </div>
    
</div>
<div class="row">
  <div class = "col-sm-4"></div>
  <div class = "col-sm-4">
    <div id="dv1">
      <h4>Rate this product:</h4>
                    <script>
                        $(document).ready(function () {
                            $("#demo3 .stars").click(function () {

                                var label = $("label[for='" + $(this).attr('id') + "']");
                                
                                $("#feedback").text(label.attr('title'));
                                $(this).attr("checked");
                            });
                        });
                    </script>
                    <fieldset id='demo3' class="rating">
                        <input class="stars" type="radio" id="star53" name="rating" value="5" />
                        <label class = "full" for="star53" title="Awesome - 5 stars"></label>
                        <input class="stars" type="radio" id="star4half3" name="rating" value="4.5" />
                        <label class="half" for="star4half3" title="Pretty good - 4.5 stars"></label>
                        <input class="stars" type="radio" id="star43" name="rating" value="4" />
                        <label class = "full" for="star43" title="Pretty good - 4 stars"></label>
                        <input class="stars" type="radio" id="star3half3" name="rating" value="3.5" />
                        <label class="half" for="star3half3" title="Meh - 3.5 stars"></label>
                        <input class="stars" type="radio" id="star33" name="rating" value="3" />
                        <label class = "full" for="star33" title="Meh - 3 stars"></label>
                        <input class="stars" type="radio" id="star2half3" name="rating" value="2.5" />
                        <label class="half" for="star2half3" title="Kinda bad - 2.5 stars"></label>
                        <input class="stars" type="radio" id="star23" name="rating" value="2" />
                        <label class = "full" for="star23" title="Kinda bad - 2 stars"></label>
                        <input class="stars" type="radio" id="star1half3" name="rating" value="1.5" />
                        <label class="half" for="star1half3" title="Meh - 1.5 stars"></label>
                        <input class="stars" type="radio" id="star13" name="rating" value="1" />
                        <label class = "full" for="star13" title="Sucks big time - 1 star"></label>
                        <input class="stars" type="radio" id="starhalf3" name="rating" value="0.5" />
                        <label class="half" for="starhalf3" title="Sucks big time - 0.5 stars"></label>
                    </fieldset>
                    <div id='feedback'></div>
                    <div style='clear:both;'></div>
                     </div>
         <div class = "col-sm-4"></div>         
    </div>            <!-- Demo 3 end -->
  </div>

<br/>
<br/>


<div class="row">
   <div class = "col-sm-4"></div>   
  <div class="col-sm-4 form-group">
                    <form action ="comment.php?product=stadiumtours" method="POST">
                      <h4><label for="comment">Comment:</label></h4>
                      <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
                      <br/>
                      <center><input type="submit" class="btn btn-info" name ="submit" value="comment"></center>
                    </form>
  </div>
   <div class = "col-sm-4"></div>   
</div>


<ul class="list-group">
<li class="list-group-item list-group-item-info">

<center>
  <?php 
  
  extract($_POST);
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

 
  $sql = "SELECT c.*, t.* FROM comment c, tbl_rating t where c.user = t.user_id and c.product ='stadiumtours' and t.product ='stadiumtours'";
  //$sql1 = "SELECT rate FROM tbl_rating";
  $result = $conn->query($sql);
  //$result1 = $conn->query($sql1);

  if ($result->num_rows > 0) {
      // output data of each row
     while($row = $result->fetch_assoc()) {
          echo "<br>user : " . $row["user"]. " <br>comment : " . $row["comment"]."<br/> rating : " . $row["rate"]. " <br>___________________________________";
      }      
  }



 $sql1 = "SELECT user FROM products_visited  where product ='stadiumtours' and user = '".$login_session."'" ;
 $sql2 = "INSERT INTO `products_visited` ( `user`, `product`, `counts` ) VALUES ('" . $login_session . "', 'stadiumtours',  1); ";
 $sql3= "UPDATE `products_visited` SET counts=counts+1 where product='stadiumtours' and user = '".$login_session."'" ;    

 $result1 = $conn->query($sql1);

if ($result1->num_rows == 0)
{

    $result2 = $conn->query($sql2);
}  
else {

    $result2 = $conn->query($sql3);
}
  
$result2 = $conn->query($sql1);

$conn->close();


?>
</center>


<div class="row">
      <div class="col-sm-12">
        <a href="formationproducts.php">
          <h2>Click here to go back to the Products section</h2>
        </a>
      </div>
  </div>
</div>

</body>
</html>

