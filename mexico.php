<?php 
include('session.php');


$cookie_name="mexico";
$cookie_value = isset($_COOKIE[$cookie_name]) ? ++$_COOKIE[$cookie_name] : 1;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");


if (empty($_SESSION['count'])) {
   $_SESSION['count'] = 1;
} else {
   $_SESSION['count']++;
}

?>



<html> 

    <head>


        <title>mexico</title>
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


          
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <script src="index_files/ca-pub-2074772727795809.js" type="text/javascript" async=""></script><script src="index_files/analytics.js" async=""></script>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>
                        $(document).ready(function () {
                            $("#demo3 .stars").click(function () {
                           
                                $.post('rating.php',{rate:$(this).val(),product: 'mexico'},function(d){
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
    <body>
      

        <?php include 'header.php'; ?>
 <div class="row text-center">
    <div class="col-lg-2"></div>
      <div class="col-lg-8">
      <blockquote>
      <p class="text-justify">
      Welcome <?php echo $login_session; ?> 
      <a href = "logout.php">Sign Out</a></p>
      <br/>
     <p>Hello <?php echo $login_session; ?>, you have seen this page <?php echo $_SESSION['count']; ?> times.
</p>

<p>
      <h2><code>Mexico</h2></code> </p><br><p>
      Make of Mexico the excuse for your next vacation and get your senses ready for an experience full of magic, color and warmth. Come and fall in love with Mexico!
Again and again, Mexico will surprise you with new experiences: a different flavor, a new adventure, a spot waiting for centuries to enchant you. We're waiting for you!
      </p>  <br>
      </p>  </h2></p></p></blockquote>
      <br/>

        
            <img src="images/mexico.jpg" height="300" />
    <br><br/>
         <!-- ad1 start -->
        <div style="width:170px;margin:0 auto;float: left;position:fixed;">

            <script async="" src="index_files/adsbygoogle.js"></script>
            <!-- 160x600_verticle -->
            <ins data-adsbygoogle-status="done" class="adsbygoogle" style="display:inline-block;width:160px;height:600px" data-ad-client="ca-pub-2074772727795809" data-ad-slot="3439042376"><ins id="aswift_0_expand" style="display:inline-table;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"><ins id="aswift_0_anchor" style="display:block;border:none;height:600px;margin:0;padding:0;position:relative;visibility:visible;width:160px;background-color:transparent"></ins></ins></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
     

        
                <div id="dv1">
                <center>Rate this product:</center>
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

                    <!-- Demo 3 end -->

<div style='clear:both;'></div>
                </div>
                <div class="form-group">
                <form action ="comment.php?product=mexico" method="POST">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
  <center><input type="submit" class="btn btn-info" name ="submit" value="comment"></center>

  </div>
</form>
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



$sql = "SELECT c.*, t.* FROM comment c, tbl_rating t where c.user = t.user_id and c.product ='mexico' and t.product='mexico'";
//$sql1 = "SELECT rate FROM tbl_rating";
$result = $conn->query($sql);
//$result1 = $conn->query($sql1);

if ($result->num_rows > 0) {
    // output data of each row
   while($row = $result->fetch_assoc()) {
        echo "<br>user : " . $row["user"]. " <br>comment : " . $row["comment"]."<br/> rating : " . $row["rate"]. " <br>___________________________________";
    }
    
           
    
    
}



$sql1 = "SELECT user FROM products_visited  where product ='mexico' and user = '".$login_session."'" ;
 $sql2 = "INSERT INTO `products_visited` ( `user`, `product`, `counts` ) VALUES ('" . $login_session . "', 'mexico',  1); ";
 $sql3= "UPDATE `products_visited` SET counts=counts+1 where product='mexico' and user = '".$login_session."'" ;    

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



print("<h3><a href='sidproducts.php'>Back</a></h3>");


include 'footer.php';
        ?>
    </body>
</html>





