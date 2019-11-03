<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

require_once 'dao.php';

$dba = new dao();

$valid = $dao->isValidUserName($username);

