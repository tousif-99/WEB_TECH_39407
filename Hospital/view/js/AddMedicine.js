function isvalid()
{
    var flag = true;
                 var medicineNameErr=document.getElementById("medicineNameErr");
                 var medicinePerUnitPriceErr=document.getElementById("medicinePerUnitPriceErr");
                 var medicineQuantityErr=document.getElementById("medicineQuantityErr");

                 var medicineName=document.forms["amForm"]["medicineName"].value;
                 var medicinePerUnitPrice=document.forms["amForm"]["medicinePerUnitPrice"].value;
                 var medicineQuantity=document.forms["amForm"]["medicineQuantity"].value;

                 medicineNameErr.innerHTML="";
                 medicinePerUnitPriceErr.innerHTML="";
                 medicineQuantityErr.innerHTML="";
                 
                if(medicineName ==="")
                {
                    medicineNameErr.innerHTML="* Medicine Name can not be empty.";
                    flag=false;
                }

                if(medicinePerUnitPrice ==="")
                {
                    medicinePerUnitPriceErr.innerHTML="* Medicine unit price can not be empty.";
                    flag=false;
                }
                if(medicineQuantity ==="")
                {
                    medicineQuantityErr.innerHTML="*Medicine quantity can not be empty.";
                    flag=false;
                }

                return flag;
}