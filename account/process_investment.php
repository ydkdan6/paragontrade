<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}

require_once 'db_connect.php'; 

$user_id = $_SESSION['user_id'];
$amount = $_POST['investmentAmount'];
$plan = $_POST['selectedPlan'];
$crypto = $_POST['selectedCrypto'];
$proof = $_FILES['proofFile'];

// Validate data
if (empty($amount) || empty($plan) || empty($crypto) || empty($proof['tmp_name'])) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

// Handle file upload
$targetDir = "uploads/proofs/";
$fileName = basename($proof['name']);
$targetFilePath = $targetDir . $fileName;
if (!move_uploaded_file($proof['tmp_name'], $targetFilePath)) {
    echo json_encode(['success' => false, 'message' => 'File upload failed.']);
    exit;
}

// Insert into database
$sql = "INSERT INTO investments (user_id, plan, amount, crypto, proof, status, created_at)
        VALUES (?, ?, ?, ?, ?, 'Pending', NOW())";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issss", $user_id, $plan, $amount, $crypto, $targetFilePath);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Investment added successfully.']);
} else {
    echo json_encode(['success' => false, 'message' => 'Database error.']);
}
$stmt->close();
$conn->close();
?>
