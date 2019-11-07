<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();

//customer info
$comname = $crud->mysql_prep($_POST["comname"]);
$descriptionofcom = $crud->mysql_prep($_POST["descriptionofcom"]);
$address = $crud->mysql_prep($_POST["address"]);
$phone = $crud->mysql_prep($_POST["phone"]);
$email = $crud->mysql_prep($_POST["email"]);

//$cusid = ''.rand(1000,9999).'/'.rand(10,99).'/'.rand(0,9).'';



$sql1 = "INSERT INTO company(name,description,address,phone,email)
		VALUES ('$comname','$descriptionofcom', '$address', '$phone','$email')";

		
$result1 = $crud->create($sql1);
if($result1==1){
	echo "Company Added Successfully";
}else{
	echo "Error";
}



?>