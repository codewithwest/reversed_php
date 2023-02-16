<?php
    include('../connection/conn.php');
    include('../../auth.php');  
    if ($_SESSION['loggedin'] == true) {
	session_start();
}
    
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
                <div class="navname">
                    <p><?php echo htmlspecialchars($_SESSION['username']); ?></p>
                </div>
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
    <div class="updateUserN">
    <div class="edit-username">
        <label for="update_username"><p>Username:</p></label>
        <input type="text" value="<?php echo htmlspecialchars($_SESSION['username']); ?>"  name="update_username" id="update_username">
    </div>
    <div class="errMessage"> 
        <p id="user_name_update_err"></p>
    </div>
    
    </div>
    
    <div class="updateEmail">
    <div class="edit-email">
    <label for="update_email"><p>Email:</p></label>
        <input type="text" value="<?php echo htmlspecialchars($_SESSION['email']); ?>"  name="update_email" id="update_email">
     </div>
     <div class="errMessage"><p id="email_update_err"></p>
        </div>
        </div>
     
       
        <div class="edit_submit">
        <input type="submit" value="Update Data" id="logOutForm">
        </div>
    </form>
    <div class="logOutDiv">

        <form action="../php/logout.php" method="POST">
        <input value="LOG OUT" type="submit" id="logOutBtn">
    </form>
    </div>
    <div class="deleteAccount">
    <form action="../php/deleteAccount.php" method="POST">
        <input value="DELETE ACCOUNT" type="submit" id="delAccountBtn">
    </form>
    
    </div>
    
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
<script src="../js/dashboard.js" type="module"></script>
<script src="../js/jquery-3.6.3.js"></script>

    

</html>
 