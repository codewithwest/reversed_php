<?php

include('../connection/conn.php');
include('../views/dashboard.php');
$username = $_SESSION['username'];
    $filename = $_FILES['profileImage']['name'];

    $tempname = $_FILES["profileImage"]['tmp_name'];
    $type = $_FILES["profileImage"]['type'];

    //$folder = "/" . $filename;
    $currentDir = dirname(__FILE__);
    $folder = $currentDir."/../assets/userProfile/$username.png";
    
    // file_put_contents($folder.substr($filename, strrpos($filename,'/')), $filename);
    // echo $tempname;
    // echo "<br><br>";
    

    // echo print_r($_FILES);

    // echo "<br><br>";
    // echo $folder;

    // $sql = "INSERT INTO `accounts` (filename) VALUES ('$filename') WHERE ";
    $query = "UPDATE `accounts` SET `profileImage` = '$username.png' WHERE `accounts`.`email` = 'jonaslekgau@gmail.com'; ";

    // Execute query
    // $temp = is_uploaded_file($_FILES["profileImage"]['tmp_name']);
    $result =  mysqli_query($conn, $query);
    // echo $temp;
    if (is_uploaded_file($_FILES["profileImage"]['tmp_name'])) {
        // echo "<br><br>";
        // echo "Uploaded";
        // echo "<br><br>";
        // // echo printf(shell_exec("cp -rf $tempname $folder"));
        // echo "<br><br>";

        // echo printf(rename($tempname, $folder));
        if (copy($tempname, $folder)) {
        // echo "<h3> Image uploaded successfully!</h3>";
    } 
    }
    // Now let's move the uploaded image into the folder: image
    // copy($tempname, $folder);
    // if (move_uploaded_file($tempname, $folder)) {
    //     echo "<h3> Image uploaded successfully!</h3>";
    // } else {
    //     echo "<h3>  Failed to upload image!</h3>";
    // }

        
?>