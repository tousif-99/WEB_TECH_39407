function makeTable(jsonData)
{
    var tableData = document.getElementById("data");
    tableData.innerHTML="";
    
    for(var i=0;i<jsonData.length;i++)
    {
        var row ='<tr>
                  <td>${jsonData[i].medicine_id}</td>
                  <td>${jsonData[i].medicine_name}</td>
                  <td>${jsonData[i].medicine_perUnitPrice}</td>
                  <td>${jsonData[i].medicine_quantity}</td>
                  </tr>';
                  tableData.innerHTML+=row;``
    }
}