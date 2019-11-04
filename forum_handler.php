<?php
session_start();
if(!isset($_SESSION['logged_in'])){
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;	
}

$title = $_POST['title'];
$post = $_POST['post'];
$username = $_SESSION['user'];

if(strlen($title)==0 || strlen($post) == 0){
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_forums.php");
	exit;
}

require_once 'dao.php';

$dba = new dao();

$dba->createNewPost($username, $title, $post);

header("Location: https://arcane-brook-41995.herokuapp.com/sc_forums.php");
exit;
