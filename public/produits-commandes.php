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
            <h1 class="mb-3">Mes commandes</h1>
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
  
        <!-- Titre et en-tête informatif -->
        <div class="mb-4"> 
          <div class="alert alert-info border-0 bg-info-subtle">
            <div class="d-flex align-items-start">
              <i class="fi-history fs-lg text-info me-3 mt-1"></i>
              <div>
                <p class="mb-2">Sur cette page, vous pouvez consulter l'historique de toutes vos commandes passées chez <strong>Salama</strong>.</p>
                <!-- <ul class="mb-1">
                  <li><strong>Suivi des commandes</strong> : Vérifiez le statut de chaque commande</li>
                  <li><strong>Détails des achats</strong> : Consultez les produits commandés et les quantités</li>
                  <li><strong>Téléchargement factures</strong> : Téléchargez vos factures pour chaque commande</li>
                  <li><strong>Commander à nouveau</strong> : Recréez facilement une commande identique</li>
                </ul> -->
              </div>
            </div>
          </div>
        </div>
        
        <!-- Statistiques de commandes -->
        <div class="row g-3 mb-4">
          <!-- Commandes totales -->
          <div class="col-sm-6 col-md-3">
            <div class="card bg-primary-subtle border-0 h-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                    <i class="fi-shopping-cart text-primary fs-5"></i>
                  </div>
                  <h3 class="fs-sm fw-normal mb-0">Commandes totales</h3>
                </div>
                <div class="h3 mb-0">12</div>
              </div> 
            </div>
          </div>
          
          <!-- Commandes livrées -->
          <div class="col-sm-6 col-md-3">
            <div class="card bg-success-subtle border-0 h-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="rounded-circle bg-success bg-opacity-10 p-2 me-3">
                    <i class="fi-check-circle text-success fs-5"></i>
                  </div>
                  <h3 class="fs-sm fw-normal mb-0">Commandes livrées</h3>
                </div>
                <div class="h3 mb-0">10</div>
              </div> 
            </div>
          </div>
          
          <!-- Commandes en cours -->
          <div class="col-sm-6 col-md-3">
            <div class="card bg-warning-subtle border-0 h-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="rounded-circle bg-warning bg-opacity-10 p-2 me-3">
                    <i class="fi-clock text-warning fs-5"></i>
                  </div>
                  <h3 class="fs-sm fw-normal mb-0">En cours</h3>
                </div>
                <div class="h3 mb-0">2</div>
              </div> 
            </div>
          </div>
          
          <!-- Total dépensé -->
          <div class="col-sm-6 col-md-3">
            <div class="card bg-info-subtle border-0 h-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <div class="rounded-circle bg-info bg-opacity-10 p-2 me-3">
                    <i class="fi-dollar text-info fs-5"></i>
                  </div>
                  <h3 class="fs-sm fw-normal mb-0">Total dépensé</h3>
                </div>
                <div class="h3 mb-0">4 568€</div>
              </div>
               
            </div>
          </div>
        </div>

        <!-- Contenu principal -->   
        <!-- Grille de commandes (2 par ligne) -->
        <div class="row row-cols-1 row-cols-lg-3 g-4"> 
          <!-- Commande 1 -->
          <div class="col">
            <article class="card h-100 border hover-effect-scale">
              <div class="card-header bg-transparent py-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                  <div class="mb-2 mb-md-0">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                      <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Livrée</span>
                      <span class="fw-semibold">#SAL-2024-0157</span>
                    </div>
                    <div class="fs-sm text-body-secondary mt-1">15/11/2024 • Livrée le 18/11/2024</div>
                  </div>
                  <div class="text-md-end">
                    <div class="h5 mb-1">322,60€</div>
                    <div class="fs-sm text-body-secondary">3 articles</div>
                  </div>
                </div>
              </div>
              <div class="card-body p-4">
                <!-- Mode de livraison -->
                <div class="mb-3 pb-3 border-bottom">
                  <div class="d-flex align-items-center gap-2 fs-sm">
                    <i class="fi-truck text-body-secondary"></i>
                    <span class="fw-semibold">Livraison express</span>
                    <span class="text-body-secondary ms-2">• Livrée avant 12h</span>
                  </div>
                </div>
                
                <!-- Produits de la commande (1 par ligne) -->
                <div class="row g-3 mb-4">
                  <div class="col-12">
                    <div class="d-flex gap-2 align-items-start">
                      <div class="flex-shrink-0 position-relative">
                        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                            class="rounded" width="50" height="50" alt="Perceuse-visseuse">
                        <div class="position-absolute top-0 end-0 translate-middle badge bg-primary rounded-circle p-1" style="width: 20px; height: 20px; font-size: 10px;">
                          1
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="fs-sm mb-1">Perceuse-Visseuse 18V</h6>
                        <div class="d-flex justify-content-between align-items-center">
                          <span class="text-body-secondary fs-xs">Commande n°1</span>
                          <span class="fw-semibold fs-sm">89,90€</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 align-items-start">
                      <div class="flex-shrink-0 position-relative">
                        <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                            class="rounded" width="50" height="50" alt="Peinture">
                        <div class="position-absolute top-0 end-0 translate-middle badge bg-primary rounded-circle p-1" style="width: 20px; height: 20px; font-size: 10px;">
                          3
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="fs-sm mb-1">Peinture Blanche 5L</h6>
                        <div class="d-flex justify-content-between align-items-center">
                          <span class="text-body-secondary fs-xs">Commande n°3</span>
                          <span class="fw-semibold fs-sm">82,80€</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 align-items-start">
                      <div class="flex-shrink-0 position-relative">
                        <img src="https://images.unsplash.com/photo-1562599597-b8e6dbe8e6b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                            class="rounded" width="50" height="50" alt="Scie circulaire">
                        <div class="position-absolute top-0 end-0 translate-middle badge bg-primary rounded-circle p-1" style="width: 20px; height: 20px; font-size: 10px;">
                          1
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="fs-sm mb-1">Scie Circulaire 1200W</h6>
                        <div class="d-flex justify-content-between align-items-center">
                          <span class="text-body-secondary fs-xs">Commande n°1</span>
                          <span class="fw-semibold fs-sm">149,90€</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Actions (commentées) -->
                <!--
                <div class="d-flex flex-wrap gap-2">
                  <button type="button" class="btn btn-sm btn-outline-primary">
                    <i class="fi-eye me-1"></i>
                    Détails
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="fi-download me-1"></i>
                    Facture
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-success">
                    <i class="fi-repeat me-1"></i>
                    Re-commander
                  </button>
                </div>
                -->
              </div>
            </article>
          </div>
          
          <!-- Commande 2 -->
          <div class="col">
            <article class="card h-100 border hover-effect-scale">
              <div class="card-header bg-transparent py-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                  <div class="mb-2 mb-md-0">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                      <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">En cours</span>
                      <span class="fw-semibold">#SAL-2024-0148</span>
                    </div>
                    <div class="fs-sm text-body-secondary mt-1">10/11/2024 • Livraison estimée: 15/11/2024</div>
                  </div>
                  <div class="text-md-end">
                    <div class="h5 mb-1">149,90€</div>
                    <div class="fs-sm text-body-secondary">1 article</div>
                  </div>
                </div>
              </div>
              <div class="card-body p-4">
                <!-- Mode de livraison -->
                <div class="mb-3 pb-3 border-bottom">
                  <div class="d-flex align-items-center gap-2 fs-sm">
                    <i class="fi-truck text-body-secondary"></i>
                    <span class="fw-semibold">Retrait en magasin</span>
                    <span class="text-success fw-semibold ms-2">• Gratuit</span>
                  </div>
                  <div class="fs-xs text-body-secondary mt-1 ms-4">Avenue de l'Industrie, Bujumbura</div>
                </div>
                
                <!-- Produits de la commande (1 par ligne) -->
                <div class="row g-3 mb-4">
                  <div class="col-12">
                    <div class="d-flex gap-2 align-items-start">
                      <div class="flex-shrink-0 position-relative">
                        <img src="https://images.unsplash.com/photo-1562599597-b8e6dbe8e6b2?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                            class="rounded" width="50" height="50" alt="Scie circulaire">
                        <div class="position-absolute top-0 end-0 translate-middle badge bg-primary rounded-circle p-1" style="width: 20px; height: 20px; font-size: 10px;">
                          1
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="fs-sm mb-1">Scie Circulaire 1200W</h6>
                        <div class="d-flex justify-content-between align-items-center">
                          <span class="text-body-secondary fs-xs">Commande n°2</span>
                          <span class="fw-semibold fs-sm">149,90€</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Actions (commentées) -->
                <!--
                <div class="d-flex flex-wrap gap-2">
                  <button type="button" class="btn btn-sm btn-outline-primary">
                    <i class="fi-eye me-1"></i>
                    Suivre
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="fi-download me-1"></i>
                    Bon de commande
                  </button>
                </div>
                -->
              </div>
            </article>
          </div>
          
          <!-- Commande 3 -->
          <div class="col">
            <article class="card h-100 border hover-effect-scale">
              <div class="card-header bg-transparent py-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                  <div class="mb-2 mb-md-0">
                    <div class="d-flex align-items-center flex-wrap gap-2">
                      <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">Livrée</span>
                      <span class="fw-semibold">#SAL-2024-0135</span>
                    </div>
                    <div class="fs-sm text-body-secondary mt-1">05/11/2024 • Livrée le 07/11/2024</div>
                  </div>
                  <div class="text-md-end">
                    <div class="h5 mb-1">58,70€</div>
                    <div class="fs-sm text-body-secondary">2 articles</div>
                  </div>
                </div>
              </div>
              <div class="card-body p-4">
                <!-- Mode de livraison -->
                <div class="mb-3 pb-3 border-bottom">
                  <div class="d-flex align-items-center gap-2 fs-sm">
                    <i class="fi-truck text-body-secondary"></i>
                    <span class="fw-semibold">Livraison standard</span>
                    <span class="text-body-secondary ms-2">• 2-3 jours ouvrés</span>
                  </div>
                </div>
                
                <!-- Produits de la commande (1 par ligne) -->
                <div class="row g-3 mb-4">
                  <div class="col-12">
                    <div class="d-flex gap-2 align-items-start">
                      <div class="flex-shrink-0 position-relative">
                        <img src="https://images.unsplash.com/photo-1581093451466-3c30452d61a8?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                            class="rounded" width="50" height="50" alt="Gants de protection">
                        <div class="position-absolute top-0 end-0 translate-middle badge bg-primary rounded-circle p-1" style="width: 20px; height: 20px; font-size: 10px;">
                          2
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="fs-sm mb-1">Gants Protection Cuir</h6>
                        <div class="d-flex justify-content-between align-items-center">
                          <span class="text-body-secondary fs-xs">Commande n°1</span>
                          <span class="fw-semibold fs-sm">25,80€</span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-flex gap-2 align-items-start">
                      <div class="flex-shrink-0 position-relative">
                        <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=150&q=80" 
                            class="rounded" width="50" height="50" alt="Vis et chevilles">
                        <div class="position-absolute top-0 end-0 translate-middle badge bg-primary rounded-circle p-1" style="width: 20px; height: 20px; font-size: 10px;">
                          1
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <h6 class="fs-sm mb-1">Kit Vis & Chevilles</h6>
                        <div class="d-flex justify-content-between align-items-center">
                          <span class="text-body-secondary fs-xs">Commande n°1</span>
                          <span class="fw-semibold fs-sm">32,90€</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                <!-- Actions (commentées) -->
                <!--
                <div class="d-flex flex-wrap gap-2">
                  <button type="button" class="btn btn-sm btn-outline-primary">
                    <i class="fi-eye me-1"></i>
                    Détails
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-secondary">
                    <i class="fi-download me-1"></i>
                    Facture
                  </button>
                  <button type="button" class="btn btn-sm btn-outline-warning">
                    <i class="fi-star me-1"></i>
                    Noter
                  </button>
                </div>
                -->
              </div>
            </article>
          </div> 
        </div>
        <!-- /////////////////////////////////// -->
        
        <!-- Pagination -->
        <nav class="pt-5 mt-3" aria-label="Pagination commandes">
          <ul class="pagination justify-content-center">
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
              <span class="page-link px-2 pe-none">...</span>
            </li>
            <li class="page-item">
              <a class="page-link" href="#!">6</a>
            </li>
          </ul>
        </nav> 
         <!-- //////////////////////// -->
      </div>
    </main>

    <!-- FOOTER ...........................-->
    <?php include("./includes/footer.php") ?>
    <!-- FOOTER ...........................-->
   

</body></html>