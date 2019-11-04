<?php
session_start();
session_destroy();
header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
exit;
