<?php 
//require "../model/DbRead.php";
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');

    if(!isset($_SESSION))
    {
        session_start();
        
    }
    $userName=isset($_SESSION['userName']) ? $_SESSION['userName'] : "";
    
    $user=getUser($userName);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/Profile.css">
    <title>Profile</title>
</head>
<body>
    <div class="container">
        
        <div class="headdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Header.php');?>
        </div>
        <div class="bodydiv">
        
            <div class="left"><?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/SideBar.php');?></div>
            <div class="right">
                <div class="right-left">
                   
                    <div class="binformation"><h1>Basic Information</h1>
                        <hr></div>
                        
                        <div class="bdetails">
                            <div class="r-l-left">
                            <span><label for="fname"><b>First Name :</b></label></span>
                            <span><?php echo $user["0"]["admin_firstName"];?></span>
                            <br>
                            <span><label for="gender"><b>Gender :</b></label></span>
                            <span><?php echo $user["0"]["admin_gender"];?></span>
                            <br>
                            <span><label for="dob"><b>Date Of Birth :</b></label></span>
                            <span><?php echo $user["0"]["admin_dob"];?></span>
                            </div>
                            <div class="r-l-right">
                            <span><label for="fname"><b>Last Name :</b></label></span>
                            <span><?php echo $user["0"]["admin_lastName"];?></span>
                            <br>
                            <span><label for="religion"><b>Religion :</b></label></span>
                            <span><?php echo $user["0"]["admin_religion"];?></span>
                            </div>
                        </div>
                    <div class="cinformation">
                        <h1>Contact Information</h1>
                        <hr>
                    </div>
                        <div class="cdetails">
                            <div class="r-l-left">
                            <span><label for="presentAddress"><b>Present Address :</b></label></span>
                            <span><?php echo $user["0"]["admin_presentAddress"];?></span>
                            <br><br>
                            <span><label for="phone"><b>Phone Number :</b></label></span>
                            <span><?php echo $user["0"]["admin_phone"];?></span>
                            <br>
                            </div>
                            <div class="r-l-right">
                            <span><label for="parmanentAddress"><b>Parmanent Address :</b></label></span>
                            <span><?php echo $user["0"]["admin_parmanentAddress"];?></span>
                            <br><br>
                            <span><label for="email"><b>Email :</b></label></span>
                            <span><?php echo $user["0"]["admin_email"];?></span>
                            </div>
                        
                   
                </div>
            </div>
                <div class="right-right">
                <div class="image1">
                        <img src="../view/ImageFile/<?php echo $user[0]["admin_image"];?>" alt="Profile picture">
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footerdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Footer.php');?> 
        </div>
        
    </div>
    
</body>
</html>