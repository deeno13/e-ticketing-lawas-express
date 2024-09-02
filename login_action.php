<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include("includes/config.php");

	// Retrieve form data
	$user_email = $_POST['email'];
	$user_password = $_POST['password'];

	// Prepare an SQL statement to prevent SQL injection
	$stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
	$stmt->bind_param("s", $user_email);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $username, $hashed_password);
		$stmt->fetch();

		// Verify the password
		if (password_verify($user_password, $hashed_password)) {
			// Successful login
			session_start();
			$_SESSION['user_id'] = $id;
			$_SESSION['user_username'] = $username;
			echo "Login successful! Welcome, " . htmlspecialchars($username) . ".";
			// Redirect to a protected page (e.g., dashboard.php)
			header("Location: index.php");
			exit;
		} else {
			echo "Invalid password.";
		}
	} else {
		echo "No user found with this email.";
	}

	// Close the statement and connection
	$stmt->close();
	$conn->close();
}
?>
