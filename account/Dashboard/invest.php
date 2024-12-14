<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

// Display success message if exists
if (isset($_SESSION['success_message'])) {
    echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';
    // Clear the message
    unset($_SESSION['success_message']);
}

// Display error message if exists
if (isset($_SESSION['error_message'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
    // Clear the message
    unset($_SESSION['error_message']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invest - Paragontradeinvestment</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/invest.css" />
</head>
<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>

        <aside class="sidebar">
            <!-- Sidebar content remains the same -->
            <?php include 'includes/sidebar.php'; ?>
        </aside>

        <div class="main-content">
            <nav class="top-nav">
                <div class="nav-left">
                    <button class="menu-toggle">
                        <i class="fas fa-bars"></i>
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

            <div class="investment-content">
                <div class="section-header">
                    <h2>Choose Your Investment Plan</h2>
                    <p>Select the investment plan that best suits your goals</p>
                </div>

                <div class="investment-plans">
                    <div class="plan-card" data-min="500" data-max="5000">
                        <div class="plan-header">
                            <h3>Basic Plan</h3>
                            <p class="plan-range">$500 - $5,000</p>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li><i class="fas fa-check"></i> Daily ROI</li>
                                <li><i class="fas fa-check"></i> 24/7 Support</li>
                                <li><i class="fas fa-check"></i> Real-time Trading</li>
                                <li><i class="fas fa-check"></i> 24 hours Duration</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary select-plan" data-plan="basic">Select Basic Plan</button>
                    </div>

                    <div class="plan-card" data-min="5000" data-max="10000">
                        <div class="plan-header">
                            <h3>Pro Plan</h3>
                            <p class="plan-range">$5,000 - $10,000</p>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li><i class="fas fa-check"></i> Enhanced Daily ROI</li>
                                <li><i class="fas fa-check"></i> Priority Support</li>
                                <li><i class="fas fa-check"></i> Advanced Trading Tools</li>
                                <li><i class="fas fa-check"></i> 2 Days Duration</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary select-plan" data-plan="pro">Select Pro Plan</button>
                    </div>

                    <div class="plan-card">
                        <div class="plan-header">
                            <h3>Premium Plan</h3>
                            <p class="plan-range">$10,000 - $50,000</p>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li><i class="fas fa-check"></i> Maximum ROI</li>
                                <li><i class="fas fa-check"></i> VIP Support</li>
                                <li><i class="fas fa-check"></i> Exclusive Features</li>
                                <li><i class="fas fa-check"></i> 3 Days Duration</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary select-plan" data-plan="premium">Select Premium Plan</button>
                    </div>

                    <div class="plan-card">
                        <div class="plan-header">
                            <h3>Gold Plan</h3>
                            <p class="plan-range">$50,000 - Unlimited</p>
                        </div>
                        <div class="plan-features">
                            <ul>
                                <li><i class="fas fa-check"></i> Elite ROI</li>
                                <li><i class="fas fa-check"></i> Dedicated Manager</li>
                                <li><i class="fas fa-check"></i> Custom Solutions</li>
                                <li><i class="fas fa-check"></i> 7 Days Duration</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary select-plan" data-plan="gold">Select Gold Plan</button>
                    </div>
                </div>

                <!-- Payment Modal -->
                <form id="investmentForm" action="process-invest.php" method="POST" enctype="multipart/form-data">
            <div id="paymentModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Select Payment Method</h2>
                    <div class="amount-input">
                    <label for="plan_name">Selected Plan Name:</label>
                            <input type="text" id="planNameInput" name="plan" placeholder="Enter plan name" style="height: 29px; width: 280px; padding-left: 5px; border-radius: 10px;">
                                    <br/>
                                    <br/>
                            <label for="investmentAmount">Investment Amount:</label>
                            <input type="number" id="investmentAmount"  name="investmentAmount" placeholder="Enter amount" style="height: 29px; width: 280px; padding-left: 5px; border-radius: 10px;">
                            <p id="amountWarning" class="" style="color: red;"></p>
                            <br/>
                            <br/>
                            <label for="payment_method">Selected Payment Method:</label>
                            <input type="text"  name="paymentMethod" placeholder="Enter Payment method" style="height: 29px; width: 280px; padding-left: 5px; border-radius: 10px;">
                                    <br/>
                                    <br/>
                        </div>
                    <div class="crypto-options">
                        <div class="crypto-option" data-crypto="bitcoin">
                            <img src="https://cryptologos.cc/logos/bitcoin-btc-logo.png" alt="Bitcoin">
                            <span>Bitcoin</span>
                        </div>
                        <div class="crypto-option" data-crypto="ethereum">
                            <img src="https://cryptologos.cc/logos/ethereum-eth-logo.png" alt="Ethereum">
                            <span>Ethereum</span>
                        </div>
                        <div class="crypto-option" data-crypto="usdt">
                            <img src="https://cryptologos.cc/logos/tether-usdt-logo.png" alt="USDT">
                            <span>USDT</span>
                        </div>
                        <div class="crypto-option" data-crypto="bnb">
                            <img src="https://cryptologos.cc/logos/binance-coin-bnb-logo.png" alt="BNB">
                            <span>BNB</span>
                        </div>
                        <div class="crypto-option" data-crypto="dogecoin">
                            <img src="https://cryptologos.cc/logos/dogecoin-doge-logo.png" alt="Dogecoin">
                            <span>Dogecoin</span>
                        </div>
                    </div>
                </div>
            </div>


               <!-- Wallet Address Modal -->
            <div id="walletModal" class="modal">
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <h2>Complete Your Payment</h2>
                    <div class="wallet-details">
                        <p>Send payment to the following wallet address:</p>

                        <p id="planDisplay"></p>

                        <p class="selected-amount"></p>
        
                        <div class="wallet-address">
                            <input type="text" id="walletAddress" readonly>
                            <button class="btn btn-secondary" id="copyAddress">
                                <i class="fas fa-copy"></i> Copy
                            </button>
                        </div>
                        <div class="proof-upload">
                            <h3>Upload Payment Proof</h3>
                            <input type="file" id="proofUpload" name="proof_of_payment" accept="image/*">
                            <button class="btn btn-primary" id="submitProof">Submit Proof</button>
                        </div>
                    </div>
                </div>
            </div>
</form>

                <!-- Toast Notification -->
                <div id="toast" class="toast"></div>
            </div>
        </div>
    </div>

    <script src="assets/js/side-main.js"></script>
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/invest.js"></script>
</body>
</html>