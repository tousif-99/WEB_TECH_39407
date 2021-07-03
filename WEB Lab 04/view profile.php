<!DOCTYPE html>  
<html>  
<head>  
<title>Edit profile</title>
<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto;
}
</style> 
</head>  
<body>
<?php 

session_start();

if (isset($_SESSION['user_name'])){require 'logged in dashboard.php';}
else
{
  header("location:welcome.php");
} 

$data = file_get_contents("data.json");
$data = json_decode($data, true);
foreach($data as $row)  
{  
  $name = $row["name"];
  $email = $row["email"];
  $gender = $row["gender"];
  $dob = $row["dob"];
}
?> 
<div style="margin-left: 35%; margin-top: 1%;">
<fieldset class="grid-container," style="width: 500px">
<legend>PROFILE</legend>

<div style="float: left">
  <p>Name        :   <?php echo $name ?></p><hr>
  <p>Email        :   <?php echo $email ?></p><hr>
  <p>Gender        :   <?php echo $gender ?></p><hr>
  <p>Date of Birthday      :   <?php echo $dob ?></p>
</div>

<div style="float: right">
  <img style=" width: 85%" src="pic.png" alt="Profile Picture"> 
  <div style="text-align: center"> <a href="change profile picture.php" >Change</a></div>


<br><br><br><br><br><br><br>
<a href="Edit profile.php">Edit Profile</a>
</fieldset> 
</div>



<?php require 'footer.php';?>
</body>  
</html> 