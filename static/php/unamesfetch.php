<?php
  

 $dbservername ='localhost';
 $dbusername = 'root';
 $dbpassword = '';
 $dbname = 'post_app';
 
 $conn = mysqli_connect($dbservername, $dbusername,$dbpassword);
 mysqli_select_db($conn, $dbname);
// Check connection
if (!$conn) {
    die("Unable to Connect database: " . mysqli_connect_error());
}

 $u = 'west';

// fetch query
function fetch_data($connection, $unames){
  $query = " SELECT  `username` FROM `accounts`";
  // Store the query results in result
  $result = mysqli_query($connection, $query);
  // $found = mysqli_fetch_assoc($result);
  // get the num of rows
  $row = mysqli_num_rows($result);
  // Check if the row arrays not empty 
  $byte = array();
  
  while ($row = mysqli_fetch_assoc($result)) {
      // if more tha one value in list
      $unames = $row['username'];
      array_push($byte, $unames);
      # code...
      // return "$unames";
      // echo "<script>alert("tru")</script>";
      // return true;
      } 
      // header("Content-Type: application/json");
  echo json_encode($byte,JSON_PRETTY_PRINT);
      // echo(print_r($byte));
  }
  
 

  

fetch_data($conn, $u)

?>