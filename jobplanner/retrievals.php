<?php 

require_once("../class/crud.php"); 
$crud = new Crud();
 
$cusarr = array();

$sqlc = "SELECT * from customer";
$resultc = $crud->read($sqlc);

$sqlv = "SELECT * from vehicle";
$resultv = $crud->read($sqlv);

$sqlt = "SELECT * from staff where role='5'";
$resultt = $crud->read($sqlt);


//customer count
$sqlcc = "SELECT COUNT(id) from customer";
$resultcc = $crud->vote_count($sqlcc);
if($resultcc->num_rows > 0) {
 while($row = $resultcc->fetch_assoc()) {
	 $cc = $row["COUNT(id)"];
 }
}else{
	$cc = 0;
}

//checkin count
$sqlcc = "SELECT COUNT(id) from checkin";
$resultcc = $crud->vote_count($sqlcc);
if($resultcc->num_rows > 0) {
 while($row = $resultcc->fetch_assoc()) {
	 $ch = $row["COUNT(id)"];
 }
}else{
	$ch = 0;
}

//appoitment count
$sqlac = "SELECT COUNT(id) from appointment";
$resultac = $crud->vote_count($sqlcc);
if($resultac->num_rows > 0) {
 while($row = $resultac->fetch_assoc()) {
	 $ac = $row["COUNT(id)"];
 }
}else{
	$ac = 0;
}

//vehicle count
$sqlvc = "SELECT COUNT(id) from vehicle";
$resultvc = $crud->vote_count($sqlvc);
if($resultvc->num_rows > 0) {
 while($row = $resultvc->fetch_assoc()) {
	 $vc = $row["COUNT(id)"];
 }
}else{
	$vc = 0;
}


//jobs count
$sqljc = "SELECT COUNT(id) from jobplan";
$resultjc = $crud->vote_count($sqljc);
if($resultjc->num_rows > 0) {
 while($row = $resultjc->fetch_assoc()) {
	 $jc = $row["COUNT(id)"];
 }
}else{
	$jc = 0;
}

?>