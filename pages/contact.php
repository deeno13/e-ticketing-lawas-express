<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="../stylesheets/main.css">

		<title>Contact</title>
	</head>

	<body class="body">
		<header class="header">
			<?php include("../includes/navbar.php"); ?>
		</header>

		<div class="header">
			<h1>E-Ticketing Lawas Express</h1>
		</div>

		<main class="main">
			<div class="row">
				<div class="col-right">
				<?php
				//Dynamic Authentication Page
				if(!isset($_GET["login"]) && empty($_GET["reg"]) && !isset($_SESSION["user_id"])){
					echo "<h1>Contact Us</h1>";
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
