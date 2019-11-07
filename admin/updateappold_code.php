<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();


//appointment info
$appid = $crud->mysql_prep($_POST["appid"]);
$cusid = $crud->mysql_prep($_POST["customer"]);
$duedate = $crud->mysql_prep($_POST["duedateo"]);
$fromtime = $crud->mysql_prep($_POST["fromtimeo"]);
$endtime = $crud->mysql_prep($_POST["totimeo"]);
$regno = $crud->mysql_prep($_POST["vehicle"]);
$descriptionofservice = $crud->mysql_prep($_POST["descriptionofserviceo"]);

$sql3 = "UPDATE appointment SET customerid='$cusid', vehicleid = '$regno', servicedescription = '$descriptionofservice',
		duedate = '$duedate', fromtime='$fromtime', endtime='$endtime', userid='$userid' WHERE id = '$appid'";

$result3 = $crud->create($sql3);
if($result3==1){
	echo "Appointment Updated Successfully";
}else{
	echo "Error";
}



?>