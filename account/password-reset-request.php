<?php
session_start();
require_once 'db_connect.php'; // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    // Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'Invalid email address.';
        header('Location: forgot-password.php');
        exit;
    }

    try {
        // Check if email exists in the database
        $stmt = $pdo->prepare('SELECT user_id, email FROM users WHERE email = :email LIMIT 1');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // Generate a unique reset token
            $token = bin2hex(random_bytes(32)); // Generate a random 32-byte token
            $expiration = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token expires in 1 hour

            // Store the token in the password_resets table
            $stmt = $pdo->prepare('INSERT INTO password_resets (user_id, token, expiration) VALUES (:user_id, :token, :expiration)');
            $stmt->bindParam(':user_id', $user['user_id'], PDO::PARAM_INT);
            $stmt->bindParam(':token', $token, PDO::PARAM_STR);
            $stmt->bindParam(':expiration', $expiration, PDO::PARAM_STR);
            $stmt->execute();

            // Send password reset email
            $resetLink = "http://yourwebsite.com/reset-password.php?token=$token"; // Link with the token
            $subject = 'Password Reset Request';
            $message = "To reset your password, please click the following link: \n$resetLink";
            $headers = 'From: no-reply@yourwebsite.com' . "\r\n" . 'Reply-To: no-reply@yourwebsite.com';

            mail($email, $subject, $message, $headers);

            // Set success message in session
            $_SESSION['message'] = 'A password reset link has been sent to your email.';
            echo "<script>alert(Reset link sent!)</script>";
            header('Location: reset-password.php'); // Redirect to the same page or another page (e.g., login)
            exit;
        } else {
            $_SESSION['error'] = 'No user found with that email address.';
            header('Location: forgot-password.php');
            exit;
        }
    } catch (PDOException $e) {
        error_log('Database error: ' . $e->getMessage());
        $_SESSION['error'] = 'An error occurred. Please try again later.';
        header('Location: forgot-password.php');
        exit;
    }
}
?>
