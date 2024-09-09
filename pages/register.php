<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../stylesheets/main.css" >
    <title>Register</title>
  </head>

  <body>
    <main>
      <form action="../register_action.php" method="post">
        <h2>User Registration </h2>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone"><br><br>

        <input type="submit" value="Register">
        <input type="reset" value="Reset"></br>
      </form>
    </main>
  </body>
</html>
