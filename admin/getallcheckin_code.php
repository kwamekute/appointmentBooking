<?php

$table = <<<EOT
(
	SELECT checkin.id, checkin.appointmentid, checkin.datecheckin , checkin.datecheckout, checkin.userid
	,appointment.duedate, appointment.vehicleid, appointment.servicedescription
	,concat(customer.firstname, ' ', customer.lastname) as fullname FROM checkin
	LEFT JOIN appointment ON checkin.appointmentid = appointment.id 
	LEFT JOIN customer ON appointment.customerid = customer.id
)temp
EOT;

// Table's primary key
$primaryKey = 'id';


$columns = array(
	array( 'db' => 'id',   'dt' => 0 ),
	array( 'db' => 'fullname', 'dt' => 1 ),
	array( 'db' => 'duedate', 'dt' => 2 ),
	array( 'db' => 'servicedescription',  'dt' => 3 ),
	array( 'db' => 'userid',   'dt' => 5 )
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

