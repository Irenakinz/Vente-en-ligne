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
                                <th style="width:">Adresse</th>
                                <th style="width: 100px;" class="text-center">Genre</th> 
                            </tr>
                        </thead>
                        <tbody>
                   <!-- ////////////////////////////////////// -->
                    <?php
                        $responseClient = listAllClient();
                        if($responseClient["success"] && !empty($responseClient["data"])) {
                            $counter = 1;
                            foreach($responseClient["data"] as $client):
                                // Déterminer le statut et les classes CSS
                                $isActive = ($client['statut'] == 1);
                                $rowClass = $isActive ? '' : 'table-secondary opacity-75';
                                $textClass = $isActive ? '' : 'text-muted';
                                $imgClass = $isActive ? '' : 'opacity-50';
                                
                                // Format du nom complet
                                $nomComplet = trim($client['prenom'] . ' ' . $client['nom']);
                                
                                // Format du genre
                                $genreBadgeClass = '';
                                $genreBadgeIcon = 'fi-user';
                                $genreBadgeText = 'Non spécifié';
                                
                                if ($client['genre'] == 'homme' || $client['genre'] == 'Homme') {
                                    $genreBadgeClass = 'bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25';
                                    $genreBadgeIcon = 'fi-male';
                                    $genreBadgeText = 'Homme';
                                } elseif ($client['genre'] == 'femme' || $client['genre'] == 'Femme') {
                                    $genreBadgeClass = 'bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25';
                                    $genreBadgeIcon = 'fi-female';
                                    $genreBadgeText = 'Femme';
                                } elseif (!empty($client['genre'])) {
                                    $genreBadgeClass = 'bg-info bg-opacity-10 text-info border border-info border-opacity-25';
                                    $genreBadgeText = htmlspecialchars($client['genre']);
                                }
                                
                                // Photo du client (image par défaut si non définie)
                                $photoUrl = !empty($client['photo']) ? 
                                        (BASE_URL . '/Vente-en-ligne/medias/' . $client['photo']) : 
                                        'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop';
                                
                                // Date formatée
                                $dateInscription = !empty($client['date_save']) ? date('d/m/Y', strtotime($client['date_save'])) : 'Date inconnue';
                        ?>
                            <!-- Client -->
                            <tr class="<?= $rowClass ?>">
                                <td class="ps-4 fw-semibold <?= $textClass ?>"><?= $counter++ ?></td>
                                <td>
                                    <img src="<?= $photoUrl ?>" 
                                        alt="<?= htmlspecialchars($nomComplet) ?>" 
                                        class="rounded-circle <?= $imgClass ?>" 
                                        style="width: 50px; height: 50px; object-fit: cover;">
                                </td>
                                <td>
                                    <h6 class="mb-1 <?= $textClass ?>"><?= htmlspecialchars($nomComplet) ?></h6>
                                    <p class="small mb-0 <?= $textClass ?>">
                                        <i class="fi-mail opacity-75 me-1"></i><?= htmlspecialchars($client['email']) ?>
                                    </p>
                                </td>
                                
                                <td class="pe-4 <?= $textClass ?>">
                                    <!-- Adresse -->
                                    <?php if(!empty($client['adresse'])): ?>
                                    <p class="small mb-2">
                                        <i class="fi-map-pin opacity-75 me-1"></i>
                                        <?= nl2br(htmlspecialchars($client['adresse'])) ?>
                                    </p>
                                    <?php else: ?>
                                    <p class="small mb-2 text-muted">
                                        <i class="fi-map-pin opacity-75 me-1"></i>
                                        Aucune adresse
                                    </p>
                                    <?php endif; ?>
                                    
                                    <!-- Date d'inscription -->
                                    <p class="small mb-0">
                                        <i class="fi-calendar opacity-75 me-1"></i>
                                        Inscrit le <?= $dateInscription ?>
                                    </p>
                                </td>
                                <td class="text-center">
                                    <!-- Badge genre -->
                                    <span class="badge <?= $genreBadgeClass ?> mb-2">
                                        <i class="<?= $genreBadgeIcon ?> me-1"></i><?= $genreBadgeText ?>
                                    </span>
                                    
                                    <!-- Badge statut -->
                                    <?php if($isActive): ?>
                                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                        <i class="fi-check-circle me-1"></i>Actif
                                    </span>
                                    <?php else: ?>
                                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25">
                                        <i class="fi-x-circle me-1"></i>Inactif
                                    </span>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php 
                            endforeach; 
                        } else {
                            // Aucun client trouvé
                        ?>
                            <tr>
                                <td colspan="5" class="text-center py-5">
                                    <div class="display-1 text-muted mb-4">
                                        <i class="fi-users"></i>
                                    </div>
                                    <h4 class="text-muted mb-3">Aucun client trouvé</h4>
                                    <p class="text-muted mb-4">
                                        Aucun client n'est inscrit pour le moment.
                                    </p>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                   <!-- //////////////////////////////////////////// -->
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