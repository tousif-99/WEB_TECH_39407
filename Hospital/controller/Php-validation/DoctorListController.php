<?php 

    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
    // require "../model/DbRead.php";
    // require "C:/xampp/htdocs/Hospital/model/DbRead.php";

    $username=empty($_GET['username']) ? "" : $_GET['username'];
    if(empty($username))
    {
        $doctorList= getAllDoctor();
    }
    else{
        $doctorList= getDoctor($username);
        
    }

   
    $arr = array();
    for($i=0 ; $i < count($doctorList); $i++)
    {
        array_push($arr,array('doctor_id'=>$doctorList[$i]["doctor_id"],
        'doctor_firstName'=>$doctorList[$i]["doctor_firstName"],
        'doctor_lastName'=>$doctorList[$i]["doctor_lastName"],
        'doctor_gender'=>$doctorList[$i]["doctor_gender"],
        'doctor_speciality'=>$doctorList[$i]["doctor_speciality"],
        'doctor_phone'=>$doctorList[$i]["doctor_phone"],
        'doctor_username'=>$doctorList[$i]["doctor_username"],
        'doctor_password'=>$doctorList[$i]["doctor_password"]
    ));
        
    }
    echo json_encode($arr);

?>