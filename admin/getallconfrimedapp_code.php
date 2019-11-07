<?php

$table = <<<EOT
(
	SELECT serviceadvice.id, serviceadvice.appointmentid, serviceadvice.newdescription , 
	serviceadvice.dos, serviceadvice.userid
	,appointment.vehicleid, appointment.servicedescription
	,concat(customer.firstname, ' ', customer.lastname) as fullname FROM serviceadvice
	LEFT JOIN appointment ON serviceadvice.appointmentid = appointment.id 
	LEFT JOIN customer ON appointment.customerid = customer.id
)temp
EOT;

// Table's primary key
$primaryKey = 'id';


$columns = array(
	array( 'db' => 'id',   'dt' => 0 ),
	array( 'db' => 'fullname', 'dt' => 1 ),
	array( 'db' => 'vehicleid', 'dt' => 2 ),
	array( 'db' => 'servicedescription',  'dt' => 3 ),	
	array( 'db' => 'newdescription',  'dt' => 4 ),
	array( 'db' => 'dos',  'dt' => 5 ),
	
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

