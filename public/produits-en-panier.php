<!DOCTYPE html><html lang="en" data-bs-theme="light" data-pwa="true">
  
    <!-- HEAD ...........................-->
    <?php include("./includes/head.php") ?>
    <!-- HEAD ...........................-->

  <!-- Body -->
  <body> 
  
    <!-- HEADER ...........................-->
    <?php include("./includes/header.php") ?>
    <!-- HEADER ...........................-->


    <!-- Page content -->
    <main class="content-wrapper">

      <!-- //////////////////////// -->
      <section class="container "> 
        <div class="row bg-body rounded p-3 pb-0 px-lg-5">
          <div class="col-lg-9 d-flex flex-column gap-4 py-sm-2 py-lg-3">
            <h1 class="mb-3">Votre panier Salama</h1>
            <div class="d-md-flex justify-content-between pb-lg-1 mb-md-2">
              <div class="d-flex align-items-start align-items-md-center mb-3 mb-md-0">
                <div class="ratio ratio-1x1 bg-body-tertiary border rounded-circle overflow-hidden" style="width: 124px">
                  <img src="assets/img/account/avatar-lg.jpg" alt="Avatar">
                </div>
                <div class="ps-3 ps-md-4 ms-lg-2">
                  <span class="badge text-bg-info d-inline-flex align-items-center mb-2">
                    Verified
                    <i class="fi-shield ms-1"></i>
                  </span>
                  <h1 class="h4 py-sm-1 mb-2">Irenez Kiza</h1>
                  <ul class="nav flex-wrap align-items-center gap-2 fs-sm">
                    <li class="text-body-secondary me-2">Kinanira ss</li>
                    <li class="na-item">
                      <a class="nav-link position-relative p-0" href="#!">
                        <i class="fi-link fs-base me-1"></i>
                        <span class="hover-effect-underline  ">irene@gmail.com</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div> 
            </div> 

            <hr>

          </div>
        </div>
      </section>
      <!-- ////////////////////////// -->

      <div class="container pt-1 pb-5 mb-xxl-3"> 
        
        <!-- En-tête informatif pour la page panier -->
        <div class="border-0 mb-4">
          <div class="d-flex align-items-start">
            <i class="fi-info-circle fs-lg text-info me-3 mt-1"></i>
            <div> 
              <p class="mb-2">Sur cette page, vous pouvez :</p>
              <ul class="mb-1">
                <li><strong>Modifier les quantités</strong> : Utilisez les boutons + et - pour ajuster le nombre d'articles</li>
                <li><strong>Retirer des produits</strong> : Cliquez sur l'icône <i class="fi-trash text-danger"></i> pour supprimer un article</li>
                <li><strong>Choisir votre livraison</strong> : Sélectionnez votre mode de réception dans le résumé à droite</li>
              </ul> 
            </div>
          </div>
        </div>
        <!-- Filter sidebar + Listings list view -->
        <div class="row pt-md-2 pt-lg-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5">  

          <!-- side bare -->
          <aside class="col-lg-3">
            <div class="sticky-top" style="top: 24px">
              <!-- Résumé du panier -->
              <div class="card border shadow-sm mb-4">
                <div class="card-header py-3">
                  <h3 class="h5 mb-0">Résumé du panier</h3>
                </div>
                <div class="card-body p-4">
                  
                  <!-- Options de livraison avec sélecteur déroulant -->
                  <div class="mb-4">
                    <h4 class="h6 mb-3">
                      <i class="fi-truck me-2"></i>
                      Mode de livraison
                    </h4>
                    
                    <!-- Sélecteur déroulant principal -->
                    <div class="mb-3">
                      <select class="form-select" id="shippingMethod" aria-label="Choisir le mode de livraison">
                        <option value="pickup" selected>Retrait en magasin - Gratuit</option>
                        <option value="standard">Livraison standard - 9,90€</option>
                        <option value="express">Livraison express - 19,90€</option>
                      </select>
                    </div>
                    
                    <!-- Détails dynamiques selon l'option sélectionnée -->
                    <div id="shippingDetails">
                      <!-- Détails par défaut pour Retrait en magasin -->
                      <div class="border rounded p-3" id="pickupDetails">
                        <div class="d-flex justify-content-between align-items-start">
                          <div>
                            <div class="fw-semibold mb-1">Retrait en magasin</div>
                            <div class="text-success fw-semibold mb-1">Gratuit</div>
                            <div class="text-body-secondary fs-xs">Avenue de l'Industrie, Bujumbura</div>
                            <div class="text-body-secondary fs-xs">Ouvert du lundi au samedi, 7h30-18h</div>
                          </div>
                          <span class="badge bg-success bg-opacity-10 text-success">Recommandé</span>
                        </div>
                      </div>
                      
                      <!-- Détails pour Livraison standard (caché par défaut) -->
                      <div class="border rounded p-3 d-none" id="standardDetails">
                        <div class="d-flex justify-content-between align-items-start">
                          <div>
                            <div class="fw-semibold mb-1">Livraison standard</div>
                            <div class="text-body-secondary mb-1">9,90€</div>
                            <div class="text-body-secondary fs-xs">Délai: 2-3 jours ouvrés</div>
                            <div class="text-body-secondary fs-xs">Suivi de colis inclus</div>
                            <div class="text-body-secondary fs-xs">Zone de livraison: Bujumbura et périphérie</div>
                          </div>
                        </div>
                      </div>
                      
                      <!-- Détails pour Livraison express (caché par défaut) -->
                      <div class="border rounded p-3 d-none" id="expressDetails">
                        <div class="d-flex justify-content-between align-items-start">
                          <div>
                            <div class="fw-semibold mb-1">Livraison express</div>
                            <div class="text-body-secondary mb-1">19,90€</div>
                            <div class="text-body-secondary fs-xs">Délai: 24h</div>
                            <div class="text-body-secondary fs-xs">Livraison avant 12h</div>
                            <div class="text-body-secondary fs-xs">Zone de livraison: Bujumbura uniquement</div>
                          </div>
                          <span class="badge bg-warning bg-opacity-10 text-warning">Rapide</span>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Script JavaScript pour gérer l'affichage dynamique -->
                  <script>
                  document.addEventListener('DOMContentLoaded', function() {
                    const shippingSelect = document.getElementById('shippingMethod');
                    const pickupDetails = document.getElementById('pickupDetails');
                    const standardDetails = document.getElementById('standardDetails');
                    const expressDetails = document.getElementById('expressDetails');
                    
                    function updateShippingDetails() {
                      // Cacher tous les détails
                      pickupDetails.classList.add('d-none');
                      standardDetails.classList.add('d-none');
                      expressDetails.classList.add('d-none');
                      
                      // Afficher les détails correspondant à la sélection
                      const selectedValue = shippingSelect.value;
                      if (selectedValue === 'pickup') {
                        pickupDetails.classList.remove('d-none');
                      } else if (selectedValue === 'standard') {
                        standardDetails.classList.remove('d-none');
                      } else if (selectedValue === 'express') {
                        expressDetails.classList.remove('d-none');
                      }
                      
                      // Mettre à jour le total (exemple)
                      updateTotalPrice();
                    }
                    
                    function updateTotalPrice() {
                      const shippingCosts = {
                        'pickup': 0,
                        'standard': 9.90,
                        'express': 19.90
                      };
                      
                      const selectedMethod = shippingSelect.value;
                      const shippingCost = shippingCosts[selectedMethod];
                      
                      // Ici tu peux mettre à jour l'affichage du total
                      // Exemple: document.getElementById('shippingCost').textContent = shippingCost + '€';
                      // Exemple: document.getElementById('totalPrice').textContent = (subtotal + shippingCost) + '€';
                    }
                    
                    // Écouter les changements de sélection
                    shippingSelect.addEventListener('change', updateShippingDetails);
                    
                    // Initialiser l'affichage
                    updateShippingDetails();
                  });
                  </script>
                  
                  <!-- Récapitulatif des prix -->
                  <div class="border-top pt-4">
                    <!-- Sous-total -->
                    <div class="d-flex justify-content-between mb-2">
                      <span class="text-body-secondary">Sous-total (3 articles)</span>
                      <span class="fw-semibold">322,60€</span>
                    </div>
                    
                    <!-- Frais de livraison -->
                    <div class="d-flex justify-content-between mb-2">
                      <span class="text-body-secondary">Frais de livraison</span>
                      <span class="fw-semibold">Gratuit</span>
                    </div>
                    
                    <!-- Ligne séparatrice -->
                    <hr class="my-3">
                    
                    <!-- Total -->
                    <div class="d-flex justify-content-between mb-4">
                      <span class="h5 mb-0">Total à payer</span>
                      <span class="h5 text-primary mb-0">312,60€</span>
                    </div>
                    
                    <!-- Bouton de commande -->
                    <button type="button" class="btn btn-primary btn-lg w-100 mb-3">
                      <i class="fi-check-circle me-2"></i>
                      Passer la commande
                    </button>
                    
                    <!-- Paiement sécurisé -->
                    <div class="text-center mb-3">
                      <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                        <i class="fi-shield-check me-1"></i>
                        Paiement 100% sécurisé
                      </span>
                    </div> 
                  </div>
                </div>
              </div>
                
            </div>
          </aside>
          <!-- ///////////////////////////////// -->

          <!-- Listings list view -->
          <div class="col-lg-9 mx-auto"> 
            <!-- Grid of items -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 row-cols-xl-3 g-4 g-sm-3 g-lg-4">
              <!-- Produit 1 dans le panier -->
              <div class="col">
                <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                  <div class="card-img-top position-relative overflow-hidden">
                    <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                      <span class="badge text-bg-info d-inline-flex align-items-center">
                        En stock
                        <i class="fi-box ms-1"></i>
                      </span>
                      <span class="badge text-bg-primary">Dans panier</span>
                    </div>
                    <div class="ratio hover-effect-target bg-body-secondary" style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                      <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Perceuse-visseuse sans fil">
                    </div>
                  </div>
                  <div class="card-body pb-3">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="fs-xs text-body-secondary">Outillage électrique</div>
                      <div class="d-flex gap-1 position-relative z-2">
                        <button type="button" class="btn btn-icon btn-sm btn-outline-danger rounded-circle" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Retirer du panier" aria-label="Retirer du panier">
                          <i class="fi-trash fs-sm"></i>
                        </button>
                      </div>
                    </div>
                    <h3 class="h6 mb-2">
                      <a class="hover-effect-underline   me-1" href="single-product.html">Perceuse-Visseuse 18V</a>
                    </h3>
                    <div class="h6 mb-0">89,90€</div>
                    
                    <!-- Contrôle quantité mini -->
                    <div class="mt-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center bg-light rounded-2 border">
                          <button type="button" class="btn btn-outline-secondary border-0 btn-xs rounded-start-2 px-2 py-1" aria-label="Diminuer quantité">
                            <i class="fi-minus fs-xs"></i>
                          </button>
                          <span class="px-2 py-1 fw-semibold">1</span>
                          <button type="button" class="btn btn-outline-secondary border-0 btn-xs rounded-end-2 px-2 py-1" aria-label="Augmenter quantité">
                            <i class="fi-plus fs-xs"></i>
                          </button>
                        </div>
                        <div class="text-primary fw-semibold">89,90€</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                    <div class="border-top pt-3">
                      <div class="row row-cols-2 g-2 fs-sm">
                        <div class="col d-flex align-items-center gap-2">
                          <i class="fi-battery"></i>
                          2 batteries
                        </div>
                        <div class="col d-flex align-items-center gap-2">
                          <i class="fi-star"></i>
                          4.6/5
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit 2 dans le panier -->
              <div class="col">
                <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                  <div class="card-img-top position-relative overflow-hidden">
                    <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                      <span class="badge text-bg-info d-inline-flex align-items-center">
                        En stock
                        <i class="fi-box ms-1"></i>
                      </span>
                      <span class="badge text-bg-warning">Promotion</span>
                    </div>
                    <div class="ratio hover-effect-target bg-body-secondary" style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                      <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Peinture murale">
                    </div>
                  </div>
                  <div class="card-body pb-3">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="fs-xs text-body-secondary">Matériaux peinture</div>
                      <div class="d-flex gap-1 position-relative z-2">
                        <button type="button" class="btn btn-icon btn-sm btn-outline-danger rounded-circle" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Retirer du panier" aria-label="Retirer du panier">
                          <i class="fi-trash fs-sm"></i>
                        </button>
                      </div>
                    </div>
                    <h3 class="h6 mb-2">
                      <a class="hover-effect-underline   me-1" href="single-product.html">Peinture Blanche 5L</a>
                    </h3>
                    <div class="h6 mb-0">
                      <span class="text-body-secondary text-decoration-line-through fs-xs me-1">34,50€</span>
                      27,60€
                    </div>
                    
                    <!-- Contrôle quantité mini -->
                    <div class="mt-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center bg-light rounded-2 border">
                          <button type="button" class="btn btn-outline-secondary border-0 btn-xs rounded-start-2 px-2 py-1" aria-label="Diminuer quantité">
                            <i class="fi-minus fs-xs"></i>
                          </button>
                          <span class="px-2 py-1 fw-semibold">3</span>
                          <button type="button" class="btn btn-outline-secondary border-0 btn-xs rounded-end-2 px-2 py-1" aria-label="Augmenter quantité">
                            <i class="fi-plus fs-xs"></i>
                          </button>
                        </div>
                        <div class="text-primary fw-semibold">82,80€</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                    <div class="border-top pt-3">
                      <div class="row row-cols-2 g-2 fs-sm">
                        <div class="col d-flex align-items-center gap-2">
                          <i class="fi-droplet"></i>
                          Acrylique
                        </div>
                        <div class="col d-flex align-items-center gap-2">
                          <i class="fi-star"></i>
                          4.3/5
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit 3 dans le panier -->
              <div class="col">
                <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                  <div class="card-img-top position-relative overflow-hidden">
                    <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 pt-sm-0 ps-1 ps-sm-0 mt-2 mt-sm-3 ms-2 ms-sm-3">
                      <span class="badge text-bg-info d-inline-flex align-items-center">
                        En stock
                        <i class="fi-box ms-1"></i>
                      </span>
                      <span class="badge text-bg-success">Top vente</span>
                    </div>
                    <div class="ratio hover-effect-target bg-body-secondary" style="--fn-aspect-ratio: calc(204 / 306 * 100%)">
                      <img src="https://images.unsplash.com/photo-1562599597-b8e6dbe8e6b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Scie circulaire">
                    </div>
                  </div>
                  <div class="card-body pb-3">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="fs-xs text-body-secondary">Outillage électrique</div>
                      <div class="d-flex gap-1 position-relative z-2">
                        <button type="button" class="btn btn-icon btn-sm btn-outline-danger rounded-circle" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" title="Retirer du panier" aria-label="Retirer du panier">
                          <i class="fi-trash fs-sm"></i>
                        </button>
                      </div>
                    </div>
                    <h3 class="h6 mb-2">
                      <a class="hover-effect-underline   me-1" href="single-product.html">Scie Circulaire 1200W</a>
                    </h3>
                    <div class="h6 mb-0">149,90€</div>
                    
                    <!-- Contrôle quantité mini -->
                    <div class="mt-3">
                      <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center bg-light rounded-2 border">
                          <button type="button" class="btn btn-outline-secondary border-0 btn-xs rounded-start-2 px-2 py-1" aria-label="Diminuer quantité">
                            <i class="fi-minus fs-xs"></i>
                          </button>
                          <span class="px-2 py-1 fw-semibold">1</span>
                          <button type="button" class="btn btn-outline-secondary border-0 btn-xs rounded-end-2 px-2 py-1" aria-label="Augmenter quantité">
                            <i class="fi-plus fs-xs"></i>
                          </button>
                        </div>
                        <div class="text-primary fw-semibold">149,90€</div>
                      </div>
                    </div>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                    <div class="border-top pt-3">
                      <div class="row row-cols-2 g-2 fs-sm">
                        <div class="col d-flex align-items-center gap-2">
                          <i class="fi-zap"></i>
                          1200W
                        </div>
                        <div class="col d-flex align-items-center gap-2">
                          <i class="fi-star"></i>
                          4.8/5
                        </div>
                      </div>
                    </div>
                  </div>
                </article>
              </div> 
            </div>
            <!-- ////////////////////// -->

            <!-- Pagination -->
            <nav class="pt-3 mt-3" aria-label="Listings pagination">
              <ul class="pagination">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">4</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">5</a>
                </li>
                <li class="page-item">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">18</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- ///////////////////////// -->
        </div>
      </div>
    </main>

    <!-- FOOTER ...........................-->
    <?php include("./includes/footer.php") ?>
    <!-- FOOTER ...........................-->
   

</body></html>