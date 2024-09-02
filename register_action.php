<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	include("includes/config.php");

	// Retrieve form data
	$user_username = $_POST['username'];
	$user_email = $_POST['email'];
	$user_password = password_hash($_POST['password'], PASSWORD_BCRYPT); // Hash the password
	$user_phone = $_POST['phone'];

	// Prepare an SQL statement to prevent SQL injection
	$stmt = $conn->prepare("INSERT INTO users (username, email, password, phone) VALUES (?, ?, ?, ?)");
	$stmt->bind_param("ssss", $user_username, $user_email, $user_password, $user_phone);

	// Execute the statement
	if ($stmt->execute()) {
		echo "Registration successful!";
	} else {
		echo "Error: " . $stmt->error;
	}

	// Close the statement and connection
	$stmt->close();
	$conn->close();
}
?>
