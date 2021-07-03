<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
</head>
<body>

<style>
.error {color: #FF0000;}
</style>

<?php 

session_start();
if (isset($_SESSION['user_name'])){header("location:Welcome.php");}
else
{
  require 'header.php';
}

$retrive_email="tousifdhk1999@gmail.com";
$emailErr = "";
$email = $msg ="";

if (isset($_POST['email'])) {
  if ($_POST['email']==$retrive_email) 
  {
    $msg ="<small>We will sent you an Email</small>";
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  if (empty($_POST["email"])) 
  {
    $emailErr = "Email is required";
  }
  else 
  {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
      $email="";
    }
    else if($_POST['email']!=$retrive_email)
    {
      $emailErr ="Invalid Email"; 
    }
  }
}

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
 ?>
<div style="margin-left: 30%; margin-top: 15%;">
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
 <fieldset style="width: 500px">
  <legend>Forgot Password</legend>

  <label for="email">Enter Email :</label>
  <input type="email" id="email" name="email">
  <span class="error"> <?php echo $emailErr;?></span><hr>

  <input type="submit" value="Submit">
 </fieldset>
</form> 
<?php 
echo $msg;?>
</div>

<?php require 'footer.php';?>
</body>
</html>