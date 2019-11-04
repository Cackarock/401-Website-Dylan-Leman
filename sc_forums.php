<?php
	session_start();
?>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="mp_style.css">
		<link rel="stylesheet" href="forums_style.css">
		<link rel='icon' type='image/x-icon/' href='favicon.ico'>
		<title>The Sixth Color</title>
	</head>
	<body>
 		<div class="content_body">
			<div class="tb">
				<a href="sc_main.php" id="logo">THE SIXTH COLOR</a>
				<a href="sc_decks.php">DECKS</a>
				<a href="sc_mycards.php">MY CARDS</a>
				<a class="active" href="sc_forums.php">FORUMS</a>
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
				<div id="temp">MAKE A POST</div>
				<form action="forum_handler.php" method="post">
					<div class="searchbar"><input type="text" placeholder="Title" name="title"></div>
					<div><textarea placeholder="Forum text here..." name="post"></textarea></div>
					<input type="submit">
				</form>
			</div>
			<div>
				<?php
					require_once 'dao.php';
					$dba = new dao();
					$posts = $dba->getAllPosts();
					foreach($posts as $post){
						echo "<div class=\"forum\"><div id=\"title\">" . $post['title'] . "</div><div id=\"stamp\">". $posts['username'] . "-".$posts['created_at'] ."</div><div id=\"post\">" . $post['post'] . "</div></div>";		

					}
				?>
			</div>
		</div> 
	</body>
	<div id="footer">THE SIXTH COLOR - DYLAN LEMAN - 2019</div>
</html>
