<?php 

    require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbRead.php');
    // require "../model/DbRead.php";
    // require "C:/xampp/htdocs/Hospital/model/DbRead.php";

    $username=empty($_GET['username']) ? "" : $_GET['username'];
    if(empty($username))
    {
        $patientList= getAllPatient();
    }
    else{
        $patientList= getPatient($username);
        
    }

   
    $arr = array();
    for($i=0 ; $i < count($patientList); $i++)
    {
        array_push($arr,array('patient_id'=>$patientList[$i]["patient_id"],
        'patient_firstName'=>$patientList[$i]["patient_firstName"],
        'patient_lastName'=>$patientList[$i]["patient_lastName"],
        'patient_gender'=>$patientList[$i]["patient_gender"],
        'patient_dob'=>$patientList[$i]["patient_dob"],
        'patient_phoneNumber'=>$patientList[$i]["patient_phoneNumber"],
        'patient_username'=>$patientList[$i]["patient_username"],
        'patient_password'=>$patientList[$i]["patient_password"]
    ));
        
    }
    echo json_encode($arr);

?>