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
if(isset($_POST['compname'])){
	$company = $_POST['compname'];
}else{
	$company = '';
}

$cusid = ''.rand(1000,9999).'/'.rand(10,99).'/'.rand(0,9).'';



$sql1 = "INSERT INTO customer(id,firstname,lastname,gender,phone,email,company,userid)
		VALUES ('$cusid','$firstname','$lastname', '$gender', '$phone',
				'$email','$company','$userid')";

		
$result1 = $crud->create($sql1);
if($result1==1){
	echo "Customer Added Successfully";
}else{
	echo "Error";
}



?>