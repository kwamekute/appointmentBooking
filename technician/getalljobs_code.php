<?php
session_start();
$staffid = $_SESSION["staffid"];


$table = <<<EOT
(
	SELECT jobplan.id, jobplan.appointmentid, jobplan.technician , 
	jobplan.datejob, concat('from: ', jobplan.starttime, ' To: ', jobplan.endtime) AS jt
	,jobplan.endtime, appointment.vehicleid, appointment.servicedescription
	,concat(customer.firstname, ' ', customer.lastname) as fullname FROM jobplan
	LEFT JOIN appointment ON jobplan.appointmentid = appointment.id 
	LEFT JOIN customer ON appointment.customerid = customer.id
	WHERE jobplan.technician = '$staffid'
)temp
EOT;

// Table's primary key
$primaryKey = 'id';


$columns = array(
	array( 'db' => 'id',   'dt' => 0 ),
	array( 'db' => 'fullname', 'dt' => 1 ),
	array( 'db' => 'vehicleid', 'dt' => 2 ),
	array( 'db' => 'technician',  'dt' => 3 ),	
	array( 'db' => 'jt',  'dt' => 4 ),
	array( 'db' => 'datejob',  'dt' => 5 ),
	
);

// SQL server connection information
$sql_details = array(
	'user' => 'root',
	'pass' => '',
	'db'   => 'dms',
	'host' => 'localhost'
);

require( 'sspedit.class.php' );


echo json_encode(
	SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);

