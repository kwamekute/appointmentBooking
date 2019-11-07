<?php

$table = <<<EOT
(
	SELECT appointment.id, appointment.dob, appointment.duedate , appointment.servicedescription, appointment.status, appointment.userid
	,concat(customer.firstname, ' ', customer.lastname) as fullname FROM appointment
	LEFT JOIN customer ON appointment.customerid = customer.id 
)temp
EOT;

// Table's primary key
$primaryKey = 'id';


$columns = array(
	array( 'db' => 'fullname', 'dt' => 0 ),
	array( 'db' => 'dob', 'dt' => 1 ),
	array( 'db' => 'duedate',  'dt' => 2 ),
	array( 'db' => 'servicedescription',   'dt' => 3 ),
	array( 'db' => 'status',   'dt' => 4 ),
	array( 'db' => 'id',   'dt' => 5 ),
	array( 'db' => 'userid',   'dt' => 6 )
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

