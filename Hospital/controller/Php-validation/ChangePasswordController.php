<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');

            if(!isset($_SESSION))
            {
                session_start();
                
            }
            $userName=isset($_SESSION['userName']) ? $_SESSION['userName'] : "";

            $user=getUser($userName);
            $userPassword=$user["0"]["admin_password"];
            //  echo $userPassword;
            $flag=false;
            $currentPasswordErr=$newPasswordErr=$rePasswordErr=$successfulMessage=$errorMessage="";

            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                $currentPassword=test_name($_POST['currentPassword']);
                $newPassword=test_name($_POST['newPassword']);
                $rePassword=test_name($_POST['rePassword']);

            if(empty($_POST['currentPassword']))
            {
                $currentPasswordErr="* Current Password can not be empty.";
                $flag=true;
                
            }
            if(!($currentPassword==$userPassword))
            {
                $currentPasswordErr="Current password doesnot match";
                $flag=true;
            }
            if(empty($_POST['newPassword']))
            {
                $newPasswordErr="* New Password can not be empty.";
                $flag=true;
                
            }
            if (!preg_match("/^([A-Za-z0-9]{4,8}+)$/",$_POST['newPassword']))
                {
                    $newPasswordErr="*Password contain only character and digit and length at least 3 to 8.";
                    $flag=true;
                }
            if(empty($_POST['rePassword']))
            {
                $rePasswordErr="* Re Type Password can not be empty.";
                $flag=true;
                
            }
            if (!preg_match("/^([A-Za-z0-9]{4,8}+)$/",$_POST['rePassword']))
                {
                    $rePasswordErr="*Password contain only character and digit and length at least 3 to 8.";
                    $flag=true;
                }
            if(!($newPassword==$rePassword))
            {
                $rePasswordErr="Re type password does not match";
                $flag=true;
            }

            if(!$flag && $userPassword==$currentPassword && $newPassword==$rePassword)
            {
                $result=updatePassword($userName,$currentPassword,$newPassword);
                
                if($result)
                {
                    $successfulMessage="Password Change Successful";
                    // header("Location:Profile.php");
                }
                else
                {
                    $errorMessage="log in failed";
                }
                
            }
            

            }


            function test_name($data)
            {
            $data=trim($data);
            $data=stripcslashes($data);
            $data=htmlspecialchars($data);
            return $data;
            }

?>