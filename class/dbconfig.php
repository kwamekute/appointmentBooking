<?php

class DbCOnfig {

//define("DB_HOST", "127.0.0.1");
//define("DB_USER", "root");
//define("DB_PASS", "toor");
//define("DB_NAME", "oop_crud");

private $_host = "localhost";
private $_username = "root";
private $_password = "";
private $_dbname = "dms";

protected $connection;

public function __construct() {
	if (!isset($this->connection)) {
		$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_dbname);
		if (!$this->connection) {
			echo "Error connecting database server";
		}
	}
	return $this->connection;
	}
}