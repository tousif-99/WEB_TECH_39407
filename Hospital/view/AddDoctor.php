<?php 
//require "../model/DbRead.php";
//require "../controller/Php-validation/EditProfileController.php" ;
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/php-validation/AddDoctorController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/AddDoctor.js"></script>
    <link rel="stylesheet" href="../view/css/AddDoctor.css">
    <title>Add Doctor</title>
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
                   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" name="adForm" method="POST" onsubmit="return isvalid()">
                    <div class="binformation"><h1>Basic Information</h1>
                        <hr></div>
                        
                        <div class="bdetails">
                            <div class="r-l-left">
                            <span><label for="fname"><b>First Name :</b></label></span>
                            <input type="text" name="fname" id="fname" value="<?php echo $fname ;?>">
                            <br><span id="fnameErr" style="color : red;"><?php echo $fnameErr; ?></span>
                            
                            <br>
                            <span><label for="gender"><b>Gender :</b></label></span>
                            <select name="gender" id="gender" >
                            <option value="<?php echo $gender;?>">Select</option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                            <option value="other">other</option>
                            </select>
                            <br><span id="genderErr" style="color : red;"><?php echo $genderErr; ?></span>
                            <br>
                            <label for="phone">Phone:</label>
                            <input type="tel" id="phone" name="phone" placeholder="12345-123456"  value="<?php echo $phone;?>">
                            <span id="phoneErr" style="color : red;"><?php echo $phonNumberErr; ?></span>
                        
                            </div>
                            <div class="r-l-right">
                            <span><label for="lname"><b>Last Name :</b></label></span>
                            <input type="text" name="lname" id="lname" value="<?php echo $lname; ?>">
                            <br><span id="lnameErr" style="color : red;"><?php echo $lnameErr; ?></span>
                            <br>
                            <span><label for="speciality"><b>Speciality :</b></label></span>
                            <input type="text" name="speciality" id="speciality" value="<?php echo $speciality;?>">
                            <br><span id="specialityErr" style="color : red;"><?php echo $specialityErr; ?></span>
                            <br>
                            
                            </div>
                        </div>
                    <div class="cinformation">
                        <h1>Account Information</h1>
                        <hr>
                    </div>
                        <div class="cdetails">
                            <div class="r-l-left">
                            <label for="userName">Username:</label>
                            <input type="text" id="userName" name="userName"  value=""><span id="userNameErr" style="color : red;"></span>
                            <br>
                            </div>
                            <div class="r-l-right">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password"  ><span id="passwordErr" style="color : red;"></span>
                            <br>
                            </div>
                            
                    </div>
                   
                    <input class="ep-btn" type="submit" value="submit">
            
                    <span style =" color : green;"><?php echo "<b>" .$successfulMessage  ."</b>"; ?></span>
                    <span style =" color : green;"><?php echo "<b>" .$errorMessage  ."</b>"; ?></span>
                </form>
            </div>
                <div class="right-right">
                </div>
            </div>
            
        </div>
        <div class="footerdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Footer.php');?>
        </div>
        
    </div>
    
</body>
</html>