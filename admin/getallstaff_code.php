<?php

$table = <<<EOT
(
	SELECT staff.id , concat(staff.firstname, ' ', staff.lastname) as fullname, staff.gender
	,staff.phone, staff.email, staff.doa
	,role.id AS rid, role.rolename as rn FROM staff 
    LEFT JOIN role ON staff.role = role.id
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
	array( 'db' => 'rn',   'dt' => 5 ),
	array( 'db' => 'doa',   'dt' => 6 ),
	array('db' => 'rid',  'dt' => 7)
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

