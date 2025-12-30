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
            <!-- //////////////////////// -->
             <div class="col-lg-9">
                <div class="card-header bg-white border-bottom-0 py-3 mb-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2 class="mb-0">Tableau de bord</h2>
                    </div>
                </div>

                <div class="row g-4">
                    <!-- Clients enregistrés -->
                    <div class="col-md-6 col-xl-6">
                        <div class="card border-0 h-100 bg-primary bg-opacity-5">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="fi-users fs-3 text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-muted mb-1">Clients enregistrés</h3>
                                    <div class="h2 mb-0 fw-bold text-primary">1,245</div>
                                    <p class="fs-sm text-muted mb-0">+12% ce mois</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Produits disponibles -->
                    <div class="col-md-6 col-xl-6">
                        <div class="card border-0 h-100 bg-success bg-opacity-5">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="fi-package fs-3 text-success"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-muted mb-1">Produits disponibles</h3>
                                    <div class="h2 mb-0 fw-bold text-success">568</div>
                                    <p class="fs-sm text-muted mb-0">45 en rupture</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Commandes en attente -->
                    <div class="col-md-6 col-xl-6">
                        <div class="card border-0 h-100 bg-warning bg-opacity-5">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-warning bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="fi-clock fs-3 text-warning"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-muted mb-1">Commandes en attente</h3>
                                    <div class="h2 mb-0 fw-bold text-warning">23</div>
                                    <p class="fs-sm text-muted mb-0">À valider</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Commandes validées -->
                    <div class="col-md-6 col-xl-6">
                        <div class="card border-0 h-100 bg-success bg-opacity-5">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-success bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="fi-check-circle fs-3 text-success"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-muted mb-1">Commandes validées</h3>
                                    <div class="h2 mb-0 fw-bold text-success">412</div>
                                    <p class="fs-sm text-muted mb-0">Ce mois-ci</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total Administrateurs -->
                    <div class="col-md-6 col-xl-6">
                        <div class="card border-0 h-100 bg-info bg-opacity-5">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg-info bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="fi-shield fs-3 text-info"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-muted mb-1">Total Administrateurs</h3>
                                    <div class="h2 mb-0 fw-bold text-info">8</div>
                                    <p class="fs-sm text-muted mb-0">Dont 5 actifs</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Total logs d'activité -->
                    <div class="col-md-6 col-xl-6">
                        <div class="card border-0 h-100 bg-purple bg-opacity-5">
                            <div class="card-body d-flex align-items-center">
                                <div class="bg- bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="fi-activity fs-3 text-purple"></i>
                                </div>
                                <div>
                                    <h3 class="h6 text-muted mb-1">Logs d'activité</h3>
                                    <div class="h2 mb-0 fw-bold text-purple">12,847</div>
                                    <p class="fs-sm text-muted mb-0">Derniers 30 jours</p>
                                </div>
                            </div>
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
                
                .card {
                    transition: transform 0.2s ease-in-out;
                }
                
                .card:hover {
                    transform: translateY(-5px);
                }
                
                .bg-opacity-5 {
                    background-color: rgba(0, 0, 0, 0.02) !important;
                }
                
                .rounded-circle {
                    width: 60px;
                    height: 60px;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                }
                
                .h2 {
                    font-size: 2rem;
                    line-height: 1.2;
                }
            </style>
            <!-- ///////////// -->
        </div>
      </div>
    </main>


  <!-- footer de la page -->
  <?php include("includes/footer.php")?>
  <!-- footer de la page -->
  
</body>
</html>