<?php
session_start();
require_once 'db_connect.php';

// Initialize error messages
$errors = [
    'email' => '',
    'password' => '',
    'general' => ''
];

// Initialize form data
$formData = [
    'email' => ''
];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $formData['email'] = htmlspecialchars(trim($_POST['email'] ?? ''));
    $password = $_POST['password'] ?? '';

    // Validate inputs
    if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "A valid email is required.";
    }
    if (empty($password)) {
        $errors['password'] = "Password is required.";
    }

    // Proceed if no validation errors
    if (!array_filter($errors)) {
        try {
            // Query the database for the user
            $stmt = $pdo->prepare('SELECT user_id, email, password_hash FROM Users WHERE email = :email LIMIT 1');
            $stmt->bindParam(':email', $formData['email'], PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password_hash'])) {
                // Successful login: Set session variables
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email'] = $user['email'];

                // Redirect to dashboard
                header('Location: ../account/Dashboard/dashboard.php');
                exit;
            } else {
                // Invalid email or password
                $errors['general'] = "Invalid email or password.";
            }
        } catch (PDOException $e) {
            // Handle database errors
            error_log('Database error: ' . $e->getMessage());
            $errors['general'] = "An error occurred. Please try again later.";
        }
    }
}

// Include the login page to display errors
include '../account/login.php';
