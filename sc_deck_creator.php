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
                <link rel="stylesheet" href="css/decks_style.css">
                <link rel='icon' type='image/x-icon/' href='favicon.ico'>
                <title>The Sixth Color</title>
        </head>
        <body>
                <div class="content_body">
                        <div class="tb">
                                <a href="sc_main.php" id="logo">THE SIXTH COLOR</a>
                                <a class="active" href="sc_decks.php">DECKS</a>
                                <a href="sc_login.php" id="login">
                                        <?php
                                                if(isset($_SESSION['user'])){
                                                        echo $_SESSION['user'];
                                                }else{
                                                        echo "SIGN IN";
                                                }
                                        ?>
                                </a>
                                <input type="text" placeholder="Search...">
                        </div>
                        <div id="square">
                                <div id="temp">CREATE A DECK</div>
				<form action="https://arcane-brook-41995.herokuapp.com/deck_handler.php" method="POST">
					<div><input class="input" type="text" placeholder="Title" name="deckTitle"></div>
                                	<div><textarea placeholder="decklist here, card names separated by a comma..." name="deck"></textarea></div>
                                	<button type="submit" id="button">SUBMIT DECK</button>
				</form>
                        </div>
                </div>
        </body>
        <div id="footer">THE SIXTH COLOR - DYLAN LEMAN - 2019</div>
</html>
