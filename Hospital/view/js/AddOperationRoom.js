function isvalid()
{
    var flag = true;
                 var otNoErr=document.getElementById("otNoErr");
                 var otTypeErr=document.getElementById("otTypeErr");
                 var otPerDayRentErr=document.getElementById("otPerDayRentErr");

                 var otNo=document.forms["aotForm"]["otNo"].value;
                 var otType=document.forms["aotForm"]["otType"].value;
                 var otPerDayRent=document.forms["aotForm"]["otPerDayRent"].value;

                 otNoErr.innerHTML="";
                 otTypeErr.innerHTML="";
                 otPerDayRentErr.innerHTML="";
                 
                if(otNo ==="")
                {
                    otNoErr.innerHTML="* Operation room no can not be empty.";
                    flag=false;
                }

                if(otType ==="")
                {
                    otTypeErr.innerHTML="* Operation room type can not be empty.";
                    flag=false;
                }
                if(otPerDayRent ==="")
                {
                    otPerDayRentErr.innerHTML="*Operation room per day rent can not be empty.";
                    flag=false;
                }

                return flag;
}