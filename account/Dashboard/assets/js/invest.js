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
    const planDisplay = document.getElementById('planDisplay');
    const planNameInput = document.getElementById('planNameInput');

    // Constants
    const walletAddresses = {
        bitcoin: 'bc1qft4xw2crfm3ajlfemjd20edzfmsn4mlj6z4mvj',
        ethereum: '0xd7F756Aa888F4fD820AE53B82e596DA2314B7d2d',
        usdt: '0xd7F756Aa888F4fD820AE53B82e596DA2314B7d2d',
        bnb: '0xd7F756Aa888F4fD820AE53B82e596DA2314B7d2d',
        dogecoin: 'DRyHfQ4oUJeH6YwTdujme797iUve5L3cCV',
        tron: 'TNd4vf36epoz8BXHbjzxQoVnbSFegKvTFA',
        solana: '9iAvVRQ3PXTbtZNSwFKqQiTEaVT3ayLq5ADG5ZEnrcKE',
        litecoin: 'ltc1ql6xrdc4vj5jwvrmv8zsc60nu7g7sleq4znx93m',
        ripple: 'rU5R9E2sXcc6xEDyW6KLGZxhuXCFDvWyLY'
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
        }, 9000);
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
        const planName = planNameInput.value;
        const minAmount = parseInt(investmentAmountInput.dataset.min, 10);
        const maxAmount = parseInt(investmentAmountInput.dataset.max, 10);

        if (!planName) {
            alert('Please fill out the plan name and investment amount.');
            return;
        }
    
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

        planDisplay.textContent = `Selected Plan: ${planName} Plan`;
    
        // Update wallet address
        walletAddressInput.value = walletAddresses[cryptoType];
        showToast(`${cryptoType.charAt(0).toUpperCase() + cryptoType.slice(1)} selected`);
    
        // Hide payment modal and show wallet modal
        paymentModal.style.display = 'none';
        walletModal.style.display = 'block';
    }
    

    function handleCopyAddress(event) {
        // Prevent default button behavior
        event.preventDefault();
        
        walletAddressInput.select();
        navigator.clipboard.writeText(walletAddressInput.value)
            .then(() => {
                showToast('Wallet address copied to clipboard');
            })
            .catch(err => {
                console.error('Error copying address:', err);
                showToast('Failed to copy address', 'error');
            });
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



