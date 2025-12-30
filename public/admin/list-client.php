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
                    <h2 class="mb-0">Liste des clients</h2> 
                </div>
                </div>
    

                <!-- ////////////////// -->
                <div class="card-body p-0 col-12 ">
                    <div class="table-responsive">
                        
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="ps-4" style="width: 60px;">#</th>
                                <th style="width: 80px;">Photo</th>
                                <th>Informations</th>
                                <th style="width: 180px;">Adresse</th>
                                <th style="width: 100px;" class="text-center">Genre</th>
                                <th style="width: 180px;" class="text-center pe-4">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Client 1 - Actif -->
                            <tr>
                                <td class="ps-4 fw-semibold">1</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop" 
                                        alt="Jean Dupont" 
                                        class="rounded-circle" 
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1">Jean Dupont</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-mail opacity-75 me-1"></i>jean.dupont@email.com
                                    </p>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-phone opacity-75 me-1"></i>+33 6 12 34 56 78
                                    </p>
                                </td>
                                <td>
                                    <p class="small mb-0">15 Rue de la République<br>75001 Paris, France</p>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                        <i class="fi-user me-1"></i>Homme
                                    </span>
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-info" title="Voir détails">
                                            <i class="fi-eye me-1"></i>Détails
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Désactiver le compte">
                                            <i class="fi-power me-1"></i>Désactiver
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Client 2 - Désactivé -->
                            <tr class="table-secondary opacity-75">
                                <td class="ps-4 fw-semibold">2</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=100&h=100&fit=crop" 
                                        alt="Marie Leroy" 
                                        class="rounded-circle opacity-50" 
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1 text-muted">Marie Leroy</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-mail opacity-75 me-1"></i>marie.leroy@email.com
                                    </p>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-phone opacity-75 me-1"></i>+33 6 23 45 67 89
                                    </p>
                                </td>
                                <td>
                                    <p class="small mb-0 text-muted">8 Avenue des Champs-Élysées<br>75008 Paris, France</p>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-secondary bg-opacity-25 text-secondary">
                                        <i class="fi-user me-1"></i>Femme
                                    </span>
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-secondary" title="Voir détails">
                                            <i class="fi-eye me-1"></i>Détails
                                        </button>
                                        <button class="btn btn-sm btn-success" title="Activer le compte">
                                            <i class="fi-check me-1"></i>Activer
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Client 3 - Actif -->
                            <tr>
                                <td class="ps-4 fw-semibold">3</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" 
                                        alt="Thomas Martin" 
                                        class="rounded-circle" 
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1">Thomas Martin</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-mail opacity-75 me-1"></i>thomas.martin@email.com
                                    </p>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-phone opacity-75 me-1"></i>+33 6 34 56 78 90
                                    </p>
                                </td>
                                <td>
                                    <p class="small mb-0">22 Rue du Commerce<br>69002 Lyon, France</p>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                        <i class="fi-user me-1"></i>Homme
                                    </span>
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-info" title="Voir détails">
                                            <i class="fi-eye me-1"></i>Détails
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Désactiver le compte">
                                            <i class="fi-power me-1"></i>Désactiver
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Client 4 - Actif -->
                            <tr>
                                <td class="ps-4 fw-semibold">4</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=100&h=100&fit=crop" 
                                        alt="Sophie Petit" 
                                        class="rounded-circle" 
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1">Sophie Petit</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-mail opacity-75 me-1"></i>sophie.petit@email.com
                                    </p>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-phone opacity-75 me-1"></i>+33 6 45 67 89 01
                                    </p>
                                </td>
                                <td>
                                    <p class="small mb-0">5 Place Bellecour<br>69002 Lyon, France</p>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                        <i class="fi-user me-1"></i>Femme
                                    </span>
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-info" title="Voir détails">
                                            <i class="fi-eye me-1"></i>Détails
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Désactiver le compte">
                                            <i class="fi-power me-1"></i>Désactiver
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- Client 5 - Actif -->
                            <tr>
                                <td class="ps-4 fw-semibold">5</td>
                                <td>
                                    <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=100&h=100&fit=crop" 
                                        alt="Pierre Dubois" 
                                        class="rounded-circle" 
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1">Pierre Dubois</h6>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-mail opacity-75 me-1"></i>pierre.dubois@email.com
                                    </p>
                                    <p class="text-muted small mb-0">
                                        <i class="fi-phone opacity-75 me-1"></i>+33 6 56 78 90 12
                                    </p>
                                </td>
                                <td>
                                    <p class="small mb-0">18 Cours Mirabeau<br>13100 Aix-en-Provence, France</p>
                                </td>
                                <td class="text-center">
                                    <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                        <i class="fi-user me-1"></i>Homme
                                    </span>
                                </td>
                                <td class="pe-4">
                                    <div class="d-flex justify-content-center gap-2">
                                        <button class="btn btn-sm btn-outline-info" title="Voir détails">
                                            <i class="fi-eye me-1"></i>Détails
                                        </button>
                                        <button class="btn btn-sm btn-outline-danger" title="Désactiver le compte">
                                            <i class="fi-power me-1"></i>Désactiver
                                        </button>
                                    </div>
                                </td>
                            </tr>
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