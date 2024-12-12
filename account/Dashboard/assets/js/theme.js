function initThemeToggle() {
    const themeSwitch = document.getElementById('theme-switch');
    
    themeSwitch.addEventListener('change', () => {
      document.body.classList.toggle('dark-theme');
    });
    
    // Check system preference
    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.body.classList.add('dark-theme');
      themeSwitch.checked = true;
    }
  }