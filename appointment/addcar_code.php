<?php 
include "../class/crud.php"; 
session_start();
$userid = $_SESSION["uname"]; 
$crud = new Crud();

$cusid = $crud->mysql_prep($_POST["customer"]);

//vehicle info
$regno = $crud->mysql_prep($_POST["regno"]);
$chasis = $crud->mysql_prep($_POST["chasis"]);
$makeandmodel = $crud->mysql_prep($_POST["makeandmodel"]);
$mileage = $crud->mysql_prep($_POST["mileage"]);
if(isset($_POST["descriptionofservice"])){
	$descriptionofservice = $crud->mysql_prep($_POST["descriptionofservice"]);
}else{
	$descriptionofservice = "N/A";
}

$sql2 = "INSERT INTO vehicle(id,customerid,chasis,makeandmodel,mileage,descriptionservice)
		VALUES ('$regno','$cusid','$chasis', '$makeandmodel','$mileage',
				'$descriptionofservice')";


$result2 = $crud->create($sql2);
if($result2==1){
	echo "Vehicle Added Successfully";
}else{
	echo "Error";
}



?>