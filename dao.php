<?php
class dao {
	private $host = "us-cdbr-iron-east-05.cleardb.net";
	private $dbname = "heroku_c2700822cb8e597";
	private $username = "bc23eca8cb3c1e";
	private $password = "fa187ede";
	
	public function getConnection(){
		try{
			$connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
		}catch(Exception $e){
			echo print_r($e, 1);
		}
		return $connection;
	}
	
	public function isValidUser($username, $password){
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM user WHERE userName = :name, password = :password");
		$stmt->bindParam(":name", $username);
		$stmt->bindParam(":password", $password);
		$stmt->execute();
		$results = $stmt->fetchAll();
		if(count($results)>0){
			return true;
		}else{
			return false;
		}
	}
}

