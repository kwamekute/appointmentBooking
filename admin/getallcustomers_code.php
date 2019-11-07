<?php

$table = <<<EOT
(
	SELECT customer.id , concat(customer.firstname, ' ', customer.lastname) as fullname, customer.gender
	,customer.phone, customer.email, customer.doa
	,COUNT(DISTINCT(vehicle.id)) as vn FROM customer 
    LEFT JOIN vehicle ON customer.id = vehicle.customerid GROUP BY customer.id
)temp
EOT;

// Table's primary key
$primaryKey = 'id';


$columns = array(
	array( 'db' => 'id', 'dt' => 0 ),
	array( 'db' => 'fullname', 'dt' => 1 ),
	array( 'db' => 'gender',  'dt' => 2 ),
	array( 'db' => 'phone',   'dt' => 3 ),
	array( 'db' => 'email',   'dt' => 4 ),
	array( 'db' => 'vn',   'dt' => 5 ),
	array( 'db' => 'doa',   'dt' => 6 )
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

