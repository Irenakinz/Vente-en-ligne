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
 
            <div id="server-message-statuts" class="mb-4" style="display: none;">
                <div class="alert general alert-dismissible fade show" role="alert">
                    <span id="message-text-status"></span>
                    <button type="button" class="btn-close" onclick="generalHideMessage()"></button>
                </div>
            </div>

            <!-- ////////////////// -->
            <div class="card-body p-0 col-12 ">
                <div class="table-responsive">
          
                                
                <?php
                $responseCommandes = getAllCommandes(); // Votre fonction qui retourne les données du JSON
                if($responseCommandes["success"] && !empty($responseCommandes["data"])) {
                    $counter = 1;
                ?>
                <table class="table table-hover mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="ps-4" style="width: 20px;">#</th>
                            <th style="width:200px;">Produit</th>
                            <th style="width: 150px;">Client</th>
                            <th style="width: 180px;" class="text-center">Dates</th>
                            <th style="width: 120px;" class="text-center pe-4">Montant</th>
                            <th style="width:40px;" class="text-center pe-4">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($responseCommandes["data"] as $commande): 
                            // Déterminer le statut et les classes CSS
                            $isValidated = ($commande['etat'] == 1 || $commande['etat'] == 2);
                            $rowClass = $isValidated ? 'table-success table-active' : '';
                            $opacityClass = $isValidated ? 'opacity-75' : '';
                            
                            // Format des dates
                            $dateCommande = date('d/m/Y', strtotime($commande['date_commande']));
                            $dateLivraison = !empty($commande['date_livraison']) ? date('d/m/Y', strtotime($commande['date_livraison'])) : '';
                            
                            // Type de livraison
                            $typeLivraisonText = '';
                            $typeLivraisonClass = '';
                            $typeLivraisonIcon = '';
                            switch($commande['type_commande']) {
                                case '1':
                                    $typeLivraisonText = 'Retrait';
                                    $typeLivraisonClass = 'bg-warning bg-opacity-10 text-warning border border-warning border-opacity-25';
                                    $typeLivraisonIcon = 'fi-store';
                                    break;
                                case '2':
                                    $typeLivraisonText = 'Standard';
                                    $typeLivraisonClass = 'bg-info bg-opacity-10 text-info border border-info border-opacity-25';
                                    $typeLivraisonIcon = 'fi-truck';
                                    break;
                                case '3':
                                    $typeLivraisonText = 'Express';
                                    $typeLivraisonClass = 'bg-info bg-opacity-10 text-info border border-info border-opacity-25';
                                    $typeLivraisonIcon = 'fi-rocket';
                                    break;
                                default:
                                    $typeLivraisonText = 'Inconnu';
                                    $typeLivraisonClass = 'bg-secondary bg-opacity-10 text-secondary border border-secondary border-opacity-25';
                                    $typeLivraisonIcon = 'fi-help-circle';
                            }
                            
                            // Badge statut
                            $statutText = '';
                            $statutClass = '';
                            $statutIcon = '';
                            switch($commande['etat']) {
                                case 0:
                                    $statutText = 'En attente';
                                    $statutClass = 'bg-secondary';
                                    $statutIcon = 'fi-clock';
                                    break;
                                case 1:
                                    $statutText = 'Validée';
                                    $statutClass = 'bg-success';
                                    $statutIcon = 'fi-check-circle';
                                    break;
                                case 2:
                                    $statutText = 'Livrée';
                                    $statutClass = 'bg-primary';
                                    $statutIcon = 'fi-truck';
                                    break;
                                default:
                                    $statutText = 'Inconnu';
                                    $statutClass = 'bg-light text-dark';
                                    $statutIcon = 'fi-help-circle';
                            }
                            
                            // Image du produit
                            $produitImage = !empty($commande['image']) ? 
                                        BASE_URL . '/Vente-en-ligne/medias/' . $commande['image'] : 
                                        'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=100&h=100&fit=crop';
                            
                            // Image du client
                            $clientImage = !empty($commande['client_photo']) ? 
                                        BASE_URL . '/Vente-en-ligne/medias/' . $commande['client_photo'] : 
                                        'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=100&h=100&fit=crop';
                            
                            // Nom complet du client
                            $nomClient = trim($commande['client_prenom'] . ' ' . $commande['client_nom']);
                        ?>
                        <tr class="<?= $rowClass ?>">
                            <td class="ps-4 fw-semibold"><?= $counter++ ?></td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?= $produitImage ?>" 
                                        alt="<?= htmlspecialchars($commande['titre']) ?>" 
                                        class="rounded <?= $opacityClass ?>" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small"><?= htmlspecialchars($commande['titre']) ?></h6>
                                        <div class="d-flex align-items-center gap-1">
                                            <span class="badge bg-primary"><?= $commande['quantiteCommande'] ?></span>
                                            <span class="text-muted xsmall">unité<?= $commande['quantiteCommande'] > 1 ? 's' : '' ?></span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?= $clientImage ?>" 
                                        alt="<?= htmlspecialchars($nomClient) ?>" 
                                        class="rounded-circle <?= $opacityClass ?>" 
                                        style="width: 40px; height: 40px; object-fit: cover;">
                                    <div>
                                        <h6 class="mb-0 small"><?= htmlspecialchars($nomClient) ?></h6>
                                        <p class="text-muted xsmall mb-0"><?= htmlspecialchars($commande['client_email']) ?></p>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">
                                <div class="d-flex flex-column gap-1">
                                    <div> 
                                        <span class="badge bg-light text-dark"><?= $dateCommande ?></span>
                                    </div>
                                    <div> 
                                        <span class="badge <?= $statutClass ?>">
                                            <i class="<?= $statutIcon ?> me-1"></i><?= $statutText ?>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center pe-4">
                                <div class="d-flex flex-column gap-2">
                                
                                    
                                    <!-- Montant -->
                                    <div>
                                        <div class="fw-bold text-dark fs-6">
                                            <?= number_format($commande['couptotatal'], 0, ',', ' ') ?> Fb
                                        </div>
                                        <?php if($commande['nombre_produits'] > 1): ?>
                                        <small class="text-muted">
                                            <?= $commande['nombre_produits'] ?> produit<?= $commande['nombre_produits'] > 1 ? 's' : '' ?>
                                        </small>
                                        <?php endif; ?>
                                    </div>
                                    <!-- Livraison -->
                                    <div>
                                        <span class="badge <?= $typeLivraisonClass ?> d-inline-flex align-items-center gap-1">
                                            <i class="<?= $typeLivraisonIcon ?>"></i>
                                            <?= $typeLivraisonText ?>
                                        </span>
                                    </div>
                                </div>
                            </td>
                            <td class="pe-4">
                                <div class="d-flex justify-content-center">
                                    <?php if(!$isValidated): ?>
                                    <button class="btn btn-sm btn-success" 
                                            title="Valider la commande"
                                            onclick="validerCommande(<?= $commande['id'] ?>)" 
                                            id="submit_btn<?=$commande["id"]?>">
                                        <div class="dot-spinner spine-bouse d-none" id="loading-spinner<?=$commande["id"]?>">
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                        </div>
                                        <i class="fi-check me-1"></i><span id="submit-text<?=$commande["id"]?>">Valider</span>
                                    </button>
                                    <?php else: ?>
                                    <button class="btn btn-sm btn-outline-success" disabled title="Déjà validée">
                                        <i class="fi-check me-1"></i>Validée
                                    </button>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                <script>
                // Fonction pour valider une commande
                function validerCommande(commandeId) {
                    if (confirm('Êtes-vous sûr de vouloir valider cette commande ?')) {
                        fetch('<?= BASE_URL ?>/api/commande/valider/' + commandeId, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                location.reload();
                            } else {
                                alert('Erreur: ' + (data.message || 'Impossible de valider la commande'));
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Une erreur est survenue');
                        });
                    }
                }
                </script>

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
                        Aucune commande n'a été passée pour le moment.
                    </p>
                </div>
                <?php
                }
                ?>

                                

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

  <script>

    let url_active_desacive = "../../app/index.php?action=commande/valider";

    function validerCommande(id_commande) { 
        let submit_text = document.getElementById(`submit-text${id_commande}`);
        let loading_spinner = document.getElementById(`loading-spinner${id_commande}`);
        let submit_btn = document.getElementById(`submit_btn${id_commande}`);

        // Désactiver le bouton et afficher le spinner
        submit_btn.disabled = true;

        let originContent = submit_text.textContent;
        submit_text.textContent = "...";
        loading_spinner.classList.remove("d-none");
        
        // Préparation des données à envoyer
        let formData = new FormData();  
        formData.append("id",id_commande); 
 
        // Options pour la requête fetch
        const options = {  
            method: 'POST',  
            body: formData  
            // Si votre API attend du JSON, utilisez ceci :
            // headers: { 'Content-Type': 'application/json' },
            // body: JSON.stringify({ email: email, password: password }) 
        };
        
        // Envoi de la requête AJAX
        fetch(url_active_desacive, options)
        .then(response => {
        // Vérifier le statut HTTP
        if (!response.ok) {
            throw new Error(`Erreur HTTP: ${response.status}`);
        }
        return response.json();
        })
        .then(data => {
        // Traitement de la réponse
        console.log("Réponse du serveur:", data);
        
        if (data.success) {
        
            setTimeout(()=>{ 
                window.location.href = window.location.href;
            },3000);

            // Connexion réussie
            generalShowMessage(data.message, type = 'success',
            messageDiv="server-message-statuts",
            messageText="message-text-status",
            alertDiv=".alert.general") 
 
            loading_spinner.classList.add("d-none");
            submit_text.textContent = originContent;
            submit_btn.disabled = false; 
        } 
        else {
            // Erreur de connexion 
            generalShowMessage(data.message || "Une erreur est survenu", type = 'error',
            messageDiv="server-message-statuts",
            messageText="message-text-status",
            alertDiv=".alert.general")

            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = originContent;
            loading_spinner.classList.add("d-none");
        }
        })
        .catch(error => {
            // Erreur réseau ou autre
            console.error("Erreur:", error); 
            generalShowMessage("Erreur de connexion au serveur. Veuillez réessayer", type = 'error',
            messageDiv="server-message-statuts",
            messageText="message-text-status",
            alertDiv=".alert.general")

            // Réactiver le bouton
            submit_btn.disabled = false;
            submit_text.textContent = originContent;
            loading_spinner.classList.add("d-none");
        }); 
    
    }

  </script>
  
</body>
</html>