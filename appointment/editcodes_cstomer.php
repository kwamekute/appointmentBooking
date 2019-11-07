<?php
include '../class/config.php';
$cusid = "";
$cusfname = "";
$cuslname = "";
$gender="";
$phone= "";
$email="";
$doa = "";

if(isset($_GET["cusid"])){
	$cusid = $_GET["cusid"];
	$sql = "SELECT customer.id, customer.firstname, customer.lastname, customer.gender
			,customer.phone, customer.email, customer.doa FROM customer
			WHERE customer.id = '$cusid'";
	 $result = $con->query($sql);
	 if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
			 $cusid = $row["id"];
			 $cusfname = $row["firstname"];
			 $cuslname = $row["lastname"];
			 $gender = $row["gender"];
			 $phone = $row["phone"];
			 $email = $row["email"];
			 $doa = $row["doa"];
		 }
	 }
}else{

}



	 
?>