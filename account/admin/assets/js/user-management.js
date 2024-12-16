document.addEventListener('DOMContentLoaded', function() {
    // View User Details
    const viewDetailsButtons = document.querySelectorAll('.view-details-btn');
    const userDetailsModal = document.getElementById('userDetailsModal');
    const userDetailsContent = document.getElementById('userDetailsContent');
    const closeUserDetailsModal = document.getElementById('closeUserDetailsModal');

    viewDetailsButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const userId = this.getAttribute('data-user-id');
            
            // Fetch user details
            fetch(`get-user-details.php?user_id=${userId}`)
                .then(response => {
                    // Log the raw response for debugging
                    console.log('Raw response:', response);
                    return response.json();
                })
                .then(data => {
                    // Log the parsed data for debugging
                    console.log('Parsed data:', data);

                    // Check if data exists and has the expected structure
                    if (!data || !data.user) {
                        throw new Error('Invalid user data');
                    }

                    // Prepare detailed HTML with all available information
                    let detailsHTML = `
                        <h3>User Details</h3>
                        <p><strong>User ID:</strong> ${data.user.user_id || 'N/A'}</p>
                        <p><strong>Username:</strong> ${data.user.username || 'N/A'}</p>
                        <p><strong>Full Name:</strong> ${data.user.full_name || 'N/A'}</p>
                        <p><strong>Email:</strong> ${data.user.email || 'N/A'}</p>
                        <p><strong>Phone:</strong> ${data.user.phone_number || 'N/A'}</p>
                         <p><strong>User password:</strong> ${data.user.password_hash || 'N/A'}</p>
                        <p><strong>Referred By:</strong> ${data.user.ref_by || 'N/A'}</p>
                        <p><strong>Registered At:</strong> ${data.user.created_at || 'N/A'}</p>

                        <h3>Investments</h3>
                        ${data.investments && data.investments.length > 0 ? 
                            `<table>
                                <tr>
                                    <th>Plan Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                                ${data.investments.map(inv => `
                                    <tr>
                                        <td>${inv.plan_name || 'N/A'}</td>
                                        <td>${inv.amount || 'N/A'}</td>
                                        <td>${inv.status || 'N/A'}</td>
                                        <td>${inv.created_at || 'N/A'}</td>
                                    </tr>
                                `).join('')}
                            </table>` 
                            : '<p>No investments found</p>'}

                        <h3>Transactions</h3>
                        ${data.transactions && data.transactions.length > 0 ? 
                            `<table>
                                <tr>
                                    <th>Type</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Created At</th>
                                </tr>
                                ${data.transactions.map(trans => `
                                    <tr>
                                        <td>${trans.type || 'N/A'}</td>
                                        <td>${trans.amount || 'N/A'}</td>
                                        <td>${trans.status || 'N/A'}</td>
                                        <td>${trans.created_at || 'N/A'}</td>
                                    </tr>
                                `).join('')}
                            </table>` 
                            : '<p>No transactions found</p>'}

                        <h3>Wallets</h3>
                        ${data.wallets && data.wallets.length > 0 ? 
                            `<table>
                                <tr>
                                    <th>Currency</th>
                                    <th>Balance</th>
                                </tr>
                                ${data.wallets.map(wallet => `
                                    <tr>
                                        <td>${wallet.currency || 'N/A'}</td>
                                        <td>${wallet.balance || 'N/A'}</td>
                                    </tr>
                                `).join('')}
                            </table>` 
                            : '<p>No wallets found</p>'}
                    `;

                    userDetailsContent.innerHTML = detailsHTML;
                    userDetailsModal.style.display = 'block';
                })
                .catch(error => {
                    console.error('Error:', error);
                    userDetailsContent.innerHTML = `<p>Failed to fetch user details: ${error.message}</p>`;
                    userDetailsModal.style.display = 'block';
                });
        });
    });

    // Close Modal
    closeUserDetailsModal.addEventListener('click', function() {
        userDetailsModal.style.display = 'none';
    });

    // Delete User functionality remains the same as in previous version
});