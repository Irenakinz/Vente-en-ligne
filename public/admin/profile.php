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
            <div class="card-header bg-white border-bottom-0 py-3  ">
              <div class="d-flex justify-content-between align-items-center">
                <h2 class="mb-0">mon profil</h2>  
                </button>
              </div>
            </div>
 

            <!-- ////////////////// -->
            <div class="card-body p-0">
                <div class="vstack gap-4">
                    <!-- Photo de profil -->
                    <div class="d-flex align-items-start align-items-sm-center  ">
                        <div class="ratio ratio-1x1 bg-body-tertiary border rounded-circle overflow-hidden" style="width: 124px">
                            <img src="../assets/img/account/avatar-lg.jpg" alt="Avatar" class="object-fit-cover">
                        </div>
                        <div class="ps-3 ps-sm-4">
                            <p class="fs-sm  " style="max-width: 440px">Votre photo de profil apparaîtra sur votre compte.</p>
                            
                        </div>
                    </div>

                    <!-- Informations de l'admin -->
                    <div class="vstack gap-4">
                        <!-- Nom complet -->
                        <div class="row row-cols-1 row-cols-sm-2 g-4  ">
                            <div class="col">
                                <div class="d-flex align-items-center bg-light rounded p-3">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fi-user text-primary"></i>
                                    </div>
                                    <div>
                                        <label class="form-label fs-sm text-muted mb-1">Nom</label>
                                        <div class="fs-base fw-semibold">Dupont</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-center bg-light rounded p-3">
                                    <div class="bg-primary bg-opacity-10 rounded-circle p-2 me-3">
                                        <i class="fi-user text-primary"></i>
                                    </div>
                                    <div>
                                        <label class="form-label fs-sm text-muted mb-1">Prénom</label>
                                        <div class="fs-base fw-semibold">Jean</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class=" ">
                            <div class="d-flex align-items-center bg-light rounded p-3">
                                <div class="bg-info bg-opacity-10 rounded-circle p-2 me-3">
                                    <i class="fi-mail text-info"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-label fs-sm text-muted mb-1">Email</label>
                                    <div class="fs-base fw-semibold">jean.dupont@entreprise.com</div>
                                </div>
                                <div class="ms-3">
                                    <span class="badge bg-success">
                                        <i class="fi-check me-1"></i>Vérifié
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class=" ">
                            <div class="d-flex align-items-center bg-light rounded p-3">
                                <div class="bg-info bg-opacity-10 rounded-circle p-2 me-3">
                                    <i class="fi-mail text-info"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-label fs-sm text-muted mb-1">Role</label>
                                    <div class="fs-base fw-semibold">Admin</div>
                                </div> 
                            </div>
                        </div>

                        <!-- Mot de passe -->
                        <div class=" ">
                            <div class="d-flex align-items-center bg-light rounded p-3">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-2 me-3">
                                    <i class="fi-lock text-warning"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-label fs-sm text-muted mb-1">Mot de passe</label>
                                    <div class="fs-base fw-semibold">••••••••••</div>
                                </div>
                                <div class="ms-3">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">
                                        <i class="fi-refresh-ccw fs-sm me-1"></i>Changer
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Genre -->
                        <div class="mb-4">
                            <div class="d-flex align-items-center bg-light rounded p-3">
                                <div class=" bg-opacity-10 rounded-circle p-2 me-3">
                                    <i class="fi-user-check text-purple"></i>
                                </div>
                                <div class="flex-grow-1">
                                    <label class="form-label fs-sm text-muted mb-1">Genre</label>
                                    <div class="fs-base fw-semibold d-flex align-items-center">
                                        <span class="badge bg-primary bg-opacity-10 text-primary me-2">
                                            <i class="fi-user me-1"></i>Homme
                                        </span>
                                    </div>
                                </div> 
                            </div>
                        </div>

                        <!-- Bouton de mise à jour -->
                        <div class="pt-3">
                            <div class="d-flex gap-3">
                                <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" data-bs-target="#updateAdmin">
                                    <i class="fi-edit me-2"></i>Modifier le profil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <style>
                    .bg-purple {
                        background-color: #6f42c1 !important;
                    }
                    
                    .text-purple {
                        color: #6f42c1 !important;
                    }
                    
                    .object-fit-cover {
                        object-fit: cover;
                    }
                    
                    .bg-light {
                        background-color: #f8f9fa !important;
                    }
                    
                    .btn-outline-primary:hover {
                        background-color: #0d6efd;
                        color: white;
                    }
                    
                    .btn-outline-secondary:hover {
                        background-color: #6c757d;
                        color: white;
                    }
                </style>
            </div>
            <!-- ////////////////// -->

          </div>
        </div>
      </div>
    </main>


    <!-- Modal d'ajout d'administrateur -->
<div class="modal fade" id="updateAdmin" data-bs-backdrop="static" tabindex="-1" role="dialog">
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
                                <!-- <div class="position-relative">
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
                                </div> -->

                                <!-- Confirmation mot de passe -->
                                <!-- <div class="position-relative">
                                    <label for="admin-confirm-password" class="form-label">
                                        <i class="fi-lock text-muted me-2"></i>Confirmer le mot de passe *
                                    </label>
                                    <input type="password" class="form-control" id="admin-confirm-password" placeholder="Confirmez le mot de passe" required>
                                    <div class="invalid-feedback">Les mots de passe ne correspondent pas.</div>
                                </div> -->

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




  <!-- footer de la page -->
  <?php include("includes/footer.php")?>
  <!-- footer de la page -->
  
</body>
</html>