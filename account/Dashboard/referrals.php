<?php include 'includes/header.php'; ?>
<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>
        <aside class="sidebar">
        <?php include 'includes/sidebar.php'; ?>
        </aside>
        
        <div class="main-content">
            <?php include 'includes/topnav.php'; ?>
            
            <div class="referrals-content">
                <div class="section-header">
                    <h2>Referral Program</h2>
                    <p>Earn by inviting others</p>
                </div>

                <div class="referral-stats">
                    <div class="stat-card">
                        <div class="stat-icon purple">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3 id="totalReferrals">0</h3>
                            <p>Total Referrals</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon green">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$<span id="totalEarnings">0.00</span></h3>
                            <p>Total Earnings</p>
                        </div>
                    </div>
                </div>

                <div class="referral-link-section">
                    <h3>Your Referral Link</h3>
                    <div class="referral-link">
                        <input type="text" id="referralLink" readonly>
                        <button class="btn btn-secondary" onclick="copyReferralLink()">
                            <i class="fas fa-copy"></i> Copy
                        </button>
                    </div>
                    <div class="social-share">
                        <button class="btn btn-facebook">
                            <i class="fab fa-facebook"></i> Share
                        </button>
                        <button class="btn btn-twitter">
                            <i class="fab fa-twitter"></i> Tweet
                        </button>
                        <button class="btn btn-whatsapp">
                            <i class="fab fa-whatsapp"></i> Share
                        </button>
                    </div>
                </div>

                <div class="referral-history">
                    <h3>Referral History</h3>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Username</th>
                                    <th>Status</th>
                                    <th>Investment</th>
                                    <th>Commission</th>
                                </tr>
                            </thead>
                            <tbody id="referralHistoryBody">
                                <!-- Data will be populated via JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/referral.js"></script>
</body>
</html>