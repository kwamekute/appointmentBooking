<?php
include '../class/config.php';
$cusid = "";
$cusname = "";
$vid="";
$des= "";
$duedate="";
$fromtime="";
$totime = "";

//car details
$regno= "";
$chasis= "";
$makeandmodel= "";
$mileage= "";

//new description
$newdes= "";

if(isset($_GET["appid"])){
	$appid = $_GET["appid"];
	$sql = "SELECT appointment.id, appointment.dob, appointment.duedate , appointment.servicedescription AS des, 
			appointment.customerid AS cusid, appointment.vehicleid, appointment.fromtime, appointment.endtime,
			concat(customer.firstname, ' ', customer.lastname) as fullname,
			serviceadvice.newdescription, vehicle.id AS vid, vehicle.chasis, vehicle.makeandmodel, vehicle.mileage FROM appointment
			LEFT JOIN customer ON appointment.customerid = customer.id
			LEFT JOIN serviceadvice ON appointment.id = serviceadvice.appointmentid
			LEFT JOIN vehicle ON customer.id = vehicle.customerid
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
			 
			 $regno= $row["vid"];
			 $chasis= $row["chasis"];
			 $makeandmodel= $row["makeandmodel"];
			 $mileage= $row["mileage"];
			 $newdes= $row["newdescription"];
		 }
	 }
	 
	 
	 
}else{

}



	 
?>