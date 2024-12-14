document.addEventListener('DOMContentLoaded', function() {
    // Initialize referral system
    initializeReferralSystem();
    // Load referral history
    loadReferralHistory();
});

function initializeReferralSystem() {
    // Generate and display referral link
    generateReferralLink();
    // Initialize social share buttons
    initializeSocialShare();
}

async function generateReferralLink() {
    try {
        const response = await fetch('api/get-referral-link.php');
        const data = await response.json();
        
        document.getElementById('referralLink').value = data.referralLink;
        updateReferralStats(data.stats);
    } catch (error) {
        console.error('Error generating referral link:', error);
        showToast('Error loading referral data', 'error');
    }
}

function updateReferralStats(stats) {
    document.getElementById('totalReferrals').textContent = stats.totalReferrals;
    document.getElementById('totalEarnings').textContent = stats.totalEarnings.toFixed(2);
}

function copyReferralLink() {
    const referralLink = document.getElementById('referralLink');
    referralLink.select();
    document.execCommand('copy');
    
    showToast('Referral link copied to clipboard', 'success');
}

function initializeSocialShare() {
     function initializeSocialShare() {
    const referralLink = document.getElementById('referralLink').value;
    
    // Facebook share
    document.querySelector('.btn-facebook').addEventListener('click', () => {
        const url = `https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(referralLink)}`;
        openShareWindow(url);
    });
    
    // Twitter share
    document.querySelector('.btn-twitter').addEventListener('click', () => {
        const text = 'Join me on Paragontradeinvestment and start earning today!';
        const url = `https://twitter.com/intent/tweet?text=${encodeURIComponent(text)}&url=${encodeURIComponent(referralLink)}`;
        openShareWindow(url);
    });
    
    // WhatsApp share
    document.querySelector('.btn-whatsapp').addEventListener('click', () => {
        const text = `Join me on Paragontradeinvestment: ${referralLink}`;
        const url = `https://wa.me/?text=${encodeURIComponent(text)}`;
        openShareWindow(url);
    });
}

function openShareWindow(url) {
    window.open(url, '_blank', 'width=600,height=400');
}

async function loadReferralHistory() {
    try {
        const response = await fetch('api/referral-history.php');
        const history = await response.json();
        updateReferralHistory(history);
    } catch (error) {
        console.error('Error loading referral history:', error);
        showToast('Error loading referral history', 'error');
    }
}

function updateReferralHistory(history) {
    const tbody = document.getElementById('referralHistoryBody');
    tbody.innerHTML = '';

    history.forEach(referral => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${formatDate(referral.date)}</td>
            <td>${referral.username}</td>
            <td><span class="status-badge ${referral.status.toLowerCase()}">${referral.status}</span></td>
            <td>$${referral.investment.toFixed(2)}</td>
            <td>$${referral.commission.toFixed(2)}</td>
        `;
        tbody.appendChild(row);
    });
}

function formatDate(dateString) {
    return new Date(dateString).toLocaleDateString('en-US', {
        year: 'numeric',
        month: 'short',
        day: 'numeric'
    });
}

function showToast(message, type = 'info') {
    const toast = document.getElementById('toast');
    toast.textContent = message;
    toast.className = `toast ${type}`;
    toast.style.display = 'block';
    
    setTimeout(() => {
        toast.style.display = 'none';
    }, 3000);
}