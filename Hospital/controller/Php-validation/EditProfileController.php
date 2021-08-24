<?php
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
            if(!isset($_SESSION))
            {
                session_start();
                
            }
            $userName=isset($_SESSION['userName']) ? $_SESSION['userName'] : "";
     $fname=$lname=$gender=$dob=$religion=$presentAddress=$parmanentAddress=$phone=$email="";
     $successfulMessage=$errorMessage="";
     $fnameErr=$lnameErr=$genderErr=$dobErr=$religionErr=$presentAddressErr=$parmanentAddressErr=$phonNumberErr=$emailErr="";
     $flag=false;

     if($_SERVER['REQUEST_METHOD']=='POST')
            {
                

                
                if (!preg_match("/^([a-zA-Z]{2,}+)$/",$_POST['fname']))
                {
                    $fnameErr="*First name contain only character and can not less than 2 character.";
                    $flag=true;
                }

                if (!preg_match("/^([a-zA-Z]{2,}+)$/",$_POST['lname']))
                {
                    $lnameErr="*Last name contain only character and can not less than 2 character.";
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
                if (!preg_match("/^(.+@+.+.com+)$/",$_POST['email']))
                {
                    $emailErr="*Email pattern is invalid.";
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

                     $result=updateDetails($userName,$fname,$lname,$gender,$dob,$religion,$parmanentAddress,$presentAddress,$phone,$email);
                    //$result=true;
                    if($result)
                    {
                        $successfulMessage= "Details update Successful";
                    }
                    else
                    {
                        $errorMessage="Update Unsuccessful";
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