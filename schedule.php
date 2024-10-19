<?php include("auth/auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="stylesheets/main.css">

		<title>Schedule</title>
	</head>

	<body class="body">
		<header class="header">
			<?php include("includes/navbar.php"); ?>
		</header>

		<div class="header" style="padding: 5rem 15rem;">
			<h1 style="text-align: center;">Schedule</h1>
		</div>

    <main class="main">
      <div class="container">
        <div style="padding-bottom: 5rem;">
          <table>
            <tr>
              <th>From</th>
              <th>To</th>
              <th>Departure Time</th>
              <th>Arrival Time</th>
              <th>Action</th>
            </tr>
            <tr>
              <td>Lawas</td>
              <td>Labuan</td>
              <td>07:00 AM</td>
              <td>09:00 AM</td>
              <td><a href="book.php" class="btn">Book</a></td>
            </tr>
            <tr>
              <td>Lawas</td>
              <td>Labuan</td>
              <td>08:00 AM</td>
              <td>10:00 AM</td>
              <td><a href="book.php" class="btn">Book</a></td>
            </tr>
            <tr>
              <td>Lawas</td>
              <td>Labuan</td>
              <td>09:00 AM</td>
              <td>11:00 AM</td>
              <td><a href="book.php" class="btn">Book</a></td>
            </tr>
            <tr>
              <td>Labuan</td>
              <td>Lawas</td>
              <td>08:00 AM</td>
              <td>10:00 AM</td>
              <td><a href="book.php" class="btn">Book</a></td>
            </tr>
            <tr>
              <td>Labuan</td>
              <td>Lawas</td>
              <td>09:00 AM</td>
              <td>11:00 AM</td>
              <td><a href="book.php" class="btn">Book</a></td>
            </tr>
            <tr>
              <td>Labuan</td>
              <td>Lawas</td>
              <td>10:00 AM</td>
              <td>12:00 PM</td>
              <td><a href="book.php" class="btn">Book</a></td>
            </tr>
          </table>
        </div>
      </div>
    </main>
    <?php include("includes/footer.php"); ?>
	</body>
</html>
