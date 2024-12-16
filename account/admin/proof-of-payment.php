<?php
require_once '../db_connect.php';
require_once '../Dashboard/includes/session.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_username'])) {
    header("Location: login.php");
    exit;
}

// Handle approval/decline actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['approve']) || isset($_POST['decline'])) {
        $planId = $_POST['plan_id'];
        $action = isset($_POST['approve']) ? 'Approved' : 'Declined';

        // Begin transaction
        $pdo->beginTransaction();

        try {
            // Update investment plan status
            $updatePlanStmt = $pdo->prepare("UPDATE InvestmentPlans SET status = ? WHERE id = ?");
            $updatePlanStmt->execute([$action, $planId]);

            // If approved, update transaction status and wallet balance
            if ($action === 'Approved') {
                // Get investment plan details
                $planStmt = $pdo->prepare("SELECT user_id, amount FROM InvestmentPlans WHERE id = ?");
                $planStmt->execute([$planId]);
                $plan = $planStmt->fetch(PDO::FETCH_ASSOC);

                // Update wallet balance
                $updateWalletStmt = $pdo->prepare("UPDATE Wallets SET balance = balance + ? WHERE user_id = ? AND currency = 'USD'");
                $updateWalletStmt->execute([$plan['amount'], $plan['user_id']]);

                // Create a transaction record
                $transactionStmt = $pdo->prepare("
                    INSERT INTO Transactions 
                    (user_id, type, amount, status) 
                    VALUES (?, 'Investment', ?, 'Completed')
                ");
                $transactionStmt->execute([$plan['user_id'], $plan['amount']]);
            }

            // Log admin action
            $logStmt = $pdo->prepare("
                INSERT INTO AdminActions 
                (admin_id, action_description) 
                VALUES ((SELECT admin_id FROM Admins WHERE username = ?), ?)
            ");
            $logStmt->execute([$_SESSION['admin_username'], "Investment Plan $planId $action"]);

            // Commit transaction
            $pdo->commit();
        } catch (Exception $e) {
            // Rollback transaction on error
            $pdo->rollBack();
            error_log("Proof of Payment Error: " . $e->getMessage());
        }
    }
}

// Fetch pending investment plans with proof of payment
$pendingPlansQuery = $pdo->query("
    SELECT 
        ip.id, 
        ip.amount, 
        ip.payment_method, 
        ip.proof_of_payment, 
        u.full_name, 
        u.username,
        ip.created_at
    FROM 
        InvestmentPlans ip
    JOIN 
        Users u ON ip.user_id = u.user_id
    WHERE 
        ip.status = 'Pending' AND ip.proof_of_payment IS NOT NULL
    ORDER BY 
        ip.created_at ASC
");
$pendingPlans = $pendingPlansQuery->fetchAll(PDO::FETCH_ASSOC);

$username = "Admin";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proof of Payment</title>
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="assets/css/proof.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <button id="mobileNavToggle" class="mobile-nav-toggle">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Sidebar (same as dashboard.php) -->
        <div class="sidebar">
            <div class="sidebar-header">
                <div class="user-info">
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="user-details">
                        <h3><?php echo htmlspecialchars($username); ?></h3>
                        <p>Admin Panel</p>
                    </div>
                </div>
                <button class="collapse-toggle" id="collapseToggle">
                    <i class="fas fa-chevron-left"></i>
                </button>
            </div>
            <nav class="sidebar-nav">
                <a href="dashboard.php" class="nav-item" title="Dashboard">
                    <i class="fas fa-home"></i>
                    <span>Dashboard Overview</span>
                </a>
                <a href="user-management.php" class="nav-item" title="User Management">
                    <i class="fas fa-users-cog"></i>
                    <span>User Management</span>
                </a>
                <a href="proof-of-payment.php" class="nav-item active" title="Proof of Payment">
                    <i class="fas fa-file-invoice"></i>
                    <span>Proof of Payment</span>
                </a>
                <a href="transactions.php" class="nav-item" title="Transactions History">
                    <i class="fas fa-history"></i>
                    <span>Transactions</span>
                </a>
                <a href="logout.php" class="nav-item" title="Logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h1>Proof of Payment</h1>
            </header>
            <div class="content">
                <div class="proof-of-payment-container">
                    <?php if (empty($pendingPlans)): ?>
                        <div class="no-pending-payments">
                            <p>No pending payment proofs at the moment.</p>
                        </div>
                    <?php else: ?>
                        <?php foreach ($pendingPlans as $plan): ?>
                            <div class="payment-proof-card">
                                <div class="payment-proof-header">
                                    <h3><?php echo htmlspecialchars($plan['full_name']); ?> (<?php echo htmlspecialchars($plan['username']); ?>)</h3>
                                    <p>Investment Amount: $<?php echo number_format($plan['amount'], 2); ?></p>
                                    <p>Payment Method: <?php echo htmlspecialchars($plan['payment_method']); ?></p>
                                    <p>Submitted: <?php echo date('F d, Y H:i', strtotime($plan['created_at'])); ?></p>
                                </div>
                                <div class="payment-proof-image">
                                    <?php
                                    $imagePath = $plan['proof_of_payment'];
                                    echo "<img src='http://localhost/Paragontrade/account/Dashboard/$imagePath' />";


                                    if (file_exists($imagePath)): ?>
                                        <img src="<?php echo ($imagePath); ?>" alt="Proof of Payment">

                                    <?php else: ?>
                                        <p>Image not available</p>
                                    <?php endif; ?>
                                </div>
                                <div class="payment-proof-actions">
                                    <form method="POST" action="">
                                        <input type="hidden" name="plan_id" value="<?php echo $plan['id']; ?>">
                                        <button type="submit" name="decline" class="btn btn-danger">
                                            <i class="fas fa-times"></i> Decline
                                        </button>
                                        <button type="submit" name="approve" class="btn btn-success">
                                            <i class="fas fa-check"></i> Approve
                                        </button>
                                    </form>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/dashboard.js"></script>
    <script>
        // Toggle sidebar on mobile
        document.getElementById('mobileNavToggle').addEventListener('click', function () {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        });
    </script>
</body>

</html>