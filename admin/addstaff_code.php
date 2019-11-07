<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();

//customer info
$firstname = $crud->mysql_prep($_POST["firstname"]);
$middlename = $crud->mysql_prep($_POST["middlename"]);
$lastname = $crud->mysql_prep($_POST["lastname"]);
$gender = $crud->mysql_prep($_POST["gender"]);
$phone = $crud->mysql_prep($_POST["phone"]);
$email = $crud->mysql_prep($_POST["email"]);
$role = $crud->mysql_prep($_POST["role"]);

$staffid = 'st'.rand(1000,9999).''.rand(10,99).''.rand(0,9).'';



$sql1 = "INSERT INTO staff(id,firstname,lastname,gender,phone,email,role)
		VALUES ('$staffid','$firstname','$lastname', '$gender', '$phone',
				'$email','$role')";

		
$result1 = $crud->create($sql1);
if($result1==1){
	echo "Staff Added Successfully";
}else{
	echo "Error";
}



?>