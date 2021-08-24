<?php //require "../controller/Php-validation/RegistrationController.php" ;
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/Php-validation/RegistrationController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/Registration.js"></script>
    <link rel="stylesheet" href="../view/css/Registration.css">
    <title>Registration</title>
</head>
<body>
    <div class="main">
        <form action="<?php  htmlspecialchars($_SERVER['PHP_SELF'])?>" name="registerForm" method="POST" onsubmit="return isvalid()">
        
                <div class="r">Registration Form</div>
        <br>
            
        <fieldset class="field">
                <legend>Basic Information:</legend>
                <label for="fname">First Name:</label>
                <input type="text" id="fname" name="fname"  value="<?php echo $fname; ?>" ><span id="fnameErr" style="color : red;"><?php echo $fnameErr; ?></span>
                <br><br>
                <label for="lname">Last Name:</label>
                <input type="text" id="lname" name="lname" value="<?php echo $lname; ?>" ><span id="lnameErr" style="color : red;"><?php echo $lnameErr; ?></span>
                <br><br>
                <label for ="gender">Gender :</label>
                <br>
                <input type="radio" id="male" name="gender" value="male" >
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="female" >
                <label for="female">Female</label><br>
                <input type="radio" id="other" name="gender" value="other" >
                <label for="other">Other</label>
                <span id="genderErr" style="color : red;"><?php echo $genderErr; ?></span>
                <br><br>
                <label for="dob">Date of Birth:</label>

                <input type="date" id="dob" name="dob"  value="<?php echo $dob; ?>"><span id="dobErr" style="color : red;"><?php echo $dobErr; ?></span>
                <br><br>
                
                
                <br>
                <br>

            </fieldset>
            <br>

            <fieldset class="field">
                <legend>Contact Information:</legend>
                <label for="presentAddress">Present Address:</label>
                <br>
                <textarea name="presentAddress" id="presentAddress" cols="40" rows="3" ><?php echo $presentAddress; ?></textarea>
                <span id="presentAddressErr" style="color : red;"><?php echo $presentAddressErr; ?></span>
                <br>
               
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="Digit only"  value="<?php echo $phone;?>">
                <span id="phoneErr" style="color : red;"><?php echo $phonNumberErr; ?></span>
                <br><br>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="...@gmail.com"  value="<?php echo $email; ?>" ><span id="emailErr" style="color : red;"><?php echo $emailErr; ?></span>
                <br><br>
                
            </fieldset>
            <br>

            <fieldset class="field" id="fieldLast">
                <legend>Account Information:</legend>
                <label for="userName">Username:</label>
                <input type="text" id="userName" name="userName"  value="<?php echo $userName;?>"><span id="userNameErr" style="color : red;"></span>
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password"  ><span id="passwordErr" style="color : red;"></span>
                <br><br>
                <input class="btn" type="submit" value="Register"><br><br>
                <a href="../Index.html">Go to Home</a>
                <br><br>
                <span style =" color : green;"><?php echo "<b>" .$successfulMessage  ."</b>"; ?></span>
                <span style =" color : green;"><?php echo "<b>" .$errorMessage  ."</b>"; ?></span>
            </fieldset>
            <br>

        </form>
    </div>
</body>
</html>