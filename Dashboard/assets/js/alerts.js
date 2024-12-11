function showWelcomeAlert() {
    const alertHTML = `
      <div class="alert-overlay"></div>
      <div class="custom-alert">
        <i class="fas fa-check-circle alert-icon"></i>
        <h2 class="alert-title">Welcome to TSC-assetpro!</h2>
        <p class="alert-message">Congratulations! Your account has been credited with $50.00</p>
        <button class="alert-button">Start Trading</button>
      </div>
    `;
  
    const alertContainer = document.createElement('div');
    alertContainer.innerHTML = alertHTML;
    document.body.appendChild(alertContainer);
  
    const alertButton = alertContainer.querySelector('.alert-button');
    const alertOverlay = alertContainer.querySelector('.alert-overlay');
  
    function closeAlert() {
      alertContainer.remove();
    }
  
    alertButton.addEventListener('click', closeAlert);
    alertOverlay.addEventListener('click', closeAlert);
  }