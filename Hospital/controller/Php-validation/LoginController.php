<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');

            $flag=false;
            $userNameErr=$successfulMessage=$errorMessage=$passwordErr="";
            $uid="";
            if(isset($_COOKIE['uid']))
            {
                $uid=$_COOKIE['uid'];
            }
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
            $userName=test_name($_POST['username']);
            $password=test_name($_POST['password']);

            if(empty($_POST['username']))
            {
                $userNameErr="* User name can not be empty.";
                $flag=true;
                
            }
            if(empty($_POST['password']))
            {
                $passwordErr="* Password can not be  empty.";
                $flag=true;
                
                
            }


            if(!$flag)
            {
                $result=login($userName,$password);

                if($result)
                {
                    if(isset($_POST['rememberme']))
                    {
                        setcookie("uid",$userName,time()+24*60*60);
                    }
                    if(!isset($_SESSION))
                    {
                        session_start();
                        
                    }
                    $_SESSION['userName']=$userName;
                    header("Location:Home.php");
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