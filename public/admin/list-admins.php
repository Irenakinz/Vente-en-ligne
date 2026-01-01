<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
  
 
  <!-- head de la page -->
  <?php include("includes/head.php")?>
  <!-- head de la page -->
 
<style>
    .dot-spinner.spine-bouse {
        --uib-size: 2.0rem;
        --uib-speed: .9s;
        --uib-color: #1a27e7ff;
    }
</style>

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

                <div id="server-message-statuts" class="mb-4" style="display: none;">
                    <div class="alert general alert-dismissible fade show" role="alert">
                        <span id="message-text-status"></span>
                        <button type="button" class="btn-close" onclick="generalHideMessage()"></button>
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
                            <?php
                                $responseAdmin = getAdmin(); 
                                if($responseAdmin["success"]) {
                                    $listAdmin = $responseAdmin["data"]; 
                                    foreach($listAdmin as $n=>$admin) { 

                                        $message = "";
                                        $classe = "";
                                        $title = ""; 
                                        $disabled = "";
                                        $border = "";

                                        if($admin["role"] == "root") {
                                            $message = "Protégé";
                                            $classe = "btn-outline-secondary";
                                            $title = "Vous ne pouvez pas désactiver un super admin";
                                            $disabled = "disabled";
                                            $border = "border-2 border-primary";
                                        }
                                        else {
                                            if($admin["statut"] == 1) {
                                                $message = "Désactiver";
                                                $classe = " btn-outline-danger";
                                                $title = "Désactiver l'administrateur";
                                                $disabled = "";
                                            }
                                            else {
                                                $message = "Activer";
                                                $classe = "btn-sm btn-success";
                                                $title = "Activer l'administrateur";
                                                $disabled = "";
                                            } 
                                        }
                            ?>
                                    <tr>
                                        <td class="ps-4 fw-semibold"><?=$n+1?></td>
                                        <td>
                                            <img src="<?=!empty($admin["photo"]) ? "../../medias/".$admin["photo"] : "avatar.jpg"?>" 
                                                alt="Admin" 
                                                class="rounded-circle border <?=$border?>" 
                                                style="width: 50px; height: 50px; object-fit: cover;">
                                        </td>
                                        <td>
                                            <h6 class="mb-1"><?=$admin["nom"]." ".$admin["prenom"]?></h6>
                                            <p class="text-muted small mb-0">
                                                <i class="fi-mail opacity-75 me-1"></i><?=$admin["email"]?>
                                            </p>
                                            <p class="text-muted small mb-0">
                                                <i class="fi-shield opacity-75 me-1"></i><?=$admin["role"] === "root" ? "Super Administrateur" : "Administrateur"?>
                                            </p>
                                        </td>
                                        <td class="text-center">
                                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">
                                                <?=$admin["role"] === "root" ? "Super Admin" : "Admin"?>
                                            </span>
                                        </td> 

                                        <td class="text-center">
                                            <span class="badge <?=$admin["genre"] == "homme" ? "bg-primary bg-opacity-10 text-primary" : "bg-warning bg-opacity-10 text-warning"?> border border-primary border-opacity-25">
                                                <i class="fi-user me-1"></i><?=$admin["genre"]?>
                                            </span>
                                        </td>
                                        <td class="pe-4">
                                            <div class="d-flex justify-content-center gap-2">
                                                <button class="btn btn-sm <?=$classe?> " <?=$disabled?> title="<?=$title?>" 
                                                id="submit_btn<?=$admin["id"]?>"
                                                onclick="activeDesactiveAdmin(<?=$admin['statut'] == 1 ? 0 : 1 ?>,<?=$admin['id']?>)">
                                                    <div class="dot-spinner spine-bouse d-none" id="loading-spinner<?=$admin["id"]?>">
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                        <div class="dot-spinner__dot"></div>
                                                    </div>
                                                    <i class="fi-lock me-1"></i><span id="submit-text<?=$admin["id"]?>"><?=$message?></span>
                                                </button>
                                            </div>
                                        </td>
                                    </tr> 
                            <?php
                                    }
                                }
                                else { 
                            ?>
                                    <tr>
                                        <td class="ps-4 fw-semibold" colspan="6">
                                            <div class="text-center">
                                                Aucun admin trouve
                                            </div>
                                        </td> 
                                    </tr>
                            <?php
                                } 
                            ?> 
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

            <div id="server-message" class="mb-4" style="display: none;">
                <div class="alert create alert-dismissible fade show" role="alert">
                    <span id="message-text"></span>
                    <button type="button" class="btn-close" onclick="hideMessage()"></button>
                </div>
            </div>
            
            <div class="modal-body">
                <form class="needs-validation" name="createAdminForm" onsubmit="return false" validate="">
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
                                        <input type="text" name="nom" class="form-control" id="admin-lastname" placeholder="Ex: Dupont" required>
                                        <div class="invalid-feedback">Veuillez saisir le nom.</div>
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label for="admin-firstname" class="form-label">
                                            <i class="fi-user text-muted me-2"></i>Prénom *
                                        </label>
                                        <input type="text"  name="prenom" class="form-control" id="admin-firstname" placeholder="Ex: Jean" required>
                                        <div class="invalid-feedback">Veuillez saisir le prénom.</div>
                                    </div>
                                </div>

                                 <div class="row g-3">
                                    <div class="col-md-6 position-relative">
                                       <label for="admin-email" class="form-label">
                                            <i class="fi-mail text-muted me-2"></i>Email *
                                        </label>
                                        <input type="email" name="email" class="form-control" id="admin-email" placeholder="exemple@entreprise.com" required>
                                        <div class="invalid-feedback">Veuillez saisir un email valide.</div>
                                    </div>
                                    <div class="col-md-6 position-relative">
                                        <label for="admin-file" class="form-label">
                                            <i class="fi-user text-muted me-2"></i>Photo *
                                        </label>
                                        <input type="file"  name="photo" class="form-control" id="admin-file" required>
                                        <div class="invalid-feedback">Veuillez saisir la photo.</div>
                                    </div>
                                </div> 

                                <!-- Rôle --> 

                                <!-- Mot de passe -->
                                <div class="position-relative">
                                    <label for="admin-password" class="form-label">
                                        <i class="fi-lock text-muted me-2"></i>Mot de passe *
                                    </label>
                                    <div class="input-group">
                                        <input type="password" name="password" class="form-control" id="admin-password" placeholder="Saisissez un mot de passe" required>
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
                                    <input type="password" name="password2" class="form-control" id="admin-confirm-password" placeholder="Confirmez le mot de passe" required>
                                    <div class="invalid-feedback">Les mots de passe ne correspondent pas.</div>
                                </div>

                                <!-- Genre -->
                                <div class="position-relative">
                                    <label class="form-label">
                                        <i class="fi-user-check text-muted me-2"></i>Genre *
                                    </label>
                                    <div class="d-flex flex-wrap gap-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="genre" id="gender-male" value="homme" required>
                                            <label class="form-check-label" for="gender-male">
                                                <i class="fi-user me-1"></i>Homme
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="genre" id="gender-female" value="femme" required>
                                            <label class="form-check-label" for="gender-female">
                                                <i class="fi-user me-1"></i>Femme
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
                        <button type="submit" class="btn btn-primary" id="submit-btn" onclick="createAdmin()">
                            <div class="dot-spinner d-none" id="loading-spinner">
                                <div class="dot-spinner__dot"></div>
                                <div class="dot-spinner__dot"></div>
                                <div class="dot-spinner__dot"></div>
                                <div class="dot-spinner__dot"></div>
                                <div class="dot-spinner__dot"></div>
                                <div class="dot-spinner__dot"></div>
                                <div class="dot-spinner__dot"></div>
                                <div class="dot-spinner__dot"></div>
                            </div><i class="fi-user-plus me-2"></i>
                            <span id="submit-text">Créer l'administrateur</span>
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
    let url = "../../app/index.php?action=admin/create";
    let url_active_desacive = "../../app/index.php?action=admin/active_desactive";
    
    // Fonction principale de connexion
    function createAdmin() {
        let form = document.forms.createAdminForm;
        let submit_btn = document.getElementById("submit-btn");
        let submit_text = document.getElementById("submit-text");
        let loading_spinner = document.getElementById("loading-spinner");
        
        // Validation du formulaire
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return false;
        }

        
        let password2 = document.querySelector("input[name='password2']").value;
        let password = document.querySelector("input[name='password']").value;
        
        if(password2 !== password) {
            showMessage("Les deux mots de passe doivent etre identiques", "error");
            return
        }
            
        // Désactiver le bouton et afficher le spinner
        submit_btn.disabled = true;
        submit_text.textContent = "Enregistrement en cours...";
        loading_spinner.classList.remove("d-none");
        
        // Préparation des données à envoyer
        let formData = new FormData(form);  
        formData.append("role","admin");


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
                    window.location.href = window.location.href;
                },5000);

                // Connexion réussie
                showMessage(data.message || "Enregistrement réussie !", "success", ".alert.create");
                loading_spinner.classList.add("d-none");
                submit_text.textContent = "Créer l'administrateur";
                submit_btn.disabled = false;
                form.reset();
                
            } 
            else {
                // Erreur de connexion
                showMessage(data.message || "Email ou mot de passe incorrect", "error",".alert.create");
                
                // Réactiver le bouton
                submit_btn.disabled = false;
                submit_text.textContent = "Créer l'administrateur";
                loading_spinner.classList.add("d-none");
            }
            })
            .catch(error => {
            // Erreur réseau ou autre
            console.error("Erreur:", error);
            showMessage("Erreur de connexion au serveur. Veuillez réessayer.", "error",".alert.create");
            
            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = "Créer l'administrateur";
            loading_spinner.classList.add("d-none");
            }); 
    }

    function activeDesactiveAdmin(statut,id_admin) { 
        let submit_text = document.getElementById(`submit-text${id_admin}`);
        let loading_spinner = document.getElementById(`loading-spinner${id_admin}`);
        let submit_btn = document.getElementById(`submit_btn${id_admin}`);

        // Désactiver le bouton et afficher le spinner
        submit_btn.disabled = true;

        let originContent = submit_text.textContent;
        submit_text.textContent = "...";
        loading_spinner.classList.remove("d-none");
        
        // Préparation des données à envoyer
        let formData = new FormData();  
        formData.append("statut",statut);
        formData.append("id_admin",id_admin);


        // Options pour la requête fetch
        const options = {  
            method: 'POST',  
            body: formData  
            // Si votre API attend du JSON, utilisez ceci :
            // headers: { 'Content-Type': 'application/json' },
            // body: JSON.stringify({ email: email, password: password }) 
        };
        
        // Envoi de la requête AJAX
        fetch(url_active_desacive, options)
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
                window.location.href = window.location.href;
            },5000);

            // Connexion réussie
            generalShowMessage(data.message, type = 'success',
            messageDiv="server-message-statuts",
            messageText="message-text-status",
            alertDiv=".alert.general") 
 
            loading_spinner.classList.add("d-none");
            submit_text.textContent = originContent;
            submit_btn.disabled = false; 
        } 
        else {
            // Erreur de connexion 
            generalShowMessage(data.message || "Email ou mot de passe incorrect", type = 'error',
            messageDiv="server-message-statuts",
            messageText="message-text-status",
            alertDiv=".alert.general")

            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = originContent;
            loading_spinner.classList.add("d-none");
        }
        })
        .catch(error => {
            // Erreur réseau ou autre
            console.error("Erreur:", error); 
            generalShowMessage("Erreur de connexion au serveur. Veuillez réessayer", type = 'error',
            messageDiv="server-message-statuts",
            messageText="message-text-status",
            alertDiv=".alert.general")

            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = originContent;
            loading_spinner.classList.add("d-none");
        }); 
    
    }


</script>


 
  <!-- footer de la page -->
  <?php include("includes/footer.php")?>
  <!-- footer de la page -->
  
</body>
</html>