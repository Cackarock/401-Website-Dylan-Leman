<?php
        session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="mp_style.css">
		<link rel="stylesheet" href="main_style.css">
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
			<div class="splitleft">
				<div class="searchbar">
					<input placeholder="Search for decks or cards...">
				</div>	
			</div>
			<div class="splitright">
				<div id="temp">DAILY COMMANDER</div>	
			</div>
		</div> 
	</body>
	<div id="footer"> THE SIXTH COLOR - DYLAN LEMAN - 2019 </div>
</html>
