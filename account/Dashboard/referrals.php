<?php
require_once 'includes/session.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$username = $_SESSION['username'];

$baseURL = "https://paragontradeinvestment.com/register";
$referralLink = $baseURL . "?ref=" . $username;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Referral Program</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <style>
        .referrals-content {
    max-width: 900px;
    margin: 10px 28px;
}

.section-header h2 {
    font-size: 2rem;
    color: #1d3557;
}

.stat-card {
    display: flex;
    align-items: center;
    background: #f8f9fa;
    border-radius: 10px;
    padding: 15px;
    margin: 10px 0;
}

.stat-icon {
    font-size: 2rem;
    margin-right: 10px;
}

.stat-icon.purple {
    color: #6c63ff;
}

.stat-icon.green {
    color: #27ae60;
}

.referral-link {
    display: flex;
    align-items: center;
    margin: 10px 0;
}

.referral-link input {
    flex: 1;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px 0 0 5px;
}

.referral-link button {
    padding: 10px;
    border: none;
    background: #1d3557;
    color: white;
    cursor: pointer;
    border-radius: 0 5px 5px 0;
}

.social-share button {
    margin-right: 5px;
    background: #e9ecef;
    color: #333;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
}

.table-container table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-container th,
.table-container td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
    </style>
</head>
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
                        <input type="text" id="referralLink" value="<?php echo $referralLink; ?>" readonly>
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
