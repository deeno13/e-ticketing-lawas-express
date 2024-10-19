<?php include("auth/auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="stylesheets/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<title>E-Ticketing Lawas Express</title>
	</head>

	<body class="body">
		<header class="header">
			<?php include("includes/navbar.php"); ?>
		</header>

		<div class="header" style="padding: 5rem 15rem;">
			<h1 style="text-align: center;">E-Ticketing Lawas Express</h1>
		</div>

		<main class="main">
      <div style="padding: 0 30rem 5rem 30rem;">
        <div style="display: flex; justify-content: center;">
          <a href="book.php" class="btn" style="text-decoration: none; display: flex; align-items: center; justify-content: center;">BOOK NOW</a>
        </div>
      </div>
		</main>

    <?php include("includes/footer.php"); ?>
	</body>
</html>
