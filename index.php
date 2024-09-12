<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="stylesheets/main.css">

		<title>E-Ticketing Lawas Express</title>
	</head>
	<body>
		<header>
			<div class="header">
				<h1>E-Ticketing Lawas Express</h1>
			</div>

			<div class="userAuth">
				<?php
				//login&logout section
				if(isset($_SESSION["user_id"])){
					echo '<b> '. $_SESSION["user_username"] . '</b> <a href="logout.php">| Logout |</a> &nbsp;&nbsp;&nbsp; <br>';
				}
				else {
					echo '<a href="index.php?login=1">| Login |</a> &nbsp;&nbsp;&nbsp; <br>';
				}
				?>
			</div>

			<nav class="topnav" id="myTopnav">
				<a href="index.php">Home</a>
				<a href="#">Menu 2</a>
				<a href="#">Menu 3</a>
				<a href="#">Menu 4</a>
			</nav>
		</header>

		<main>
			<div class="row">
				<div class="col-right">
				<?php
				//Dynamic Authentication Page
				if(!isset($_GET["login"]) && empty($_GET["reg"]) && !isset($_SESSION["user_id"])){
					echo "Default landing page...";
				}
				else if(!isset($_SESSION["user_id"])){
					header("Location: pages/login.php");
				}
				else {
					echo "Default landing page after successful login";
				}
				?>
				</div>
			</div>
		</main>

		<footer>
			<div class="row">
				<p>Copyright (c) 2023 - My Name</p>
			</div>
		</footer>
	</body>
</html>
