<?php

$table = <<<EOT
(
	SELECT vehicle.id, vehicle.chasis,vehicle.makeandmodel, vehicle.mileage, vehicle.doa
	,concat(customer.firstname, ' ', customer.lastname) as fullname FROM vehicle
	LEFT JOIN customer ON vehicle.customerid = customer.id 
)temp
EOT;

// Table's primary key
$primaryKey = 'id';


$columns = array(
	array( 'db' => 'id', 'dt' => 0 ),
	array( 'db' => 'fullname', 'dt' => 1 ),
	array( 'db' => 'chasis',  'dt' => 2 ),
	array( 'db' => 'makeandmodel',   'dt' => 3 ),
	array( 'db' => 'mileage',   'dt' => 4 ),
	array( 'db' => 'doa',   'dt' => 5 ),
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

