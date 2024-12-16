<?php
require_once '../db_connect.php'; // Database connection
require_once '../Dashboard/includes/session.php'; // Admin session validation

// Fetch admin username from session
// $adminUsername = $_SESSION['admin_username'];

// Get total number of users
$totalUsers = $pdo->query("SELECT COUNT(*) FROM Users")->fetchColumn();

// Get total number of transactions
$totalTransactions = $pdo->query("SELECT COUNT(*) FROM Transactions")->fetchColumn();

// Get total pending approvals
$pendingApprovals = $pdo->query("SELECT COUNT(*) FROM InvestmentPlans WHERE status = 'Pending'")->fetchColumn();

// User registrations by month (last 6 months)
$userGrowthQuery = $pdo->query("
    SELECT DATE_FORMAT(created_at, '%Y-%m') AS month, COUNT(*) AS total
    FROM Users
    WHERE created_at >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
    GROUP BY month
    ORDER BY month ASC
");
$userGrowthData = $userGrowthQuery->fetchAll(PDO::FETCH_ASSOC);

// Transactions by type
$transactionTypeQuery = $pdo->query("
    SELECT type, COUNT(*) AS total
    FROM Transactions
    GROUP BY type
");
$transactionTypeData = $transactionTypeQuery->fetchAll(PDO::FETCH_ASSOC);

// Pending approvals by month (last 6 months)
$pendingApprovalsQuery = $pdo->query("
    SELECT DATE_FORMAT(created_at, '%Y-%m') AS month, COUNT(*) AS total
    FROM InvestmentPlans
    WHERE status = 'Pending' AND created_at >= DATE_SUB(CURDATE(), INTERVAL 6 MONTH)
    GROUP BY month
    ORDER BY month ASC
");
$pendingApprovalsData = $pendingApprovalsQuery->fetchAll(PDO::FETCH_ASSOC);
?>
<?php
   require_once './../Dashboard/includes/session.php';
if (!isset($_SESSION['admin_username'])) {
    header("Location: login.php");
    exit;
}

$username = "Admin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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

        <!-- Sidebar -->
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
                <a href="dashboard.php" class="nav-item active" title="Dashboard">
                    <i class="fas fa-home"></i>
                    <span>Dashboard Overview</span>
                </a>
                <a href="user-management.php" class="nav-item" title="User Management">
                    <i class="fas fa-users-cog"></i>
                    <span>User Management</span>
                </a>
                <a href="proof-of-payment.php" class="nav-item" title="Proof of Payment">
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
                <h1>Welcome, <?php echo htmlspecialchars($username); ?></h1>
            </header>
            <div class="content">
                <!-- Dashboard Overview -->
                <div class="dashboard-overview">
                    <div class="overview-card">
                        <h3>Total Users</h3>
                        <p><?php echo $totalUsers; ?></p>
                    </div>
                    <div class="overview-card">
                        <h3>Total Transactions</h3>
                        <p><?php echo $totalTransactions; ?></p>
                    </div>
                    <div class="overview-card">
                        <h3>Pending Approvals</h3>
                        <p><?php echo $pendingApprovals; ?></p>
                    </div>
                </div>

                <!-- Charts Section -->
                <div class="charts">
                    <div class="chart-container">
                        <canvas id="userGrowthChart"></canvas>
                    </div>
                    <div class="chart-container">
                        <canvas id="transactionTypeChart"></canvas>
                    </div>
                    <div class="chart-container">
                        <canvas id="pendingApprovalsChart"></canvas>
                    </div>
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

        const userGrowthData = <?php echo json_encode($userGrowthData); ?>;
        const transactionTypeData = <?php echo json_encode($transactionTypeData); ?>;
        const pendingApprovalsData = <?php echo json_encode($pendingApprovalsData); ?>;
    </script>
</body>
</html>