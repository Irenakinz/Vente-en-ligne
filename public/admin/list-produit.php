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
                <h2 class="mb-0">Gestion des produits</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProduct">
                    <i class="fi-plus me-2"></i>Ajouter un produit
                </button>
              </div>
            </div>
 

            <!-- ////////////////// -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4" style="width: 60px;">#</th>
                                <th style="width: 80px;">Image </th>
                                <th>Titre et description</th>
                                 
                                <th style="width: 120px;" class="text-center">Quantité</th>
                                <th style="width: 120px;" class="text-end">Prix unitaire</th>
                                <th style="width: 150px;" class="text-center pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Produit 1 -->
                            <tr>
                                <td class="ps-4 fw-semibold">1</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop" 
                                        alt="Casque audio" 
                                        class="rounded" 
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1">Casque Audio Pro X</h6>
                                    <p class="text-muted small mb-0">Casque sans fil avec réduction de bruit active, autonomie 30h.</p>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex flex-column align-items-center gap-1">
                                        <span class="badge bg-light text-dark mb-1">Audio</span>
                                        <span class="badge bg-success">45 en stock</span>
                                    </div>
                                </td>
                                <td class="text-end fw-semibold">
                                    149,99 €
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-secondary" title="Modifier">
                                            <i class="fi-edit me-1"></i>Modifier
                                        </button>
                                        <button class="btn btn-sm btn-success" title="Activer">
                                            <i class="fi-check me-1"></i>Activer
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Produit 2 -->
                            <tr>
                                <td class="ps-4 fw-semibold">2</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=100&h=100&fit=crop" 
                                        alt="Appareil photo" 
                                        class="rounded" 
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1">Appareil Photo Mirrorless</h6>
                                    <p class="text-muted small mb-0">24.2MP, 4K vidéo, écran tactile orientable, objectif 15-45mm.</p>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex flex-column align-items-center gap-1">
                                        <span class="badge bg-light text-dark mb-1">Photo</span>
                                        <span class="badge bg-warning text-dark">12 en stock</span>
                                    </div>
                                </td>
                                <td class="text-end fw-semibold">
                                    799,99 €
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-warning">
                                            <i class="fi-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="fi-power"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Produit 3 -->
                            <tr>
                                <td class="ps-4 fw-semibold">3</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?w=100&h=100&fit=crop" 
                                        alt="Montre connectée" 
                                        class="rounded" 
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1">Montre Connectée Sport</h6>
                                    <p class="text-muted small mb-0">Écran AMOLED, GPS intégré, moniteur de fréquence cardiaque, étanche 50m.</p>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex flex-column align-items-center gap-1">
                                        <span class="badge bg-light text-dark mb-1">Wearable</span>
                                        <span class="badge bg-success">78 en stock</span>
                                    </div>
                                </td>
                                <td class="text-end fw-semibold">
                                    299,99 €
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-warning">
                                            <i class="fi-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="fi-power"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Produit 4 -->
                            <tr>
                                <td class="ps-4 fw-semibold">4</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=100&h=100&fit=crop" 
                                        alt="Chaussures sport" 
                                        class="rounded" 
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1">Chaussures Running Pro</h6>
                                    <p class="text-muted small mb-0">Amorti maximal, respirable, semelle en caoutchouc durable, pointures 38-46.</p>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex flex-column align-items-center gap-1">
                                        <span class="badge bg-light text-dark mb-1">Sport</span>
                                        <span class="badge bg-danger">3 en stock</span>
                                    </div>
                                </td>
                                <td class="text-end fw-semibold">
                                    89,99 €
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-warning">
                                            <i class="fi-edit"></i>
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger">
                                            <i class="fi-power"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- ////////////////// -->

          </div>
        </div>
      </div>
    </main>

    <!-- Modal d'ajout de produit -->  
    <div class="modal fade" id="addProduct" data-bs-backdrop="static" tabindex="-1" aria-labelledby="addProductLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProductLabel">Ajouter un nouveau produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                
                <div class="modal-body">
                    <!-- Message du serveur --> 

                    <div id="server-message-create" class="mb-4" style="display: none;">
                        <div class="alert create alert-dismissible fade show" role="alert">
                            <span id="message-text-create"></span>
                            <button type="button" class="btn-close" onclick="generalHideMessage('server-message-create')"></button>
                        </div>
                    </div>
                    
                    <form id="createProduitForm" class="needs-validation" onsubmit="return false"  validate name="createProduitForms">
                        <div class="row g-4">
                            <!-- Informations du produit -->
                            <div class="col-md-12">
                                <div class="vstack gap-3">
                                    <!-- Image du produit -->
                                    <div class="position-relative">
                                        <label for="product-file" class="form-label">
                                            <i class="fi-tag text-muted me-2"></i>Image du produit *
                                        </label> 
                                        <input type="file" name="photo" class="form-control" id="product-file" accept="image/*" required>
                                        <div class="invalid-feedback">Veuillez sélectionner une image.</div>
                                    </div>

                                    <!-- Titre du produit -->
                                    <div class="position-relative">
                                        <label for="product-title" class="form-label">
                                            <i class="fi-tag text-muted me-2"></i>Titre du produit *
                                        </label>
                                        <input type="text" name="titre" class="form-control" id="product-title" placeholder="Ex: Casque Audio Pro X" required>
                                        <div class="invalid-feedback">Veuillez saisir un titre pour le produit.</div>
                                    </div>

                                    <!-- Catégorie -->
                                    <div class="position-relative">
                                        <label for="product-category" class="form-label">
                                            <i class="fi-layers text-muted me-2"></i>Catégorie *
                                        </label>
                                        <select class="form-select" name="categorie_id" id="product-category" required>
                                            <option value="" selected disabled>Sélectionnez une catégorie</option>
                                            <?php
                                            $responseCategorie = getCategorie();
                                            if(isset($responseCategorie["success"]) && $responseCategorie["success"]){
                                                foreach($responseCategorie['data'] ?? $responseCategorie as $categorie){
                                                    if(is_array($categorie) && isset($categorie["id"])){
                                            ?>
                                            <option value="<?= htmlspecialchars($categorie["id"]) ?>">
                                                <?= htmlspecialchars($categorie["description"]) ?>
                                            </option>
                                            <?php
                                                    }
                                                } 
                                            } else { 
                                                echo "<option value=''>Aucune catégorie trouvée</option>";
                                            }
                                            ?> 
                                        </select>
                                        <div class="invalid-feedback">Veuillez sélectionner une catégorie.</div>
                                    </div>

                                    <!-- Description courte -->
                                    <div class="position-relative">
                                        <label for="product-description" class="form-label">
                                            <i class="fi-align-left text-muted me-2"></i>Description courte *
                                        </label>
                                        <textarea name="description" class="form-control" id="product-description" rows="3" placeholder="Décrivez brièvement le produit..." maxlength="200" required></textarea>
                                        <div class="invalid-feedback">Veuillez saisir une description pour le produit.</div>
                                        <div class="form-text">Maximum 200 caractères.</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Stock et prix -->
                            <div class="col-12">
                                <div class="row g-4">
                                    <!-- Quantité en stock -->
                                    <div class="col-md-6 position-relative">
                                        <label for="product-quantity" class="form-label">
                                            <i class="fi-package text-muted me-2"></i>Quantité en stock initiale *
                                        </label>
                                        <input type="number" name="quantite" class="form-control" id="product-quantity" min="0" placeholder="0" required>
                                        <div class="invalid-feedback">Veuillez saisir la quantité en stock.</div>
                                    </div>

                                    <!-- Prix unitaire -->
                                    <div class="col-md-6 position-relative">
                                        <label for="product-price" class="form-label">
                                            <i class="fi-dollar text-muted me-2"></i>Prix unitaire ($) *
                                        </label>
                                        <div class="input-group">
                                            <input type="number" name="prix_unitaire" class="form-control" id="product-price" min="0" step="0.01" placeholder="0.00" required>
                                            <span class="input-group-text">€</span>
                                        </div>
                                        <div class="invalid-feedback">Veuillez saisir un prix valide.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="modal-footer border-top-0 pt-4">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="button" class="btn btn-primary" id="submit-btn" onclick="createProduit()">
                                <div class="dot-spinner d-none" id="loading-spinner">
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                    <div class="dot-spinner__dot"></div>
                                </div><i class="fi-plus me-2"></i>
                                <span id="submit-text">Enregistrement le produit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 

    <style>
    /* Style pour les messages d'erreur de validation */
    .was-validated .form-control:invalid,
    .was-validated .form-select:invalid {
        border-color: #dc3545;
    }

    .was-validated .form-control:valid,
    .was-validated .form-select:valid {
        border-color: #198754;
    }

    /* Ajustement pour les boutons dans le modal */
    .modal-footer .btn {
        min-width: 120px;
    }
    </style>

    <style>
        .object-fit-cover {
            object-fit: cover;
        }
        
        .form-label i {
            width: 16px;
            text-align: center;
        }
        
        .card.border {
            border-color: #dee2e6 !important;
        }
        
        .input-group-text {
            background-color: #f8f9fa;
            border-color: #dee2e6;
        }
        
        .modal-lg {
            max-width: 800px;
        }
        
        #product-preview {
            transition: transform 0.3s ease;
        }
        
        #product-preview:hover {
            transform: scale(1.05);
        }
    </style>

    <script>
    let URL = "../../app/index.php?action=produit/create";
    // Fonction principale de connexion
    function createProduit() {
        let form = document.forms.createProduitForms;
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
        submit_text.textContent = "Enregistrement en cours...";
        loading_spinner.classList.remove("d-none");
        
        // Préparation des données à envoyer
        let formData = new FormData(form);   
 
        // Options pour la requête fetch
        const options = {  
            method: 'POST',  
            body: formData  
            // Si votre API attend du JSON, utilisez ceci :
            // headers: { 'Content-Type': 'application/json' },
            // body: JSON.stringify({ email: email, password: password }) 
        };
        
        // Envoi de la requête AJAX
        fetch(URL, options)
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
            generalShowMessage(
                data.message, type = 'success',
                messageDiv="server-message-create",
                messageText="message-text-create",
                alertDiv=".alert.create"
            )

            loading_spinner.classList.add("d-none");
            submit_text.textContent = "Enregistrement le produit";
            submit_btn.disabled = false;
            form.reset();
            
        } 
        else {
            // Erreur de connexion
            generalShowMessage(
                data.message, type = 'success',
                messageDiv="server-message-create",
                messageText="message-text-create",
                alertDiv=".alert.create"
            )
            
            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = "Enregistrement le produit";
            loading_spinner.classList.add("d-none");
        }
        })
        .catch(error => {
        // Erreur réseau ou autre
        console.error("Erreur:", error);
        generalShowMessage(
            data.message, type = 'success',
            messageDiv="server-message-create",
            messageText="message-text-create",
            alertDiv=".alert.create"
        )
        
        // Réactiver le bouton
        submit_btn.disabled = false;
        submit_text.textContent = "Enregistrement le produit";
        loading_spinner.classList.add("d-none");
        }); 
    }

    </script>

    <!-- footer de la page -->
    <?php include("includes/footer.php")?>
    <!-- footer de la page -->
  
</body>
</html>