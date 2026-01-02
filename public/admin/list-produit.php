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

            <div id="server-message-statuts" class="mb-4" style="display: none;">
                <div class="alert general alert-dismissible fade show" role="alert">
                    <span id="message-text-status"></span>
                    <button type="button" class="btn-close" onclick="generalHideMessage('server-message-statuts')"></button>
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
                                <th style="width: 150px;" class="text-start pe-4">Actions</th>
                            </tr>
                        </thead>
                        <!-- ///////////// -->
                        <tbody>
                            <?php
                            // Récupérer les produits depuis la base de données
                            $responseProduits = getProduits(null,true); // Supposons que cette fonction existe
                            
                            if($responseProduits["success"]) {
                                $listProduits = $responseProduits["data"]; 
                                foreach($listProduits as $n=>$produit) { 

                                    // Variables pour le statut du produit
                                    $message = "";
                                    $classeBtn = "";
                                    $title = ""; 
                                    $disabled = "";
                                    $rowClass = "";
                                    $badgeStockClass = "";
                                    $badgeStockText = "";
                                    $imageOpacity = "";
                                    $imageOverlay = "";
                                    $prixClass = "";
                                    $prixAffichage = "";
                                    $statutText = "";

                                    // Déterminer si le produit est actif ou désactivé
                                    if($produit["statut"] == 1) {
                                        // PRODUIT ACTIF
                                        $message = "Désactiver";
                                        $classeBtn = "btn-outline-danger";
                                        $title = "Désactiver le produit";
                                        $disabled = "";
                                        $rowClass = "";
                                        $imageOpacity = "";
                                        $imageOverlay = "";
                                        $prixClass = "text-end fw-semibold";
                                        $prixAffichage = number_format($produit["prix_unitaire"], 2, ',', ' ') . " Fb";
                                        $statutText = "";
                                        
                                        // Badge de stock en fonction de la quantité 
                                        if($produit["quantite"] > 20) {
                                            $badgeStockClass = "bg-success";
                                            $badgeStockText = $produit["quantite"] . " en stock";
                                        } elseif($produit["quantite"] > 5) {
                                            $badgeStockClass = "bg-warning text-dark";
                                            $badgeStockText = $produit["quantite"] . " en stock";
                                        } else {
                                            $badgeStockClass = "bg-danger";
                                            $badgeStockText = $produit["quantite"] . " en stock";
                                        }
                                        
                                    } else {
                                        // PRODUIT DÉSACTIVÉ 
                                        $message = "Activer";
                                        $classeBtn = "btn-success";
                                        $title = "Activer le produit";
                                        $disabled = "";
                                        $rowClass = "bg-light bg-opacity-50";
                                        $imageOpacity = "opacity: 0.3;";
                                        $imageOverlay = "position-relative";
                                        $prixClass = "text-end fw-semibold text-muted";
                                        $prixAffichage = '<span class="text-decoration-line-through">' . 
                                                        number_format($produit["prix_unitaire"], 2, ',', ' ') . 
                                                        ' Fb</span>';
                                        $statutText = '<small class="text-secondary fs-xs">(Désactivé)</small>';
                                        
                                        // Badge de stock grisé pour produit désactivé
                                        $badgeStockClass = "bg-secondary";
                                        $badgeStockText = $produit["quantite"] . " en stock";
                                    }
                            ?>
                            
                            <tr class="<?= $rowClass ?>">
                                <!-- Numéro -->
                                <td class="ps-4 fw-semibold">
                                    <?php if($produit["statut"] == 0): ?>
                                    <span class="position-relative">
                                        <?= $n+1 ?>
                                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-secondary" 
                                            title="Produit désactivé">
                                            <i class="fi-lock fs-xs"></i>
                                        </span>
                                    </span>
                                    <?php else: ?>
                                        <?= $n+1 ?>
                                    <?php endif; ?>
                                </td>
                                
                                <!-- Image -->
                                <td>
                                    <?php if($produit["statut"] == 0): ?>
                                    <!-- Image avec overlay pour produit désactivé -->
                                    <div class="position-relative" style="width: 60px; height: 60px;">
                                        <img src="<?= !empty($produit["image"]) ? "../../medias/".$produit["image"] : 'default_product.jpg' ?>" 
                                            alt="<?= htmlspecialchars($produit["titre"]) ?>" 
                                            class="rounded position-absolute top-0 start-0 w-100 h-100" 
                                            style="object-fit: cover; <?= $imageOpacity ?>">
                                        <div class="position-absolute top-0 start-0 w-100 h-100 rounded bg-dark bg-opacity-70 d-flex align-items-center justify-content-center">
                                            <i class="fi-lock text-white fs-4"></i>
                                        </div>
                                    </div>
                                    <?php else: ?>
                                    <!-- Image normale pour produit actif -->
                                    <img src="<?= !empty($produit["image"]) ? "../../medias/".$produit["image"] : 'default_product.jpg' ?>" 
                                        alt="<?= htmlspecialchars($produit["titre"]) ?>" 
                                        class="rounded" 
                                        style="width: 60px; height: 60px; object-fit: cover;">
                                    <?php endif; ?>
                                </td>
                                
                                <!-- Informations produit -->
                                <td>
                                    <h6 class="mb-1 <?= $produit["statut"] == 0 ? 'text-muted' : '' ?>">
                                        <?= htmlspecialchars($produit["titre"]) ?>
                                        <?= $statutText ?>
                                    </h6>
                                    <p class="text-muted small mb-0" <?= $produit["statut"] == 0 ? 'style="opacity: 0.7;"' : '' ?>>
                                        <?= htmlspecialchars($produit["description"]) ?>
                                    </p>
                                </td>
                                
                                <!-- Catégorie et Stock -->
                                <td class="text-center">
                                    <div class="d-flex flex-column align-items-center gap-1">
                                        <!-- Badge Catégorie -->
                                        <span class="badge <?= $produit["statut"] == 0 ? 'bg-secondary bg-opacity-25 text-secondary' : 'bg-light text-dark' ?> mb-1">
                                            <?php 
                                                //Récupérer le nom de la catégorie
                                                $categorieResponse = getCategorie($produit["categorie_id"]); 
                                                echo $categorieResponse["data"]["icone"]." ".$categorieResponse["data"]["description"]; 
                                            ?>
                                        </span>
                                        
                                        <!-- Badge Stock -->
                                        <span class="badge <?= $badgeStockClass ?>">
                                            <?= $badgeStockText ?>
                                        </span>
                                    </div>
                                </td>
                                
                                <!-- Prix -->
                                <td class="<?= $prixClass ?>">
                                    <?= $prixAffichage ?>
                                </td>
                                
                                <!-- Actions -->
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <!-- Bouton Modifier -->
                                        <button class="btn btn-sm btn-outline-secondary" 
                                                title="Modifier le produit"
                                                onclick="afficheFormulaireModification(<?= $produit['id'] ?>)">
                                            <i class="fi-edit me-1"></i>Modifier
                                        </button>
                                         
                                        <!-- ................................. -->
                                        <button class="btn btn-sm <?= $classeBtn ?>" <?=$disabled?> title="<?=$title?>" 
                                        id="submit_btn<?=$produit["id"]?>"
                                        onclick="activeDesactiveAdmin(<?=$produit['statut'] == 1 ? 0 : 1 ?>,<?=$produit['id']?>)">
                                            <div class="dot-spinner spine-bouse d-none" id="loading-spinner<?=$produit["id"]?>">
                                                <div class="dot-spinner__dot"></div>
                                                <div class="dot-spinner__dot"></div>
                                                <div class="dot-spinner__dot"></div>
                                                <div class="dot-spinner__dot"></div>
                                                <div class="dot-spinner__dot"></div>
                                                <div class="dot-spinner__dot"></div>
                                                <div class="dot-spinner__dot"></div>
                                                <div class="dot-spinner__dot"></div>
                                            </div>
                                            <i class="fi-<?= $produit['statut'] == 1 ? 'power' : 'check' ?> me-1"></i>
                                            <span id="submit-text<?=$produit["id"]?>">
                                            <?=$message?></span>
                                        </button>
                                        <!-- ................................. -->

                                    </div>
                                </td>
                            </tr>
                            
                            <?php
                                }
                            } else { 
                            ?>
                            <!-- Message si aucun produit trouvé -->
                            <tr>
                                <td class="ps-4 fw-semibold text-center py-5" colspan="6">
                                    <div class="d-flex flex-column align-items-center text-muted">
                                        <i class="fi-package fs-1 mb-3 opacity-50"></i>
                                        <p class="mb-0">Aucun produit trouvé</p>
                                        <small>Commencez par ajouter votre premier produit</small>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            } 
                            ?>
                        </tbody>
 
                        <style>
                        /* Styles pour différencier les produits actifs vs désactivés */
                        tr.bg-light.bg-opacity-50 {
                            background-color: rgba(248, 249, 250, 0.7) !important;
                            border-left: 4px solid #6c757d;
                        }

                        tr.bg-light.bg-opacity-50:hover {
                            background-color: rgba(248, 249, 250, 0.9) !important;
                        }

                        /* Boutons spécifiques */
                        .btn-outline-danger {
                            border-color: #dc3545;
                            color: #dc3545;
                        }

                        .btn-outline-danger:hover {
                            background-color: #dc3545;
                            color: white;
                        }

                        .btn-success {
                            background-color: #198754;
                            border-color: #198754;
                            color: white;
                        }

                        .btn-success:hover {
                            background-color: #157347;
                            border-color: #146c43;
                        }

                        /* Animation sur les boutons */
                        .btn {
                            transition: all 0.2s ease;
                        }

                        /* Badge de statut */
                        .position-relative .badge {
                            font-size: 0.6rem;
                            padding: 0.1rem 0.3rem;
                            z-index: 1;
                        }
                        </style>
                                                
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
                                            <span class="input-group-text">Fb</span>
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
 


    <!-- MODALE DE MISE A JOURS -->
     <div class="modal fade" id="updateProduit" data-bs-backdrop="static" tabindex="-1" aria-labelledby="updateProduitLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="updateProduitLabel">Modification du produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                
                <div class="modal-body">
                    <!-- Message du serveur --> 

                    <div id="server-message-update" class="mb-4" style="display: none;">
                        <div class="alert update alert-dismissible fade show" role="alert">
                            <span id="message-text-update"></span>
                            <button type="button" class="btn-close" onclick="generalHideMessage('server-message-update')"></button>
                        </div>
                    </div>
                    
                    <form id="updateProduitForm" class="needs-validation" onsubmit="return false"  validate name="updateProduitForm">
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
                                            <span class="input-group-text">Fb</span>
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
                                </div>
                                
                                <i class="fi-pencil me-2"></i>
                                <span id="submit-text">Modifier le produit</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MODALE DE MISE A JOURS -->



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

    <!-- footer de la page -->
    <?php include("includes/footer.php")?>
    <!-- footer de la page -->

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
            },3000);

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
 
    let URL_ACTIVE_DESACTIVE = "../../app/index.php?action=produit/active_desactive";
    function activeDesactiveAdmin(statut,id_produit ) { 
        let submit_text = document.getElementById(`submit-text${id_produit }`);
        let loading_spinner = document.getElementById(`loading-spinner${id_produit }`);
        let submit_btn = document.getElementById(`submit_btn${id_produit }`);

        // Désactiver le bouton et afficher le spinner
        submit_btn.disabled = true;

        let originContent = submit_text.textContent;
        submit_text.textContent = "...";
        loading_spinner.classList.remove("d-none");
        
        // Préparation des données à envoyer
        let formData = new FormData();  
        formData.append("statut",statut);
        formData.append("id_produit",id_produit);


        // Options pour la requête fetch
        const options = {  
            method: 'POST',  
            body: formData  
            // Si votre API attend du JSON, utilisez ceci :
            // headers: { 'Content-Type': 'application/json' },
            // body: JSON.stringify({ email: email, password: password }) 
        };
        
        // Envoi de la requête AJAX
        fetch(URL_ACTIVE_DESACTIVE, options)
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
            },3000);

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

    

    function afficheFormulaireModification(produitId) {
        // Construction de l'URL avec paramètres
            let url = '../../app/index.php?action=produit/getById&produit_id='+produitId; 

            let formUpdate = document.getElementById("updateProduitForm")
            formUpdate.innerHTML = "";
            // Requête GET
            fetch(url, {
                method: 'GET',
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                console.log("Données récupérées:", data); 
                    
                let infoProduit = data.data;
                formUpdate.innerHTML =
                `<div class="row g-4">
                    <!-- Informations du produit -->
                    <div class="col-md-12">
                        <div class="vstack gap-3">
                            <!-- Image du produit -->
                            <div class="position-relative">
                                <label for="product-file" class="form-label">
                                    <i class="fi-tag text-muted me-2"></i>Image du produit *
                                </label> 
                                <input type="file" name="photo" class="form-control" id="product-file" accept="image/*">
                                <div class="invalid-feedback">Veuillez sélectionner une image.</div>
                            </div>

                            <!-- Titre du produit -->
                            <div class="position-relative">
                                <label for="product-title" class="form-label">
                                    <i class="fi-tag text-muted me-2"></i>Titre du produit *
                                </label>
                                <input type="text" name="titre" value="${infoProduit.titre}" class="form-control" id="product-title" placeholder="Ex: Casque Audio Pro X" required>
                                <div class="invalid-feedback">Veuillez saisir un titre pour le produit.</div>
                            </div>

                            <!-- Catégorie -->
                            <div class="position-relative">
                                <label for="product-category" class="form-label">
                                    <i class="fi-layers text-muted me-2"></i>Catégorie *
                                </label>
                                <select class="form-select"  value="${infoProduit.categorie_id}" name="categorie_id" id="product-category-update" required>
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
                                <textarea name="description"  value="${infoProduit.description}" class="form-control" id="product-description" rows="3" placeholder="Décrivez brièvement le produit..." maxlength="200" required>
                                ${infoProduit.description}
                                </textarea>
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
                                <input type="number" value="${infoProduit.quantite}" name="quantite" class="form-control" id="product-quantity" min="0" placeholder="0" required>
                                <div class="invalid-feedback">Veuillez saisir la quantité en stock.</div>
                            </div>

                            <!-- Prix unitaire -->
                            <div class="col-md-6 position-relative">
                                <label for="product-price" class="form-label">
                                    <i class="fi-dollar text-muted me-2"></i>Prix unitaire ($) *
                                </label>
                                <div class="input-group">
                                    <input type="number"  value="${infoProduit.prix_unitaire}" name="prix_unitaire" class="form-control" id="product-price" min="0" step="0.01" placeholder="0.00" required>
                                    <span class="input-group-text">Fb</span>
                                </div>
                                <div class="invalid-feedback">Veuillez saisir un prix valide.</div>
                                <input type="hidden" name="image_update"  value="${infoProduit.image}"
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Boutons d'action -->
                <div class="modal-footer border-top-0 pt-4">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary" id="submit-btn-update" onclick="updateProduit(${infoProduit.id})">
                        <div class="dot-spinner d-none" id="loading-spinner-update">
                            <div class="dot-spinner__dot"></div>
                            <div class="dot-spinner__dot"></div>
                            <div class="dot-spinner__dot"></div>
                            <div class="dot-spinner__dot"></div>
                            <div class="dot-spinner__dot"></div>
                            <div class="dot-spinner__dot"></div>
                            <div class="dot-spinner__dot"></div>
                            <div class="dot-spinner__dot"></div>
                        </div>
                        <i class="fi-pencil me-2"></i>
                        <span id="submit-text-update">Modifier le produit</span>
                    </button>
                </div>`;
            
                setTimeout(()=>{
                    showModalById("updateProduit");
                    let product_category_update = document.getElementById("product-category-update");
                    product_category_update.querySelectorAll("option").forEach(child=>{
                        if(child.value == infoProduit.categorie_id){
                            child.selected = true;
                        }
                        else{
                            child.selected = false;
                        }
                    })
                },1200);
    })
        .catch(error => console.error("Erreur:", error));
    }
 
    
    function updateProduit(produit_id) {
        let url = '../../app/index.php?action=produit/update'; 
        
        let form = document.forms.updateProduitForm;
        let submit_btn = document.getElementById("submit-btn-update");
        let submit_text = document.getElementById("submit-text-update");
        let loading_spinner = document.getElementById("loading-spinner-update");
        
        // Validation du formulaire
        if (!form.checkValidity()) {
            form.classList.add('was-validated');
            return false;
        }
        
        // Désactiver le bouton et afficher le spinner
        submit_btn.disabled = true;
        submit_text.textContent = "Modification en cours...";
        loading_spinner.classList.remove("d-none");
        
        // Préparation des données à envoyer
        let formData = new FormData(form);   
        formData.append("id", produit_id); // CORRIGÉ: produit_id au lieu de produitId
        
        // Options pour la requête fetch
        const options = {  
            method: 'POST',  
            body: formData
        };
        
        // CORRIGÉ: url au lieu de URL (JavaScript est sensible à la casse)
        fetch(url, options)
        .then(response => {
            // Vérifier le statut HTTP
            if (!response.ok) {
                throw new Error(`Erreur HTTP: ${response.status}`);
            }
            return response.json();
        })
        .then(data => {
            console.log("Réponse du serveur:", data);
            
            if (data.success) {
                // CORRIGÉ: Correction des paramètres de la fonction
                generalShowMessage(
                    data.message,
                    'success', // CORRIGÉ: type = 'success' incorrect
                    "server-message-update",
                    "message-text-update",
                    ".alert.update"
                );
                
                // CORRIGÉ: Réactiver le bouton même en cas de succès
                loading_spinner.classList.add("d-none");
                submit_text.textContent = "Modifier le produit";
                submit_btn.disabled = false;
                form.reset();
                
                // Redirection après 3 secondes
                setTimeout(() => { 
                    window.location.href = window.location.href;
                }, 3000);
                
            } else {
                // Erreur du serveur
                // CORRIGÉ: type = 'error' pour les erreurs
                generalShowMessage(
                    data.message,
                    'error',
                    "server-message-update",
                    "message-text-update",
                    ".alert.update"
                );
                
                // Réactiver le bouton
                submit_btn.disabled = false;
                submit_text.textContent = "Modifier le produit";
                loading_spinner.classList.add("d-none");
            }
        })
        .catch(error => {
            // Erreur réseau ou autre
            console.error("Erreur:", error);
            
            // CORRIGÉ: Passer le message d'erreur, pas data.message (data n'existe pas ici)
            generalShowMessage(
                "Erreur de connexion au serveur. Veuillez réessayer.",
                'error',
                "server-message-update",
                "message-text-update",
                ".alert.update"
            );
            
            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = "Modifier le produit";
            loading_spinner.classList.add("d-none");
        });
    }
        
    </script>

    
  
</body>
</html>