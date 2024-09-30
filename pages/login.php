<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../stylesheets/main.css" >
		<title>Login</title>
	</head>

	<body class="body">
		<header class="header">
			<?php include("../includes/navbar.php"); ?>
		</header>

		<main>
			<div class="center">
				<div class="login-modal">
					<form action="../auth/login_action.php" method="post">
						<div style="display: flex; align-items: center; margin-bottom: 24px;">
							<i class="fa-solid fa-user fa-fw fa-lg" style="margin-right: 10px;"></i>
							<h2>User Login</h2>
						</div>

						<?php if (isset($error)) { ?>
							<div class="form-error" style="display: flex; align-items: center;">
								<i class="fa-solid fa-circle-exclamation" style="margin-right: 10px"></i>
								<p><?php echo $error; ?></p>
							</div>
						<?php } ?>

						<div class="form-field">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" required>
						</div>

						<div class="form-field">
							<label for="password">Password</label>
							<input type="password" id="password" name="password" required maxlength="8">
						</div>

						<div class="form-field">
							<button type="submit">Login</button>
						</div>
						<!-- <button class="button" type="reset">Reset</button> -->
					</form>

					<div style="text-align: center;">
						<p>No account yet? <a href="register.php">Register here</a></p>
					</div>
				</div>
			</div>
		</main>

		<footer>
			<?php include("../includes/footer.php"); ?>
		</footer>
	</body>
</html>
