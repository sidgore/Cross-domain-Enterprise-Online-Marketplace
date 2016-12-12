<?php

include("session.php");



if(isset($_POST['submit'])) {
            $dbhost = 'localhost' ;
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            
            $name = $login_session;
			$comment = $_POST['comment'];   
			$submit = $_POST['submit'];
            $product = $_GET['product'];

            
            $sql = "INSERT INTO `comment` (`user`, `comment`, `product`) VALUES('$name','$comment','$product')";

               
            mysql_select_db('yadaco');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            #echo "<center><h4>Commented successfully you will be redirected to new page now</center></h4>\n";

            
             #header("location:javascript://history.go(-1)");
            header('Location: ' . $_SERVER['HTTP_REFERER']);

}


?>