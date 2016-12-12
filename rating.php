<?php
include('session.php');

#$login_session = md5($_SERVER['$login_session']); 
$servername = "localhost"; // Server details
$username = "root";
$password = "";
$dbname = "yadaco";
$product = $_POST['product'];


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Unable to connect Server: " . $conn->connect_error);
}

if (isset($_POST['rate']) && !empty($_POST['rate'])) {

    $rate = $conn->real_escape_string($_POST['rate']);
// check if user has already rated
    $sql = "SELECT `id` FROM `tbl_rating` WHERE `product`='" . $product . "' and `user_id`='" . $login_session . "' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {
        echo $row['id'];
    } else {

        $sql = "INSERT INTO `tbl_rating` ( `rate`, `user_id`, `product` ) VALUES ('" . $rate . "', '" . $login_session . "',  '" . $product . "'); ";
        if (mysqli_query($conn, $sql)) {
            echo "0";
        }
    }
}
$conn->close();
?>