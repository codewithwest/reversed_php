<?php

    include('../connection/conn.php');
    include('../../auth.php');
    $_SESSION['loggedin'];
    if (!isset($_SESSION['loggedin'])) {
	echo $_SESSION['loggedin'];
	exit;
}
    $displayUsername = $_SESSION['username'];
    $query = "SELECT `email` FROM `accounts` WHERE `username` = '$displayUsername';";
    // runs query to database
    $result = mysqli_query($conn, $query);
    $currentEmail = mysqli_fetch_assoc($result);
   
    $mail = $currentEmail['email'];
    



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <!-- Page container -->
    <div class="container">
        <div class="navdis">
            <div class="comp-name">
                <p>REVERSED</p>
            </div>
            <div class="navlinks">
                <li><a>HOME</a></li>
                <li><a>ABOUT</a></li>
                <li><a>BOX</a></li>
            </div>
            <div class="nav-icon" id="nav-icon">
                <div class="navpic"></div>
                <!-- <div class="navname">
                    <p>User</p>
                </div> -->
            </div>
        </div>
        <div class="content">
            <div class="profile" id="profile">
                <div class="profileCollapse">
                    <button class="profileCollapseButton" id="profileCollapseButton">X</button>
                </div>
                <div class="profileHeader">
                    <p>YOUR PROFILE</p>
                </div>
                <div class="profileDetails">
    <form action="../php/dataUpdate.php" method="POST" id="updateForm">
    <div class="edit-username">
        <label for="update_username"><p>Username:</p></label>
        <input type="text" value="<?php echo htmlspecialchars($displayUsername); ?>"  name="update_username" value="10">
    </div>
    <div class="edit-email">
    <label for="update_email"><p>Email:</p></label>
        <input type="text" value="<?php echo htmlspecialchars($mail); ?>"  name="update_email">
     </div>
       
        <div class="edit_submit">
        <input type="submit" value="Update Data">
    </div>
    
        <button type="" id="logOutBtn">LogOut</button>
<!--
        <label for="Email">Update Name:</label>
        <input type="text" placeholder="New Name" name="update_name"><br><br> -->

    </form>
    </div>
             
            </div>
            <div class="the-divs">
            <div class="leftdiv">
                <div class="leftheader"> 
                </div>
                <div class="leftdesc">
                   
                </div>

            </div>
            <div class="rightdiv">
                <div class="leftheader"> 
                    
                </div>
                <div class="leftdesc">
                     
                </div>
               

            </div>
        </div>
        
        </div>
        <div class="footer"></div>
    </div>
</body>
<script src="../js/dashboard.js">
    
</script>
</html>
 