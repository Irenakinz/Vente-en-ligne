<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
  
<?php

$base_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'];

?>
  <!-- head de la page -->
 <head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Vente produits</title>
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap HTML Template">
    <meta name="keywords" content="directory, listings, search, car dealer, real estate, city guide, business listings, medical directories, event listings, e-commerce, market, multipurpose, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="../assets/app-icons/icon-32x32.png" sizes="32x32"> 
    <!-- Theme switcher (color modes) -->
    <script src="../assets/js/theme-switcher.js"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="../assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="../assets/icons/finder-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="../assets/icons/finder-icons.min.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="../assets/vendor/glightbox/glightbox.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="../assets/css/theme.min.css" as="style">
    <link rel="preload" href="../assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="../assets/css/theme.min.css" id="theme-styles">
    <link rel="stylesheet" href="../assets/css/anime.css">

    <!-- Customizer -->
    <script src="../assets/js/customizer.min.js"></script>
  </head>
  <!-- head de la page -->
 <style>
.password-toggle .btn-link {
  padding: 0 15px;
  background: none;
  border: none;
}

.password-toggle .btn-link:hover {
  color: #0d6efd !important;
}

.password-toggle .form-control {
  padding-right: 50px;
}

.min-vh-100 {
  min-height: 100vh;
}
</style>
  
  <!-- Body -->
  <body>
  

    <!-- Page content -->
    <main class="content-wrapper d-flex align-items-center justify-content-center min-vh-100 px-3">
      <div class="w-100" style="max-width: 400px">
        
        <!-- Logo -->
        <div class="text-center mb-5">
        
        </div>

        <!-- Titre -->
        <h1 class="h4 text-center mb-4">
            <span class="d-inline-flex text-primary me-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="35" height="34"><path d="M34.5 16.894v10.731c0 3.506-2.869 6.375-6.375 6.375H17.5h-.85C7.725 33.575.5 26.138.5 17c0-9.35 7.65-17 17-17s17 7.544 17 16.894z" fill="currentColor"></path><g fill-rule="evenodd"><path d="M17.5 13.258c-3.101 0-5.655 2.554-5.655 5.655s2.554 5.655 5.655 5.655 5.655-2.554 5.655-5.655-2.554-5.655-5.655-5.655zm-9.433 5.655c0-5.187 4.246-9.433 9.433-9.433s9.433 4.246 9.433 9.433a9.36 9.36 0 0 1-1.569 5.192l2.397 2.397a1.89 1.89 0 0 1 0 2.671 1.89 1.89 0 0 1-2.671 0l-2.397-2.397a9.36 9.36 0 0 1-5.192 1.569c-5.187 0-9.433-4.246-9.433-9.433z" fill="#000" fill-opacity=".05"></path><g fill="#fff"><path d="M17.394 10.153c-3.723 0-6.741 3.018-6.741 6.741s3.018 6.741 6.741 6.741 6.741-3.018 6.741-6.741-3.018-6.741-6.741-6.741zM7.347 16.894A10.05 10.05 0 0 1 17.394 6.847 10.05 10.05 0 0 1 27.44 16.894 10.05 10.05 0 0 1 17.394 26.94 10.05 10.05 0 0 1 7.347 16.894z"></path><path d="M23.025 22.525c.645-.645 1.692-.645 2.337 0l3.188 3.188c.645.645.645 1.692 0 2.337s-1.692.645-2.337 0l-3.187-3.187c-.645-.646-.645-1.692 0-2.337z"></path></g></g><path d="M23.662 14.663c2.112 0 3.825-1.713 3.825-3.825s-1.713-3.825-3.825-3.825-3.825 1.713-3.825 3.825 1.713 3.825 3.825 3.825z" fill="#fff"></path><path fill-rule="evenodd" d="M23.663 8.429a2.41 2.41 0 0 0-2.408 2.408 2.41 2.41 0 0 0 2.408 2.408 2.41 2.41 0 0 0 2.408-2.408 2.41 2.41 0 0 0-2.408-2.408zm-5.242 2.408c0-2.895 2.347-5.242 5.242-5.242s5.242 2.347 5.242 5.242-2.347 5.242-5.242 5.242-5.242-2.347-5.242-5.242z" fill="currentColor"></path></svg>
            </span>
            Bienvenue a salama  
        </h1>

        
        <!-- Lien d'inscription -->
        <div class="text-center m-3">
          <p class="mb-0">Connectez vous pour acceder a votre espace
        </div>

        <div id="server-message" class="mb-4" style="display: none;">
          <div class="alert alert-dismissible fade show" role="alert">
            <span id="message-text"></span>
            <button type="button" class="btn-close" onclick="hideMessage()"></button>
          </div>
        </div>

        <!-- Formulaire -->
        <form class="needs-validation" name="loginUserForm" validate onsubmit="return false">
          
          <!-- Champ Email -->
          <div class="mb-4">
            <label for="email" class="form-label">Adresse email</label>
            <div class="position-relative">
              <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="votre@email.com" required>
              <div class="invalid-feedback">Veuillez saisir une adresse email valide.</div>
            </div>
          </div>

          <!-- Champ Mot de passe -->
          <div class="mb-4">
            <label for="password" class="form-label">Mot de passe</label>
            <div class="password-toggle position-relative">
              <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Votre mot de passe" required>
              <button type="button" class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-decoration-none text-secondary" onclick="togglePassword()">
                <i class="bi bi-eye"></i>
              </button>
              <div class="invalid-feedback">Veuillez saisir votre mot de passe.</div>
            </div>
          </div>
    

          <!-- Bouton de soumission -->
          <button type="submit" class="btn btn-primary btn-lg w-100 py-3" id="submit-btn" onclick="loginUser()">
            <div class="dot-spinner d-none" id="loading-spinner">
              <div class="dot-spinner__dot"></div>
              <div class="dot-spinner__dot"></div>
              <div class="dot-spinner__dot"></div>
              <div class="dot-spinner__dot"></div>
              <div class="dot-spinner__dot"></div>
              <div class="dot-spinner__dot"></div>
              <div class="dot-spinner__dot"></div>
              <div class="dot-spinner__dot"></div>
            </div> <span id="submit-text">Se connecter</span> 
          </button>

        </form>

      </div>
    </main>

   <script>

      let url = "../../app/index.php?action=admin/login";
      //let url = "<?php echo $base_url; ?>/Vente-en-ligne/app/index.php?action=admin/login";
      
      // Fonction principale de connexion
      function loginUser() {
        let form = document.forms.loginUserForm;
        let submit_btn = document.getElementById("submit-btn");
        let submit_text = document.getElementById("submit-text");
        let loading_spinner = document.getElementById("loading-spinner");
        
        // Validation du formulaire
        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return false;
        }
        
        // Récupération des données
        let email = form.email.value.trim();
        let password = form.password.value;
        
        // Désactiver le bouton et afficher le spinner
        submit_btn.disabled = true;
        submit_text.textContent = "Connexion...";
        loading_spinner.classList.remove("d-none");
        
        // Préparation des données à envoyer
        let formData = new FormData();
        formData.append('email', email);
        formData.append('password', password); 
        
        // Options pour la requête fetch
        const options = {  method: 'POST',  body: formData   };
        
        // Envoi de la requête AJAX
        fetch(url, options)
          .then(response => {
            // Vérifier le statut HTTP
            if (!response.ok) {
              throw new Error(`Erreur HTTP: ${response.status}`);
            }
            return response.json();
          })
          .then(data => {
            // Traitement de la réponse
            console.log("Réponse du serveur:", data);
            
            if (data.success) {
              // Connexion réussie
              showMessage(data.message || "Connexion réussie !", "success");
              window.location.href = "dashboard.php"; 
            } 
            else {
              // Erreur de connexion
              showMessage(data.message || "Email ou mot de passe incorrect", "error");
              
              // Réactiver le bouton
              submit_btn.disabled = false;
              submit_text.textContent = "Se connecter";
              loading_spinner.classList.add("d-none");
            }
          })
          .catch(error => {
            // Erreur réseau ou autre
            console.error("Erreur:", error);
            showMessage("Erreur de connexion au serveur. Veuillez réessayer.", "error");
            
            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = "Se connecter";
            loading_spinner.classList.add("d-none");
          }); 
      }

      function hideMessage() {
        document.getElementById('server-message').style.display = 'none';
      }

      // Fonction pour afficher les messages du serveur
      function showMessage(message, type = 'info') {
        const messageDiv = document.getElementById('server-message');
        const messageText = document.getElementById('message-text');
        const alertDiv = messageDiv.querySelector('.alert');
        
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
   
      

   </script>
 

</body>
</html>