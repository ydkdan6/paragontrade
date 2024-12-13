<?php

// Database connection setup
$servername = "localhost";
$username = "root"; // Change to your database username
$password = "";    // Change to your database password
$dbname = "user_management"; // Change to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/**
 * TABLE STRUCTURE FOR USERS
 * 
 * CREATE TABLE users (
 *     id INT AUTO_INCREMENT PRIMARY KEY,
 *     username VARCHAR(50) NOT NULL,
 *     email VARCHAR(100) NOT NULL UNIQUE,
 *     password_hash VARCHAR(255) NOT NULL,
 *     reset_token VARCHAR(255) DEFAULT NULL,
 *     reset_token_expires DATETIME DEFAULT NULL,
 *     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
 * );
 */

/**
 * Registration Logic
 */
if (isset($_POST['register'])) {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $confirm_password = $conn->real_escape_string($_POST['confirm_password']);

    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Hash the password
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Insert into database
    $sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $username, $email, $password_hash);

    if ($stmt->execute()) {
        echo "Registration successful. You can now log in.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

/**
 * Login Logic
 */
if (isset($_POST['login'])) {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    // Fetch user
    $sql = "SELECT id, username, password_hash FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        // Verify password
        if (password_verify($password, $user['password_hash'])) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            echo "Login successful. Welcome, " . $user['username'] . "!";
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No account found with this email.";
    }

    $stmt->close();
}

/**
 * Forgotten Password Logic
 */
if (isset($_POST['forgot_password'])) {
    $email = $conn->real_escape_string($_POST['email']);

    // Check if email exists
    $sql = "SELECT id FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        // Generate reset token
        $reset_token = bin2hex(random_bytes(32));
        $reset_token_expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

        // Update database with reset token
        $sql = "UPDATE users SET reset_token = ?, reset_token_expires = ? WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $reset_token, $reset_token_expires, $email);

        if ($stmt->execute()) {
            // Send reset email (simplified for demonstration purposes)
            $reset_link = "http://yourwebsite.com/reset_password.php?token=$reset_token";
            mail($email, "Password Reset", "Click here to reset your password: $reset_link");
            echo "Password reset link has been sent to your email.";
        } else {
            echo "Error updating reset token.";
        }
    } else {
        echo "No account found with this email.";
    }

    $stmt->close();
}

$conn->close();
?>
