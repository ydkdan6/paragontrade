function initSidebar() {
  const menuToggle = document.querySelector('.menu-toggle');
  const collapseToggle = document.querySelector('.collapse-toggle');
  const sidebar = document.querySelector('.sidebar');
  const overlay = document.querySelector('.sidebar-overlay');
  const mainContent = document.querySelector('.main-content');

  // Mobile menu toggle
  menuToggle?.addEventListener('click', toggleMobileSidebar);
  overlay?.addEventListener('click', closeMobileSidebar);

  // Desktop collapse toggle
  collapseToggle?.addEventListener('click', toggleSidebarCollapse);

  function toggleMobileSidebar() {
    sidebar.classList.toggle('sidebar-open');
    overlay.classList.toggle('overlay-visible');
    document.body.classList.toggle('sidebar-active');
  }

  function closeMobileSidebar() {
    sidebar.classList.remove('sidebar-open');
    overlay.classList.remove('overlay-visible');
    document.body.classList.remove('sidebar-active');
  }

  function toggleSidebarCollapse() {
    sidebar.classList.toggle('sidebar-collapsed');
    mainContent.classList.toggle('content-expanded');
    collapseToggle.querySelector('i').classList.toggle('fa-chevron-right');
    collapseToggle.querySelector('i').classList.toggle('fa-chevron-left');
  }

  // Add hover effect for collapsed state
  const navItems = document.querySelectorAll('.nav-item');
  navItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
      if (sidebar.classList.contains('sidebar-collapsed')) {
        item.querySelector('span').style.display = 'block';
      }
    });

    item.addEventListener('mouseleave', () => {
      if (sidebar.classList.contains('sidebar-collapsed')) {
        item.querySelector('span').style.display = '';
      }
    });
  });
}