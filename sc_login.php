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
			<div class="square">
				<div id="temp">SIGN IN</div>
				<div id="tsplit">
					<div>SIGN IN</div>
					<form action="login_handler.php" method="post">
						<input class="input" value="<?php echo $_SESSION['form_data']['username'];?>" placeholder="Username" type="text" name="username">
						<input class="input" value="<?php echo $_SESSION['form_data']['password'];?>" placeholder="Password" type="password" name="password">
						<input type="submit">
					</form>
					<hr class="lifestyle">
				</div>
					
				<hr class="linestyle">
				<div id="bsplit">
					<div>REGISTER</div>
					<form action="signup_handler.php" method="post">
						<input class="input" value="<?php echo $_SESSION['form_data']['susername'];?>" placeholder="Username" type="text" name="susername">
						<input class="input" value="<?php echo $_SESSION['form_data']['spassword'];?>" placeholder="Password" type="password" name="spassword">
						<input class="input" value="<?php echo $_SESSION['form_data']['email'];?>" placeholder="Email" type="email" name="email">
						<input class="input" value="<?php echo $_SESSION['form_data']['fname'];?>" placeholder="First Name" type="text" name="fname">
						<input class="input" value="<?php echo $_SESSION['form_data']['lname'];?>" placeholder="Last Name" type="text" name="lname">
						<input class="input" value="<?php echo $_SESSION['form_data']['age'];?>" placeholder="Age" type="number" name="age">
						<input type="submit">
				</div>
			</div>
		</div> 
	</body>
	<div id="footer">THE SIXTH COLOR - DYLAN LEMAN - 2019</div>
</html>
