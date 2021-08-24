<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
if(!isset($_SESSION))
    {
        session_start();
        
    }
    $userName=isset($_SESSION['userName']) ? $_SESSION['userName'] : "";
    
    $user=getUser($userName);

$successfulMessage = $errorMessage = ''; 
if(isset($_POST["submit"]))
{ 
    $file = $_FILES['fileToUpload'];
    $fileName = $_FILES['fileToUpload']['name'];
    $fileTmpName = $_FILES['fileToUpload']['tmp_name'];
    $fileSize = $_FILES['fileToUpload']['size'];
    $fileError = $_FILES['fileToUpload']['error'];
    $fileType = $_FILES['fileToUpload']['type'];
    $tmpExt = explode('.', $fileName);
    $fileExt = strtolower(end($tmpExt));
    $allowed = array('jpg', 'jpeg', 'png', 'bmp');
    if (in_array($fileExt, $allowed)) {
      if ($fileError == 0) {
        if ($fileSize < 10000000) {
          $fileNewName = uniqid($userName . "_") . "." . $fileExt;
          $fileDestination = $_SERVER['DOCUMENT_ROOT'] . '/HOSPITAL/view/ImageFile/' . $fileNewName;
          move_uploaded_file($fileTmpName, $fileDestination);
          $result=storeImage($userName,$fileNewName);
          if($result)
          {
              $successfulMessage="Image Upload successful";
          }
          else{
              $errorMessage="Image upload faild";
          }
        } else {
          $errorMessage = "File is Too Big";
        }
      } else {
        $errorMessage = "Something Went wrong";
      }
    } else {
      $errorMessage = "Wrong File Type";
    }
} 

?>