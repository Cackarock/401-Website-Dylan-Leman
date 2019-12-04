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
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    	<script src="js/fade.js" type="text/javascript"></script>

                <title>The Sixth Color</title>
        </head>
        <body>
                <div class="content_body">
                        <div class="tb">
                                <a href="sc_main.php" id="logo">THE SIXTH COLOR</a>
                                <a href="sc_decks.php">DECKS</a>
                                <a class="active" href="sc_login.php" id="login">
					<?php
					echo $_SESSION['user'];
					?>
				</a>	
                                <input type="text" placeholder="Search...">
                        </div>
			<div class="mBody">
			<div class="square">
				<div id="temp2">MY DECKS</div>	
			</div>
			<div>
				<form action="https://arcane-brook-41995.herokuapp.com/logout_handler.php">
					<button type="submit" id="button">Log Out</button>
				</form>
			</div>
			<?php
                                require_once 'dao.php';
                                $dba = new dao();
                                $posts = $dba->getAllUserDecks($_SESSION['user']);
                                foreach($posts as $post){
                                	echo "<a href=\"https://arcane-brook-41995.herokuapp.com/sc_one_deck.php?currdeck=" . htmlspecialchars($post['did']) . "\"><div class=\"deck\">" . htmlspecialchars($post['deckname']) . ": Created By " . htmlspecialchars($post['username']) . "</div></a>";
                                }
                        ?>
			</div>
                </div>
        </body>
        <div id="footer"> THE SIXTH COLOR - DYLAN LEMAN - 2019 </div>
</html>
~           
