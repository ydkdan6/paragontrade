document.addEventListener('DOMContentLoaded', () => {
    // DOM Elements
    const paymentModal = document.getElementById('paymentModal');
    const walletModal = document.getElementById('walletModal');
    const investmentAmountInput = document.getElementById('investmentAmount');
    const amountWarning = document.getElementById('amountWarning');
    const walletAddressInput = document.getElementById('walletAddress');
    const copyAddressButton = document.getElementById('copyAddress');
    const submitProofButton = document.getElementById('submitProof');
    const selectedAmount = document.getElementsByClassName("selected-amount");
    const toast = document.getElementById('toast');

    // Constants
    const walletAddresses = {
        bitcoin: '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa',
        ethereum: '0x742d35Cc6634C0532925a3b844Bc454e4438f44e',
        usdt: 'TXn6sEjrwBXYqvQayYqYh7zVjsYyUnDPFi',
        bnb: 'bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m',
        dogecoin: 'D8vFz4p1L37jdg47HXKtSHA5uYLRD4HDh5'
    };

    // Utility Functions
    function formatCurrency(amount) {
        return new Intl.NumberFormat('en-US', {
            style: 'currency',
            currency: 'USD'
        }).format(amount);
    }

    function showToast(message, type = 'success') {
        toast.textContent = message;
        toast.className = `toast ${type}`;
        toast.style.display = 'block';
        setTimeout(() => {
            toast.style.display = 'none';
        }, 3000);
    }

    function validateAmount(value, minAmount, maxAmount) {
        const numValue = parseFloat(value);
        
        if (isNaN(numValue)) {
            return { isValid: false, message: 'Please enter a valid number' };
        }
        
        if (numValue < minAmount) {
            return { 
                isValid: false, 
                message: `Minimum investment amount is ${formatCurrency(minAmount)}` 
            };
        }
        
        if (maxAmount && numValue > maxAmount) {
            return { 
                isValid: false, 
                message: `Maximum investment amount is ${formatCurrency(maxAmount)}` 
            };
        }
        
        return { isValid: true, message: '' };
    }

    // Event Handlers
    function handlePlanSelection(event) {
        const planCard = event.target.closest('.plan-card');
        const minAmount = parseInt(planCard.dataset.min, 10);
        const maxAmount = parseInt(planCard.dataset.max, 10);

        // Reset and store plan limits
        investmentAmountInput.value = '';
        amountWarning.textContent = '';
        investmentAmountInput.dataset.min = minAmount;
        investmentAmountInput.dataset.max = maxAmount;

        paymentModal.style.display = 'block';
    }

    function handleAmountInput() {
        const value = investmentAmountInput.value;
        const minAmount = parseInt(investmentAmountInput.dataset.min, 10);
        const maxAmount = parseInt(investmentAmountInput.dataset.max, 10);

        const validation = validateAmount(value, minAmount, maxAmount);
        amountWarning.textContent = validation.message;
        amountWarning.style.color = validation.isValid ? 'green' : 'red';
    }

    function handleCryptoSelection(event) {
        const value = investmentAmountInput.value;
        const minAmount = parseInt(investmentAmountInput.dataset.min, 10);
        const maxAmount = parseInt(investmentAmountInput.dataset.max, 10);
    
        const validation = validateAmount(value, minAmount, maxAmount);
        
        if (!validation.isValid) {
            amountWarning.textContent = validation.message;
            showToast('Invalid investment amount. Please fix it before proceeding.', 'error');
            return;
        }
    
        const cryptoType = event.currentTarget.dataset.crypto;
        const formattedAmount = formatCurrency(value);
    
        // Update the selected amount in the wallet modal
        const selectedAmountElement = document.querySelector('.selected-amount');
        selectedAmountElement.textContent = `Selected Amount: ${formattedAmount}`;
    
        // Update wallet address
        walletAddressInput.value = walletAddresses[cryptoType];
        showToast(`${cryptoType.charAt(0).toUpperCase() + cryptoType.slice(1)} selected`);
    
        // Hide payment modal and show wallet modal
        paymentModal.style.display = 'none';
        walletModal.style.display = 'block';
    }
    

    function handleCopyAddress() {
        walletAddressInput.select();
        document.execCommand('copy');
        showToast('Wallet address copied to clipboard');
    }

    function handleProofSubmission() {
        const fileInput = document.getElementById('proofUpload');
        if (fileInput.files.length > 0) {
            showToast('Payment proof submitted successfully');
            walletModal.style.display = 'none';
        } else {
            showToast('Please select a proof image first', 'error');
        }
    }

    function handleModalClose() {
        paymentModal.style.display = 'none';
        walletModal.style.display = 'none';
    }

    function handleOutsideClick(event) {
        if (event.target === paymentModal || event.target === walletModal) {
            event.target.style.display = 'none';
        }
    }

    // Event Listeners
    document.querySelectorAll('.select-plan')
        .forEach(button => button.addEventListener('click', handlePlanSelection));

    investmentAmountInput.addEventListener('input', handleAmountInput);

    document.querySelectorAll('.crypto-option')
        .forEach(option => option.addEventListener('click', handleCryptoSelection));

    copyAddressButton.addEventListener('click', handleCopyAddress);
    submitProofButton.addEventListener('click', handleProofSubmission);
    
    document.querySelectorAll('.close')
        .forEach(button => button.addEventListener('click', handleModalClose));

    window.addEventListener('click', handleOutsideClick);
});


//handle submission
document.getElementById('submitProof').addEventListener('click', function () {
    const investmentAmount = document.getElementById('investmentAmount').value;
    const selectedCrypto = document.querySelector('.crypto-option.selected').getAttribute('data-crypto');
    const selectedPlan = document.querySelector('.plan-card.selected').getAttribute('data-plan');
    const proofFile = document.getElementById('proofUpload').files[0];

    if (!investmentAmount || !selectedCrypto || !selectedPlan || !proofFile) {
        alert('Please fill in all fields and upload proof.');
        return;
    }

    const formData = new FormData();
    formData.append('investmentAmount', investmentAmount);
    formData.append('selectedCrypto', selectedCrypto);
    formData.append('selectedPlan', selectedPlan);
    formData.append('proofFile', proofFile);

    fetch('process_investment.php', {
        method: 'POST',
        body: formData,
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Investment submitted successfully!');
            } else {
                alert('Error: ' + data.message);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
});

