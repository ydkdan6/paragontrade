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
                        <i class="fas fa-comments"></i>
                        <h3>Live Chat</h3>
                        <p>Chat with our support team</p>
                        <button class="btn btn-primary" onclick="startLiveChat()">Start Chat</button>
                    </div>

                    <div class="support-card">
                        <i class="fas fa-ticket-alt"></i>
                        <h3>Submit Ticket</h3>
                        <p>Create a support ticket</p>
                        <button class="btn btn-primary" onclick="showTicketModal()">Create Ticket</button>
                    </div>

                    <div class="support-card">
                        <i class="fas fa-book"></i>
                        <h3>FAQ</h3>
                        <p>Find quick answers</p>
                        <button class="btn btn-primary" onclick="showFAQ()">View FAQs</button>
                    </div>
                </div>

                <div class="ticket-history">
                    <h3>Your Tickets</h3>
                    <div class="table-container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Ticket ID</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Last Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="ticketHistoryBody">
                                <!-- Data will be populated via JavaScript -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Ticket Modal -->
    <div id="ticketModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Create Support Ticket</h2>
            <form id="ticketForm">
                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" required>
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" required>
                        <option value="">Select Category</option>
                        <option value="technical">Technical Issue</option>
                        <option value="account">Account Related</option>
                        <option value="payment">Payment Issue</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" required></textarea>
                </div>
                <div class="form-group">
                    <label for="attachment">Attachment (optional)</label>
                    <input type="file" id="attachment">
                </div>
                <button type="submit" class="btn btn-primary">Submit Ticket</button>
            </form>
        </div>
    </div>

    <!-- FAQ Modal -->
    <div id="faqModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Frequently Asked Questions</h2>
            <div class="faq-container">
                <!-- FAQs will be populated via JavaScript -->
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/support.js"></script>
</body>
</html>