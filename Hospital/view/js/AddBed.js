function isvalid()
{
    var flag = true;
                 var cabinNoErr=document.getElementById("cabinNoErr");
                 var cabinTypeErr=document.getElementById("cabinTypeErr");
                 var cabinPerDayRentErr=document.getElementById("cabinPerDayRentErr");

                 var cabinNo=document.forms["abedForm"]["cabinNo"].value;
                 var cabinType=document.forms["abedForm"]["cabinType"].value;
                 var cabinPerDayRent=document.forms["abedForm"]["cabinPerDayRent"].value;

                 cabinNoErr.innerHTML="";
                 cabinTypeErr.innerHTML="";
                 cabinPerDayRentErr.innerHTML="";
                 
                if(cabinNo ==="")
                {
                    cabinNoErr.innerHTML="* Cabin no can not be empty.";
                    flag=false;
                }

                if(cabinType ==="")
                {
                    cabinTypeErr.innerHTML="* Cabin type can not be empty.";
                    flag=false;
                }
                if(cabinPerDayRent ==="")
                {
                    cabinPerDayRentErr.innerHTML="*Cabin per day rent can not be empty.";
                    flag=false;
                }

                return flag;
}