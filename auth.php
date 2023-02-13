<?php


$dbservername ='localhost';
$dbusername = 'root';
$dbpassword = '';
$dbname = 'post_app';

$conn = mysqli_connect($dbservername, $dbusername,$dbpassword);
mysqli_select_db($conn, $dbname);



if (isset($_POST['s-username'])) {
     $uname = $_POST['s-username'];
    $email = $_POST['s-email'];
    $pass = $_POST['s-password'];
    
    # code...
    $query = "INSERT INTO `accounts`(`username`, `email`, `password`) VALUES ('$uname','$email','$pass')";
    //  perform the query
    $result = mysqli_query($conn, $query);
}elseif(isset($_POST['username'])) {
    echo "You Have Successfully logged In Welcome to reversed";
}
?>