<?php include 'includes/header.php'; ?>
<body>
    <div class="app-container">
        <div class="sidebar-overlay"></div>
        <aside class="sidebar">
            <?php include 'includes/sidebar.php'; ?>
        </aside>

        <div class="main-content">
            <?php include 'includes/topnav.php'; ?>

            <div class="support-content">
                <div class="section-header">
                    <h2>Help & Support</h2>
                    <p>We're here to help you</p>
                </div>

                <div class="support-options">
                    <div class="support-card">
                        <i class="fas fa-envelope"></i>
                        <h3>Email Us</h3>
                        <p>Chat with our support team via email</p>
                        <button class="btn btn-primary" onclick="emailSupport()">Start Chat</button>
                    </div>

                    <div class="support-card">
                        <i class="fas fa-phone"></i>
                        <h3>Drop a call</h3>
                        <p>You can drop a call</p>
                        <button class="btn btn-primary" onclick="callSupport()">Email Us</button>
                    </div>

                    <div class="support-card">
                        <i class="fas fa-book"></i>
                        <h3>FAQ</h3>
                        <p>Find quick answers</p>
                        <button class="btn btn-primary" onclick="showFAQModal()">View FAQs</button>
                    </div>
                </div>

                <div class="contact-section">
                    <h3>Contact Us</h3>
                    <form id="contactForm" onsubmit="return sendEmail();">
    <div class="form-group">
        <label for="contactName">Name</label>
        <input type="text" id="contactName" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
        <label for="contactEmail">Email</label>
        <input type="email" id="contactEmail" placeholder="Enter your email" required>
    </div>
    <div class="form-group">
        <label for="contactMessage">Message</label>
        <textarea id="contactMessage" placeholder="Write your message" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

                    <div class="call-to-action">
                        <p>Need immediate assistance? Call us at <strong><a href="tel:+1251-241-1540">+1251-241-1540</a></strong></p>
                        <button class="btn btn-secondary" onclick="callSupport()">Call Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- FAQ Modal -->
    <div id="faqModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('faqModal')">&times;</span>
            <h2>Frequently Asked Questions</h2>
            <div class="faq-container">
                <p>Here are some common questions and answers to assist you.</p>
                <!-- FAQs populated via JavaScript -->
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

    <style>
        .main-content {
            padding: 20px;
            background-color: #f4f4f4;
        }

        .section-header h2 {
            color: #333;
            margin-bottom: 5px;
        }

        .section-header p {
            color: #666;
        }

        .support-options {
            display: flex;
            gap: 20px;
            margin-bottom: 30px;
        }

        .support-card {
            background: #fff;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            flex: 1;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .support-card h3 {
            color: #333;
        }

        .support-card p {
            color: #666;
        }

        .support-card i {
            font-size: 2rem;
            color: #007bff;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-secondary {
            background-color: #28a745;
            color: #fff;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .contact-section {
            margin-bottom: 30px;
        }

        .contact-section form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            width: 500px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container th, .table-container td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .call-to-action {
            margin-top: 20px;
            text-align: center;
        }
    </style>

    <script>

function sendEmail() {
        var name = document.getElementById('contactName').value;
        var email = document.getElementById('contactEmail').value;
        var message = document.getElementById('contactMessage').value;

        // Encode the message to ensure it works in the URL
        var subject = "Contact Form Submission from " + name;
        var body = "Name: " + name + "\nEmail: " + email + "\nMessage: " + message;

        // Construct the mailto URL with pre-filled subject and body
        var mailtoLink = "mailto:info.0010011@gmail.com?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body);

        // Redirect to the mailto link
        window.location.href = mailtoLink;

        // Prevent the default form submission (refresh)
        return false;
    }

        function showTicketModal() {
            document.getElementById('ticketModal').style.display = 'flex';
        }

        function showFAQModal() {
            document.getElementById('faqModal').style.display = 'flex';
        }

        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function callSupport() {
            window.location.href = "tel:+1251-241-1540";
        }

        function emailSupport() {
            window.location.href = "mailto:info.0010011@gmail.com:";
        }
    </script>
</body>
</html>
