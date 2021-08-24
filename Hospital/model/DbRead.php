<?php 
require ($_SERVER['DOCUMENT_ROOT'].'/Hospital/model/DbConnect.php');

function register($fname,$lname,$gender,$dob,$religion,$presentAddress,$parmanentAddress,$phone,$email,$userName,$password)
{
    $connection=connection();
    $sql=$connection->prepare("INSERT INTO admin_information (admin_firstName,admin_lastName,admin_gender,admin_dob,admin_religion,admin_presentAddress,admin_parmanentAddress,admin_phone,admin_email,admin_userName,admin_password)
    VALUES(?,?,?,?,?,?,?,?,?,?,?)");
    $sql->bind_param("sssssssssss",$fname,$lname,$gender,$dob,$religion,$presentAddress,$parmanentAddress,$phone,$email,$userName,$password);
    return $sql->execute();
}

function login($userName,$password)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * FROM admin_information WHERE admin_userName = ? and admin_password = ?");
    $sql->bind_param("ss",$userName,$password);
    $sql->execute();
    $response=$sql->get_result();
    return $response->num_rows === 1;
}
function getUser($userName)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * FROM admin_information WHERE admin_userName = ?");
    $sql->bind_param("s",$userName);
    $sql->execute();
    $response=$sql->get_result();
    return $response->fetch_all(MYSQLI_ASSOC);
}
function updatePassword($userName,$currentPassword,$newPassword)
{
    $connection=connection();
    $sql=$connection->prepare("UPDATE admin_information SET admin_password = ? WHERE admin_userName = ? and admin_password = ?");
    $sql->bind_param("sss",$newPassword,$userName,$currentPassword);
    return $sql->execute();
    

}
function updateDetails($userName,$fname,$lname,$gender,$dob,$religion,$parmanentAddress,$presentAddress,$phone,$email)
{
    $connection=connection();
    $sql=$connection->prepare("UPDATE admin_information SET admin_firstname = ? ,admin_lastname = ?, admin_gender = ? ,admin_dob = ?,admin_religion = ?,admin_presentAddress = ?,admin_parmanentAddress = ? ,admin_phone = ?,admin_email = ? WHERE admin_userName = ?");
    $sql->bind_param("ssssssssss",$fname,$lname,$gender,$dob,$religion,$presentAddress,$parmanentAddress,$phone,$email,$userName);
    return $sql->execute();
}

function addMedicine($medicineName,$medicinePerUnitPrice,$medicineQuantity)
{
    $connection=connection();
    $sql=$connection->prepare("INSERT INTO admin_medicineInformation (medicine_name,medicine_perUnitPrice,medicine_quantity)
    VALUES(?,?,?)");
    $sql->bind_param("sdi",$medicineName,$medicinePerUnitPrice,$medicineQuantity);
    return $sql->execute();
}

function addcabin($cabinNo,$cabinType,$cabinPerDayRent)
{
    $connection=connection();
    $sql=$connection->prepare("INSERT INTO admin_cabinInformation (cabin_no,cabin_type,cabin_perDayRent)
    VALUES(?,?,?)");
    $sql->bind_param("isi",$cabinNo,$cabinType,$cabinPerDayRent);
    return $sql->execute(); 
}
function addot($otNo,$otType,$otPerDayRent)
{
    $connection=connection();
    $sql=$connection->prepare("INSERT INTO admin_operationRoomInformation (ot_roomNo,ot_roomType,ot_perDayRent)
    VALUES(?,?,?)");
    $sql->bind_param("isi",$otNo,$otType,$otPerDayRent);
    return $sql->execute(); 
}

function getAllMedicine()
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from admin_medicineInformation");
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

function getMedicine($medicineName)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from admin_medicineInformation WHERE medicine_name = ?");
    $sql->bind_param("s",$medicineName);
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function getAllCabin()
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from admin_cabinInformation");
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

function getCabin($cabinNo)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from admin_cabinInformation WHERE cabin_no = ?");
    $sql->bind_param("i",$cabinNo);
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

function getAllOt()
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from admin_operationRoomInformation");
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

function getOt($otNo)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from admin_operationRoomInformation WHERE ot_roomNo = ?");
    $sql->bind_param("i",$otNo);
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
function storeImage($userName,$fileNewName)
{
    $connection=connection();
    $sql=$connection->prepare("UPDATE admin_information SET admin_image = ? WHERE admin_userName = ?");
    $sql->bind_param("ss",$fileNewName,$userName);
    return $sql->execute();
}

function addDoctor($fname, $lname, $gender, $speciality,$phone, $userName, $password)
{
    $connection=connection();
    $sql=$connection->prepare("INSERT INTO doctor_information (doctor_firstName, doctor_lastName, doctor_gender, doctor_speciality,doctor_phone,
    doctor_username, doctor_password)
    VALUES(?,?,?,?,?,?,?)");
    $sql->bind_param("sssssss",$fname,$lname,$gender,$speciality,$phone,$userName,$password);
    return $sql->execute();
}
function addPatient($fname, $lname, $gender,$phone, $dob, $userName, $password)
{
    $connection=connection();
    $sql=$connection->prepare("INSERT INTO admin_patientInformation (patient_firstName,patient_lastName,patient_gender,patient_phoneNumber,patient_dob,patient_username,patient_password)
    VALUES(?,?,?,?,?,?,?)");
    $sql->bind_param("sssssss",$fname,$lname,$gender,$phone,$dob,$userName,$password);
    
    return $sql->execute();
    //return true;
}

function getAllDoctor()
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from doctor_information");
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

function getDoctor($username)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from doctor_information WHERE doctor_username = ?");
    $sql->bind_param("s",$username);
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}
// function deleteDoctor($username)
// {
//     $connection=connection();
//     $sql=$connection->prepare("DELETE from doctor_information WHERE doctor_username = ?");
//     $sql->bind_param("s",$username);
//      return $sql->execute();
// }


function getAllPatient()
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from admin_patientInformation");
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

function getPatient($username)
{
    $connection=connection();
    $sql=$connection->prepare("SELECT * from admin_patientInformation WHERE patient_username = ?");
    $sql->bind_param("s",$username);
    $sql->execute();
    $res=$sql->get_result();
    return $res->fetch_all(MYSQLI_ASSOC);
}

?>