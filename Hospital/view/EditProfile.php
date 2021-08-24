<?php 
//require "../model/DbRead.php";
//require "../controller/Php-validation/EditProfileController.php" ;
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/php-validation/EditProfileController.php');

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
    <link rel="stylesheet" href="../view/css/EditProfile.css">
    <title>Edit profile</title>
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
                   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" name="registerForm" method="POST">
                    <div class="binformation"><h1>Basic Information</h1>
                        <hr></div>
                        
                        <div class="bdetails">
                            <div class="r-l-left">
                            <span><label for="fname"><b>First Name :</b></label></span>
                            <input type="text" name="fname" id="fname" value="<?php echo $user["0"]["admin_firstName"];?>">
                            <br><span id="fnameErr" style="color : red;"><?php echo $fnameErr; ?></span>
                            
                            <br>
                            <span><label for="gender"><b>Gender :</b></label></span>
                            <select name="gender" id="gender" >
                            <option value="<?php echo $user["0"]["admin_gender"];?>"><?php echo $user["0"]["admin_gender"];?></option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                            <option value="other">other</option>
                            </select>
                            <br><span id="genderErr" style="color : red;"><?php echo $genderErr; ?></span>
                            <br>
                            <span><label for="dob"><b>Date Of Birth :</b></label></span>
                            <input type="date" name="dob" id="dob" value="<?php echo $user["0"]["admin_dob"];?>">
                            <br><span id="dobErr" style="color : red;"><?php echo $dobErr; ?></span>
                        
                            </div>
                            <div class="r-l-right">
                            <span><label for="lname"><b>Last Name :</b></label></span>
                            <input type="text" name="lname" id="lname" value="<?php echo $user["0"]["admin_lastName"];?>">
                            <br><span id="lnameErr" style="color : red;"><?php echo $lnameErr; ?></span>
                            <br>
                            <span><label for="religion"><b>Religion :</b></label></span>
                            <select name="religion" id="religion" >
                            <option value="<?php echo $user["0"]["admin_religion"];?>"><?php echo $user["0"]["admin_religion"];?></option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Cristan">Cristan</option>
                            <option value="Buddhism">Buddhism</option>
                            <br></select><span id="religionErr" style="color : red;"><?php echo $religionErr; ?></span>
                            </div>
                        </div>
                    <div class="cinformation">
                        <h1>Contact Information</h1>
                        <hr>
                    </div>
                        <div class="cdetails">
                            <div class="r-l-left">
                            <span><label for="presentAddress"><b>Present Address :</b></label></span>
                            <input type="text" name="presentAddress" id="presentAddress" value="<?php echo $user["0"]["admin_presentAddress"];?>">
                            <br><br>
                            <span><label for="phone"><b>Phone Number :</b></label></span>
                            <input type="tel" name="phone" id="phone" value="<?php echo $user["0"]["admin_phone"];?>">
                            <br><span id="phoneErr" style="color : red;"><?php echo $phonNumberErr; ?></span><br>
                            <br>
                            </div>
                            <div class="r-l-right">
                            <span><label for="parmanentAddress"><b>Parmanent Address :</b></label></span>
                            <input type="text" name="parmanentAddress" id="parmanentAddress" value="<?php echo $user["0"]["admin_parmanentAddress"];?>">
                            <br><br>
                            <span><label for="email"><b>Email :</b></label></span>
                            <input type="email" name="email" id="email" value="<?php echo $user["0"]["admin_email"];?>">
                            <br><span id="emailErr" style="color : red;"><?php echo $emailErr; ?></span><br>
                            </div>
                            
                    </div>
                    <input class="ep-btn" type="submit" value="submit">
            
                    <span style =" color : green;"><?php echo "<b>" .$successfulMessage  ."</b>"; ?></span>
                    <span style =" color : green;"><?php echo "<b>" .$errorMessage  ."</b>"; ?></span>
                </form>
            </div>
                <div class="right-right">
                    <div class="image1">
                        <img src="../view/ImageFile/<?php echo $user[0]["admin_image"];?>" alt="Profile picture">
                        <br>
                        <a href="../view/Image.php">Change image</a>
                        
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