document.addEventListener('DOMContentLoaded', () => {
    const fromCurrency = document.getElementById('fromCurrency');
    const toCurrency = document.getElementById('toCurrency');
    const fromAmount = document.getElementById('fromAmount');
    const toAmount = document.getElementById('toAmount');
    const tradeType = document.getElementById('tradeType');
    const exchangeButton = document.querySelector('.exchange-button');

    let rates = {}; // To store the fetched rates

    // Fetch live rates from CoinGecko API
    async function fetchRates() {
        try {
            const response = await fetch('https://api.coingecko.com/api/v3/exchange_rates');
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            const data = await response.json();
            rates = data.rates; // Save rates globally
            console.log('Rates:', rates); // Debug API response
        } catch (error) {
            console.error('Failed to fetch rates:', error);
            alert('Unable to fetch rates. Please try again later.');
        }
    }

    // Update the "To Amount" based on the selected currencies and trade type
    function updateToAmount() {
        // Ensure rates for selected currencies exist
        const fromRateObj = rates[fromCurrency.value];
        const toRateObj = rates[toCurrency.value];

        if (!fromRateObj || !toRateObj) {
            alert('Selected currencies are not supported.');
            toAmount.value = '';
            return;
        }

        const fromRate = fromRateObj.value;
        const toRate = toRateObj.value;
        const amount = parseFloat(fromAmount.value) || 0;

        if (tradeType.value === 'buy') {
            toAmount.value = (amount / toRate).toFixed(6); // Calculate crypto amount
        } else if (tradeType.value === 'sell') {
            toAmount.value = (amount * fromRate).toFixed(6); // Calculate cash amount
        }
    }

    // Event Listeners for inputs and changes
    fromCurrency.addEventListener('change', updateToAmount);
    toCurrency.addEventListener('change', updateToAmount);
    fromAmount.addEventListener('input', updateToAmount);
    tradeType.addEventListener('change', updateToAmount);

    // Handle Submit Button Click
    exchangeButton.addEventListener('click', async () => {
        const tradeAction = tradeType.value;
        const from = fromCurrency.value;
        const to = toCurrency.value;
        const amount = parseFloat(fromAmount.value);

        if (!amount || amount <= 0) {
            alert('Please enter a valid amount.');
            return;
        }

        const rateObj = rates[to];
        if (!rateObj) {
            alert('Rate not available for the selected currency.');
            return;
        }

        const resultAmount = parseFloat(toAmount.value);

        // Example: Sending transaction to the backend
        try {
            const response = await fetch('../Dashboard/process-trade.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({
                    tradeAction,
                    from,
                    to,
                    amount,
                    resultAmount,
                })
            });

            const result = await response.json();
            if (result.success) {
                alert('Transaction successful!');
                // Optionally update UI or reload data
            } else {
                alert(`Transaction failed: ${result.message}`);
            }
        } catch (error) {
            console.error('Failed to process transaction:', error);
            alert('An error occurred while processing your transaction.');
        }
    });

    // Fetch rates on page load
    fetchRates();
});
