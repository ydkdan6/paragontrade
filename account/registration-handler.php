<?php
require_once 'db_connect.php'; 

// Initialize error messages
$errors = [
    'username' => '',
    'full_name' => '',
    'email' => '',
    'phone' => '',
    'password' => '',
    'password_confirmation' => '',
    'general' => ''
];

// Initialize form data
$formData = [
    'username' => '',
    'full_name' => '',
    'email' => '',
    'phone' => '',
    'ref_by' => ''
];

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize inputs
    $formData['username'] = htmlspecialchars(trim($_POST['username'] ?? ''));
    $formData['full_name'] = htmlspecialchars(trim($_POST['name'] ?? ''));
    $formData['email'] = htmlspecialchars(trim($_POST['email'] ?? ''));
    $formData['phone'] = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $formData['ref_by'] = htmlspecialchars(trim($_POST['ref_by'] ?? ''));
    $password = $_POST['password'] ?? '';
    $password_confirmation = $_POST['password_confirmation'] ?? '';

    // Validate inputs
    if (empty($formData['username'])) {
        $errors['username'] = "Username is required.";
    }
    if (strlen($formData['username']) < 3) {
        $errors['username'] = "Username must be at least 3 characters.";
    }
    if (empty($formData['full_name'])) {
        $errors['full_name'] = "Full name is required.";
    }
    if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "A valid email is required.";
    }
    if (empty($formData['phone'])) {
        $errors['phone'] = "Phone number is required.";
    }
    if (empty($password) || strlen($password) < 8) {
        $errors['password'] = "Password must be at least 8 characters.";
    }
    if ($password !== $password_confirmation) {
        $errors['password_confirmation'] = "Passwords do not match.";
    }

    // Proceed if no validation errors
    if (!array_filter($errors)) {
        try {
            // Begin transaction
            $pdo->beginTransaction();

            // Check if username or email already exists
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM Users WHERE username = :username OR email = :email");
            $stmt->execute([
                'username' => $formData['username'],
                'email' => $formData['email']
            ]);
            if ($stmt->fetchColumn() > 0) {
                $errors['general'] = "Username or email already exists.";
            } else {
                // Hash password
                $password_hash = password_hash($password, PASSWORD_BCRYPT);

                // Insert user
                $stmt = $pdo->prepare("
                    INSERT INTO Users (username, full_name, email, phone_number, password_hash, ref_by) 
                    VALUES (:username, :full_name, :email, :phone, :password_hash, :ref_by)
                ");
                $stmt->execute([
                    'username' => $formData['username'],
                    'full_name' => $formData['full_name'],
                    'email' => $formData['email'],
                    'phone' => $formData['phone'],
                    'password_hash' => $password_hash,
                    'ref_by' => $formData['ref_by']
                ]);

                $user_id = $pdo->lastInsertId();

                // Create wallet
                $stmt = $pdo->prepare("INSERT INTO Wallets (user_id) VALUES (:user_id)");
                $stmt->execute(['user_id' => $user_id]);

                // Commit transaction
                $pdo->commit();

                // Redirect to dashboard
                session_start();
                $_SESSION['user_id'] = $user_id;
                $_SESSION['username'] = $formData['username'];
                header("Location: ../account/Dashboard/dashboard.php");
                exit;
            }
        } catch (PDOException $e) {
            $pdo->rollBack();
            $errors['general'] = "An error occurred: " . $e->getMessage();
        }
    }
}

include '../account/register.php';
