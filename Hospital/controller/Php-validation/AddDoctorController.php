<?php
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
            
     $fname=$lname=$gender=$speciality=$phone=$userName=$password="";
     $successfulMessage=$errorMessage="";
     $fnameErr=$lnameErr=$specialityErr=$genderErr=$phonNumberErr=$userNameErr=$passwordErr="";
     $flag=false;

     if($_SERVER['REQUEST_METHOD']=='POST')
            {
                
                if(empty($_POST['fname']))
                {
                    $fnameErr="* First name can not be  empty.";
                    $flag=true;
                    
                }
                
                if (!preg_match("/^([a-zA-Z]{2,}+)$/",$_POST['fname']))
                {
                    $fnameErr="*First name contain only character and can not less than 2 character.";
                    $flag=true;
                }
                if(empty($_POST['lname']))
                {
                    $lnameErr="* Last name can not be  empty.";
                    $flag=true;
                    
                }

                if (!preg_match("/^([a-zA-Z]{2,}+)$/",$_POST['lname']))
                {
                    $lnameErr="*Last name contain only character and can not less than 2 character.";
                    $flag=true;
                }
                if(empty($_POST['gender']))
                {
                    $genderErr="* Gender  can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['speciality']))
                {
                    $specialityErr="* Speciality can not be empty";
                    $flag=true;
                }
                if(empty($_POST['phone']))
                {
                    $phonNumberErr="* Phone number can not be empty";
                    $flag=true;
                }
                if (!preg_match("/^([0-9]{5}[0-9]{6}+)$/",$_POST['phone']))
                {
                    $phonNumberErr="*Phone number must 11 digit";
                    $flag=true;
                }
                if(empty($_POST['userName']))
                {
                    $userNameErr="* User name can not be empty.";
                    $flag=true;
                }
                

                if (!preg_match("/^([A-Za-z0-9]{3,}+)$/",$_POST['userName']))
                {
                    $userNameErr="*User name contain only character and digit and length at least 3.";
                    $flag=true;
                }
                if(empty($_POST['password']))
                {
                    $passwordErr="* Password can not be  empty.";
                    $flag=true;
                    
                }

                if (!preg_match("/^([A-Za-z0-9]{4,8}+)$/",$_POST['password']))
                {
                    $passwordErr="*Password contain only character and digit and length at least 3 to 8.";
                    $flag=true;
                }
                if(!$flag)
                {
                    $fname=test_input($_POST['fname']);
                    $lname=test_input($_POST['lname']);
                    $gender=test_input($_POST['gender']);
                    $speciality=test_input($_POST['speciality']);
                    $phone=test_input($_POST['phone']);
                    $userName=test_input($_POST['userName']);
                    $password=test_input($_POST['password']);

                     $result=addDoctor($fname,$lname,$gender,$speciality,$phone,$userName,$password);
                    //$result=true;
                    if($result)
                    {
                        $successfulMessage= "Successful";
                    }
                    else
                    {
                        $errorMessage="Unsuccessful";
                    }
                }
            }
            function test_input($data)
            {
                $data=trim($data);
                $data=stripcslashes($data);
                $data=htmlspecialchars($data);
                return $data;
            }

?>