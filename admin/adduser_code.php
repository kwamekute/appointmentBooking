<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();

//customer info
$staffid = $crud->mysql_prep($_POST["staffid"]);
$password = $crud->mysql_prep($_POST["password"]);
$confirmpass = $crud->mysql_prep($_POST["confirmpass"]);
$role = $crud->mysql_prep($_POST["role"]);

//cusid = ''.rand(1000,9999).'/'.rand(10,99).'/'.rand(0,9).'';



$sql1 = "INSERT INTO user(staffid,username,password,role)
		VALUES ('$staffid','$staffid','$password', '$role')";

		
$result1 = $crud->create($sql1);
if($result1==1){
	echo "User Added Successfully";
}else{
	echo "Error";
}



?>