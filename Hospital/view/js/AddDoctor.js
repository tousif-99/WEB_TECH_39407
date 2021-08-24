function isvalid()
             {
                 var flag = true;

                 var fnameErr=document.getElementById("fnameErr");
                 var lnameErr=document.getElementById("lnameErr");
                 var genderErr=document.getElementById("genderErr");
                 var specialityErr=document.getElementById("specialityErr");
                 var phoneErr=document.getElementById("phoneErr");
                 var userNameErr=document.getElementById("userNameErr");
                 var passwordErr=document.getElementById("passwordErr");

                 var fname=document.forms["adForm"]["fname"].value;
                 var lname=document.forms["adForm"]["lname"].value;
                 var gender=document.forms["adForm"]["gender"].value;
                 var speciality=document.forms["adForm"]["speciality"].value;
                 var phone=document.forms["adForm"]["phone"].value;
                 var username=document.forms["adForm"]["userName"].value;
                 var password=document.forms["adForm"]["password"].value;

                 fnameErr.innerHTML="";
                 lnameErr.innerHTML="";
                 genderErr.innerHTML="";
                 phoneErr.innerHTML="";
                 specialityErr.innerHTML="";
                 userNameErr.innerHTML="";
                 passwordErr.innerHTML="";

                 if(fname ==="")
                {
                    fnameErr.innerHTML="* First name can not be empty.";
                    flag=false;
                }
                
                if(lname ==="")
                {
                    lnameErr.innerHTML="* Last name can not be empty.";
                    flag=false;
                }
                if(gender ==="")
                {
                    genderErr.innerHTML="* Gender can not be empty.";
                    flag=false;
                }
                if(speciality ==="")
                {
                    specialityErr.innerHTML="* Speciality can not be empty.";
                    flag=false;
                }
                
                if(phone ==="")
                {
                    phoneErr.innerHTML="* Phone number can not be empty.";
                    flag=false;
                }
                if(username ==="")
                {
                    userNameErr.innerHTML="* User name can not be empty.";
                    flag=false;
                }

                if(password ==="")
                {
                    passwordErr.innerHTML="* Password can not be empty.";
                    flag=false;
                }
                
                return flag;

             }