<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once 'dao.php';

$valid = $dao->isValidUsername($username);

if($valid){
	header("https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}else{
	header("https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}
