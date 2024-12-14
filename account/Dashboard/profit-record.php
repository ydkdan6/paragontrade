<?php include 'includes/header.php'; ?>
<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>
        <aside class="sidebar">
        <?php include 'includes/sidebar.php'; ?>
        </aside>
        
        <div class="main-content">
            <?php include 'includes/topnav.php'; ?>
            
            <div class="profit-content">
                <div class="section-header">
                    <h2>Profit Record</h2>
                    <p>Track your investment returns</p>
                </div>
                
                <div class="profit-summary">
                    <div class="summary-card">
                        <h3>Total Profit</h3>
                        <p class="amount">$<span id="totalProfit">0.00</span></p>
                    </div>
                    <div class="summary-card">
                        <h3>Active Investments</h3>
                        <p class="amount">$<span id="activeInvestments">0.00</span></p>
                    </div>
                </div>

                <div class="profit-history">
                    <h3>Profit History</h3>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Investment Plan</th>
                                    <th>Amount</th>
                                    <th>Profit</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="profitHistoryBody">
                                <!-- Data will be populated via JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/profit-record.js"></script>
</body>
</html>