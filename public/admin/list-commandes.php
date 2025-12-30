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
                <h2 class="mb-0">Liste des commandes</h2> 
              </div>
            </div>
 

            <!-- ////////////////// -->
            <div class="card-body p-0 col-12 ">
                <div class="table-responsive">
          
                


                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4" style="width: 60px;">#</th>
                            <th style="width: 100px;">Produit</th>
                            <th style="width: 100px;">Client</th>
                            <th style="width: 100px;" class="text-center">Dates</th>
                            <th style="width: 100px;" class="text-center">Livraison</th>
                            <th style="width: 120px;" class="text-end">Montant</th>
                            <th style="width: 120px;" class="text-center pe-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Commande 1 - Non validée -->
                        <tr>
                            <td class="ps-4 fw-semibold">1</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop" 
                                        alt="Casque audio" 
                                        class="rounded" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Casque Audio Pro X</h6>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="badge bg-primary">2</span>
                                            <span class="text-muted xsmall">unités</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop" 
                                        alt="Client" 
                                        class="rounded-circle" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Jean Dupont</h6>
                                        <p class="text-muted xsmall mb-0">jean@mail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column gap-1">
                                    <span class="badge bg-light text-dark">15/01/2024</span>
                                    <span class="badge bg-secondary">En attente</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info bg-opacity-10 text-info">Livraison</span>
                            </td>
                            <td class="text-end fw-bold">
                                299,98 €
                            </td>
                            <td class="pe-4">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-success" title="Valider la commande">
                                        <i class="fi-check me-1"></i>Valider
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Commande 2 - Validée -->
                        <tr class="table-success table-active">
                            <td class="ps-4 fw-semibold">2</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1526170375885-4d8ecf77b99f?w=100&h=100&fit=crop" 
                                        alt="Appareil photo" 
                                        class="rounded opacity-75" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Appareil Photo</h6>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="badge bg-primary">1</span>
                                            <span class="text-muted xsmall">unité</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" 
                                        alt="Client" 
                                        class="rounded-circle opacity-75" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Marie Leroy</h6>
                                        <p class="text-muted xsmall mb-0">marie@mail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column gap-1">
                                    <span class="badge bg-light text-dark">14/01/2024</span>
                                    <span class="badge bg-success">15/01/2024</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-warning bg-opacity-10 text-warning">Retrait</span>
                            </td>
                            <td class="text-end fw-bold">
                                799,99 €
                            </td>
                            <td class="pe-4">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-outline-success" disabled title="Déjà validée">
                                        <i class="fi-check me-1"></i>Validée
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Commande 3 - Non validée -->
                        <tr>
                            <td class="ps-4 fw-semibold">3</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?w=100&h=100&fit=crop" 
                                        alt="Montre connectée" 
                                        class="rounded" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Montre Connectée</h6>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="badge bg-primary">3</span>
                                            <span class="text-muted xsmall">unités</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=100&h=100&fit=crop" 
                                        alt="Client" 
                                        class="rounded-circle" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Thomas Martin</h6>
                                        <p class="text-muted xsmall mb-0">thomas@mail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column gap-1">
                                    <span class="badge bg-light text-dark">16/01/2024</span>
                                    <span class="badge bg-secondary">En attente</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info bg-opacity-10 text-info">Livraison</span>
                            </td>
                            <td class="text-end fw-bold">
                                899,97 €
                            </td>
                            <td class="pe-4">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-success" title="Valider la commande">
                                        <i class="fi-check me-1"></i>Valider
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Commande 4 - Validée -->
                        <tr class="table-success table-active">
                            <td class="ps-4 fw-semibold">4</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=100&h=100&fit=crop" 
                                        alt="Chaussures sport" 
                                        class="rounded opacity-75" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Chaussures Sport</h6>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="badge bg-primary">1</span>
                                            <span class="text-muted xsmall">unité</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop" 
                                        alt="Client" 
                                        class="rounded-circle opacity-75" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Sophie Petit</h6>
                                        <p class="text-muted xsmall mb-0">sophie@mail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column gap-1">
                                    <span class="badge bg-light text-dark">13/01/2024</span>
                                    <span class="badge bg-success">14/01/2024</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-info bg-opacity-10 text-info">Livraison</span>
                            </td>
                            <td class="text-end fw-bold">
                                89,99 €
                            </td>
                            <td class="pe-4">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-outline-success" disabled title="Déjà validée">
                                        <i class="fi-check me-1"></i>Validée
                                    </button>
                                </div>
                            </td>
                        </tr>

                        <!-- Commande 5 - Non validée -->
                        <tr>
                            <td class="ps-4 fw-semibold">5</td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1606788075767-20b25ec7e0ac?w=100&h=100&fit=crop" 
                                        alt="Sac à dos" 
                                        class="rounded" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Sac à Dos Pro</h6>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="badge bg-primary">2</span>
                                            <span class="text-muted xsmall">unités</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop" 
                                        alt="Client" 
                                        class="rounded-circle" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small">Pierre Dubois</h6>
                                        <p class="text-muted xsmall mb-0">pierre@mail.com</p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column gap-1">
                                    <span class="badge bg-light text-dark">17/01/2024</span>
                                    <span class="badge bg-secondary">En attente</span>
                                </div>
                            </td>
                            <td class="text-center">
                                <span class="badge bg-warning bg-opacity-10 text-warning">Retrait</span>
                            </td>
                            <td class="text-end fw-bold">
                                119,98 €
                            </td>
                            <td class="pe-4">
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-success" title="Valider la commande">
                                        <i class="fi-check me-1"></i>Valider
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <style>
                    .xsmall {
                        font-size: 0.75rem;
                    }
                    
                    .table-success.table-active {
                        background-color: rgba(25, 135, 84, 0.05);
                    }
                    
                    .btn-sm {
                        padding: 0.25rem 0.75rem;
                        font-size: 0.875rem;
                    }
                    
                    .badge.bg-primary {
                        background-color: #0d6efd !important;
                        color: white;
                        font-size: 0.75rem;
                        padding: 0.2em 0.6em;
                    }
                    
                    .badge {
                        padding: 0.35em 0.65em;
                        font-weight: 500;
                    }
                </style>




                </div>
            </div>
            <!-- ////////////////// -->

          </div>
        </div>
      </div>
    </main>


  <!-- footer de la page -->
  <?php include("includes/footer.php")?>
  <!-- footer de la page -->
  
</body>
</html>