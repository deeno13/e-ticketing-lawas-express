<?php include("auth/auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="stylesheets/main.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

		<title>Contact</title>
	</head>

	<body class="body">
		<header class="header">
			<?php include("includes/navbar.php"); ?>
		</header>

		<div class="header" style="padding: 5rem 15rem;">
			<h1 style="text-align: center;">Contact Us</h1>
		</div>

		<main class="main" style="height: 100%;">
      <div class="container">
        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; padding-bottom: 5rem;">
          <div style="background-color: white; padding: 2rem; border: 1px solid #ccc; border-radius: 0.5rem">
            <div style="display: flex; flex-direction: column; gap: 2.5rem;">
              <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <h2>Contact Info</h2>
                <div>
                  <i class="fa-solid fa-phone fa-fw" style="margin-right: 10px"></i>
                  <span>+60 123 456 789</span>
                </div>
                <div>
                  <i class="fa-solid fa-envelope fa-fw" style="margin-right: 10px"></i>
                  <span>lawas_express@gmail.com</span>
                </div>
                <div>
                  <i class="fa-solid fa-location-dot fa-fw" style="margin-right: 10px"></i>
                  <span>Lawas, Sarawak</span>
                </div>
              </div>

              <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <h2>Operating Hours</h2>
                <div>
                  <i class="fa-solid fa-clock fa-fw" style="margin-right: 10px"></i>
                  <span>Monday - Friday: 9:00 AM - 5:00 PM</span>
                </div>
                <div>
                  <i class="fa-solid fa-clock fa-fw" style="margin-right: 10px"></i>
                  <span>Saturday: 9:00 AM - 12:00 PM</span>
                </div>
              </div>
            </div>
          </div>
          <div style="background-color: white; padding: 2rem; border: 1px solid #ccc; border-radius: 0.5rem">
            <form action="contact_action.php" method="post">
              <div class="form-field">
                <label for="name">Name</label>
                <input type="name" id="name" name="name" required>
              </div>

              <div class="form-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
              </div>

              <div class="form-field">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" required>
              </div>

              <div class="form-field">
                <label for="message">Message</label>
                <textarea id="message" name="message" rows="5" required></textarea>
              </div>

              <div class="form-field">
                <button type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
		</main>

    <?php include("includes/footer.php"); ?>
	</body>
</html>
