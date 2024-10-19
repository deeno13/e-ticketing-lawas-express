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
			<h1 style="text-align: center;">Book Ticket</h1>
		</div>

		<main class="main">
      <div style="padding: 0 15rem;">
        <form action="book_ticket.php" method="POST">
          <div style="display: flex; gap: 1rem; align-items: end;">
            <div class="form-field">
              <label for="from">From:</label>
              <select id="from" name="from" required>
                <option value="">Select Departure</option>
                <option value="labuan">Labuan</option>
                <option value="lawas">Lawas</option>
              </select>
            </div>

            <div class="form-field">
              <label for="to">To:</label>
              <select id="to" name="to" required>
                <option value="">Select Destination</option>
                <option value="labuan">Labuan</option>
                <option value="lawas">Lawas</option>
              </select>
            </div>

            <div class="form-field">
              <label for="depart_date">Depart Date:</label>
              <input type="date" id="depart_date" name="depart_date" required>
            </div>

            <div class="form-field">
              <label for="passengers">No. of Passengers:</label>
              <select id="passengers" name="passengers" required>
                <option value="">Select Number</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>

            <div class="form-field" style="text-align: center;">
              <button type="submit">Book</button>
            </div>
          </div>
        </form>
      </div>
		</main>

    <?php include("includes/footer.php"); ?>
	</body>
</html>
