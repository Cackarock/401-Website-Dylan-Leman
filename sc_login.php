<?php
	session_start();
	if(isset($_SESSION['logged_in'])){
		header("Location: https://arcane-brook-41995.herokuapp.com/sc_account.php");
		exit;
	}
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="mp_style.css">
		<link rel="stylesheet" href="login_style.css">
		<link rel='icon' type='image/x-icon/' href='favicon.ico'>
		<title>The Sixth Color</title>
	</head>
	<body>
 		<div class="content_body">
			<div class="tb">
				<a href="sc_main.php" id="logo">THE SIXTH COLOR</a>
				<a href="sc_decks.php">DECKS</a>
				<a href="sc_mycards.php">MY CARDS</a>
				<a href="sc_forums.php">FORUMS</a>
				<a class="active" href="sc_login.php" id="login">SIGN IN</a>
				<input type="text" placeholder="Search...">
			</div>
			<div class="square">
				<div id="temp">SIGN IN</div>
				<div class="split">
					<div>SIGN IN</div>
					<form action="login_handler.php" method="post">
						<input placeholder="username" type="text" name="username">
						<input placeholder="password" type="text" name="password">
						<input type="submit">
				</div>
				<hr class="linestyle">
				<div class="split">REGISTER</div>
			</div>
		</div> 
	</body>
	<div id="footer">THE SIXTH COLOR - DYLAN LEMAN - 2019</div>
</html>
