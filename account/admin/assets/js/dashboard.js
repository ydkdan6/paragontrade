document.addEventListener('DOMContentLoaded', () => {
    // User Growth Chart
    const userGrowthCtx = document.getElementById('userGrowthChart').getContext('2d');
    new Chart(userGrowthCtx, {
        type: 'line',
        data: {
            labels: userGrowthData.map(item => item.month),
            datasets: [{
                label: 'User Registrations',
                data: userGrowthData.map(item => item.total),
                borderColor: '#4CAF50',
                backgroundColor: 'rgba(76, 175, 80, 0.2)',
                borderWidth: 2,
                fill: true
            }]
        },
        options: { responsive: true }
    });

    // Transaction Types Chart
    const transactionTypeCtx = document.getElementById('transactionTypeChart').getContext('2d');
    new Chart(transactionTypeCtx, {
        type: 'doughnut',
        data: {
            labels: transactionTypeData.map(item => item.type),
            datasets: [{
                data: transactionTypeData.map(item => item.total),
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4CAF50', '#FF9800']
            }]
        },
        options: { responsive: true }
    });

    // Pending Approvals Chart
    const pendingApprovalsCtx = document.getElementById('pendingApprovalsChart').getContext('2d');
    new Chart(pendingApprovalsCtx, {
        type: 'bar',
        data: {
            labels: pendingApprovalsData.map(item => item.month),
            datasets: [{
                label: 'Pending Approvals',
                data: pendingApprovalsData.map(item => item.total),
                backgroundColor: '#FF9800',
                borderColor: '#FF5722',
                borderWidth: 1
            }]
        },
        options: { responsive: true }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.querySelector('.sidebar');
    const mainContent = document.querySelector('.main-content');
    const collapseToggle = document.getElementById('collapseToggle');
    const mobileNavToggle = document.getElementById('mobileNavToggle');

    // Toggle sidebar collapse for desktop
    function toggleSidebar() {
        sidebar.classList.toggle('collapsed');
        mainContent.classList.toggle('full-width');
        
        // Rotate collapse toggle icon
        collapseToggle.querySelector('i').classList.toggle('fa-chevron-left');
        collapseToggle.querySelector('i').classList.toggle('fa-chevron-right');
    }

    // Toggle mobile sidebar
    function toggleMobileSidebar() {
        sidebar.classList.toggle('mobile-open');
        mainContent.classList.toggle('mobile-sidebar-open');
    }

    // Add click event to desktop collapse toggle
    collapseToggle.addEventListener('click', toggleSidebar);

    // Add click event to mobile nav toggle
    mobileNavToggle.addEventListener('click', toggleMobileSidebar);

    // Handle responsive sidebar on smaller screens
    function handleResponsiveSidebar() {
        if (window.innerWidth <= 768) {
            sidebar.classList.add('mobile-sidebar');
            
            // Ensure sidebar is collapsed by default on mobile
            if (!sidebar.classList.contains('mobile-open')) {
                sidebar.classList.add('collapsed');
                mainContent.classList.add('full-width');
            }
        } else {
            sidebar.classList.remove('mobile-sidebar');
            sidebar.classList.remove('mobile-open');
            mainContent.classList.remove('mobile-sidebar-open');
        }
    }

    // Initial responsive check
    handleResponsiveSidebar();

    // Recheck on window resize
    window.addEventListener('resize', handleResponsiveSidebar);
});