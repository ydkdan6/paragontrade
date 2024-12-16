// Initialize referral statistics
let totalReferrals = 0;
let totalEarnings = 0;

// Update statistics dynamically
function addReferral(referralAmount = 0.05) {
    totalReferrals++;
    totalEarnings += referralAmount;

    document.getElementById('totalReferrals').textContent = totalReferrals;
    document.getElementById('totalEarnings').textContent = totalEarnings.toFixed(2);
}

// Copy referral link
function copyReferralLink() {
    const referralLink = document.getElementById('referralLink');
    referralLink.select();
    document.execCommand('copy');
    alert('Referral link copied to clipboard!');
}

// Mock referral addition (for testing)
setInterval(() => addReferral(0.005), 600000); // Adds a referral every 10 seconds
