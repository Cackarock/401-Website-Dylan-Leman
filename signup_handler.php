<?php
require_once 'dao.php';

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$first = $_POST['fname'];
$last = $_POST['lname'];
$age = $_POST['age'];

$dba = new dao();

$validUsername = $dba->isValidUsername($username);

$validEmail = preg_match('/\w+@\w+\.[a-zA-Z]{2,4}/', $email);

if(!$validUsername || strlen($username) == 0){
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}

if(!$validEmail){
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}

$uppercase = preg_match('/[A-Z]/', $password);
$lowercase = preg_match('/[a-z]/', $password);
$number    = preg_match('/[0-9]/', $password);
if(!$uppercase || !$lowercase || !$number || strlen($password) < 8){
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}

$dba->createNewUser($username, $password, $email, $first, $last, $age);
$_SESSION['logged_in'] = true;
$_SESSION['user'] = $username;
header("Location: https://arcane-brook-41995.herokuapp.com/sc_account.php");
exit;

	
