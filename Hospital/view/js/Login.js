function isvalid()
             {
                 var flag = true;
                 var userNameErr=document.getElementById("userNameErr");
                 var passwordErr=document.getElementById("passwordErr");

                 var username=document.forms["loginForm"]["username"].value;
                 var password=document.forms["loginForm"]["password"].value;

                 userNameErr.innerHTML="";
                 passwordErr.innerHTML="";
                 
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