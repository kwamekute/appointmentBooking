<?php
include '../class/config.php';
$cusid = "";
$cusname = "";
$vid="";
$des= "";
$duedate="";
$fromtime="";
$totime = "";

if(isset($_GET["appid"])){
	$appid = $_GET["appid"];
	$sql = "SELECT appointment.id, appointment.dob, appointment.duedate , appointment.servicedescription AS des, 
			appointment.customerid AS cusid, appointment.vehicleid, appointment.fromtime, appointment.endtime,
			concat(customer.firstname, ' ', customer.lastname) as fullname FROM appointment
			LEFT JOIN customer ON appointment.customerid = customer.id 
			WHERE appointment.id = '$appid'";
	 $result = $con->query($sql);
	 if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
			 $cusid = $row["cusid"];
			 $cusname = $row["fullname"];
			 $vid = $row["vehicleid"];
			 $des = $row["des"];
			 $fromtime = $row["fromtime"];
			 $totime = $row["endtime"];
		 }
	 }
}else{

}



	 
?>