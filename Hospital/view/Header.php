<?php 
     if(!isset($_SESSION))
     {
         session_start();
         
     }
    $userName=isset($_SESSION['userName']) ? $_SESSION['userName'] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    
    <link rel="stylesheet" href="../view/css/Header.css">
    <title>header</title>
</head>

<body>
    <div class="navContainer">
        <div class="hName"><span><i class="fas fa-hospital-alt" aria-hidden="true"></i></span><span> Hospital Management </span> </div>
        <div class="links">
            <ul>
                
                <li><a href="Profile.php"><?php echo $userName;?></a></li>
                <li><a href="EditProfile.php">Edit Profile</a></li>
                <li><a href="ChangePassword.php">Change Password</a></li>
                <li><a href="Logout.php">Logout</a></li>
                
            </ul>
        </div>
</div>
    
    
</body>
</html>