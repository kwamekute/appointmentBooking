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
$company = '';

$cusid = ''.rand(1000,9999).'/'.rand(10,99).'/'.rand(0,9).'';

//appointment info
$duedate = $crud->mysql_prep($_POST["duedate"]);
$fromtime = $crud->mysql_prep($_POST["fromtime"]);
$endtime = $crud->mysql_prep($_POST["endtime"]);


//vehicle info
$regno = $crud->mysql_prep($_POST["regno"]);
$chasis = $crud->mysql_prep($_POST["chasis"]);
$makeandmodel = $crud->mysql_prep($_POST["makeandmodel"]);
$mileage = $crud->mysql_prep($_POST["mileage"]);
$descriptionofservice = $crud->mysql_prep($_POST["descriptionofservice"]);


$sql1 = "INSERT INTO customer(id,firstname,lastname,gender,phone,email,company)
		VALUES ('$cusid','$firstname','$lastname', '$gender', '$phone',
				'$email','$company')";

$sql2 = "INSERT INTO vehicle(id,customerid,chasis,makeandmodel,mileage,descriptionservice)
		VALUES ('$regno','$cusid','$chasis', '$makeandmodel','$mileage',
				'$descriptionofservice')";

$sql3 = "INSERT INTO appointment(customerid,vehicleid,servicedescription,duedate,
		fromtime,endtime,userid,status)
		VALUES ('$cusid','$regno','$descriptionofservice','$duedate','$fromtime',
				'$endtime','$userid','booked')";
		
$result1 = $crud->create($sql1);
$result2 = $crud->create($sql2);
$result3 = $crud->create($sql3);
if($result1==1&&$result2==1&&$result3==1){
	echo "Appointment Booked Successfully";
}else{
	echo "Error";
}



?>