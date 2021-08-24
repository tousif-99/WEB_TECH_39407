function isvalid()
             {
                 var flag = true;

                 var fnameErr=document.getElementById("fnameErr");
                 var lnameErr=document.getElementById("lnameErr");
                 var genderErr=document.getElementById("genderErr");
                 var dobErr=document.getElementById("dobErr");
                 var religionErr=document.getElementById("religionErr");
                 var presentAddressErr=document.getElementById("presentAddressErr");
                 var parmanentAddressErr=document.getElementById("parmanentAddressErr");
                 var phoneErr=document.getElementById("phoneErr");
                 var emailErr=document.getElementById("emailErr");
                 var userNameErr=document.getElementById("userNameErr");
                 var passwordErr=document.getElementById("passwordErr");

                 var fname=document.forms["registerForm"]["fname"].value;
                 var lname=document.forms["registerForm"]["lname"].value;
                 var gender=document.forms["registerForm"]["gender"].value;
                 var dob=document.forms["registerForm"]["dob"].value;
                 var religion=document.forms["registerForm"]["religion"].value;
                 var presentAddress=document.forms["registerForm"]["presentAddress"].value;
                 var parmanentAddress=document.forms["registerForm"]["parmanentAddress"].value;
                 var phone=document.forms["registerForm"]["phone"].value;
                 var email=document.forms["registerForm"]["email"].value;
                 var username=document.forms["registerForm"]["userName"].value;
                 var password=document.forms["registerForm"]["password"].value;

                 fnameErr.innerHTML="";
                 lnameErr.innerHTML="";
                 genderErr.innerHTML="";
                 dobErr.innerHTML="";
                 religionErr.innerHTML="";
                 parmanentAddressErr.innerHTML="";
                 presentAddressErr.innerHTML="";
                 phoneErr.innerHTML="";
                 emailErr.innerHTML="";
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
                if(religion ==="")
                {
                    religionErr.innerHTML="* Religion can not be empty.";
                    flag=false;
                }
                if(presentAddress ==="")
                {
                    presentAddressErr.innerHTML="* Present Address can not be empty.";
                    flag=false;
                }
                if(parmanentAddress ==="")
                {
                    parmanentAddressErr.innerHTML="* Parmanent address can not be empty.";
                    flag=false;
                }
                if(phone ==="")
                {
                    phoneErr.innerHTML="* Phone number can not be empty.";
                    flag=false;
                }
                if(email ==="")
                {
                    emailErr.innerHTML=" Email can not be empty js.";
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