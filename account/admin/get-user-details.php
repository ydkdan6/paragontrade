<?php
require_once '../db_connect.php';
require_once '../Dashboard/includes/session.php';

// Enable error reporting for debugging
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Check if admin is logged in
if (!isset($_SESSION['admin_username'])) {
    http_response_code(403);
    echo json_encode(['error' => 'Unauthorized access']);
    exit;
}

// Get user ID from query parameter
$userId = isset($_GET['user_id']) ? intval($_GET['user_id']) : 0;

if ($userId <= 0) {
    http_response_code(400);
    echo json_encode(['error' => 'Invalid user ID']);
    exit;
}

try {
    // Fetch user details with decrypted password (NOT RECOMMENDED IN PRODUCTION!)
    $query = $pdo->prepare("
        SELECT 
            user_id, 
            username, 
            full_name, 
            email, 
            phone_number, 
            password_hash, 
            ref_by, 
            created_at
        FROM Users 
        WHERE user_id = ?"
    );
    $query->execute([$userId]);
    $user = $query->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        http_response_code(404);
        echo json_encode(['error' => 'User not found']);
        exit;
    }

    // IMPORTANT WARNING: 
    // In a real-world application, NEVER store or transmit passwords in plain text!
    // This is ONLY for demonstration and should NEVER be used in a production environment.
    // REMOVE THIS SECTION IN A REAL APPLICATION!
    $decryptedPassword = $user['password_hash']; // In reality, you should NEVER decrypt passwords

    // Add decrypted password to the response
    $user['decrypted_password'] = $decryptedPassword;

    // Fetch additional user information
    // Investment Plans
    $investmentQuery = $pdo->prepare("
        SELECT plan_name, amount, status, created_at 
        FROM InvestmentPlans 
        WHERE user_id = ?
    ");
    $investmentQuery->execute([$userId]);
    $investments = $investmentQuery->fetchAll(PDO::FETCH_ASSOC);

    // Transactions
    $transactionQuery = $pdo->prepare("
        SELECT type, amount, status, created_at 
        FROM Transactions 
        WHERE user_id = ?
        ORDER BY created_at DESC
        LIMIT 10
    ");
    $transactionQuery->execute([$userId]);
    $transactions = $transactionQuery->fetchAll(PDO::FETCH_ASSOC);

    // Wallets
    $walletQuery = $pdo->prepare("
        SELECT currency, balance 
        FROM Wallets 
        WHERE user_id = ?
    ");
    $walletQuery->execute([$userId]);
    $wallets = $walletQuery->fetchAll(PDO::FETCH_ASSOC);

    // Combine all user information
    $userDetails = [
        'user' => $user,
        'investments' => $investments ?: [],
        'transactions' => $transactions ?: [],
        'wallets' => $wallets ?: []
    ];

    // Send JSON response with headers
    header('Content-Type: application/json');
    echo json_encode($userDetails);
    exit;
} catch (PDOException $e) {
    // Log the full error for server-side debugging
    error_log('Database error: ' . $e->getMessage());
    
    http_response_code(500);
    echo json_encode([
        'error' => 'Database error',
        'details' => $e->getMessage()
    ]);
    exit;
}
