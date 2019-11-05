<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();


//appointment info
$appid = $crud->mysql_prep($_POST["appid"]);
$newdes = $crud->mysql_prep($_POST["newdescriptionofserviceo"]);

$sql3 = "INSERT INTO serviceadvice(appointmentid, newdescription, userid)
		VALUES ('$appid', '$newdes', '$userid')";

$result3 = $crud->create($sql3);
if($result3==1){
	echo "Service Advice Added Successful";
}else{
	echo "Error";
}



?>