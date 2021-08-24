function getData(dlForm)
{
    var xhttp = new XMLHttpRequest();
    xhttp.onload =function(){
        console.log(this.responseText);
        var json = JSON.parse(this.responseText);
        makeTable(json);
    }
    xhttp.open("GET", dlForm.action + "?username=" +dlForm.username.value,true);
    xhttp.send();
}

function makeTable(jsonData)
{
    var tableData = document.getElementById("data");
    tableData.innerHTML="";
    
    for(var i=0;i<jsonData.length;i++)
    {
        var row =`<tr>
                  <td>${jsonData[i].doctor_id}</td>
                  <td>${jsonData[i].doctor_firstName}</td>
                  <td>${jsonData[i].doctor_lastName}</td>
                  <td>${jsonData[i].doctor_gender}</td>
                  <td>${jsonData[i].doctor_speciality}</td>
                  <td>${jsonData[i].doctor_phone}</td>
                  <td>${jsonData[i].doctor_username}</td>
                  <td>${jsonData[i].doctor_password}</td>
                  </tr>`;
                  tableData.innerHTML+=row;
    }
}