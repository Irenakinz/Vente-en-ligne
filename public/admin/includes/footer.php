
    <!-- Page footer -->
    <footer class="footer bg-body border-top pt-3" data-bs-theme="dark">
      <div class="container pt-sm-2 pt-md-3 pt-lg-4 pb-4"> 
        <!-- Copyright -->
        <div class="text-center pt-0 pb-md-2">
          <p class="text-body-secondary fs-sm mb-0">© All rights reserved. Made by <a class="text-body fw-medium text-decoration-none hover-effect-underline" href="https://createx.studio/" target="_blank" rel="noreferrer">Createx Studio</a></p>
        </div>
      </div>

      <!-- Additional spacing to accommodate the sticky offcanvas toggle button -->
      <div class="d-lg-none" style="height: 3.75rem"></div>
    </footer>


    <!-- Sidebar navigation offcanvas toggle that is visible on screens < 992px wide (lg breakpoint) -->
    <button type="button" class="fixed-bottom z-sticky w-100 btn btn-lg btn-dark border-0 border-top border-light border-opacity-10 rounded-0 pb-4 d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#accountSidebar" aria-controls="accountSidebar" data-bs-theme="light">
      <i class="fi-sidebar fs-base me-2"></i>
      Account menu
    </button>


    <!-- Back to top button -->
    <div class="floating-buttons position-fixed top-50 end-0 z-sticky me-3 me-xl-4 pb-4">
      <a class="btn-scroll-top btn btn-sm bg-body border-0 rounded-pill shadow animate-slide-end" href="#top">
        Top
        <i class="fi-arrow-right fs-base ms-1 me-n1 animate-target"></i>
        <span class="position-absolute top-0 start-0 w-100 h-100 border rounded-pill z-0"></span>
        <svg class="position-absolute top-0 start-0 w-100 h-100 z-1" viewBox="0 0 62 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x=".75" y=".75" width="60.5" height="30.5" rx="15.25" stroke="currentColor" stroke-width="1.5" stroke-miterlimit="10"></rect>
        </svg>
      </a>
       
    </div>


    <!-- Vendor scripts -->
    <script src="../assets/vendor/glightbox/glightbox.min.js"></script>

    <!-- Bootstrap + Theme scripts -->
    <script src="../assets/js/theme.min.js"></script>
  
    <script>
      
      function hideMessage() {
        document.getElementById('server-message').style.display = 'none';
      }

      function generalHideMessage(server_message = "server-message") {
        document.getElementById(server_message).style.display = 'none';
      }

       // Fonction pour afficher les messages du serveur
      function generalShowMessage(message, type = 'info',
        messageDiv_="server-message",
        messageText_="message-text",
        alertDiv_=".alert") 
      {
        const messageDiv = document.getElementById(messageDiv_);
        const messageText = document.getElementById(messageText_);
        const alertDiv = messageDiv.querySelector(alertDiv_);
        
        // Définir le type d'alerte (couleur)
        const alertTypes = {
          'success': 'alert-success',
          'error': 'alert-danger',
          'warning': 'alert-warning',
          'info': 'alert-info'
        };
        
        // Retirer toutes les classes d'alerte
        alertDiv.classList.remove('alert-success', 'alert-danger', 'alert-warning', 'alert-info');
        // Ajouter la classe correspondante au type
        alertDiv.classList.add(alertTypes[type] || 'alert-info');
        
        // Mettre à jour le texte et afficher
        messageText.textContent = message;
        messageDiv.style.display = 'block';
        
        // Masquer automatiquement après 10 secondes (optionnel)
        setTimeout(hideMessage, 10000);
      }

      // Fonction pour afficher les messages du serveur
      function showMessage(message, type = 'info', alertDiv_ ='.alert') {
        const messageDiv = document.getElementById('server-message');
        const messageText = document.getElementById('message-text');
        const alertDiv = messageDiv.querySelector(alertDiv_);
        
        // Définir le type d'alerte (couleur)
        const alertTypes = {
          'success': 'alert-success',
          'error': 'alert-danger',
          'warning': 'alert-warning',
          'info': 'alert-info'
        };
        
        // Retirer toutes les classes d'alerte
        alertDiv.classList.remove('alert-success', 'alert-danger', 'alert-warning', 'alert-info');
        // Ajouter la classe correspondante au type
        alertDiv.classList.add(alertTypes[type] || 'alert-info');
        
        // Mettre à jour le texte et afficher
        messageText.textContent = message;
        messageDiv.style.display = 'block';
        
        // Masquer automatiquement après 10 secondes (optionnel)
        setTimeout(hideMessage, 10000);
      }
    
      // Version simplifiée (sans Bootstrap)
      function hideModalSimple(modalId) {
          const modal = document.getElementById(modalId);
          if (modal) {
              modal.style.display = 'none';
              modal.classList.remove('show');
              modal.setAttribute('aria-hidden', 'true');
              
              // Gérer le body
              document.body.classList.remove('modal-open');
              document.body.style.overflow = 'auto';
              document.body.style.paddingRight = '0';
              
              // Supprimer le backdrop
              const backdrops = document.getElementsByClassName('modal-backdrop');
              while (backdrops.length > 0) {
                  backdrops[0].parentNode.removeChild(backdrops[0]);
              }
          }
      }

    </script>