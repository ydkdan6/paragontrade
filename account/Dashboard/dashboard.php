<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];
// Check if this is the user's first login
$isFirstVisit = !isset($_SESSION['dashboard_tour_completed']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragontradeinvestment Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/introjs.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            height: 80%;
            max-width: 500px;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .close-tour {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close-tour:hover {
            color: #000;
        }
    </style>
</head>

<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>

        <aside class="sidebar">
            <?php include 'includes/sidebar.php'; ?>
        </aside>

        <!-- Dashboard Tour Modal -->
        <?php if ($isFirstVisit): ?>
        <div id="dashboard-tour-modal" class="modal">
            <div class="modal-content">
                <span class="close-tour">&times;</span>
                <h2>Welcome to Your Paragontradeinvestment Dashboard!</h2>
                <p>Let me guide you through your new dashboard and its key features.</p>
                <button id="start-dashboard-tour" class="btn btn-primary">Start Dashboard Tour</button>
            </div>
        </div>
        <?php endif; ?>

        <div class="main-content">
            <nav class="top-nav">
                <div class="nav-left">
                    <button class="menu-toggle"></button>
                    <h1>Paragontradeinvestment</h1>
                </div>
                <div class="nav-right">
                    <button class="btn btn-primary" data-intro="Here you can add funds to your trading account and start investing(Coming-Soon!)" data-step="2">Fund your Account</button>
                    <button class="btn btn-secondary" data-intro="Withdraw your earnings and profits from your account. (Coming-Soon!)" data-step="3">Withdraw Funds</button>
                    <div class="theme-toggle">
                        <input type="checkbox" id="theme-switch">
                        <label for="theme-switch"></label>
                    </div>
                    <div class="kyc-status" data-intro="Complete your Know Your Customer (KYC) verification. (Coming-Soon!)" data-step="4">KYC</div>
                    <div class="user-profile">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </nav>

            <div class="dashboard-content">
                <div class="welcome-message" data-intro="Welcome to your personal dashboard! Here you can see an overview of your account and trading performance" data-step="1">
                    <h2>Welcome, <?php echo htmlspecialchars($username); ?>!</h2>
                    <p>Welcome to Paragontradeinvestment 🎉</p>
                </div>

                <div class="stats-grid" data-intro="These cards provide a quick snapshot of your account statistics" data-step="5">
                    <div class="stat-card" data-intro="Your current account balance - the total funds available for trading" data-step="6">
                        <div class="stat-icon purple">
                            <i class="fas fa-dollar-sign"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$50.00</h3>
                            <p>Account Balance</p>
                        </div>
                    </div>

                    <div class="stat-card" data-intro="Total profits earned from your trading activities" data-step="7">
                        <div class="stat-icon green">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$0.00</h3>
                            <p>Total Profit</p>
                        </div>
                    </div>

                    <div class="stat-card" data-intro="Bonus credits added to your account" data-step="8">
                        <div class="stat-icon blue">
                            <i class="fas fa-gift"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$50.00</h3>
                            <p>Total Bonus</p>
                        </div>
                    </div>

                    <div class="stat-card" data-intro="Earnings from your referral network" data-step="9">
                        <div class="stat-icon light-blue">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="stat-info">
                            <h3>$0.00</h3>
                            <p>Total Referral Bonus</p>
                        </div>
                    </div>
                </div>

                <div class="trading-chart" data-intro="Real-time cryptocurrency market data and trends" data-step="10">
                    <h3>Cryptocurrencies Trading Chart</h3>
                    <div id="chart-container">
                        <div class="tradingview-widget-container" style="width: 100%; height: 523px;">
                            <iframe
                                src="https://www.tradingview.com/embed-widget/crypto-mkt-screener/?locale=en#%7B%22width%22%3A1100%2C%22height%22%3A523%2C%22colorTheme%22%3A%22light%22%2C%22showSymbolLogo%22%3Atrue%2C%22showFloatingTooltip%22%3Atrue%2C%22width%22%3A1100%2C%22height%22%3A523%2C%22defaultColumn%22%3A%22overview%22%2C%22market%22%3A%22crypto%22%2C%22enableScrolling%22%3Atrue%7D"
                                style="user-select: none; box-sizing: border-box; display: block; height: calc(100% - 32px); width: 100%;"
                                frameborder="0">
                            </iframe>
                        </div>
                    </div>
                </div>

                <div class="trading-chart" data-intro="Personal trading performance and forex market insights" data-step="11">
                    <h3>Personal Trading Chart</h3>
                    <div id="chart-container">
                        <div class="tradingview-widget-container" style="width: 100%; height: 523px;">
                            <iframe 
                                src="https://www.tradingview-widget.com/embed-widget/screener/?locale=en#%7B%22width%22%3A1100%2C%22height%22%3A523%2C%22defaultColumn%22%3A%22overview%22%2C%22defaultScreen%22%3A%22general%22%2C%22market%22%3A%22forex%22%2C%22showToolbar%22%3Atrue%2C%22colorTheme%22%3A%22light%22%2C%22enableScrolling%22%3Atrue%2C%22utm_source%22%3A%22www.tradingview.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22forexscreener%22%2C%22page-uri%22%3A%22www.tradingview.com%2Fwidget%2Fscreener%2F%22%7D"
                                style="user-select: none; box-sizing: border-box; display: block; height: calc(100% - 32px); width: 100%;"
                                frameborder="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mark Tour Completed Script -->
    <script src="https://cdn.jsdelivr.net/npm/intro.js@7.2.0/minified/intro.min.js"></script>
    <script src="assets/js/alerts.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/theme.js"></script>

    <script>
    <?php if ($isFirstVisit): ?>
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('dashboard-tour-modal');
        const closeTour = document.querySelector('.close-tour');
        const startTourBtn = document.getElementById('start-dashboard-tour');

        // Show modal on first visit
        modal.style.display = 'block';

        // Close modal events
        closeTour.onclick = function() {
            modal.style.display = 'none';
            // Mark tour as completed
            fetch('mark_tour_completed.php');
        }

        // Start tour button
        startTourBtn.onclick = function() {
            modal.style.display = 'none';
            introJs().setOptions({
                prevLabel: 'Previous',
                nextLabel: 'Next',
                doneLabel: 'Finish Tour',
                showStepNumbers: true,
                exitOnOverlayClick: false,
                showProgress: true
            }).start();
            // Mark tour as completed
            fetch('mark_tour_completed.php');
        }
    });
    <?php endif; ?>
    </script>
</body>
</html>