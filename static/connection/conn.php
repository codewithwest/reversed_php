<?php
$dbservername ='localhost';
 $dbusername = 'root';
 $dbpassword = 'root';
 $dbname = 'post_app';
 
 $conn = mysqli_connect($dbservername, $dbusername,$dbpassword);
 mysqli_select_db($conn, $dbname);
 
 
 
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}
?>