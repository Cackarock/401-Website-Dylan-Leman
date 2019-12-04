<?php
session_start();

if(!isset($_SESSION['logged_in'])){
	header("Location: https://arcane-brook-41995.herokuapp.com/sc_login.php");
	exit;
}

?>

<html>
        <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" href="css/mp_style.css">
                <link rel="shortcut icon" type="image/x-icon/" href="favicon.ico">
                <title>The Sixth Color</title>
        </head>
        <body>
                <div class="content_body">
                        <div class="tb">
                                <a href="sc_main.php" id="logo">THE SIXTH COLOR</a>
                                <a href="sc_decks.php">DECKS</a>
                                <a href="sc_mycards.php">MY CARDS</a>
                                <a href="sc_forums.php">FORUMS</a>
                                <a class="active" href="sc_login.php" id="login">
					<?php
					echo $_SESSION['user'];
					?>
				</a>	
                                <input type="text" placeholder="Search...">
                        </div>
			<div>
				<form action="https://arcane-brook-41995.herokuapp.com/logout_handler.php">
					<button type="submit">Log Out</button>
				</form>
			</div>
                </div>
        </body>
        <div id="footer"> THE SIXTH COLOR - DYLAN LEMAN - 2019 </div>
</html>
~           
