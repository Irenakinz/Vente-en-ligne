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
                </div>
                <hr>
            </div>
 

            <!-- ////////////////// -->
            <div class="card-body p-0">
                <div class="vstack gap-4">
                    <!-- Photo de profil -->
                    <div class="d-flex align-items-start align-items-sm-center  ">
                        <div class="ratio ratio-1x1 bg-body-tertiary border rounded-circle overflow-hidden" style="width: 124px">
                            <img src="<?= !empty($_SESSION['user']["photo"]) ? "../../medias/".$_SESSION['user']["photo"] : "avatar.jpg"?>" alt="Avatar" class="object-fit-cover" style="object-fit:cover;width:100%;height:100%">
                        </div>
                        <div class="ps-3 ps-sm-4">
                            <p class="fs-sm  " style="max-width: 440px"> 
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
                                        <div class="fs-base fw-semibold"><?=$_SESSION['user']["nom"]?></div>
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
                                        <div class="fs-base fw-semibold"><?=$_SESSION['user']["prenom"]?></div>
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
                                    <div class="fs-base fw-semibold"><?=$_SESSION['user']["email"]?></div>
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
                                    <div class="fs-base fw-semibold"><?=$_SESSION['user']["role"]?></div>
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
                                            <i class="fi-user me-1"></i><?=$_SESSION['user']["genre"]?>
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
                    <h5 class="modal-title">Mettre a jour le profil administrateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>

                <div id="server-message" class="mb-4" style="display: none;">
                    <div class="alert alert-dismissible fade show" role="alert">
                        <span id="message-text"></span>
                        <button type="button" class="btn-close" onclick="hideMessage()"></button>
                    </div>
                </div>
                
                <div class="modal-body">
                    <form class="needs-validation" validate onsubmit="return false" name="updateAdminProfil">
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
                                            <input type="text" value="<?= $_SESSION['user']["nom"]?>" name="nom" class="form-control" id="admin-lastname" placeholder="Ex: Dupont" required>
                                            <div class="invalid-feedback">Veuillez saisir le nom.</div>
                                        </div>
                                        <div class="col-md-6 position-relative">
                                            <label for="admin-firstname" class="form-label">
                                                <i class="fi-user text-muted me-2"></i>Prénom *
                                            </label>
                                            <input type="text" value="<?= $_SESSION['user']["prenom"]?>" name="prenom" class="form-control" id="admin-firstname" placeholder="Ex: Jean" required>
                                            <div class="invalid-feedback">Veuillez saisir le prénom.</div>
                                        </div>
                                    </div>

                                    <div class="row g-3">
                                        <div class="col-md-6 position-relative">
                                            <label for="admin-email" class="form-label">
                                                <i class="fi-mail text-muted me-2"></i>Email *
                                            </label>
                                            <input type="email" name="email" value="<?= $_SESSION['user']["email"]?>" class="form-control" id="admin-email" placeholder="exemple@entreprise.com" required>
                                            <div class="invalid-feedback">Veuillez saisir un email valide.</div>
                                        </div>
                                        <div class="col-md-6 position-relative">
                                            <label for="admin-role" class="form-label">
                                                <i class="fi-shield text-muted me-2"></i>Rôle *
                                            </label>
                                            <select name="role" class="form-select" id="admin-role" required>
                                                <option value="<?= $_SESSION['user']["role"]?>" selected disabled><?= $_SESSION['user']["role"]?></option>  
                                            </select> 
                                            <div class="form-text">Définit les permissions d'accès du compte.</div>
                                        </div>
                                    </div> 

                                    <hr class="m-0 p-0">

                                    <div class="row g-3">
                                            <div class="col-md-6 position-relative">
                                                <label for="admin-photo" class="form-label">
                                                    <i class="fi-mail text-muted me-2"></i>Photo *
                                                </label>
                                                <input type="file" name="photo" value="" class="form-control" id="admin-photo"> 
                                            </div>
                                            <div class="col-md-6 position-relative">
                                                <label class="form-label">
                                                <i class="fi-user-check text-muted me-2"></i>Genre *
                                            </label>
                                            <div class="d-flex flex-wrap gap-3">
                                                <?php
                                                    $homme = "";
                                                    $femme = "";
                                                    switch(strtolower($_SESSION['user']["genre"])) {
                                                        case "homme" : $homme = "checked";
                                                        case "femme" : $femme = "checked";
                                                    }
                                                ?>
                                                <div class="form-check">
                                                    <input class="form-check-input" <?=$homme?> type="radio" name="genre" id="gender-male" value="homme" required>
                                                    <label class="form-check-label" for="gender-male">
                                                        <i class="fi-user me-1"></i>Homme
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" <?=$femme?> type="radio" name="genre" id="gender-female" value="femme" required>
                                                    <label class="form-check-label" for="gender-female">
                                                        <i class="fi-user me-1"></i>Femme
                                                    </label>
                                                </div> 
                                            </div>
                                            <div class="invalid-feedback">Veuillez sélectionner un genre.</div>
                                        </div>
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
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="modal-footer border-top-0 pt-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary" id="submit-btn" onclick="updateAdminInfo()">
                                <div class="dot-spinner d-none" id="loading-spinner">
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                </div> <span id="submit-text">Modifeir</span>
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

  <script>
    
    let url = "../../app/index.php?action=admin/update";
    
    // Fonction principale de connexion
    function updateAdminInfo() {
    let form = document.forms.updateAdminProfil;
    let submit_btn = document.getElementById("submit-btn");
    let submit_text = document.getElementById("submit-text");
    let loading_spinner = document.getElementById("loading-spinner");
    
    // Validation du formulaire
    if (!form.checkValidity()) {
        form.classList.add('was-validated');
        return false;
    }
        
    // Désactiver le bouton et afficher le spinner
    submit_btn.disabled = true;
    submit_text.textContent = "Connexion...";
    loading_spinner.classList.remove("d-none");
    
    // Préparation des données à envoyer
    let formData = new FormData(form); 
    formData.append("id","<?=$_SESSION['user']['id']?>");
    formData.append("role","<?= $_SESSION['user']["role"]?>");
    formData.append("photo_str","<?= $_SESSION['user']["photo"]?>");

    // Options pour la requête fetch
    const options = {  
        method: 'POST',  
        body: formData  
        // Si votre API attend du JSON, utilisez ceci :
        // headers: { 'Content-Type': 'application/json' },
        // body: JSON.stringify({ email: email, password: password }) 
    };
    
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
           
            setTimeout(()=>{
                hideModalSimple("updateAdmin");
                window.location.href = window.location.href;
            },5000);

            // Connexion réussie
            showMessage(data.message || "modification réussie !", "success");
            loading_spinner.classList.add("d-none");
            submit_text.textContent = "Modifier";
        } 
        else {
            // Erreur de connexion
            showMessage(data.message || "Email ou mot de passe incorrect", "error");
            
            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = "Modifier";
            loading_spinner.classList.add("d-none");
        }
        })
        .catch(error => {
        // Erreur réseau ou autre
        console.error("Erreur:", error);
        showMessage("Erreur de connexion au serveur. Veuillez réessayer.", "error");
        
        // Réactiver le bouton
        submit_btn.disabled = false;
        submit_text.textContent = "Modifier";
        loading_spinner.classList.add("d-none");
        }); 
    }

  </script>
  
</body>
</html>



 