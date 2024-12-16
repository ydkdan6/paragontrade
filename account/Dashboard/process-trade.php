<?php
require_once 'includes/session.php';
require_once '../db_connect.php'; // Include your database connection script

$data = json_decode(file_get_contents('php://input'), true);

// Validate input
if (!isset($data['tradeAction'], $data['from'], $data['to'], $data['amount'], $data['resultAmount'], $data['rate'])) {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

// Extract input
$tradeAction = $data['tradeAction'];
$from = $data['from'];
$to = $data['to'];
$amount = floatval($data['amount']);
$resultAmount = floatval($data['resultAmount']);
$rate = floatval($data['rate']);

// Get the user ID from the session
$userId = $_SESSION['user_id'];

// Perform the transaction
try {
    if ($tradeAction === 'buy') {
        // Deduct USD and add cryptocurrency
        deductBalance($userId, 'USD', $amount);
        addBalance($userId, $to, $resultAmount);
    } else if ($tradeAction === 'sell') {
        // Deduct cryptocurrency and add USD
        deductBalance($userId, $from, $amount);
        addBalance($userId, 'USD', $resultAmount);
    } else {
        throw new Exception('Invalid trade action');
    }

    // Log the transaction
    logTransaction($userId, $tradeAction, $from, $to, $amount, $resultAmount, $rate);

    // Respond with success
    echo json_encode(['success' => true]);
} catch (Exception $e) {
    // Handle errors
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}

/**
 * Deduct balance from the user's wallet.
 */
function deductBalance($userId, $currency, $amount) {
    global $db; // Use the database connection

    // Check if the user has enough balance
    $query = "SELECT balance FROM Wallets WHERE user_id = ? AND currency = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$userId, $currency]);
    $wallet = $stmt->fetch();

    if (!$wallet || $wallet['balance'] < $amount) {
        throw new Exception("Insufficient balance in $currency.");
    }

    // Deduct the balance
    $newBalance = $wallet['balance'] - $amount;
    $updateQuery = "UPDATE Wallets SET balance = ?, updated_at = NOW() WHERE user_id = ? AND currency = ?";
    $updateStmt = $db->prepare($updateQuery);
    $updateStmt->execute([$newBalance, $userId, $currency]);
}

/**
 * Add balance to the user's wallet.
 */
function addBalance($userId, $currency, $amount) {
    global $db; // Database connection

    // Check if a wallet entry exists for this user and currency
    $query = "SELECT id, balance FROM Wallets WHERE user_id = ? AND currency = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$userId, $currency]);
    $wallet = $stmt->fetch();

    if ($wallet) {
        // Update the wallet balance
        $query = "UPDATE Wallets SET balance = balance + ?, updated_at = NOW() WHERE id = ?";
        $stmt = $db->prepare($query);
        $stmt->execute([$amount, $wallet['id']]);
    } else {
        // Create a new wallet entry if none exists
        $query = "INSERT INTO Wallets (user_id, currency, balance, updated_at) VALUES (?, ?, ?, NOW())";
        $stmt = $db->prepare($query);
        $stmt->execute([$userId, $currency, $amount]);
    }
}


/**
 * Log the transaction in the database.
 */
function logTransaction($userId, $action, $from, $to, $amount, $resultAmount, $rate) {
    global $db; // Use the database connection

    $query = "INSERT INTO Transactions (
                user_id, type, currency_from, currency_to, amount, result_amount, rate, status, created_at
              ) VALUES (?, ?, ?, ?, ?, ?, ?, 'Completed', NOW())";
    $stmt = $db->prepare($query);
    $stmt->execute([$userId, ucfirst($action), $from, $to, $amount, $resultAmount, $rate]);
}
?>
