<?php
        session_start();
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
			<div class="square">
				<div id="temp2">DECKS</div>	
			</div>
			<form action="https://arcane-brook-41995.herokuapp.com/sc_deck_creator.php">
				<button type="submit" id="button">CREATE DECK</button>
			</form>
			
			<?php
                                require_once 'dao.php';
                                $dba = new dao();
                                $posts = $dba->getAllDecks();
                                foreach($posts as $post){
                                	echo "<a href=\"https://arcane-brook-41995.herokuapp.com/sc_one_deck.php?currdeck=" . htmlspecialchars($post['deckname']) . "\"><div class=\"deck\">" . htmlspecialchars($post['deckname']) . ": Created By " . htmlspecialchars($post['username']) . "</div></a>";
                                }
                        ?>
			
		</div> 
	</body>
	<div id="footer">THE SIXTH COLOR - DYLAN LEMAN - 2019</div>
</html>
