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
                                <th style="width: 80px;">Image</th>
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
    <div class="modal fade" id="addProduct" data-bs-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ajouter un nouveau produit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                </div>
                
                <div class="modal-body">
                    <form class="needs-validation" novalidate="">
                        <div class="row g-4">
                            <!-- Image du produit -->
                        

                            <!-- Informations du produit -->
                            <div class="col-md-12">
                                <div class="vstack gap-3">
                                    <!-- image -->
                                    <div class="position-relative">
                                        <label for="product-title" class="form-label">
                                            <i class="fi-tag text-muted me-2"></i>Image du produit *
                                        </label> 
                                        <input type="file" class="form-control" id="product-file" placeholder="Ex: Casque Audio Pro X" required>
                                        <div class="invalid-feedback">Veuillez reneigner l'image.</div>
                                    </div>

                                    <!-- Titre du produit -->
                                    <div class="position-relative">
                                        <label for="product-title" class="form-label">
                                            <i class="fi-tag text-muted me-2"></i>Titre du produit *
                                        </label>
                                        <input type="text" class="form-control" id="product-title" placeholder="Ex: Casque Audio Pro X" required>
                                        <div class="invalid-feedback">Veuillez saisir un titre pour le produit.</div>
                                    </div>

                                    <!-- Catégorie -->
                                    <div class="position-relative">
                                        <label for="product-category" class="form-label">
                                            <i class="fi-layers text-muted me-2"></i>Catégorie *
                                        </label>
                                        <select class="form-select" id="product-category" required>
                                            <option value="" selected disabled>Sélectionnez une catégorie</option>
                                            <option value="audio">Audio</option>
                                            <option value="photo">Photo & Vidéo</option>
                                            <option value="wearable">Wearable</option>
                                            <option value="sport">Sport</option>
                                            <option value="accessoires">Accessoires</option>
                                            <option value="informatique">Informatique</option>
                                            <option value="maison">Maison</option>
                                        </select>
                                        <div class="invalid-feedback">Veuillez sélectionner une catégorie.</div>
                                    </div>

                                    <!-- Description courte -->
                                    <div class="position-relative">
                                        <label for="product-description" class="form-label">
                                            <i class="fi-align-left text-muted me-2"></i>Description courte *
                                        </label>
                                        <textarea class="form-control" id="product-description" rows="3" placeholder="Décrivez brièvement le produit..." required></textarea>
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
                                            <i class="fi-package text-muted me-2"></i>Quantité en stock *
                                        </label>
                                        <input type="number" class="form-control" id="product-quantity" min="0" placeholder="0" required>
                                        <div class="invalid-feedback">Veuillez saisir la quantité en stock.</div>
                                    </div>

                                    <!-- Prix unitaire -->
                                    <div class="col-md-6 position-relative">
                                        <label for="product-price" class="form-label">
                                            <i class="fi-dollar text-muted me-2"></i>Prix unitaire (€) *
                                        </label>
                                        <div class="input-group">
                                            <input type="number" class="form-control" id="product-price" min="0" step="0.01" placeholder="0.00" required>
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
                            <button type="submit" class="btn btn-primary">
                                <i class="fi-plus me-2"></i>Ajouter le produit
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
    document.addEventListener('DOMContentLoaded', function() {
        // Prévisualisation de l'image 
    
        // Validation du formulaire
        const form = document.querySelector('#addProduct form');
        if (form) {
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