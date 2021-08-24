<?php 
    //require "../controller/Php-validation/ChangePasswordController.php";
    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/php-validation/ChangePasswordController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/ChangePassword.css">
    <script src="js/ChangePassword.js"></script>
    <title>Change password</title>
</head>
<body>
    <div class="container">
        
        <div class="headdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Header.php');?>
        </div>
        <div class="bodydiv">
        
            <div class="left"><?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/SideBar.php');?></div>
            <div class="right"> 
                <div class="form1">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="cpForm" onsubmit="return isvalid()">
                    <div>
                    <label for="currentPassword">Current Password : </label>
                    <br>
                    <span><input type="password" name="currentPassword" id="currentPassword"></span>
                    <span id="currentPasswordErr" style="color : red;"><?php echo $currentPasswordErr; ?></span>
                    </div>
                    <br>
                    <div>
                        <label for="newPassword">New Password : </label>
                        <br>
                        <span><input type="password" name="newPassword" id="newPassword"></span>
                        <span id="newPasswordErr" style="color : red;"><?php echo $newPasswordErr; ?></span>
                    </div>
                    <br>
                    <div>
                        <label for="rePassword">Re Type Password : </label>
                        <br>
                        <span><input type="password" name="rePassword" id="rePassword"></span>
                        <span id="rePasswordErr" style="color : red;"><?php echo $rePasswordErr; ?></span>
                    </div>
                    <br><br>
                    <input class="cp-btn" type="submit" value="change">
                </form>
                <br>
                <span id="successfulMessage" style="color : red;"><?php echo $successfulMessage; ?></span>
                <span id="errorMessage" style="color : red;"><?php echo $errorMessage; ?></span>
                </div>
                
                
                
            </div>
        </div>
        <div class="footerdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Footer.php');?>
        </div>
        
    </div>
    
</body>
</html>