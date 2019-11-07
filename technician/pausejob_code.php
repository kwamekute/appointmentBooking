<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();


//appointment info
$jobid = $crud->mysql_prep($_POST["jobid"]);

$sql3 = "UPDATE jobplan SET status='paused'";

$result3 = $crud->create($sql3);
if($result3==1){
	echo "Job Paused Successfully";
}else{
	echo "Error";
}



?>