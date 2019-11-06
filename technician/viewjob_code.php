<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();


//appointment info
$appid = $crud->mysql_prep($_POST["appid"]);
$technician = $crud->mysql_prep($_POST["technician"]);
$datejob = $crud->mysql_prep($_POST["datejob"]);
$starttime = $crud->mysql_prep($_POST["starttime"]);
$endtime = $crud->mysql_prep($_POST["endtime"]);

$sql3 = "INSERT INTO jobplan(appointmentid, technician, datejob, starttime, endtime)
		VALUES ('$appid', '$technician', '$datejob', '$starttime', '$endtime')";

$result3 = $crud->create($sql3);
if($result3==1){
	echo "Job card confirmed successfully";
}else{
	echo "Error";
}



?>