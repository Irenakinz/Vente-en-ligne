<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
  
 
  <!-- head de la page -->
  <?php include("includes/head.php")?>
  <!-- head de la page -->
 
  <!-- Body -->
  <body>
 

  <!-- header de la page -->
  <?php include("includes/header.php")?>
  <!-- header de la page -->


    <!-- Page content -->
    <main class="content-wrapper">
      <div class="container  pt-sm-5 pb-5 mb-xxl-3">
        <div class="row pt-sm-0  pb-2 pb-sm-3 pb-md-4 pb-lg-5">


          <!-- sidebare de la page -->
         <?php include("includes/sidebare.php")?>
          <!-- sidebare de la page -->


          <!-- Account reviews content -->
            <div class="col-lg-9">
                <div class="card-header bg-white border-bottom-0 py-3 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Liste des administrateurs</h2>
                        <button type="button" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#addAdmin">
                            <i class="fi-plus me-2"></i>Nouvel admin
                        </button>
                    </div>
                </div>

                <div class="card-body p-0 col-12">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="ps-4" style="width: 60px;">#</th>
                                    <th style="width: 80px;">Photo</th>
                                    <th>Informations</th>
                                    <th style="width: 120px;" class="text-center">Rôle</th>
                                    <th style="width: 100px;" class="text-center">Genre</th>
                                    <th style="width: 180px;" class="text-center pe-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Admin 1 - Super Admin -->
                                <tr>
                                    <td class="ps-4 fw-semibold">1</td>
                                    <td>
                                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=100&h=100&fit=crop" 
                                            alt="Admin Principal" 
                                            class="rounded-circle border border-2 border-primary" 
                                            style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>
                                        <h6 class="mb-1">Alexandre Martin</h6>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-mail opacity-75 me-1"></i>admin@entreprise.com
                                        </p>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-shield opacity-75 me-1"></i>Super Administrateur
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">
                                            Super Admin
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                            <i class="fi-user me-1"></i>Homme
                                        </span>
                                    </td>
                                    <td class="pe-4">
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-sm btn-outline-secondary" title="Vous ne pouvez pas désactiver un super admin" disabled>
                                                <i class="fi-lock me-1"></i>Protégé
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Admin 2 - Actif -->
                                <tr>
                                    <td class="ps-4 fw-semibold">2</td>
                                    <td>
                                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop" 
                                            alt="Sophie Laurent" 
                                            class="rounded-circle" 
                                            style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>
                                        <h6 class="mb-1">Sophie Laurent</h6>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-mail opacity-75 me-1"></i>sophie.laurent@entreprise.com
                                        </p>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-calendar opacity-75 me-1"></i>Membre depuis 2022
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                            Admin Produits
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                            <i class="fi-user me-1"></i>Femme
                                        </span>
                                    </td>
                                    <td class="pe-4">
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-sm btn-outline-danger" title="Désactiver l'administrateur">
                                                <i class="fi-power me-1"></i>Désactiver
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Admin 3 - Désactivé -->
                                <tr class="table-secondary opacity-75">
                                    <td class="ps-4 fw-semibold">3</td>
                                    <td>
                                        <img src="https://images.unsplash.com/photo-1507591064344-4c6ce005-128b-47050c-8507-96e5c8b6b6c6?w=100&h=100&fit=crop" 
                                            alt="Thomas Dubois" 
                                            class="rounded-circle opacity-50" 
                                            style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>
                                        <h6 class="mb-1 text-muted">Thomas Dubois</h6>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-mail opacity-75 me-1"></i>thomas.dubois@entreprise.com
                                        </p>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-calendar opacity-75 me-1"></i>Membre depuis 2021
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-secondary bg-opacity-25 text-secondary">
                                            Admin Clients
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-secondary bg-opacity-25 text-secondary">
                                            <i class="fi-user me-1"></i>Homme
                                        </span>
                                    </td>
                                    <td class="pe-4">
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-sm btn-success" title="Activer l'administrateur">
                                                <i class="fi-check me-1"></i>Activer
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Admin 4 - Actif -->
                                <tr>
                                    <td class="ps-4 fw-semibold">4</td>
                                    <td>
                                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?w=100&h=100&fit=crop" 
                                            alt="Julie Moreau" 
                                            class="rounded-circle" 
                                            style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>
                                        <h6 class="mb-1">Julie Moreau</h6>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-mail opacity-75 me-1"></i>julie.moreau@entreprise.com
                                        </p>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-calendar opacity-75 me-1"></i>Membre depuis 2023
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">
                                            Admin Commandes
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                            <i class="fi-user me-1"></i>Femme
                                        </span>
                                    </td>
                                    <td class="pe-4">
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-sm btn-outline-danger" title="Désactiver l'administrateur">
                                                <i class="fi-power me-1"></i>Désactiver
                                            </button>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Admin 5 - Actif -->
                                <tr>
                                    <td class="ps-4 fw-semibold">5</td>
                                    <td>
                                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop" 
                                            alt="Marc Lefevre" 
                                            class="rounded-circle" 
                                            style="width: 50px; height: 50px; object-fit: cover;">
                                    </td>
                                    <td>
                                        <h6 class="mb-1">Marc Lefevre</h6>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-mail opacity-75 me-1"></i>marc.lefevre@entreprise.com
                                        </p>
                                        <p class="text-muted small mb-0">
                                            <i class="fi-calendar opacity-75 me-1"></i>Membre depuis 2020
                                        </p>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-purple bg-opacity-10 text-purple border border-purple border-opacity-25">
                                            Admin Finance
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                            <i class="fi-user me-1"></i>Homme
                                        </span>
                                    </td>
                                    <td class="pe-4">
                                        <div class="d-flex justify-content-center gap-2">
                                            <button class="btn btn-sm btn-outline-danger" title="Désactiver l'administrateur">
                                                <i class="fi-power me-1"></i>Désactiver
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <style>
                            .table-secondary {
                                background-color: rgba(248, 249, 250, 0.5);
                            }
                            
                            .btn-sm {
                                padding: 0.375rem 0.75rem;
                                font-size: 0.875rem;
                                border-radius: 0.375rem;
                                font-weight: 500;
                            }
                            
                            .badge {
                                padding: 0.35em 0.65em;
                                font-weight: 500;
                                font-size: 0.85rem;
                            }
                            
                            .small {
                                font-size: 0.875rem;
                            }
                            
                            .badge.bg-purple {
                                background-color: #6f42c1 !important;
                                color: white;
                            }
                            
                            .text-purple {
                                color: #6f42c1 !important;
                            }
                            
                            .border-purple {
                                border-color: #6f42c1 !important;
                            }
                            
                            .btn-outline-info {
                                color: #0dcaf0;
                                border-color: #0dcaf0;
                            }
                            
                            .btn-outline-info:hover {
                                color: #fff;
                                background-color: #0dcaf0;
                                border-color: #0dcaf0;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <!-- ///////////// -->
        </div>
      </div>
    </main>






<!-- Modal d'ajout d'administrateur -->
<div class="modal fade" id="addAdmin" data-bs-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un nouvel administrateur</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>
            
            <div class="modal-body">
                <form class="needs-validation" novalidate="">
                    <div class="row g-4">
                        <!-- Informations personnelles -->
                        <div class="col-md-12">
                            <div class="vstack gap-3">
                                <!-- Nom et Prénom -->
                                <div class="row g-3">
                                    <div class="col-md-6 position-relative">
                                        <label for="admin-lastname" class="form-label">
                                            <i class="fi-user text-muted me-2"></i>Nom *
                                        </label>
                                        <input type="text" class="form-control" id="admin-lastname" placeholder="Ex: Dupont" required>
                                        <div class="invalid-feedback">Veuillez saisir le nom.</div>
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label for="admin-firstname" class="form-label">
                                            <i class="fi-user text-muted me-2"></i>Prénom *
                                        </label>
                                        <input type="text" class="form-control" id="admin-firstname" placeholder="Ex: Jean" required>
                                        <div class="invalid-feedback">Veuillez saisir le prénom.</div>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="position-relative">
                                    <label for="admin-email" class="form-label">
                                        <i class="fi-mail text-muted me-2"></i>Email *
                                    </label>
                                    <input type="email" class="form-control" id="admin-email" placeholder="exemple@entreprise.com" required>
                                    <div class="invalid-feedback">Veuillez saisir un email valide.</div>
                                </div>

                                <!-- Rôle -->
                                <div class="position-relative">
                                    <label for="admin-role" class="form-label">
                                        <i class="fi-shield text-muted me-2"></i>Rôle *
                                    </label>
                                    <select class="form-select" id="admin-role" required>
                                        <option value="" selected disabled>Sélectionnez un rôle</option>
                                        <option value="super_admin">Super Administrateur</option>
                                        <option value="admin_produits">Administrateur Produits</option>
                                        <option value="admin_commandes">Administrateur Commandes</option>
                                        <option value="admin_clients">Administrateur Clients</option>
                                        <option value="admin_finance">Administrateur Finance</option>
                                        <option value="admin_support">Administrateur Support</option>
                                    </select>
                                    <div class="invalid-feedback">Veuillez sélectionner un rôle.</div>
                                    <div class="form-text">Définit les permissions d'accès du compte.</div>
                                </div>

                                <!-- Mot de passe -->
                                <div class="position-relative">
                                    <label for="admin-password" class="form-label">
                                        <i class="fi-lock text-muted me-2"></i>Mot de passe *
                                    </label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="admin-password" placeholder="Saisissez un mot de passe" required>
                                        <button class="btn btn-outline-secondary" type="button" id="toggle-password">
                                            <i class="fi-eye"></i>
                                        </button>
                                    </div>
                                    <div class="invalid-feedback">Veuillez saisir un mot de passe.</div>
                                    <div class="form-text">Minimum 8 caractères avec majuscule, minuscule et chiffre.</div>
                                </div>

                                <!-- Confirmation mot de passe -->
                                <div class="position-relative">
                                    <label for="admin-confirm-password" class="form-label">
                                        <i class="fi-lock text-muted me-2"></i>Confirmer le mot de passe *
                                    </label>
                                    <input type="password" class="form-control" id="admin-confirm-password" placeholder="Confirmez le mot de passe" required>
                                    <div class="invalid-feedback">Les mots de passe ne correspondent pas.</div>
                                </div>

                                <!-- Genre -->
                                <div class="position-relative">
                                    <label class="form-label">
                                        <i class="fi-user-check text-muted me-2"></i>Genre *
                                    </label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="admin-gender" id="gender-male" value="homme" required>
                                            <label class="form-check-label" for="gender-male">
                                                <i class="fi-user me-1"></i>Homme
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="admin-gender" id="gender-female" value="femme" required>
                                            <label class="form-check-label" for="gender-female">
                                                <i class="fi-user me-1"></i>Femme
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="admin-gender" id="gender-other" value="autre" required>
                                            <label class="form-check-label" for="gender-other">
                                                <i class="fi-user me-1"></i>Autre
                                            </label>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">Veuillez sélectionner un genre.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Boutons d'action -->
                    <div class="modal-footer border-top-0 pt-4">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fi-user-plus me-2"></i>Créer l'administrateur
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .object-fit-cover {
        object-fit: cover;
    }
    
    .form-label i {
        width: 16px;
        text-align: center;
    }
    
    .rounded-circle {
        border-radius: 50% !important;
    }
    
    .form-check-input:checked {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
    
    #admin-photo-preview {
        width: 150px;
        height: 150px;
        border-radius: 50%;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Prévisualisation de la photo
    const photoInput = document.getElementById('admin-photo');
    const photoPreview = document.getElementById('admin-photo-preview');
    
    if (photoInput && photoPreview) {
        photoInput.addEventListener('change', function(e) {
            const file = this.files[0];
            
            if (file) {
                // Vérifications
                if (!file.type.match('image.*')) {
                    alert('Veuillez sélectionner une image valide (JPG, PNG)');
                    this.value = '';
                    return;
                }
                
                if (file.size > 2 * 1024 * 1024) {
                    alert('L\'image est trop volumineuse (max 2MB)');
                    this.value = '';
                    return;
                }
                
                // Créer un URL d'objet pour la prévisualisation
                const imageURL = URL.createObjectURL(file);
                photoPreview.src = imageURL;
                
                // Nettoyer l'URL quand l'image est chargée
                photoPreview.onload = function() {
                    URL.revokeObjectURL(imageURL);
                };
            }
        });
    }
    
    // Toggle afficher/masquer mot de passe
    const togglePasswordBtn = document.getElementById('toggle-password');
    const passwordInput = document.getElementById('admin-password');
    const confirmPasswordInput = document.getElementById('admin-confirm-password');
    
    if (togglePasswordBtn && passwordInput) {
        togglePasswordBtn.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            confirmPasswordInput.setAttribute('type', type);
            
            // Changer l'icône
            const icon = this.querySelector('i');
            if (type === 'text') {
                icon.className = 'fi-eye-off';
            } else {
                icon.className = 'fi-eye';
            }
        });
    }
    
    // Validation de la correspondance des mots de passe
    const form = document.querySelector('#addAdmin form');
    if (form) {
        const password = document.getElementById('admin-password');
        const confirmPassword = document.getElementById('admin-confirm-password');
        
        function validatePassword() {
            if (password.value !== confirmPassword.value) {
                confirmPassword.setCustomValidity('Les mots de passe ne correspondent pas');
            } else {
                confirmPassword.setCustomValidity('');
            }
        }
        
        password.addEventListener('change', validatePassword);
        confirmPassword.addEventListener('keyup', validatePassword);
        
        form.addEventListener('submit', function(e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    }
});
</script>









  <!-- footer de la page -->
  <?php include("includes/footer.php")?>
  <!-- footer de la page -->
  
</body>
</html>