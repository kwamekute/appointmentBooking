<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();


//appointment info
$cusid = $crud->mysql_prep($_POST["customer"]);
$duedate = $crud->mysql_prep($_POST["duedateo"]);
$fromtime = $crud->mysql_prep($_POST["fromtimeo"]);
$endtime = $crud->mysql_prep($_POST["totimeo"]);
$regno = $crud->mysql_prep($_POST["vehicle"]);
$descriptionofservice = $crud->mysql_prep($_POST["descriptionofserviceo"]);

$sql3 = "INSERT INTO appointment(customerid,vehicleid,servicedescription,duedate,
		fromtime,endtime,userid,status)
		VALUES ('$cusid','$regno','$descriptionofservice','$duedate','$fromtime',
				'$endtime','$userid','booked')";

$result3 = $crud->create($sql3);
if($result3==1){
	echo "Appointment Booked Successfully";
}else{
	echo "Error";
}



?>