<?php include 'includes/header.php'; ?>
<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>
        <aside class="sidebar">
        <?php include 'includes/sidebar.php'; ?>
        </aside>
        
        <div class="main-content">
            <?php include 'includes/topnav.php'; ?>
            
            <div class="transactions-content">
                <div class="section-header">
                    <h2>Transaction History</h2>
                    <p>View all your financial activities</p>
                </div>

                <div class="transaction-filters">
                    <select id="typeFilter">
                        <option value="all">All Types</option>
                        <option value="deposit">Deposits</option>
                        <option value="withdrawal">Withdrawals</option>
                        <option value="investment">Investments</option>
                    </select>
                    <select id="statusFilter">
                        <option value="all">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                        <option value="failed">Failed</option>
                    </select>
                    <input type="date" id="dateFilter">
                </div>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody id="transactionHistoryBody">
                            <!-- Data will be populated via JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/transactions.js"></script>
</body>
</html>