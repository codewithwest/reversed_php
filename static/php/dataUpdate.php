<?php

include('../connection/conn.php');
// Reading information from the database
include('../views/dashboard.php');


if (isset($_POST['update_username'])) {
    
    // $email = $_POST['search_email'];
    // $email = $_SESSION['email'];

    $username = $_SESSION['username'];
    $usernameUpdate = $_POST['update_username'];
    $emailUpdate = $_POST['update_email'];
    
    // this is the query to insert into database
    $query = "SELECT `email` FROM `accounts` WHERE `username` = '$username';";
    
    // runs query to database
    $result = mysqli_query($conn, $query);
    $myEmail = mysqli_fetch_assoc($result);
    

    // checks number of rows returned if not "0" makes email = $value 
    $row = mysqli_num_rows($result);
    $currentEmail = $myEmail['email'];
    if ($row == 0) {
		echo ("$username is not found");
	} else {
        if ($usernameUpdate !== $username) {
            $query = "UPDATE `accounts` SET `username`= '$usernameUpdate' WHERE `username` = '$username'; ";
            // runs query to database
            $result = mysqli_query($conn, $query);
            $username = $usernameUpdate;
           
        } else if($emailUpdate !== $currentEmail){
            $query = "UPDATE `accounts` SET `email`= '$emailUpdate' WHERE `username` = '$username'; ";
            // runs query to database
            $result = mysqli_query($conn, $query);
            $currentEmail = $usernameUpdate; 
        }elseif($emailUpdate !== $currentEmail && $usernameUpdate !== $username) {
            $query = "UPDATE `accounts` SET `email`= '$emailUpdate' WHERE `email` = '$currentEmail'; ";
            $_SESSION['username'] = $usernameUpdate; 
            // runs query to database
            $result = mysqli_query($conn, $query);
            
        }
        
        // this is the query to update to the database

    }
}