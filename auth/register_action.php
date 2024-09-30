<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include("../includes/config.php");

    // Retrieve and sanitize form data
    $user_username = trim($_POST['username']);
    $user_email = trim($_POST['email']);
    $user_password = trim($_POST['password']);
    $user_phone = trim($_POST['phone']);

    // Validate form data
    if (empty($user_username) || empty($user_email) || empty($user_password) || empty($user_phone)) {
        echo "Error: All fields are required.";
        exit;
    }

    // Hash the password
    $user_password_hashed = password_hash($user_password, PASSWORD_BCRYPT);

    // Check if username or email already exists
    $check_stmt = $conn->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
    $check_stmt->bind_param("ss", $user_username, $user_email);
    $check_stmt->execute();
    $check_stmt->store_result();

    if ($check_stmt->num_rows > 0) {
        echo "Error: Username or Email already exists.";
    } else {
        // Prepare an SQL statement to prevent SQL injection
        $stmt = $conn->prepare("INSERT INTO users (username, email, password, phone) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $user_username, $user_email, $user_password_hashed, $user_phone);

        // Execute the statement
        if ($stmt->execute()) {
            // Auto-login after successful registration
            session_start(); // Start the session

            // Set session variables
            $_SESSION['user_id'] = $stmt->insert_id; // Get the ID of the newly created user
            $_SESSION['user_username'] = $user_username;

            // Redirect to the homepage or dashboard
            header("Location: ../index.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }

    // Close the check statement and connection
    $check_stmt->close();
    $conn->close();
}
?>
