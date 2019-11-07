<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();


//
$jobid = $crud->mysql_prep($_POST["jobid"]);

$sql3 = "UPDATE jobplan SET status='finsihed'";

$result3 = $crud->create($sql3);
if($result3==1){
	echo "Job Finished Successfully";
}else{
	echo "Error";
}



?>