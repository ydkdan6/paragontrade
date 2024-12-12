document.addEventListener('DOMContentLoaded', () => {
    // Modal elements
    const paymentModal = document.getElementById('paymentModal');
    const walletModal = document.getElementById('walletModal');
    const closeButtons = document.querySelectorAll('.close');
    
    // Wallet addresses for different cryptocurrencies
    const walletAddresses = {
        bitcoin: '1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa',
        ethereum: '0x742d35Cc6634C0532925a3b844Bc454e4438f44e',
        usdt: 'TXn6sEjrwBXYqvQayYqYh7zVjsYyUnDPFi',
        bnb: 'bnb1jxfh2g85q3v0tdq56fnevx6xcxtcnhtsmcu64m',
        dogecoin: 'D8vFz4p1L37jdg47HXKtSHA5uYLRD4HDh5',
        litecoin: 'LQTpS3VaYTjCr4s9Y1t5zbeY26zevf7Fb3',
        xrp: 'rLHzPsX6oXkzU2qL12kHCH8G8cnZv1rBJh',
        solana: '7ZBQJehZK8E1bWHEhpw1yqNemV8WFB4KUeKGrHqXxem1',
        cardano: 'addr1qxck58zg9yaqun2k6f5y8r9jzvl9ztx7v5nywqsx4xrh6g9vp7twsexu8nh0qj4h4w2k5xkt89f5tdd5qz3dyqh42xjqw3e0u6'
    };

    // Show toast message
    function showToast(message, type = 'success') {
        const toast = document.getElementById('toast');
        toast.textContent = message;
        toast.className = 'toast ' + type;
        toast.style.display = 'block';
        
        setTimeout(() => {
            toast.style.display = 'none';
        }, 3000);
    }

    // Handle plan selection
    document.querySelectorAll('.select-plan').forEach(button => {
        button.addEventListener('click', () => {
            paymentModal.style.display = 'block';
        });
    });

    // Handle crypto selection
    document.querySelectorAll('.crypto-option').forEach(option => {
        option.addEventListener('click', () => {
            const cryptoType = option.dataset.crypto;
            const walletAddress = walletAddresses[cryptoType];
            
            document.getElementById('walletAddress').value = walletAddress;
            showToast(`${cryptoType.charAt(0).toUpperCase() + cryptoType.slice(1)} has been selected`);
            
            paymentModal.style.display = 'none';
            walletModal.style.display = 'block';
        });
    });

    // Copy wallet address
    document.getElementById('copyAddress').addEventListener('click', () => {
        const walletAddress = document.getElementById('walletAddress');
        walletAddress.select();
        document.execCommand('copy');
        showToast('Wallet address copied to clipboard');
    });

    // Handle proof upload
    document.getElementById('submitProof').addEventListener('click', () => {
        const fileInput = document.getElementById('proofUpload');
        if (fileInput.files.length > 0) {
            showToast('Payment proof submitted successfully');
            walletModal.style.display = 'none';
        } else {
            showToast('Please select a proof image first', 'error');
        }
    });

    // Close modals
    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            paymentModal.style.display = 'none';
            walletModal.style.display = 'none';
        });
    });

    // Close modal when clicking outside
    window.addEventListener('click', (event) => {
        if (event.target === paymentModal) {
            paymentModal.style.display = 'none';
        }
        if (event.target === walletModal) {
            walletModal.style.display = 'none';
        }
    });
});
