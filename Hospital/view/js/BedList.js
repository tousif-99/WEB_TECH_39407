function getData(blForm)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onload =function(){
        console.log(this.responseText);
        var json = JSON.parse(this.responseText);
        makeTable(json);
    }
    xhttp.open("GET", blForm.action + "?cabinNo=" +blForm.cabinNo.value,true);
    xhttp.send();
}

function makeTable(jsonData)
{
    var tableData = document.getElementById("data");
    tableData.innerHTML="";
    
    for(var i=0;i<jsonData.length;i++)
    {
        var row =`<tr>
                  <td>${jsonData[i].cabin_id}</td>
                  <td>${jsonData[i].cabin_no}</td>
                  <td>${jsonData[i].cabin_type}</td>
                  <td>${jsonData[i].cabin_perDayRent}</td>
                  <td>${jsonData[i].cabin_bookingBy}</td>
                  <td>${jsonData[i].cabin_doctorId}</td>
                  </tr>`;
                  tableData.innerHTML+=row;
    }
}