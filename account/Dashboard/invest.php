<?php
require_once 'includes/session.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$username = $_SESSION['username'];

// Handle success message from session (as a backup)
if (isset($_SESSION['success_message'])) {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        toastr.success('" . $_SESSION['success_message'] . "', 'Success', {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            timeOut: 5000
        });
    });
    </script>";
    // Clear the message
    unset($_SESSION['success_message']);
}

// Handle error message
if (isset($_SESSION['error_message'])) {
    echo "<script>
    document.addEventListener('DOMContentLoaded', function() {
        toastr.error('" . $_SESSION['error_message'] . "', 'Error', {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right',
            timeOut: 5000
        });
    });
    </script>";
    // Clear the error message
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/invest.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<style>
    body {
    font-family: "Montserrat", sans-serif;
  font-optical-sizing: auto;
  font-weight: 400;
  font-style: normal;
    background-color: var(--background-color);
    color: var(--text-color);
    transition: all 0.3s ease;
  }
</style>
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
                <form id="investmentForm" action="process-invest.php" method="POST" enctype="multipart/form-data" >
            <div id="paymentModal" class="modal" style="overflow-y: scroll;">
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
                        <div class="crypto-option" data-crypto="solana">
                            <img src="https://cryptologos.cc/logos/solana-sol-logo.png" alt="SOLANA">
                            <span>SOLANA</span>
                        </div>
                        <div class="crypto-option" data-crypto="litecoin">
                            <img src="https://cryptologos.cc/logos/litecoin-ltc-logo.png" alt="LITECOIN">
                            <span>LITECOIN</span>
                        </div>
                        <div class="crypto-option" data-crypto="ripple">
                            <img src="https://cryptologos.cc/logos/xrp-xrp-logo.png" alt="RIPPLE">
                            <span>RIPPLE</span>
                        </div>
                        <div class="crypto-option" data-crypto="tron">
                            <img src="https://cryptologos.cc/logos/tron-trx-logo.png" alt="TRON">
                            <span>TRON</span>
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

    <!-- Success Modal -->
<div id="successModal" class="modal-con">
    <div class="modal-items">
        <span class="close-mod">&times;</span>
        <h2>Success!</h2>
        <p>Your investment has been placed successfully.</p>
        <button class="btn btn-primary close-modal-btn">OK</button>
    </div>
</div>

<style>
    /* Modal Styles */
.modal-con {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.modal-items {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    width: 90%;
    max-width: 400px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.modal-items h2 {
    color: #4CAF50; /* Success color */
    margin-bottom: 15px;
}

.modal-items p {
    color: #555;
    font-size: 16px;
    margin-bottom: 20px;
}

.modal-items .btn {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.modal-items .btn:hover {
    background-color: #45a049;
}

.close-mod {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 20px;
    cursor: pointer;
}

</style>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Check for success parameter in URL
        const urlParams = new URLSearchParams(window.location.search);
        const isSuccess = urlParams.get('success');

        if (isSuccess === 'true') {
            // Show the success modal
            const successModal = document.getElementById('successModal');
            successModal.style.display = 'flex';

            // Close modal on button click
            document.querySelectorAll('.close-modal, .close-modal-btn').forEach((el) => {
                el.addEventListener('click', function () {
                    successModal.style.display = 'none';
                });
            });

            // Remove success parameter from URL
            history.replaceState(null, '', window.location.pathname);
        }
    });
</script>

    <script src="assets/js/side-main.js"></script>
    <!-- <script src="assets/js/main.js"></script> -->
    <script src="assets/js/sidebar.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/invest.js"></script>
</body>
</html>