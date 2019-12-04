<?php
session_start();
require_once 'dao.php';

$username = $_POST['susername'];
$password = $_POST['spassword'];
$email = $_POST['email'];

$dba = new dao();

$validUsername = $dba->isValidUsername($username);

$validEmail = preg_match('/\w+@\w+\.[a-zA-Z]{2,4}/', $email);

$_SESSION['form_data'] = $_POST;

if(!$validUsername || strlen($username) == 0){
	$_SESSION['errormsg'] = "Username taken";
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}

if(!$validEmail){
	$_SESSION['errormsg'] = "Invalid email";
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}

$uppercase = preg_match('/[A-Z]/', $password);
$lowercase = preg_match('/[a-z]/', $password);
$number    = preg_match('/[0-9]/', $password);
if(!$uppercase || !$lowercase || !$number || strlen($password) < 8){
	$_SESSION['errormsg'] = "Password must be 8 characters long, and contain an uppercase, lowercase, and numeric character";
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}

$dba->createNewUser($username, $password, $email);
$_SESSION['logged_in'] = true;
$_SESSION['user'] = $username;
header("Location: https://arcane-brook-41995.herokuapp.com/sc_account.php");
exit;

	
