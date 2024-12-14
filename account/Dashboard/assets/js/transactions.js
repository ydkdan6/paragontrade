document.addEventListener('DOMContentLoaded', () => {
    const typeFilter = document.getElementById('typeFilter');
    const statusFilter = document.getElementById('statusFilter');
    const dateFilter = document.getElementById('dateFilter');
    const transactionHistoryBody = document.getElementById('transactionHistoryBody');

    async function fetchTransactions() {
        const type = typeFilter.value;
        const status = statusFilter.value;
        const date = dateFilter.value;

        const response = await fetch(`fetch_transactions_and_investments.php?type=${type}&status=${status}&date=${date}`);
        const data = await response.json();

        if (data.error) {
            console.error(data.error);
            transactionHistoryBody.innerHTML = `<tr><td colspan="7">Error fetching data</td></tr>`;
            return;
        }

        if (data.length === 0) {
            transactionHistoryBody.innerHTML = `<tr><td colspan="7">No transactions found</td></tr>`;
            return;
        }

        transactionHistoryBody.innerHTML = data.map(item => `
            <tr>
                <td>${new Date(item.date).toLocaleDateString()}</td>
                <td>${item.source}</td>
                <td>${item.type}</td>
                <td>${parseFloat(item.amount).toFixed(2)}</td>
                <td>${item.status}</td>
                <td>${item.payment_method || '-'}</td>
                <td>${item.plan_type || '-'}</td>
            </tr>
        `).join('');
    }

    // Event Listeners for Filters
    typeFilter.addEventListener('change', fetchTransactions);
    statusFilter.addEventListener('change', fetchTransactions);
    dateFilter.addEventListener('input', fetchTransactions);

    // Initial Fetch
    fetchTransactions();
});
