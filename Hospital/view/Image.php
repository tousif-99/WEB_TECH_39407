<?php 
    
    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/controller/php-validation/ImageController.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/Image.css">
    <!-- <script src="js/ChangePassword.js"></script> -->
    <title>Image Upload</title>
</head>
<body>
    <div class="container">
        
        <div class="headdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Header.php');?>
        </div>
        <div class="bodydiv">
        
            <div class="left"><?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/SideBar.php');?></div>
            <div class="right"> 
                <div class="form1">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="POST"  enctype="multipart/form-data">
                    <label for="fileToUpload">Uplaod Your Image:</label><br>
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="upload" name="submit">
                </form>
                <br>
                <span id="successfulMessage" style="color : red;"><?php echo $successfulMessage; ?></span>
                <span id="errorMessage" style="color : red;"><?php echo $errorMessage; ?></span>
                </div>
                
                
                
            </div>
        </div>
        <div class="footerdiv">
        <?php require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/view/Footer.php');?>
        </div>
        
    </div>
    
</body>
</html>