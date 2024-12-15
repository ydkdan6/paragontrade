<?php
session_start();
include '../db_connect.php'; // Ensure this file initializes $pdo as a PDO instance

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    die("Access denied.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_SESSION['user_id'];
    $amount = isset($_POST['investmentAmount']) ? $_POST['investmentAmount'] : null;
    $plan_name = isset($_POST['plan']) ? $_POST['plan'] : null;
    $payment_method = isset($_POST['paymentMethod']) ? $_POST['paymentMethod'] : null;
    $date_paid = date('Y-m-d H:i:s');
    $proof_of_payment = '';

    // Validate required fields
    if (!$amount || !$plan_name || !$payment_method) {
        // Set error message in session
        $_SESSION['error_message'] = "All fields are required.";
        header('Location: invest.php');
        exit();
    }

    // Handle proof upload
    if (isset($_FILES['proof_of_payment']) && $_FILES['proof_of_payment']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = "uploads/proofs/";

        // Ensure the upload directory exists
        if (!is_dir($upload_dir)) {
            if (!mkdir($upload_dir, 0777, true)) {
                $_SESSION['error_message'] = "Failed to create upload directory.";
                header('Location: invest.php');
                exit();
            }
        }

        $unique_filename = uniqid() . '_' . basename($_FILES['proof_of_payment']['name']);
        $proof_of_payment = $upload_dir . $unique_filename;
        if (!move_uploaded_file($_FILES['proof_of_payment']['tmp_name'], $proof_of_payment)) {
            $_SESSION['error_message'] = "Failed to upload proof.";
            header('Location: invest.php');
            exit();
        }
    } else {
        $_SESSION['error_message'] = "No valid file uploaded.";
        header('Location: invest.php');
        exit();
    }

    try {
        // Start a database transaction
        $pdo->beginTransaction();

        // Insert into InvestmentPlans
        $stmt = $pdo->prepare("
            INSERT INTO InvestmentPlans (user_id, plan_name, amount, payment_method, proof_of_payment, created_at)
            VALUES (:user_id, :plan_name, :amount, :payment_method, :proof_of_payment, :created_at)
        ");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':plan_name', $plan_name, PDO::PARAM_STR);
        $stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
        $stmt->bindParam(':payment_method', $payment_method, PDO::PARAM_STR);
        $stmt->bindParam(':proof_of_payment', $proof_of_payment, PDO::PARAM_STR);
        $stmt->bindParam(':created_at', $date_paid, PDO::PARAM_STR);
        $stmt->execute();

        // Insert into Transactions
        $stmt = $pdo->prepare("
            INSERT INTO Transactions (user_id, type, amount, status, created_at)
            VALUES (:user_id, 'Investment', :amount, 'Pending', :created_at)
        ");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':amount', $amount, PDO::PARAM_STR);
        $stmt->bindParam(':created_at', $date_paid, PDO::PARAM_STR);
        $stmt->execute();

        // Commit the transaction
        $pdo->commit();

        // Set success message in session
        $_SESSION['success_message'] = "Investment recorded successfully!";
        
        // Redirect to invest.php
        header('Location: invest.php?success=true');
        exit();

    } catch (Exception $e) {
        // Rollback the transaction in case of error
        $pdo->rollBack();

        // Set error message in session
        $_SESSION['error_message'] = "Error processing your investment: " . $e->getMessage();
        header('Location: invest.php');
        
        exit();
    }
} else {
    $_SESSION['error_message'] = "Invalid request method.";
    header('Location: invest.php');
    exit();
}
?>