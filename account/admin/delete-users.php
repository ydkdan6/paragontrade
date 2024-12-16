<?php
require_once '../db_connect.php';
require_once '../Dashboard/includes/session.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_username'])) {
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Unauthorized access']);
    exit;
}

// Check if request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// Get user ID from POST data
$userId = isset($_POST['user_id']) ? intval($_POST['user_id']) : 0;

if ($userId <= 0) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Invalid user ID']);
    exit;
}

try {
    // Start a transaction to ensure data integrity
    $pdo->beginTransaction();

    // Delete related records in other tables first
    $tables = [
        'Transactions',
        'InvestmentPlans',
        'Wallets', 
        'password_resets'
    ];

    foreach ($tables as $table) {
        $deleteQuery = $pdo->prepare("DELETE FROM $table WHERE user_id = ?");
        $deleteQuery->execute([$userId]);
    }

    // Finally, delete the user
    $deleteUserQuery = $pdo->prepare("DELETE FROM Users WHERE user_id = ?");
    $deleteUserQuery->execute([$userId]);

    // Log the admin action
    $logQuery = $pdo->prepare("
        INSERT INTO AdminActions (admin_id, action_description) 
        SELECT admin_id, ? 
        FROM Admins 
        WHERE username = ?
    ");
    $logQuery->execute([
        "Deleted user with ID $userId", 
        $_SESSION['admin_username']
    ]);

    // Commit the transaction
    $pdo->commit();

    echo json_encode([
        'success' => true, 
        'message' => 'User and all associated records deleted successfully'
    ]);
} catch (PDOException $e) {
    // Rollback the transaction in case of error
    $pdo->rollBack();

    http_response_code(500);
    echo json_encode([
        'success' => false, 
        'message' => 'Database error: ' . $e->getMessage()
    ]);
    exit;
}