<?php
session_start();
include('../connection/conn.php');
// Reading information from the database
include('../templates/dashboard.php');

if (isset($_GET['update_username'])) {
    
    // $email = $_POST['search_email'];
    // $email = $_SESSION['email'];

    $username = $_SESSION['username'];
    $usernameUpdate = $_GET['update_username'];
    

    
    
    // this is the query to insert into database
    $query = "SELECT `email` FROM `accounts` WHERE `username` = '$username';";
    
    // runs query to database
    $result = mysqli_query($conn, $query);

    // checks number of rows returned if not "0" makes email = $value 
    $row = mysqli_num_rows($result);
    echo printf($row[0]);if ($row == 0) {
		echo ("$username is not found");
	} else {

        // this is the query to update to the database
        $query = "UPDATE `accounts` SET `username`= '$usernameUpdate' WHERE `username` = '$username'; ";

        // runs query to database
        $result = mysqli_query($conn, $query);
        $_SESSION['username'] = $usernameUpdate; 
        echo $usernameUpdate;
        echo ("Changes have been updated");
    }
}