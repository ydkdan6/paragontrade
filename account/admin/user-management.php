<?php
require_once '../db_connect.php';
require_once '../Dashboard/includes/session.php';

// Check if admin is logged in
if (!isset($_SESSION['admin_username'])) {
    header("Location: login.php");
    exit;
}

// Fetch all users with their details
$usersQuery = $pdo->query("
    SELECT 
        u.user_id, 
        u.username, 
        u.full_name, 
        u.email, 
        u.phone_number, 
        u.password_hash, 
        u.ref_by, 
        u.created_at,
        (SELECT COUNT(*) FROM InvestmentPlans WHERE user_id = u.user_id) as investment_count,
        (SELECT SUM(balance) FROM Wallets WHERE user_id = u.user_id) as total_balance
    FROM Users u
    ORDER BY u.created_at DESC
");
$users = $usersQuery->fetchAll(PDO::FETCH_ASSOC);

$username = "Admin";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="assets/css/admin.css">
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
        .user-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        .user-table th, .user-table td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        .user-table th {
            background-color: #f2f2f2;
        }
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .delete-btn {
            color: red;
            cursor: pointer;
        }
        .view-details-btn {
            color: blue;
            cursor: pointer;
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
                <a href="user-management.php" class="nav-item active" title="User Management">
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
                <h1>User Management</h1>
            </header>
            <div class="content">
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Username</th>
                            <th>Full Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Referred By</th>
                            <th>Investments</th>
                            <th>Total Balance</th>
                            <th>Registered At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($user['user_id']); ?></td>
                            <td><?php echo htmlspecialchars($user['username']); ?></td>
                            <td><?php echo htmlspecialchars($user['full_name']); ?></td>
                            <td><?php echo htmlspecialchars($user['email']); ?></td>
                            <td><?php echo htmlspecialchars($user['phone_number']); ?></td>
                            <td><?php echo htmlspecialchars($user['ref_by']); ?></td>
                            <td><?php echo htmlspecialchars($user['investment_count']); ?></td>
                            <td><?php echo number_format($user['total_balance'], 8); ?></td>
                            <td><?php echo htmlspecialchars($user['created_at']); ?></td>
                            <td class="action-buttons">
                                <a href="#" class="view-details-btn" data-user-id="<?php echo $user['user_id']; ?>">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="#" class="delete-btn" data-user-id="<?php echo $user['user_id']; ?>">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- User Details Modal -->
    <div id="userDetailsModal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5);">
    <div style="
        background-color:white; 
        margin:1% auto; 
        padding:20px; 
        border-radius:5px; 
        width:90%; 
        max-width:600px; 
        max-height:80%; 
        overflow-y: auto; 
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    ">            <h2>User Details</h2>
            <div id="userDetailsContent"></div>
            <button id="closeUserDetailsModal">Close</button>
        </div>
    </div>

    <script src="assets/js/user-management.js"></script>
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