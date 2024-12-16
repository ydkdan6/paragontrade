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
                        <div class="trade-type">
                            <label for="tradeType">Action</label>
                            <select id="tradeType" onclick="showComingSoonModal()">
                                <option value="buy">Buy</option>
                                <option value="sell">Sell</option>
                            </select>
                        </div>

                        <div class="exchange-input">
                            <label for="fromCurrency">From</label>
                            <select id="fromCurrency" onclick="showComingSoonModal()">
                                <option value="usd">USD (Cash)</option>
                                <option value="btc">Bitcoin (BTC)</option>
                                <option value="eth">Ethereum (ETH)</option>
                                <option value="usdt">Tether (USDT)</option>
                                <option value="bnb">Binance Coin (BNB)</option>
                            </select>
                            <input type="number" id="fromAmount" placeholder="Enter amount" onclick="showComingSoonModal()">
                        </div>

                        <div class="exchange-input">
                            <label for="toCurrency">To</label>
                            <select id="toCurrency" onclick="showComingSoonModal()">
                                <option value="btc">Bitcoin (BTC)</option>
                                <option value="eth">Ethereum (ETH)</option>
                                <option value="usdt">Tether (USDT)</option>
                                <option value="bnb">Binance Coin (BNB)</option>
                            </select>
                            <input type="number" id="toAmount" placeholder="Calculated amount" readonly>
                        </div>

                        <button class="btn btn-primary exchange-button" onclick="showComingSoonModal()">Submit</button>
                    </div>
                </div>

                <!-- Exchange History Section -->
                <div class="exchange-history">
                    <h3>Exchange History</h3>
                    <div class="table-container">
                        <table class="exchange-table">
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

    <!-- Modal -->
    <div class="modal" id="comingSoonModal">
        <div class="modal-content">
            <span class="close-button" onclick="closeComingSoonModal()">&times;</span>
            <h2>Feature Coming Soon</h2>
            <p>We're working hard to bring you this feature. Stay tuned for updates!</p>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <style>
        /* Main Content Styling */
        .main-content {
            padding: 20px;
        }

        /* Section Header Styling */
        .section-header h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 5px;
        }

        .section-header p {
            font-size: 1rem;
            color: #666;
        }

        /* Exchange Form */
        .exchange-container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px 0;
        }

        .exchange-form {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .exchange-input,
        .trade-type {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .exchange-input label,
        .trade-type label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        .exchange-input input,
        .trade-type select {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .btn-primary {
            background-color: #27ae60;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            margin-top: 10px;
        }

        .btn-primary:hover {
            background-color: #219150;
        }

        /* Table Styling */
        .exchange-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            margin-top: 20px;
        }

        .exchange-table th,
        .exchange-table td {
            padding: 12px;
            border-bottom: 1px solid #eee;
        }

        .exchange-table th {
            background-color: #f4f4f4;
            color: #555;
        }

        .exchange-table tr:hover {
            background-color: #f1f1f1;
        }

        /* Modal Styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .close-button {
            float: right;
            font-size: 1.5rem;
            font-weight: bold;
            cursor: pointer;
            color: #333;
        }

        .close-button:hover {
            color: #d9534f;
        }
    </style>

    <script>
        function showComingSoonModal() {
            const modal = document.getElementById('comingSoonModal');
            modal.style.display = 'flex';
        }

        function closeComingSoonModal() {
            const modal = document.getElementById('comingSoonModal');
            modal.style.display = 'none';
        }
    </script>
</body>
</html>
