<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();

//customer info
$cusid = $crud->mysql_prep($_POST["cusid"]);
$firstname = $crud->mysql_prep($_POST["firstname"]);
$middlename = $crud->mysql_prep($_POST["middlename"]);
$lastname = $crud->mysql_prep($_POST["lastname"]);
$gender = $crud->mysql_prep($_POST["gender"]);
$phone = $crud->mysql_prep($_POST["phone"]);
$email = $crud->mysql_prep($_POST["email"]);
$doa = $crud->mysql_prep($_POST["doa"]);
$company = '';


$sql1 = "REPLACE INTO customer(id,firstname,lastname,gender,phone,email,company,doa)
		VALUES ('$cusid','$firstname','$lastname', '$gender', '$phone',
				'$email','$company','$doa')";

		
$result1 = $crud->create($sql1);
if($result1==1){
	echo "Customer Details Updated Successfully";
}else{
	echo "Error";
}



?>