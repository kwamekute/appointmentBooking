<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();


//appointment info
$jobid = $crud->mysql_prep($_POST["jobid"]);
$exttime = $crud->mysql_prep($_POST["exttime"]);

$sql3 = "UPDATE jobplan SET extendedtime='$exttime'";

$result3 = $crud->create($sql3);
if($result3==1){
	echo "Job Time Extended Successfully";
}else{
	echo "Error";
}



?>