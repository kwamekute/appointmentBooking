<?php
require_once("dbconfig.php");

class Crud extends DbCOnfig {
	public function __construct() {
		parent::__construct();
	}

	public function mysql_prep($string) {
		return $this->connection->real_escape_string($string);
	}

	public function redirect_to($new_location) {
		header("Location:" . $new_location);
		exit;
	}

	public function read($query) {
		$resarr = array();
		$result = $this->connection->query($query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				$resarr[] = $row; 
			}
		}
		return $resarr;
	}


	public function read_by_id($tb, $id) {
		$safe_id = $this->mysql_prep($id);
		$query = "SELECT * FROM {$tb} WHERE id={$safe_id}";
		$result = $this->connection->query($query);
		return $result;
	}
	
	public function vote_count($query) {
		$result = $this->connection->query($query);
		return $result;
	}
	
	public function read_one($query) {
		$result = $this->connection->query($query);
		return $result;
	}
	
	public function update($query) {
		$result = $this->connection->query($query);
		if (!$result) {
			die("failed" . mysqli_error($this->connection));
			return null;
		} else {
			return $result;
		}
	}

	public function delete($query) {
		$result = $this->connection->query($query);
		if (!$result) {
			die("failed" . mysqli_error($this->connection));
			return null;
		} else {
			return $result;
		}
	}

	public function create($query) {
		$result = $this->connection->query($query);
		if (!$result) {
			die("failed" . mysqli_error($this->connection));
			return null;
		} else {
			return $result;
		}
	}
	
	
	public function login($username, $password) {
		if ($username != "" && $password != ""){
		  $pass = MD5($password);
		  $query = "SELECT id, role FROM `user` WHERE (`id` ='$username' OR username='$username') and `password` = '$password'";
		  $result = $this->connection->query($query);
		  $count=0;
		  if (mysqli_num_rows($result) > 0) {
			  while ($row = mysqli_fetch_assoc($result)) {
				  $count = 1;
				  $uid = $row["id"];
				  $role = $row['role'];
			  }
		  }else{
			  echo "Wrong username or password";
		  }
		  
		  if($count > 0){
			if($role){
				//get admin info
				$sql_query = "SELECT id, rolename FROM role WHERE id='".$role."'";
				$result = $this->connection->query($query);
				$row = mysqli_fetch_array($result);
				//continue
				session_start();
				$_SESSION['uname'] = $uid;
				$_SESSION['role'] = $role;
				//for admin
				echo $role;
		 }else{
				echo $uid;
			}
		}else{
			
		}

	} else {
		 echo "Empty username or password";
	}
}
	
	public function uploadpic($fname){
		$uploadedFile = '';
		if(!empty($fname["type"])){
			$fileName = time().'_'.$fname['name'];
			$valid_extensions = array("jpeg", "jpg", "png");
			$temporary = explode(".", $fname["name"]);
			$file_extension = end($temporary);
			if((($fname["type"] == "image/png") || ($fname["type"] == "image/jpg") || ($fname["type"] == "image/jpeg")) && in_array($file_extension, $valid_extensions)){
				$sourcePath = $fname['tmp_name'];
				$targetPath = "../uploads/images/".$fileName;
				if(move_uploaded_file($sourcePath,$targetPath)){
					$uploadedFile = $fileName;
					return $uploadedFile;
				}
			}

		
		}
	}
	


}