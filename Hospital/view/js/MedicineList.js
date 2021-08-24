function getData(mlForm)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onload =function(){
        console.log(this.responseText);
        var json = JSON.parse(this.responseText);
        makeTable(json);
    }
    xhttp.open("GET", mlForm.action + "?medicineName=" +mlForm.medicineName.value,true);
    xhttp.send();
}

function makeTable(jsonData)
{
    var tableData = document.getElementById("data");
    tableData.innerHTML="";
    
    for(var i=0;i<jsonData.length;i++)
    {
        var row =`<tr>
                  <td>${jsonData[i].medicine_id}</td>
                  <td>${jsonData[i].medicine_name}</td>
                  <td>${jsonData[i].medicine_perUnitPrice}</td>
                  <td>${jsonData[i].medicine_quantity}</td>
                  </tr>`;
                  tableData.innerHTML+=row;
    }
}