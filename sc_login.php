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
		<link rel="stylesheet" href="css/mp_style.css">
		<link rel="stylesheet" href="css/login_style.css">
		<link rel='icon' type='image/x-icon/' href='favicon.ico'>
		<title>The Sixth Color</title>
	</head>
	<body>
 		<div class="content_body">
			<div class="tb">
				<a href="sc_main.php" id="logo">THE SIXTH COLOR</a>
				<a href="sc_decks.php">DECKS</a>
				<a class="active" href="sc_login.php" id="login">SIGN IN</a>
				<input type="text" placeholder="Search...">
			</div>
			<div id="square">
				<div id="temp">SIGN IN</div>
				<div id="tsplit">
					<div id="label">SIGN IN</div>
					<form action="login_handler.php" method="post">
						<input class="input" value="<?php echo $_SESSION['form_data']['username'];?>" placeholder="Username" type="text" name="username">
						<input class="input" placeholder="Password" type="password" name="password">
						<input type="submit">
					</form>
					<hr class="linestyle">
				</div>
				<div id="error">
				<?php
					if(isset($_SESSION['errormsg'])){
						echo $_SESSION['errormsg'];
					}
				?>
				</div>
				<hr class="linestyle">
				<div id="bsplit">
					<div id="label">REGISTER</div>
					<form action="signup_handler.php" method="post">
						<input class="input" value="<?php echo $_SESSION['form_data']['susername'];?>" placeholder="Username" type="text" name="susername">
						<input class="input" placeholder="Password" type="password" name="spassword">
						<input class="input" value="<?php echo $_SESSION['form_data']['email'];?>" placeholder="Email" type="email" name="email">
						<input type="submit">
				</div>
			</div>
		</div> 
	</body>
	<div id="footer">THE SIXTH COLOR - DYLAN LEMAN - 2019</div>
</html>
