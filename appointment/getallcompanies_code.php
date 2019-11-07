<?php

$table = <<<EOT
(
	SELECT company.id, company.name, company.description
	,company.address, company.email, company.phone, company.doa
	,COUNT(vehicle.id) as vn FROM company
	LEFT JOIN vehicle ON company.id = vehicle.customerid 
)temp
EOT;

// Table's primary key
$primaryKey = 'id';


$columns = array(
	array( 'db' => 'id', 'dt' => 0 ),
	array( 'db' => 'name', 'dt' => 1 ),
	array( 'db' => 'description',  'dt' => 2 ),
	array( 'db' => 'address',   'dt' => 3 ),
	array( 'db' => 'email',   'dt' => 4 ),
	array( 'db' => 'phone',   'dt' => 5 ),
	array( 'db' => 'vn',   'dt' => 6 ),
	array( 'db' => 'doa',   'dt' => 7 )
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

