<?php
        session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/mp_style.css">
		<link rel="stylesheet" href="css/main_style.css">
		<link rel="shortcut icon" type="image/x-icon/" href="favicon.ico">
		<title>The Sixth Color</title>
	</head>
	<body>
 		<div class="content_body">
			<div class="tb">
				<a href="sc_main.php" id="logo">THE SIXTH COLOR</a>
				<a href="sc_decks.php">DECKS</a>
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
				
			</div>
			<div class="splitright">
				<div id="square">DAILY COMMANDER</div>	
			</div>
			
		</div> 
		<div id="footer"> THE SIXTH COLOR - DYLAN LEMAN - 2019 </div>
	</body>
	
</html>
