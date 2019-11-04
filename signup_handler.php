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

if(strlen($password) == 0){
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}

	
