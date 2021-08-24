<?php //require "../controller/Php-validation/LoginController.php" ;
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/Php-validation/LoginController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/Login.css">
    <script src="../view/js/Login.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="lmain">

    <form  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST" name="loginForm" onsubmit="return isvalid()" >
            
            <h1>Login Form</h1>
            <fieldset>
                <Legend>Log in :</Legend>
                
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $uid; ?>"><span id="userNameErr" style="color : red;"><?php echo $userNameErr; ?></span>
                <br><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" pattern=".{4,}" ><span id="passwordErr" style="color : red;"><?php echo $passwordErr; ?></span>
                 <br><br>
                 <input type="checkbox" name="rememberme" id="rememberme">
                 <label for="rememberme">Remember me</label>
                 <br><br>
                <input class="lbtn" type="submit" value="login">
                <span id="successfulMessage" style="color : red;"><?php echo $successfulMessage; ?></span>
                <span id="errorMessage" style="color : red;"><?php echo $errorMessage; ?></span>
                <br>
                <br>

            </fieldset>

        </form>
        <br>

        <p><a href="../view/Registration.php"><b style="color:red;">Click here</b></a>  for registration.</p>
        <br><br>
        </div>
</body>
</html>