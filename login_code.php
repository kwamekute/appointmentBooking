<?php 
require_once("class/crud.php"); 
$crud = new Crud();

$username = $crud->mysql_prep($_POST["username"]);
$password = $crud->mysql_prep($_POST["password"]);
	
$result = $crud->login($username, $password);

echo $result;




?>