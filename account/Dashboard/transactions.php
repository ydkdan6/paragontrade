<?php 
require_once 'includes/session.php';
include '../db_connect.php'; // Ensure database connection

// Fetch user transactions
try {
    $user_id = $_SESSION['user_id']; // Assuming session is started
    $stmt = $pdo->prepare("
        SELECT 
            t.id, 
            t.type, 
            t.amount, 
            t.status, 
            t.created_at,
            i.plan_name,
            i.payment_method
        FROM Transactions t
        LEFT JOIN InvestmentPlans i ON t.id = i.id
        WHERE t.user_id = ? AND t.type = 'Investment'
        ORDER BY t.created_at DESC
    ");
    $stmt->execute([$user_id]);
    $transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
    $transactions = [];
    error_log("Transaction fetch error: " . $e->getMessage());
}

$username = $_SESSION['username'];
?>

<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>
        <aside class="sidebar">
            <?php include 'includes/sidebar.php'; ?>
        </aside>
        
        <div class="main-content">
            <?php include 'includes/topnav.php'; ?>
            
            <div class="transactions-content" style="padding-left: 10px;">
                <div class="section-header">
                    <h2>Investment Transactions</h2>
                    <p>View all your investment activities</p>
                </div>
                
                <div class="transaction-filters">
                    <select id="planFilter">
                        <option value="all">All Plans</option>
                        <?php 
                        // Get unique investment plans
                        $planStmt = $pdo->prepare("
                            SELECT DISTINCT plan_name 
                            FROM InvestmentPlans 
                            WHERE user_id = ?
                        ");
                        $planStmt->execute([$user_id]);
                        $plans = $planStmt->fetchAll(PDO::FETCH_COLUMN);
                        
                        foreach ($plans as $plan):
                        ?>
                            <option value="<?php echo htmlspecialchars($plan); ?>">
                                <?php echo htmlspecialchars($plan); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <select id="statusFilter">
                        <option value="all">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="failed">Failed</option>
                    </select>
                    <input type="date" id="dateFilter">
                </div>
                
                <div class="table-responsive">
                    <table class="transactions-table">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Plan</th>
                                <th>Payment Method</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="transactionHistoryBody">
                            <?php if (empty($transactions)): ?>
                                <tr>
                                    <td colspan="6" class="text-center">No investment transactions found</td>
                                </tr>
                            <?php else: ?>
                                <?php foreach ($transactions as $transaction): ?>
                                    <tr>
                                        <td data-label="Date">
                                            <?php echo date('M d, Y H:i', strtotime($transaction['created_at'])); ?>
                                        </td>
                                        <td data-label="Plan">
                                            <?php echo htmlspecialchars($transaction['plan_name'] ?? 'N/A'); ?>
                                        </td>
                                        <td data-label="Payment Method">
                                            <?php echo htmlspecialchars($transaction['payment_method'] ?? 'N/A'); ?>
                                        </td>
                                        <td data-label="Amount">
                                            $<?php echo number_format($transaction['amount'], 2); ?>
                                        </td>
                                        <td data-label="Status">
                                            <span class="badge badge-<?php 
                                                switch(strtolower($transaction['status'])) {
                                                    case 'completed': echo 'success'; break;
                                                    case 'pending': echo 'warning'; break;
                                                    case 'failed': echo 'danger'; break;
                                                    default: echo 'secondary';
                                                }
                                            ?>">
                                                <?php echo htmlspecialchars($transaction['status']); ?>
                                            </span>
                                        </td>
                                        <td data-label="Actions">
                                            <button class="btn btn-sm btn-outline-info view-details" 
                                                    data-id="<?php echo $transaction['id']; ?>">
                                                View Details
                                            </button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <style>
             /* Responsive Table Styles */
             .table-responsive {
            overflow-x: auto;
        }

        .transactions-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .transactions-table th {
            background-color: #f8f9fa;
            color: #333;
            font-weight: 600;
            padding: 12px;
            text-align: left;
            border-bottom: 2px solid #dee2e6;
        }

        .transactions-table td {
            padding: 12px;
            border-bottom: 1px solid #e9ecef;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8em;
            text-transform: uppercase;
        }

        .badge-success { background-color: #28a745; color: white; }
        .badge-warning { background-color: #ffc107; color: #212529; }
        .badge-danger { background-color: #dc3545; color: white; }
        .badge-info { background-color: #17a2b8; color: white; }
        .badge-secondary { background-color: #6c757d; color: white; }

        .btn-sm {
            padding: 5px 10px;
            font-size: 0.8em;
        }

        .transaction-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: 20px;
        align-items: center;
        background-color: #f8f9fa;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .transaction-filters > * {
        flex: 1;
        min-width: 200px;
        height: 45px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 0 12px;
        font-size: 14px;
        transition: all 0.3s ease;
        appearance: none;
        background-color: white;
    }

    .transaction-filters select {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 12px center;
        background-size: 18px;
        cursor: pointer;
    }

    .transaction-filters input[type="date"] {
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        cursor: pointer;
    }

    .transaction-filters > *:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 0 3px rgba(0, 123, 255, 0.1);
    }

    .transaction-filters > *:hover {
        border-color: #007bff;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .transaction-filters {
            flex-direction: column;
            align-items: stretch;
        }

        .transaction-filters > * {
            min-width: 100%;
            margin-bottom: 10px;
        }
    }

    /* Custom Scrollbar for Dropdowns */
    .transaction-filters select::-webkit-scrollbar {
        width: 8px;
    }

    .transaction-filters select::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    .transaction-filters select::-webkit-scrollbar-thumb {
        background: #007bff;
        border-radius: 4px;
    }

    .transaction-filters select::-webkit-scrollbar-thumb:hover {
        background: #0056b3;
    }

        /* Mobile Responsiveness */
        @media screen and (max-width: 768px) {
            .transactions-table thead {
                display: none;
            }

            .transactions-table, 
            .transactions-table tbody, 
            .transactions-table tr, 
            .transactions-table td {
                display: block;
                width: 100%;
            }

            .transactions-table tr {
                margin-bottom: 15px;
                border: 1px solid #ddd;
                background-color: #f9f9f9;
            }

            .transactions-table td {
                text-align: right;
                padding-left: 50%;
                position: relative;
                border-bottom: 1px solid #ddd;
            }

            .transactions-table td::before {
                content: attr(data-label);
                position: absolute;
                left: 6px;
                width: 45%;
                padding-right: 10px;
                white-space: nowrap;
                text-align: left;
                font-weight: bold;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const planFilter = document.getElementById('planFilter');
            const statusFilter = document.getElementById('statusFilter');
            const dateFilter = document.getElementById('dateFilter');

            [planFilter, statusFilter, dateFilter].forEach(filter => {
                filter.addEventListener('change', function() {
                    filterTransactions();
                });
            });

            function filterTransactions() {
                const rows = document.querySelectorAll('#transactionHistoryBody tr');
                const planValue = planFilter.value.toLowerCase();
                const statusValue = statusFilter.value.toLowerCase();
                const dateValue = dateFilter.value;

                rows.forEach(row => {
                    const plan = row.querySelector('[data-label="Plan"]').textContent.toLowerCase();
                    const status = row.querySelector('[data-label="Status"]').textContent.toLowerCase();
                    const date = row.querySelector('[data-label="Date"]').textContent;

                    const planMatch = planValue === 'all' || plan.includes(planValue);
                    const statusMatch = statusValue === 'all' || status.includes(statusValue);
                    
                    row.style.display = (planMatch && statusMatch) ? '' : 'none';
                });
            }

            // View details button handler
            document.querySelectorAll('.view-details').forEach(button => {
                button.addEventListener('click', function() {
                    const transactionId = this.getAttribute('data-id');
                    // Implement modal or navigation to transaction details
                    alert('Transaction ID: ' + transactionId);
                });
            });
        });
    </script>
</body>
</html>