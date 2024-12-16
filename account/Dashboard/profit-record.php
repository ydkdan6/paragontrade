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
                <table class="profit-table">
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


    <!-- Modal -->
    <!-- Modal -->
<div class="modal" id="comingSoonModal">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h2>Feature Coming Soon</h2>
        <p>We're working hard to bring you this feature. Stay tuned for updates!</p>
    </div>
</div>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/profit-record.js"></script>
    <script>
    // Show the modal on page load
    document.addEventListener('DOMContentLoaded', () => {
        const modal = document.getElementById('comingSoonModal');
        modal.style.display = 'flex'; // Set display to flex for proper centering
    });

    // Function to close the modal
    function closeModal() {
        const modal = document.getElementById('comingSoonModal');
        modal.style.display = 'none';
    }
</script>

    <style>

        /* Main Content Styling */
.main-content {
    padding: 20px;
    background-color: #f9f9f9;
    font-family: 'Arial', sans-serif;
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

/* Profit Summary Cards */
.profit-summary {
    display: flex;
    gap: 20px;
    margin: 20px 0;
}

.summary-card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    flex: 1;
    text-align: center;
}

.summary-card h3 {
    font-size: 1.2rem;
    color: #555;
    margin-bottom: 10px;
}

.summary-card .amount {
    font-size: 1.8rem;
    color: #27ae60;
    font-weight: bold;
}

/* Profit History Table */
.profit-history {
    margin-top: 30px;
}

.profit-history h3 {
    font-size: 1.5rem;
    margin-bottom: 15px;
    color: #333;
}

.table-container {
    overflow-x: auto; /* Ensure table is responsive */
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 15px;
}

.profit-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}

.profit-table th,
.profit-table td {
    padding: 12px;
    border-bottom: 1px solid #eee;
}

.profit-table th {
    background-color: #f4f4f4;
    color: #555;
    font-size: 1rem;
}

.profit-table td {
    color: #333;
    font-size: 0.95rem;
}

.profit-table tr:hover {
    background-color: #f1f1f1;
}

/* Responsive Design */
@media (max-width: 768px) {
    .profit-summary {
        flex-direction: column;
        gap: 10px;
    }

    .summary-card {
        padding: 15px;
    }
}

    /* Modal Styles */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Positioned relative to the viewport */
        z-index: 1000; /* Ensure it's on top */
        top: 0; /* Start from the top */
        left: 0; /* Start from the left */
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        display: flex; /* Flexbox for centering */
        justify-content: center; /* Center horizontally */
        align-items: center; /* Center vertically */
    }

    .modal-content {
        background-color: #fff; /* White background */
        padding: 20px; /* Space inside the modal */
        border-radius: 10px; /* Rounded corners */
        width: 400px; /* Fixed width */
        text-align: center; /* Centered text */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Subtle shadow */
    }

    .close-button {
        float: right; /* Align close button to the top right */
        font-size: 1.5rem; /* Large font size */
        font-weight: bold; /* Bold text */
        cursor: pointer; /* Pointer cursor */
        color: #333; /* Dark gray color */
    }

    .close-button:hover {
        color: #d9534f; /* Change color on hover */
    }
</style>

</body>
</html>
