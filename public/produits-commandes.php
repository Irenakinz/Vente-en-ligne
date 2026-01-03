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
       <!-- //////////////////////// -->
      <section class="container "> 
        <div class="row bg-body rounded p-3 pb-0 px-lg-5">
          <div class="col-lg-9 d-flex flex-column gap-4 py-sm-2 py-lg-3">
         
            <div class="d-md-flex justify-content-between pb-lg-1 mb-md-2">
              <div class="d-flex align-items-start align-items-md-center mb-3 mb-md-0">
                <div class="ratio ratio-1x1 bg-body-tertiary border rounded-circle overflow-hidden" style="width: 124px">
                  <img src="<?= !empty($_SESSION['client']["photo"]) ? "../medias/".$_SESSION['client']["photo"] : "avatar.jpg"?>" alt="Avatar">
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
       <div class="border-0 mb-4">
    <div class="d-flex align-items-start justify-content-center">
        <i class="fi-shopping-bag fs-lg text-primary me-3 mt-1"></i>
        <div> 
            <h2 class="mb-3">Mes commandes Salama</h2>
            <p class="mb-0 text-center mx-auto">
                <strong>Suivez vos commandes :</strong> 
                <i class="fi-clock mx-1 text-warning"></i> Statut des commandes 
                <i class="fi-circle mx-1"></i> 
                <i class="fi-box mx-1 text-success"></i> Produits commandés 
                <i class="fi-circle mx-1"></i> 
                <i class="fi-truck mx-1 text-info"></i> Suivi livraison
            </p>
        </div>
    </div>
</div>
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

      <!-- //////////////////////////////////// -->
