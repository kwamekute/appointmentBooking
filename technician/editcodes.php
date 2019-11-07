<?php
include '../class/config.php';
$dt = date('Y-m-d');
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

//job details
$datejob = "";
$starttime = "";
$endtime = "";
$tid = "";
$tname = "";

$appidc = "";

$telapse = "0:00";
$exttime = "";
$status = "";

if(isset($_GET["jobid"])){
	$jobid = $_GET["jobid"];
	$sql = "SELECT jobplan.id, jobplan.appointmentid, jobplan.technician , 
			jobplan.datejob, jobplan.starttime, jobplan.comment,
			jobplan.endtime, jobplan.timespent, jobplan.extendedtime, jobplan.status,
			appointment.id AS appidc, appointment.vehicleid, appointment.servicedescription AS des, 
			appointment.fromtime AS ftime, appointment.endtime AS totime, customer.id AS cusid, vehicle.chasis,
			vehicle.makeandmodel, vehicle.mileage, serviceadvice.newdescription,
			staff.id AS tid, concat(staff.firstname, ' ', staff.lastname) AS tname,
			concat(customer.firstname, ' ', customer.lastname) as fullname FROM jobplan
			LEFT JOIN appointment ON jobplan.appointmentid = appointment.id
			LEFT JOIN vehicle ON appointment.vehicleid = vehicle.id
			LEFT JOIN serviceadvice ON appointment.id = serviceadvice.appointmentid
			LEFT JOIN staff ON jobplan.technician = staff.id
			LEFT JOIN customer ON appointment.customerid = customer.id
			WHERE jobplan.id = '$jobid'";
	 $result = $con->query($sql);
	 if ($result->num_rows > 0) {
		 while($row = $result->fetch_assoc()) {
			 $cusid = $row["cusid"];
			 $cusname = $row["fullname"];
			 $vid = $row["vehicleid"];
			 $des = $row["des"];
			 $fromtime = $row["ftime"];
			 $totime = $row["totime"];
			 
			 $appidc = $row["appidc"];
			 
			 $regno= $vid;
			 $chasis= $row["chasis"];
			 $makeandmodel= $row["makeandmodel"];
			 $mileage= $row["mileage"];
			 $newdes= $row["newdescription"];
			 
			 $datejob = $row["datejob"];
			 $starttime = $row["starttime"];
			 $endtime = $row["endtime"];
			 $tid = $row["tid"];
			 $tname = $row["tname"];
			 $telapse = $row["timespent"];
			 
			 $exttime = $row["extendedtime"];
			 $status = $row["status"];
			 
		 }
	 }
	 
	 
	 
}else if(isset($_GET["appid"])){
	//appointment id
	$appid = $_GET["appid"];
	$sql = "SELECT appointment.id, appointment.dob, appointment.duedate , appointment.servicedescription AS des, 
			appointment.customerid AS cusid, appointment.id AS appidc, appointment.vehicleid, appointment.fromtime, appointment.endtime,
			concat(customer.firstname, ' ', customer.lastname) as fullname,
			serviceadvice.newdescription, vehicle.id AS vid, vehicle.chasis, vehicle.makeandmodel, vehicle.mileage FROM appointment
			LEFT JOIN customer ON appointment.customerid = customer.id
			LEFT JOIN serviceadvice ON appointment.id = serviceadvice.appointmentid
			LEFT JOIN vehicle ON customer.id = vehicle.customerid
			WHERE serviceadvice.id = '$appid'";
			 $result = $con->query($sql);
			 if ($result->num_rows > 0) {
				 while($row = $result->fetch_assoc()) {
					 $cusid = $row["cusid"];
					 $cusname = $row["fullname"];
					 $vid = $row["vehicleid"];
					 $des = $row["des"];
					 $fromtime = $row["fromtime"];
					 $totime = $row["endtime"];
					 
					 $appidc = $row["appidc"];
					 
					 $regno= $row["vid"];
					 $chasis= $row["chasis"];
					 $makeandmodel= $row["makeandmodel"];
					 $mileage= $row["mileage"];
					 $newdes= $row["newdescription"];
				 }
			 }
	 
	 

}



	 
?>