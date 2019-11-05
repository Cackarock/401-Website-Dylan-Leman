<?php
session_start();
$title = $_POST['deckTitle'];
$deck = $_POST['deck'];
$username = $_SESSION['user'];

if(strlen($title)==0 || strlen($deck) == 0){
        header("Location: https://arcane-brook-41995.herokuapp.com/sc_deck_creator.php");
        exit;
}

require_once 'dao.php';

$dba = new dao();

$dba->createNewDeck($username, $title, $deck);

header("Location: https://arcane-brook-41995.herokuapp.com/sc_decks.php");
exit;