<?php
$responseStat = getStatistiqueClent($_CLIENT_ID);
if($responseStat["success"]) {
    $statData = $responseStat["data"];
?>
    <!-- Statistiques de commandes -->
    <div class="row g-3 mb-4">
        <!-- Produits commandés -->
        <div class="col-sm-6 col-md-3">
            <div class="card bg-primary-subtle border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-primary bg-opacity-10 p-2 me-3">
                            <i class="fi-package text-primary fs-5"></i>
                        </div>
                        <h3 class="fs-sm fw-normal mb-0">Produits commandés</h3>
                    </div>
                    <div class="h3 mb-0"><?= $statData['total_produits_commandes'] ?></div>
                    <small class="text-muted">Articles au total</small>
                </div> 
            </div>
        </div>
        
        <!-- Commandes totales -->
        <div class="col-sm-6 col-md-3">
            <div class="card bg-secondary-subtle border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-secondary bg-opacity-10 p-2 me-3">
                            <i class="fi-shopping-cart text-secondary fs-5"></i>
                        </div>
                        <h3 class="fs-sm fw-normal mb-0">Commandes totales</h3>
                    </div>
                    <div class="h3 mb-0"><?= $statData['total_commandes'] ?></div>
                    <small class="text-muted">Dépenses totales: <?= number_format($statData['total_depense_tout'], 0, ',', ' ') ?> Fb</small>
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
                    <div class="h3 mb-0"><?= $statData['commandes_livrees'] ?></div>
                    <small class="text-muted">
                        <?php if($statData['total_commandes'] > 0): ?>
                            <?= round(($statData['commandes_livrees'] / $statData['total_commandes']) * 100) ?>% des commandes
                        <?php else: ?>
                            Aucune commande
                        <?php endif; ?>
                    </small>
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
                    <div class="h3 mb-0"><?= $statData['commandes_en_cours'] ?></div>
                    <small class="text-muted">
                        <?php if($statData['total_commandes'] > 0): ?>
                            <?= round(($statData['commandes_en_cours'] / $statData['total_commandes']) * 100) ?>% en attente
                        <?php endif; ?>
                    </small>
                </div> 
            </div>
        </div>
    </div>

    <!-- Deuxième ligne de statistiques -->
    <div class="row g-3 mb-4">
        <!-- Total dépensé (validé) -->
        <div class="col-sm-6 col-md-4">
            <div class="card bg-info-subtle border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-info bg-opacity-10 p-2 me-3">
                            <i class="fi-dollar text-info fs-5"></i>
                        </div>
                        <h3 class="fs-sm fw-normal mb-0">Total dépensé</h3>
                    </div>
                    <div class="h3 mb-0"><?= number_format($statData['total_depense_valide'], 0, ',', ' ') ?> Fb</div>
                    <small class="text-muted">Commandes validées seulement</small>
                </div>
            </div>
        </div>
        
        <!-- Panier moyen -->
        <div class="col-sm-6 col-md-4">
            <div class="card bg-purple-subtle border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-purple bg-opacity-10 p-2 me-3">
                            <i class="fi-bar-chart text-purple fs-5"></i>
                        </div>
                        <h3 class="fs-sm fw-normal mb-0">Panier moyen</h3>
                    </div>
                    <div class="h3 mb-0">
                        <?php 
                        if($statData['total_commandes'] > 0) {
                            echo number_format($statData['total_depense_tout'] / $statData['total_commandes'], 0, ',', ' ');
                        } else {
                            echo '0';
                        }
                        ?> Fb
                    </div>
                    <small class="text-muted">Par commande</small>
                </div>
            </div>
        </div>
        
        <!-- Produits moyen par commande -->
        <div class="col-sm-6 col-md-4">
            <div class="card bg-teal-subtle border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <div class="rounded-circle bg-teal bg-opacity-10 p-2 me-3">
                            <i class="fi-box text-teal fs-5"></i>
                        </div>
                        <h3 class="fs-sm fw-normal mb-0">Moy. articles/commande</h3>
                    </div>
                    <div class="h3 mb-0">
                        <?php 
                        if($statData['total_commandes'] > 0) {
                            echo round($statData['total_produits_commandes'] / $statData['total_commandes'], 1);
                        } else {
                            echo '0';
                        }
                        ?>
                    </div>
                    <small class="text-muted">Articles par commande</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Légende des statuts -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 bg-light">
                <div class="card-body p-3">
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-primary bg-opacity-10 text-primary border border-primary border-opacity-25">
                                <i class="fi-shopping-cart me-1"></i>
                                Total: <?= $statData['total_commandes'] ?>
                            </span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">
                                <i class="fi-check-circle me-1"></i>
                                Livrées: <?= $statData['commandes_livrees'] ?>
                            </span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25">
                                <i class="fi-clock me-1"></i>
                                En cours: <?= $statData['commandes_en_cours'] ?>
                            </span>
                        </div>
                        <div class="d-flex align-items-center gap-2">
                            <span class="badge bg-info bg-opacity-10 text-info border border-info border-opacity-25">
                                <i class="fi-dollar me-1"></i>
                                Dépensé: <?= number_format($statData['total_depense_valide'], 0, ',', ' ') ?> Fb
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
} else {
    // Aucune statistique disponible
?>
    <div class="alert alert-info border-info">
        <div class="d-flex align-items-center">
            <i class="fi-info-circle me-3 fs-4"></i>
            <div>
                <h5 class="mb-1">Aucune statistique disponible</h5>
                <p class="mb-0">Vous n'avez pas encore passé de commande.</p>
            </div>
        </div>
    </div>
<?php
}
?>
      <!-- //////////////////////////////////////// -->
      

        <!-- Contenu principal -->   
        <!-- Grille de commandes (2 par ligne) -->
        <!-- ///////////////////////////////// -->
       <?php
          $responseCommandes = getAllCommandesCtrl($_CLIENT_ID);
          if($responseCommandes["success"] && !empty($responseCommandes["data"])) {
          ?>
          <div class="row row-cols-1 row-cols-lg-3 g-4"> 
              <?php foreach($responseCommandes["data"] as $commande): ?>
              <!-- Commande -->
              <div class="col">
                  <article class="card h-100 border hover-effect-scale">
                      <div class="card-header bg-transparent py-3">
                          <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center">
                              <div class="mb-2 mb-md-0">
                                  <div class="d-flex align-items-center flex-wrap gap-2">
                                      <!-- Statut de la commande -->
                                      <?php
                                      $badgeClass = '';
                                      $badgeText = '';
                                      switch($commande['etat']) {
                                          case 0:
                                              $badgeClass = 'bg-warning bg-opacity-10 text-warning';
                                              $badgeText = 'En attente';
                                              break;
                                          case 2:
                                              $badgeClass = 'bg-info bg-opacity-10 text-info';
                                              $badgeText = 'Validée';
                                              break;
                                          case 1:
                                              $badgeClass = 'bg-success bg-opacity-10 text-success';
                                              $badgeText = 'Livrée';
                                              break;
                                          default:
                                              $badgeClass = 'bg-secondary bg-opacity-10 text-secondary';
                                              $badgeText = 'Inconnu';
                                      }
                                      ?>
                                      <span class="badge <?= $badgeClass ?> border border-opacity-25">
                                          <?= $badgeText ?>
                                      </span>
                                      <span class="fw-semibold">#CMD-<?= str_pad($commande['id'], 4, '0', STR_PAD_LEFT) ?></span>
                                  </div>
                                  <div class="fs-sm text-body-secondary mt-1">
                                      <?= date('d/m/Y', strtotime($commande['date_commande'])) ?> 
                                      <?php if($commande['date_livraison']): ?>
                                          • Livrée le <?= date('d/m/Y', strtotime($commande['date_livraison'])) ?>
                                      <?php endif; ?>
                                  </div>
                              </div>
                              <div class="text-md-end">
                                  <div class="h5 mb-1"><?= number_format($commande['couptotatal'], 0, ',', ' ') ?> Fb</div>
                                  <div class="fs-sm text-body-secondary"><?= $commande['nombre_produits'] ?> article(s)</div>
                              </div>
                          </div>
                      </div>
                      <div class="card-body p-4">
                          <!-- Mode de livraison -->
                          <div class="mb-3 pb-3 border-bottom">
                              <div class="d-flex align-items-center gap-2 fs-sm">
                                  <i class="fi-truck text-body-secondary"></i>
                                  <?php
                                  $typeLivraison = '';
                                  switch($commande['type_commande']) {
                                      case '1':
                                          $typeLivraison = 'Retrait en magasin';
                                          break;
                                      case '2':
                                          $typeLivraison = 'Livraison standard';
                                          break;
                                      case '3':
                                          $typeLivraison = 'Livraison express';
                                          break;
                                      default:
                                          $typeLivraison = 'Non spécifié';
                                  }
                                  ?>
                                  <span class="fw-semibold"><?= $typeLivraison ?></span>
                                  <?php if($commande['etat'] == 1 && $commande['type_commande'] == '3'): ?>
                                      <span class="text-body-secondary ms-2">• Livrée avant 12h</span>
                                  <?php endif; ?>
                              </div>
                          </div>
                          
                          <!-- Produits de la commande -->
                          <div class="row g-3 mb-4">
                              <?php foreach($commande['produits_detaille'] as $produit): ?>
                              <div class="col-12">
                                  <div class="d-flex gap-2 align-items-start">
                                      <div class="flex-shrink-0 position-relative">
                                          <img src="<?= BASE_URL ?>/Vente-en-ligne/medias/<?= $produit['image'] ?>" 
                                              class="rounded" width="50" height="50" 
                                              alt="<?= htmlspecialchars($produit['titre']) ?>"
                                              style="object-fit: cover;">
                                          <div class="position-absolute top-0 end-0 translate-middle badge bg-primary rounded-circle p-1" 
                                              style="width: 20px; height: 20px; font-size: 10px;">
                                              <?= $produit['quantite'] ?>
                                          </div>
                                      </div>
                                      <div class="flex-grow-1">
                                          <h6 class="fs-sm mb-1"><?= htmlspecialchars($produit['titre']) ?></h6>
                                          <div class="d-flex justify-content-between align-items-center">
                                              <span class="text-body-secondary fs-xs">
                                                  Commande #<?= $commande['id'] ?>
                                              </span>
                                              <span class="fw-semibold fs-sm">
                                                  <?= number_format($produit['sous_total'], 0, ',', ' ') ?> Fb
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <?php endforeach; ?>
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
              <?php endforeach; ?>
          </div>

          <?php
          } else {
              // Aucune commande trouvée
          ?>
          <div class="text-center py-5">
              <div class="display-1 text-muted mb-4">
                  <i class="fi-shopping-bag"></i>
              </div>
              <h4 class="text-muted mb-3">Aucune commande trouvée</h4>
              <p class="text-muted mb-4">
                  Vous n'avez pas encore passé de commande.
              </p>
              <a href="<?= BASE_URL ?>/Vente-en-ligne/nos-produits.php" class="btn btn-primary">
                  <i class="fi-arrow-right me-2"></i>
                  Parcourir le catalogue
              </a>
          </div>
          <?php
          }
          ?>
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