function isvalid(){
                var flag = true;
                 var currentPasswordErr=document.getElementById("currentPasswordErr");
                 var newPasswordErr=document.getElementById("newPasswordErr");
                 var rePasswordErr=document.getElementById("rePasswordErr");

                 var currentPassword=document.forms["cpForm"]["currentPassword"].value;
                 var newPassword=document.forms["cpForm"]["newPassword"].value;
                 var rePassword=document.forms["cpForm"]["rePassword"].value;

                 currentPasswordErr.innerHTML="";
                 newPasswordErr.innerHTML="";
                 rePasswordErr.innerHTML="";
                 
                if(currentPassword ==="")
                {
                    currentPasswordErr.innerHTML="* Current Password can not be empty.";
                    flag=false;
                }

                if(newPassword ==="")
                {
                    newPasswordErr.innerHTML="* New Password can not be empty.";
                    flag=false;
                }
                if(rePassword ==="")
                {
                    rePasswordErr.innerHTML="* Re type Password can not be empty.";
                    flag=false;
                }

                return flag;
}