<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="../stylesheets/main.css">

		<title>About</title>
	</head>

	<body class="body">
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
					<a href="../index.php">Home</a>
					<a href="../pages/schedule.php">Schedule</a>
					<a href="../pages/about.php">About</a>
					<a href="../pages/contact.php">Contact</a>
			</nav>
		</header>

		<main class="main">
			<div class="row">
				<div class="col-right">
				<?php
				//Dynamic Authentication Page
				if(!isset($_GET["login"]) && empty($_GET["reg"]) && !isset($_SESSION["user_id"])){
					echo "<h1>About Us</h1>";
				}
				else if(!isset($_SESSION["user_id"])){
					header("Location: ../pages/login.php");
				}
				else {
					echo "Default landing page after successful login";
				}
				?>
				</div>
			</div>
		</main>

    <?php include("../includes/footer.php"); ?>
	</body>
</html>
