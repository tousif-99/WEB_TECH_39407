<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php 

session_start();

if (isset($_SESSION['user_name']))
{ require 'logged in dashboard.php';}
else
{
	require 'header.php';
}

 ?>
<img src="https://www.zilliondesigns.com/images/portfolio/healthcare-hospital/iStock-471629610-Converted.png" alt="Hospital logo" width="200" height="200">
<h1 style="text-align: center; margin: 2% 0;">Welcome to AIUB Hospital</h1>  	
<?php require 'footer.php';?>
</body>
</html>