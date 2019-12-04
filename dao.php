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
		$stmt = $conn->prepare("SELECT * FROM users WHERE BINARY userName = :name and BINARY password = :password");
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
	
	public function isValidUsername($username){
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM users WHERE userName = :name");
		$stmt->bindParam(":name", $username);
		$stmt->execute();
		$results = $stmt->fetchAll();
		if(count($results)>0){
			return false;
		}else{
			return true;
		}
	}
	
	public function createNewUser($username, $password, $email){
		$conn = $this->getConnection();
		$stmt = $conn->prepare("INSERT INTO users(email, userName, password) VALUES(:email, :username, :password);");
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);
		$stmt->execute();	
	}
	
	public function createNewDeck($username, $title, $deck){
		$conn = $this->getConnection();
		$stmt = $conn->prepare("INSERT INTO decks(deckname, decklist, username) VALUES(:title, :post, :username);");
		$stmt->bindParam(":title", $title);
		$stmt->bindParam(":post", $deck);
		$stmt->bindParam(":username",$username);
		$stmt->execute();
	}
	
	public function getAllDecks(){
                $conn = $this->getConnection();
                $stmt = $conn->prepare("SELECT * FROM decks ORDER BY created_at");
                $stmt->execute();
                $posts = $stmt->fetchAll();
                $posts = array_reverse($posts);
                return $posts;
        }

	public function getAllUserDecks($username){
		$conn = $this->getConnection();
		$stmt = $conn->prepare("SELECT * FROM decks WHERE BINARY userName = :name");
		$stmt->bindParam(":name", $username);
		$stmt->execute();
		$posts = $stmt->fetchAll();
                $posts = array_reverse($posts);
                return $posts;
	}
}

