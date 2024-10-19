<?php include("auth/auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="stylesheets/main.css">

		<title>About</title>
	</head>

	<body class="body">
		<header class="header">
			<?php include("includes/navbar.php"); ?>
		</header>

		<div class="header" style="padding: 5rem 15rem;">
			<h1 style="text-align: center;">About Us</h1>
		</div>

    <main class="main">
      <div class="container">
        <div style="padding-bottom: 5rem;">
          <div style="padding-bottom: 5rem;">
            <p style="text-align: center; font-size: 1.25rem;">Welcome to our ferry ticket booking service. We are dedicated to providing you with the best travel experience possible. Our mission is to make ferry travel easy, convenient, and accessible for everyone.</p>
          </div>

          <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 1rem;">
            <div class="card">
              <h2 class="card-title">Our Story</h2>
              <p class="card-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et accumsan sem. Curabitur eu tortor porttitor, tincidunt purus non, laoreet magna. In porta, libero eget imperdiet lacinia, est augue iaculis erat, sed varius orci diam at dui. Proin non nisi nisi. Proin aliquam mi blandit auctor pellentesque. Maecenas nibh sapien, bibendum eget orci eget, ultrices commodo diam. Praesent rutrum eleifend neque ac tempor. Mauris interdum lorem sed metus pellentesque elementum.</p>
            </div>

            <div class="card">
              <h2 class="card-title">Our Values</h2>
              <ul class="card-content">
                <li style="margin-bottom: 0.625rem;"><strong>Customer Satisfaction:</strong> We prioritize our customers' needs and strive to exceed their expectations.</li>
                <li style="margin-bottom: 0.625rem;"><strong>Reliability:</strong> We ensure that our services are dependable and trustworthy.</li>
                <li style="margin-bottom: 0.625rem;"><strong>Innovation:</strong> We continuously improve our platform to provide the best possible experience.</li>
              </ul>
            </div>

            <div class="card">
              <h2 class="card-title">Contact Us</h2>
              <p class="card-content">If you have any questions or need assistance, please do not hesitate to contact us. Our customer support team is here to help you.</p><br>
              <p class="card-content">Email: lawas_express@gmail.com</p><br>
              <p class="card-content">Phone: +60 123 456 789</p>
            </div>
          </div>
        </div>
      </div>
    </main>

    <?php include("includes/footer.php"); ?>
  </body>
</html>
