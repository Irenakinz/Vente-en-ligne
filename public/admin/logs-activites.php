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
           <!-- ///////////////////////////////////// -->
            <div class="col-lg-9">
    <div class="card-header bg-white border-bottom-0 py-3 mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="mb-0">Logs d'activité</h2>
        </div>
    </div>

    <div class="card-body p-0 col-12">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead class="table-light">
                    <tr>
                        <th class="ps-4" style="width: 60px;">#</th>
                        <th style="width: 150px;">Utilisateur</th>
                        <th style="width: 120px;" class="text-center">Connexion</th>
                        <th style="width: 120px;" class="text-center">Déconnexion</th>
                        <th style="width: 100px;" class="text-center">Statut</th>
                        <th style="width: 120px;" class="text-center">Adresse IP</th>
                        <th style="width: 150px;" class="text-center pe-4">Navigateur</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Log 1 - Réussi -->
                    <tr>
                        <td class="ps-4 fw-semibold">1</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="fi-user text-primary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 small">admin@entreprise.com</h6>
                                    <p class="text-muted xsmall mb-0">Super Admin</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">15/01/2024<br>09:25:14</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">15/01/2024<br>12:45:32</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fi-check me-1"></i>Réussi
                            </span>
                        </td>
                        <td class="text-center">
                            <code class="small">192.168.1.105</code>
                        </td>
                        <td class="pe-4 text-center">
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">
                                Chrome 120
                            </span>
                        </td>
                    </tr>

                    <!-- Log 2 - Échoué -->
                    <tr>
                        <td class="ps-4 fw-semibold">2</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-danger bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="fi-user text-danger"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 small">user123@mail.com</h6>
                                    <p class="text-muted xsmall mb-0">Client</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">15/01/2024<br>14:12:05</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">-</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">
                                <i class="fi-x me-1"></i>Échoué
                            </span>
                        </td>
                        <td class="text-center">
                            <code class="small">203.0.113.45</code>
                        </td>
                        <td class="pe-4 text-center">
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                Firefox 121
                            </span>
                        </td>
                    </tr>

                    <!-- Log 3 - Réussi -->
                    <tr>
                        <td class="ps-4 fw-semibold">3</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-success bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="fi-user text-success"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 small">sophie.laurent@entreprise.com</h6>
                                    <p class="text-muted xsmall mb-0">Admin Produits</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">15/01/2024<br>08:30:22</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">15/01/2024<br>18:15:47</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fi-check me-1"></i>Réussi
                            </span>
                        </td>
                        <td class="text-center">
                            <code class="small">10.0.0.25</code>
                        </td>
                        <td class="pe-4 text-center">
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">
                                Safari 17
                            </span>
                        </td>
                    </tr>

                    <!-- Log 4 - Réussi -->
                    <tr>
                        <td class="ps-4 fw-semibold">4</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-warning bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="fi-user text-warning"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 small">jean.dupont@email.com</h6>
                                    <p class="text-muted xsmall mb-0">Client</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">14/01/2024<br>21:05:18</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">15/01/2024<br>00:30:45</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fi-check me-1"></i>Réussi
                            </span>
                        </td>
                        <td class="text-center">
                            <code class="small">198.51.100.22</code>
                        </td>
                        <td class="pe-4 text-center">
                            <span class="badge bg-purple bg-opacity-10 text-purple border border-purple border-opacity-25">
                                Edge 120
                            </span>
                        </td>
                    </tr>

                    <!-- Log 5 - Échoué -->
                    <tr>
                        <td class="ps-4 fw-semibold">5</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-secondary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="fi-user text-secondary"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 small">unknown@test.com</h6>
                                    <p class="text-muted xsmall mb-0">Tentative</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">14/01/2024<br>23:45:12</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">-</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">
                                <i class="fi-x me-1"></i>Échoué
                            </span>
                        </td>
                        <td class="text-center">
                            <code class="small">203.0.113.78</code>
                        </td>
                        <td class="pe-4 text-center">
                            <span class="badge bg-dark bg-opacity-10 text-dark border border-dark border-opacity-25">
                                Chrome Mobile
                            </span>
                        </td>
                    </tr>

                    <!-- Log 6 - Réussi -->
                    <tr>
                        <td class="ps-4 fw-semibold">6</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <div class="bg-info bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" 
                                     style="width: 40px; height: 40px;">
                                    <i class="fi-user text-info"></i>
                                </div>
                                <div>
                                    <h6 class="mb-0 small">marc.lefevre@entreprise.com</h6>
                                    <p class="text-muted xsmall mb-0">Admin Finance</p>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">15/01/2024<br>07:15:33</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-light text-dark">15/01/2024<br>19:45:21</span>
                        </td>
                        <td class="text-center">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fi-check me-1"></i>Réussi
                            </span>
                        </td>
                        <td class="text-center">
                            <code class="small">10.0.0.42</code>
                        </td>
                        <td class="pe-4 text-center">
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">
                                Chrome 121
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>

            <style>
                .xsmall {
                    font-size: 0.75rem;
                }
                
                .badge {
                    padding: 0.35em 0.65em;
                    font-weight: 500;
                    font-size: 0.85rem;
                }
                
                .badge.bg-light {
                    line-height: 1.2;
                    padding: 0.5em 0.75em;
                }
                
                code {
                    font-size: 0.85rem;
                    color: #6c757d;
                    background-color: #f8f9fa;
                    padding: 0.2em 0.4em;
                    border-radius: 0.25rem;
                }
                
                .bg-purple {
                    background-color: #6f42c1 !important;
                }
                
                .text-purple {
                    color: #6f42c1 !important;
                }
                
                .border-purple {
                    border-color: #6f42c1 !important;
                }
                
                .table td {
                    vertical-align: middle;
                }
            </style>
        </div>
    </div>
</div>
        <!-- ///////////////////////////// -->
        </div>
      </div>
    </main>


  <!-- footer de la page -->
  <?php include("includes/footer.php")?>
  <!-- footer de la page -->
  
</body>
</html>