<?php
session_start();
include('./static/connection/conn.php');

if (isset($_POST['s-username'])) {
     $uname = $_POST['s-username'];
    $email = $_POST['s-email'];
    $pass = $_POST['s-password'];
    header('Location: ./index.html');
    
    $query = "INSERT INTO `accounts`(`username`, `email`, `password`) VALUES ('$uname','$email','$pass')";
    //  perform the query
    $result = mysqli_query($conn, $query);
}elseif(isset($_POST['username'])) {
    echo "You Have Successfully logged In Welcome to reversed";
    session_regenerate_id();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    // $_SESSION['id'] = $id;
    header('Location: ./static/templates/dashboard.php');

}
?>