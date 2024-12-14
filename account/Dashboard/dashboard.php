<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragontradeinvestment Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>

        <aside class="sidebar">
        <?php include 'includes/sidebar.php'; ?>
        </aside>

        <div class="main-content">
            <nav class="top-nav">
                <div class="nav-left">
                    <button class="menu-toggle">
                        
                    </button>
                    <h1>Paragontradeinvestment</h1>
                </div>
                <div class="nav-right">
                    <button class="btn btn-primary">Fund your Account</button>
                    <button class="btn btn-secondary">Withdraw Funds</button>
                    <div class="theme-toggle">
                        <input type="checkbox" id="theme-switch">
                        <label for="theme-switch"></label>
                    </div>
                    <div class="kyc-status">KYC</div>
                    <div class="user-profile">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </nav>

            <div class="dashboard-content">
                <div class="welcome-message">
                    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
                    <p>Welcome to Paragontradeinvestment 🎉</p>
                </div>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon purple">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$50.00</h3>
                            <p>Account Balance</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon green">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$0.00</h3>
                            <p>Total Profit</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon blue">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$50.00</h3>
                            <p>Total Bonus</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon light-blue">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$0.00</h3>
                            <p>Total Referral Bonus</p>
                        </div>
                    </div>
                </div>

                <div class="trading-chart">
                    <h3>Personal Trading Chart</h3>
                    <div id="chart-container">
                        <div class="tradingview-widget-container"
														style="width: 100%; height: 523px;">
														<iframe allowtransparency="true" frameborder="0"
															src="https://www.tradingview-widget.com/embed-widget/screener/?locale=en#%7B%22width%22%3A1100%2C%22height%22%3A523%2C%22defaultColumn%22%3A%22overview%22%2C%22defaultScreen%22%3A%22general%22%2C%22market%22%3A%22forex%22%2C%22showToolbar%22%3Atrue%2C%22colorTheme%22%3A%22light%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22www.tradingview.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forexscreener%22%2C%22page-uri%22%3A%22www.tradingview.com%2Fwidget%2Fscreener%2F%22%7D"
															title="screener TradingView widget" lang="en"
															style="user-select: none; box-sizing: border-box; display: block; height: calc(100% - 32px); width: 100%;"></iframe>
                                                            <div class="tradingview-widget-copyright"><a
																href="https://www.tradingview.com/?utm_source=www.tradingview.com&amp;utm_medium=widget_new&amp;utm_campaign=forexscreener"
																rel="noopener nofollow" target="_blank"><span
																	class="blue-text">Track all markets on
																	TradingView</span></a></div>
													</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/alerts.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/theme.js"></script>
</body>
</html>