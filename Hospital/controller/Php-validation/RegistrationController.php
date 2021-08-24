<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');

        $fnameErr=$lnameErr=$genderErr=$dobErr=$religionErr=$presentAddressErr=$parmanentAddressErr=$phonNumberErr=$emailErr=$userNameErr=$passwordErr="";
        $fname=$lname=$gender=$dob=$religion=$presentAddress=$parmanentAddress=$phone=$email=$userName=$password="";
        $successfulMessage=$errorMessage="";

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
                if(empty($_POST['dob']))
                {
                    $dobErr="* Date of birth can not be  empty.";
                    $flag=true;
                    
                }
                if(empty($_POST['religion']))
                {
                    $religionErr="* Religion can not be empty";
                    $flag=true;
                }
                if(empty($_POST['presentAddress']))
                {
                    $presentAddressErr="* Present address can not be empty";
                    $flag=true;
                }
                if(empty($_POST['parmanentAddress']))
                {
                    $parmanentAddressErr="* Parmanent address can not be empty";
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
                if(empty($_POST['email']))
                {
                    $emailErr="* Email can not be  empty.";
                    $flag=true;
                    
                }

                if (!preg_match("/^(.+@+.+.com+)$/",$_POST['email']))
                {
                    $emailErr="*Email pattern is invalid.";
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
                    $dob=test_input($_POST['dob']);
                    $religion=test_input($_POST['religion']);
                    $presentAddress=test_input($_POST['presentAddress']);
                    $parmanentAddress=test_input($_POST['parmanentAddress']);
                    $phone=test_input($_POST['phone']);
                    $email=test_input($_POST['email']);
                    $userName=test_input($_POST['userName']);
                    $password=test_input($_POST['password']);
                    

                    $result=register($fname,$lname,$gender,$dob,$religion,$presentAddress,$parmanentAddress,$phone,$email,$userName,$password);

                    //$result=true;
                    if($result)
                    {
                        $successfulMessage= "Registration Successful";
                    }
                    else
                    {
                        $errorMessage="Registration Unsuccessful";
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