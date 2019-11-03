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
	
	public function isValidUserName($username){
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM user WHERE name = :name");
		$stmt->bindParam(":name", $username);
		$stmt->execute();
		//$stmt->store_result();
		//if($stmt->num_rows>0){
		//	return false;
		//}else{
		//	return true;
		//}
	}
}

