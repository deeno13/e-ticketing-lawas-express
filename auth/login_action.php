<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include("../includes/config.php");

    // Retrieve and sanitize form data
    $user_email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $user_password = trim($_POST['password']);

    // Validate email format
    if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

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
            session_regenerate_id(true); // Prevent session fixation
            $_SESSION['user_id'] = $id;
            $_SESSION['user_username'] = $username;
            header("Location: ../index.php");
            exit;
        } else {
            echo "Invalid email or password.";
        }
    } else {
        echo "Invalid email or password.";
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
