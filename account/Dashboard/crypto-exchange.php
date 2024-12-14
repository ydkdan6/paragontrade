<?php include 'includes/header.php'; ?>
<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>
        <aside class="sidebar">
        <?php include 'includes/sidebar.php'; ?>
        </aside>
        
        <div class="main-content">
            <?php include 'includes/topnav.php'; ?>
            
            <div class="exchange-content">
                <div class="section-header">
                    <h2>Crypto Exchange</h2>
                    <p>Exchange cryptocurrencies instantly</p>
                </div>

                <div class="exchange-container">
                    <div class="exchange-form">
                        <div class="exchange-input">
                            <label>From</label>
                            <select id="fromCurrency">
                                <option value="BTC">Bitcoin (BTC)</option>
                                <option value="ETH">Ethereum (ETH)</option>
                                <option value="USDT">Tether (USDT)</option>
                                <option value="BNB">Binance Coin (BNB)</option>
                            </select>
                            <input type="number" id="fromAmount" placeholder="0.00">
                        </div>
                        
                        <button class="swap-button">
                            <i class="fas fa-exchange-alt"></i>
                        </button>

                        <div class="exchange-input">
                            <label>To</label>
                            <select id="toCurrency">
                                <option value="ETH">Ethereum (ETH)</option>
                                <option value="BTC">Bitcoin (BTC)</option>
                                <option value="USDT">Tether (USDT)</option>
                                <option value="BNB">Binance Coin (BNB)</option>
                            </select>
                            <input type="number" id="toAmount" placeholder="0.00" readonly>
                        </div>

                        <button class="btn btn-primary exchange-button">Exchange Now</button>
                    </div>

                    <div class="exchange-rates">
                        <h3>Current Exchange Rates</h3>
                        <div id="ratesList">
                            <!-- Rates will be populated via JavaScript -->
                        </div>
                    </div>
                </div>

                <div class="exchange-history">
                    <h3>Exchange History</h3>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>From</th>
                                    <th>To</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody id="exchangeHistoryBody">
                                <!-- Data will be populated via JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/crypto-exchange.js"></script>
</body>
</html>