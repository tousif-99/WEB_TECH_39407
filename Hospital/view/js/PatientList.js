function getData(plForm)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onload =function(){
        console.log(this.responseText);
        var json = JSON.parse(this.responseText);
        makeTable(json);
    }
    xhttp.open("GET", plForm.action + "?username=" +plForm.username.value,true);
    xhttp.send();
}

function makeTable(jsonData)
{
    var tableData = document.getElementById("data");
    tableData.innerHTML="";
    
    for(var i=0;i<jsonData.length;i++)
    {
        var row =`<tr>
                  <td>${jsonData[i].patient_id}</td>
                  <td>${jsonData[i].patient_firstName}</td>
                  <td>${jsonData[i].patient_lastName}</td>
                  <td>${jsonData[i].patient_gender}</td>
                  <td>${jsonData[i].patient_dob}</td>
                  <td>${jsonData[i].patient_phoneNumber}</td>
                  <td>${jsonData[i].patient_username}</td>
                  <td>${jsonData[i].patient_password}</td>
                  </tr>`;
                  tableData.innerHTML+=row;
    }
}