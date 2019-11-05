<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();


//appointment info
$appid = $crud->mysql_prep($_POST["appid"]);

$sql3 = "INSERT INTO checkin(appointmentid, userid)
		VALUES ('$appid','$userid')";

$result3 = $crud->create($sql3);
if($result3==1){
	echo "Checkin Successful";
}else{
	echo "Error";
}



?>