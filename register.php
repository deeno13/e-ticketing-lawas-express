<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="stylesheets/main.css" >
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Register</title>
  </head>

  <body class="body">
		<header class="header">
			<?php include("includes/navbar.php"); ?>
		</header>

    <main>
      <div class="center">
        <div class="login-modal">
          <form action="auth/register_action.php" method="post">
            <div style="display: flex; align-items: center; margin-bottom: 24px;">
							<i class="fa-solid fa-user fa-fw fa-lg" style="margin-right: 10px;"></i>
              <h2>User Registration </h2>
            </div>

						<?php if (isset($error)) { ?>
							<div class="form-error" style="display: flex; align-items: center;">
								<i class="fa-solid fa-circle-exclamation" style="margin-right: 10px"></i>
								<p><?php echo $error; ?></p>
							</div>
						<?php } ?>

            <div class="form-field">
              <label for="username">Username:</label>
              <input type="text" id="username" name="username" required>
            </div>

            <div class="form-field">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required>
            </div>

            <div class="form-field">
              <label for="password">Password:</label>
              <input type="password" id="password" name="password" required>
            </div>

            <div class="form-field">
              <label for="phone">Phone:</label>
              <input type="text" id="phone" name="phone">
            </div>

            <div class="form-field">
              <button type="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
    </main>

		<footer>
			<?php include("includes/footer.php"); ?>
		</footer>
  </body>
</html>
