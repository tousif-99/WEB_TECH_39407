function isvalid()
             {
                 var flag = true;

                 var fnameErr=document.getElementById("fnameErr");
                 var lnameErr=document.getElementById("lnameErr");
                 var genderErr=document.getElementById("genderErr");
                 var dobErr=document.getElementById("dobErr");
                 var phoneErr=document.getElementById("phoneErr");
                 var userNameErr=document.getElementById("userNameErr");
                 var passwordErr=document.getElementById("passwordErr");

                 var fname=document.forms["apForm"]["fname"].value;
                 var lname=document.forms["apForm"]["lname"].value;
                 var gender=document.forms["apForm"]["gender"].value;
                 var dob=document.forms["apForm"]["dob"].value;
                 var phone=document.forms["apForm"]["phone"].value;
                 var username=document.forms["apForm"]["userName"].value;
                 var password=document.forms["apForm"]["password"].value;

                 fnameErr.innerHTML="";
                 lnameErr.innerHTML="";
                 genderErr.innerHTML="";
                 phoneErr.innerHTML="";
                 dobErr.innerHTML="";
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
                if(dob ==="")
                {
                    dobErr.innerHTML="* Date of birth can not be empty.";
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