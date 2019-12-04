<?php
        session_start();
	echo $_GET['currdeck'];
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
				<div id="temp2"><php?
					if(isset($_GET['currdeck'])){
						echo $_GET['currdeck'];
					}
					?>
				</div>	
			</div>
		</div> 
	</body>
	<div id="footer">THE SIXTH COLOR - DYLAN LEMAN - 2019</div>
</html>
