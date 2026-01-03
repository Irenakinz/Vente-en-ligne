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

                <!-- /////////////////////////////// -->
<?php
$dashboardStats = getDashboardStats();
if($dashboardStats["success"]) {
    $stats = $dashboardStats["data"];
?>
<div class="row g-4">
    <!-- Clients enregistrés -->
    <div class="col-md-6 col-xl-6">
        <div class="card border-0 h-100 bg-primary bg-opacity-5">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle p-3 me-3 bg-primary bg-opacity-10">
                    <i class="fi-users fs-3 text-primary"></i>
                </div>
                <div>
                    <h3 class="h6 text-muted mb-1">Clients enregistrés</h3>
                    <div class="h2 mb-0 fw-bold text-primary"><?= number_format($stats['clients']['total'], 0, ',', ' ') ?></div>
                    <p class="fs-sm text-muted mb-0">
                        <?php if($stats['clients']['evolution'] > 0): ?>
                            <span class="text-success">
                                <i class="fi-arrow-up fs-xs"></i> +<?= $stats['clients']['evolution'] ?>%
                            </span>
                        <?php elseif($stats['clients']['evolution'] < 0): ?>
                            <span class="text-danger">
                                <i class="fi-arrow-down fs-xs"></i> <?= $stats['clients']['evolution'] ?>%
                            </span>
                        <?php else: ?>
                            <span class="text-muted">Stable</span>
                        <?php endif; ?>
                        ce mois
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Produits disponibles -->
    <div class="col-md-6 col-xl-6">
        <div class="card border-0 h-100 bg-success bg-opacity-5">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle p-3 me-3 bg-success bg-opacity-10">
                    <i class="fi-package fs-3 text-success"></i>
                </div>
                <div>
                    <h3 class="h6 text-muted mb-1">Produits disponibles</h3>
                    <div class="h2 mb-0 fw-bold text-success"><?= number_format($stats['produits']['disponibles'], 0, ',', ' ') ?></div>
                    <p class="fs-sm text-muted mb-0">
                        <?= $stats['produits']['rupture'] ?> en rupture
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Commandes en attente -->
    <div class="col-md-6 col-xl-6">
        <div class="card border-0 h-100 bg-warning bg-opacity-5">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle p-3 me-3 bg-warning bg-opacity-10">
                    <i class="fi-clock fs-3 text-warning"></i>
                </div>
                <div>
                    <h3 class="h6 text-muted mb-1">Commandes en attente</h3>
                    <div class="h2 mb-0 fw-bold text-warning"><?= number_format($stats['commandes_attente'], 0, ',', ' ') ?></div>
                    <p class="fs-sm text-muted mb-0">À valider</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Commandes validées -->
    <div class="col-md-6 col-xl-6">
        <div class="card border-0 h-100 bg-success bg-opacity-5">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle p-3 me-3 bg-success bg-opacity-10">
                    <i class="fi-check-circle fs-3 text-success"></i>
                </div>
                <div>
                    <h3 class="h6 text-muted mb-1">Commandes validées</h3>
                    <div class="h2 mb-0 fw-bold text-success"><?= number_format($stats['commandes_validees_mois'], 0, ',', ' ') ?></div>
                    <p class="fs-sm text-muted mb-0">Ce mois-ci</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Administrateurs -->
    <div class="col-md-6 col-xl-6">
        <div class="card border-0 h-100 bg-info bg-opacity-5">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle p-3 me-3 bg-info bg-opacity-10">
                    <i class="fi-shield fs-3 text-info"></i>
                </div>
                <div>
                    <h3 class="h6 text-muted mb-1">Total Administrateurs</h3>
                    <div class="h2 mb-0 fw-bold text-info"><?= $stats['administrateurs']['total'] ?></div>
                    <p class="fs-sm text-muted mb-0">
                        Dont <?= $stats['administrateurs']['actifs'] ?> actif<?= $stats['administrateurs']['actifs'] > 1 ? 's' : '' ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Total Commandes -->
    <div class="col-md-6 col-xl-6">
        <div class="card border-0 h-100" style="background-color: rgba(111, 66, 193, 0.05);">
            <div class="card-body d-flex align-items-center">
                <div class="rounded-circle p-3 me-3" style="background-color: rgba(111, 66, 193, 0.1);">
                    <i class="fi-shopping-bag fs-3" style="color: #6f42c1;"></i>
                </div>
                <div>
                    <h3 class="h6 text-muted mb-1">Total Commandes</h3>
                    <div class="h2 mb-0 fw-bold" style="color: #6f42c1;">
                        <?= isset($stats['total_commandes']) ? number_format($stats['total_commandes'], 0, ',', ' ') : '0' ?>
                    </div>
                    <p class="fs-sm text-muted mb-0">
                        Toutes commandes confondues
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
} else {
    // En cas d'erreur
?>
<div class="alert alert-warning">
    <div class="d-flex align-items-center">
        <div class="rounded-circle p-2 me-3 bg-warning bg-opacity-10">
            <i class="fi-alert-triangle text-warning"></i>
        </div>
        <div>
            <h5 class="mb-1">Statistiques non disponibles</h5>
            <p class="mb-0">Les données du tableau de bord ne sont pas disponibles pour le moment.</p>
        </div>
    </div>
</div>
<?php
}
?>

<!-- CSS pour garantir la visibilité des icônes -->
<style>
/* Icônes toujours visibles */
.fi-users, .fi-package, .fi-clock, .fi-check-circle, .fi-shield, .fi-shopping-bag,
.fi-arrow-up, .fi-arrow-down, .fi-alert-triangle {
    color: inherit !important;
    fill: currentColor !important;
}

/* Ajustements pour le mode sombre */
[data-bs-theme="dark"] .bg-primary.bg-opacity-5 {
    background-color: rgba(var(--bs-primary-rgb), 0.1) !important;
}
[data-bs-theme="dark"] .bg-primary.bg-opacity-10 {
    background-color: rgba(var(--bs-primary-rgb), 0.2) !important;
}

[data-bs-theme="dark"] .bg-success.bg-opacity-5 {
    background-color: rgba(var(--bs-success-rgb), 0.1) !important;
}
[data-bs-theme="dark"] .bg-success.bg-opacity-10 {
    background-color: rgba(var(--bs-success-rgb), 0.2) !important;
}

[data-bs-theme="dark"] .bg-warning.bg-opacity-5 {
    background-color: rgba(var(--bs-warning-rgb), 0.1) !important;
}
[data-bs-theme="dark"] .bg-warning.bg-opacity-10 {
    background-color: rgba(var(--bs-warning-rgb), 0.2) !important;
}

[data-bs-theme="dark"] .bg-info.bg-opacity-5 {
    background-color: rgba(var(--bs-info-rgb), 0.1) !important;
}
[data-bs-theme="dark"] .bg-info.bg-opacity-10 {
    background-color: rgba(var(--bs-info-rgb), 0.2) !important;
}

/* Pour la couleur purple personnalisée */
[data-bs-theme="dark"] .card.border-0.h-100[style*="background-color: rgba(111, 66, 193, 0.05)"] {
    background-color: rgba(111, 66, 193, 0.1) !important;
}
[data-bs-theme="dark"] .rounded-circle.p-3.me-3[style*="background-color: rgba(111, 66, 193, 0.1)"] {
    background-color: rgba(111, 66, 193, 0.2) !important;
}
</style>
                <!-- /////////////////////////////// -->
               
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