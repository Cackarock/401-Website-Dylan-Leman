<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once 'dao.php';

$dba = new dao();

$valid = $dba->isValidUserName($username);

if($valid){
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_main.php");
	exit;
}else{
	
}

