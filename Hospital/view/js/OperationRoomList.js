function getData(olForm)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onload =function(){
        console.log(this.responseText);
        var json = JSON.parse(this.responseText);
        makeTable(json);
    }
    xhttp.open("GET", olForm.action + "?otNo=" +olForm.otNo.value,true);
    xhttp.send();
}

function makeTable(jsonData)
{
    var tableData = document.getElementById("data");
    tableData.innerHTML="";
    
    for(var i=0;i<jsonData.length;i++)
    {
        var row =`<tr>
                  <td>${jsonData[i].ot_id}</td>
                  <td>${jsonData[i].ot_roomNo}</td>
                  <td>${jsonData[i].ot_roomType}</td>
                  <td>${jsonData[i].ot_perDayRent}</td>
                  <td>${jsonData[i].ot_bookingBy}</td>
                  <td>${jsonData[i].ot_doctorId}</td>
                  </tr>`;
                  tableData.innerHTML+=row;
    }
}