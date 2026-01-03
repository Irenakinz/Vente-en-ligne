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

      <div class="container pt-1 pb-5 mb-xxl-3"> 
        
        <!-- En-tête informatif pour la page panier -->
        <div class="border-0 mb-4">
          <div class="d-flex align-items-start justify-content-center">
            <i class="fi-info-circle fs-lg text-info me-3 mt-1"></i>
           <div> 
                <h2 class="mb-3">Mon panier Salama</h2>
                <p class="mb-0 text-center mx-auto">
                    <strong>Gérez votre panier :</strong> 
                    <i class="fi-minus mx-1"></i> Modifiez les quantités 
                    <i class="fi-circle mx-1"></i> 
                    <i class="fi-trash mx-1 text-danger"></i> Retirez des articles 
                    <i class="fi-circle mx-1"></i> 
                    <i class="fi-truck mx-1"></i> Choisissez votre livraison
                </p>
            </div>
          </div>
        </div>
        <!-- Filter sidebar + Listings list view -->
        <div class="row pt-md-2 pt-lg-3 pb-2 pb-sm-3 pb-md-4 pb-lg-5">  


          <!-- Listings list view -->
          <div class="col-lg-9 mx-auto"> 
            <?php
                $ResponsePanier = getAllPaniers($_CLIENT_ID);
                if($ResponsePanier["success"]) {
            ?>
            <!-- Grid of items -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 row-cols-xl-3 g-4 g-sm-3 g-lg-4">
            <?php
             
                  $produitEnPanier = $ResponsePanier["data"]; 
                  foreach($produitEnPanier["panier"] as $produit) {
            ?>
              <!-- Produit 1 dans le panier . -->
              <div class="col">
                <article class="card h-100 hover-effect-scale bg-body-tertiary border-0">
                    <div class="card-img-top position-relative overflow-hidden">
                        <div class="d-flex flex-column gap-2 align-items-start position-absolute top-0 start-0 z-1 pt-1 ps-1 mt-2 ms-2">
                            <span class="badge text-bg-info d-inline-flex align-items-center fs-xxs py-1">
                                En stock
                                <i class="fi-box ms-1 fs-sm"></i>
                            </span> 
                        </div>
                        <div class="ratio hover-effect-target bg-body-secondary" style="height: 180px;">
                            <img src="<?php echo BASE_URL; ?>/Vente-en-ligne/medias/<?=$produit["image"]?>" 
                                alt="<?= htmlspecialchars($produit["titre"]) ?>" 
                                class="w-100 h-100 object-fit-cover transition-transform"
                                style="transition: transform 0.3s ease;">
                        </div>
                    </div>
                    <div class="card-body pb-2">
                        <div class="d-flex align-items-center justify-content-between mb-1">
                            <div class="fs-xxs text-body-secondary"><?=$produit["categorie"]?></div>
                            <div class="d-flex gap-1">
                                <button type="button" 
                                        class="btn btn-outline-danger d-flex align-items-center gap-1 p-1"
                                        onclick="retirerDuPanier(<?=$produit['id']?>)"
                                        id="btn-delete-pannier-<?=$produit['id']?>">
                                    <i class="fi-trash fs-sm"></i>
                                    <span class="d-none d-sm-inline">Retirer</span>
                                    <div class="dot-spinner d-none" id="loading-spinner-delete-panier-<?=$produit['id']?>">
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                    </div>
                                </button>
                            </div>
                        </div> 
                        <h3 class="h6 mb-1 fs-sm"><?=$produit["titre"]?></h3> 
                        <div class="h6 mb-2 fs-sm"><?=$produit["prix_unitaire"]?>Fb</div> 
                        
                        <div class="mt-2 border-top pt-2"> 
                            <!-- Section modification quantité -->
                            <div class="mb-2">
                                <!-- Sélecteur de quantité compact -->
                                <div class="d-flex align-items-center justify-content-between bg-light rounded-pill border shadow-sm" 
                                    style="background: linear-gradient(to right, #f8f9fa, #e9ecef);">
                                    <!-- Bouton diminuer -->
                                    <button type="button" 
                                            class="btn btn-outline-secondary border-0 rounded-start-pill px-2 py-1"
                                            onclick="updatePannier(<?=$produit['id']?>, <?=$produit['produit_id']?>, <?=(int)($produit['quantite'] - 1)?>)"
                                            aria-label="Diminuer quantité"
                                            <?= $produit["quantite"] <= 1 ? '' : '' ?>
                                            style="min-width: 35px;" 
                                            id="btn-pannier-<?=(int)($produit['quantite'] - 1)?>">
                                        <i class="fi-minus fs-sm"></i>
                                         <div class="dot-spinner d-none" id="loading-spinner-panier-<?=(int)($produit['quantite'] - 1)?>">
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                        </div>
                                    </button>
                                    
                                    <!-- Affichage quantité -->
                                    <div class="px-3 text-center">
                                        <div class="fw-bold text-dark"><?= $produit["quantite"] ?></div>
                                        <div class="text-muted small">Quantité</div>
                                    </div>
                                    
                                    <!-- Bouton augmenter -->
                                    <button type="button" 
                                            class="btn btn-outline-secondary border-0 rounded-end-pill px-2 py-1"
                                            onclick="updatePannier(<?=$produit['id']?>, <?=$produit['produit_id']?>, <?=(int)($produit['quantite'] + 1)?>)"
                                            aria-label="Augmenter quantité"
                                            style="min-width: 35px;" id="btn-pannier-<?=(int)($produit['quantite'] + 1)?>">
                                        <i class="fi-plus fs-sm"></i>
                                        <div class="dot-spinner d-none" id="loading-spinner-panier-<?=(int)($produit['quantite'] + 1)?>">
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                            <div class="dot-spinner__dot"></div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Section prix total -->
                            <div class="border-top pt-2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="text-muted small">Sous-total :</div>
                                    <div class="text-primary fw-bold">
                                        <?= number_format(intval($produit["quantite"] * $produit["prix_unitaire"]), 0, ',', ' ') ?> Fb
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
              </div> 
              <!-- ////////////////////////// -->
            <?php
                  }
                  
                echo "</div>";
            }
            // Aucun produit en panier 
            else{
        ?>
            <div class="col-12">
                <div class="border-0">
                    <div class="card-body text-center py-5">
                        <!-- Icône panier vide -->
                        <div class="mb-4">
                            <div class="icon-empty-cart d-inline-block">
                                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="text-muted">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                    <path d="M8 13l-3-6"></path>
                                    <path d="M21 13l-3-6"></path>
                                </svg>
                            </div>
                        </div>
                        
                        <!-- Message principal -->
                        <h3 class="h4 text-muted mb-3">Votre panier est vide</h3>
                        
                        <!-- Description -->
                        <p class="text-muted mb-4">
                            Il semble que vous n'avez pas encore ajouté de produits à votre panier.<br>
                            Parcourez notre catalogue et découvrez nos produits.
                        </p>
                        
                        <!-- Boutons d'action -->
                        <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                            <a href="nos-produits.php" class="btn btn-primary px-4 py-2">
                                <i class="fi-shopping-bag me-2"></i>
                                Voir le catalogue
                            </a>
                            
                            <a href="index.php" class="btn btn-outline-primary px-4 py-2">
                                <i class="fi-home me-2"></i>
                                Retour à l'accueil
                            </a>
                        </div>
                        
                        <!-- Suggestions -->
                        <div class="mt-5 pt-4 border-top">
                            <h5 class="h6 mb-3">Vous pourriez aimer :</h5>
                            <div class="row justify-content-center g-3">
                                <!-- Produit suggestion 1 -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card border h-100 hover-shadow">
                                            <div class="card-body text-center p-3">
                                                <div class="mb-2">
                                                    <i class="fi-tool text-primary fs-3"></i>
                                                </div>
                                                <h6 class="mb-1">Outils</h6>
                                                <small class="text-muted">Découvrir</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <!-- Produit suggestion 2 -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card border h-100 hover-shadow">
                                            <div class="card-body text-center p-3">
                                                <div class="mb-2">
                                                    <i class="fi-cpu text-primary fs-3"></i>
                                                </div>
                                                <h6 class="mb-1">Électronique</h6>
                                                <small class="text-muted">Explorer</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                
                                <!-- Produit suggestion 3 -->
                                <div class="col-6 col-md-3">
                                    <a href="#" class="text-decoration-none">
                                        <div class="card border h-100 hover-shadow">
                                            <div class="card-body text-center p-3">
                                                <div class="mb-2">
                                                    <i class="fi-settings text-primary fs-3"></i>
                                                </div>
                                                <h6 class="mb-1">Pièces détachées</h6>
                                                <small class="text-muted">Voir</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Style supplémentaire -->
            <style>
            .icon-empty-cart {
                animation: float 3s ease-in-out infinite;
            }

            @keyframes float {
                0%, 100% {
                    transform: translateY(0);
                }
                50% {
                    transform: translateY(-10px);
                }
            }

            .hover-shadow {
                transition: all 0.3s ease;
            }

            .hover-shadow:hover {
                transform: translateY(-5px);
                box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            }
            </style>
        <?php


            } 
        ?>
            <!-- ////////////////////// -->

            <!-- Pagination -->
            <nav class="pt-3 mt-3" aria-label="Listings pagination">
              <!-- <ul class="pagination">
                <li class="page-item active" aria-current="page">
                  <span class="page-link">
                    1
                    <span class="visually-hidden">(current)</span>
                  </span>
                </li> 
                <li class="page-item">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#!">18</a>
                </li>
              </ul> -->
            </nav>
          </div>
        <?php
            if($ResponsePanier["success"]) {
        ?>
          <!-- ///////////////////////// -->
          <!-- Résumé du panier horizontal -->
          <aside class="col-lg-9 mx-auto">
              <div class="card border-top shadow-sm">
                  <div class="card-body p-3">
                      <!-- Message informatif discret -->
                      <div class="mb-3 pb-2 border-bottom">
                          <div class="d-flex align-items-center">
                              <i class="fi-check-circle text-success me-2 fs-6"></i>
                              <div class="flex-grow-1">
                                  <small class="text-muted">
                                      <span class="fw-medium text-dark"><?=$produitEnPanier["articles"]?> articles ajoutés</span> • Sélectionnez votre mode de livraison pour finaliser votre commande
                                  </small>
                              </div> 
                          </div>
                      </div>
                      
                      <div class="row g-3 align-items-center">
                          <!-- Section livraison -->
                          <div class="col-md-4">
                              <div class="d-flex align-items-center mb-1">
                                  <i class="fi-truck text-muted me-2"></i>
                                  <span class="fw-medium">Livraison</span>
                              </div>
                              
                              <!-- Sélecteur de livraison -->
                              <div class="mb-2">
                                  <select class="form-select form-select-sm" id="shippingMethodHorizontal">
                                      <option value="pickup" selected>Retrait en magasin</option>
                                      <option value="standard">Livraison standard</option>
                                      <option value="express">Livraison express</option>
                                  </select>
                              </div>
                              
                              <!-- Détails livraison -->
                              <div id="shippingDetailsHorizontal">
                                  <div class="d-flex align-items-center text-muted" id="pickupDetailsHorizontal">
                                      <small>
                                          <span class="text-success fw-medium">Gratuit</span> • Retrait disponible sous 2h
                                      </small>
                                  </div>
                                  <div class="d-flex align-items-center text-muted d-none" id="standardDetailsHorizontal">
                                      <small>
                                          <span class="fw-medium">3500</span> • Délai 2-3 jours ouvrés
                                      </small>
                                  </div>
                                  <div class="d-flex align-items-center text-muted d-none" id="expressDetailsHorizontal">
                                      <small>
                                          <span class="fw-medium text-warning">6000</span> • Livraison en 24h
                                      </small>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- Séparateur vertical -->
                          <div class="col-auto d-none d-md-block">
                              <div class="vr h-50"></div>
                          </div>
                          
                          <!-- Section récapitulatif  -->
                          <div class="col-md-3">
                              <div class="row g-2">
                                  <div class="col-6">
                                      <div class="d-flex flex-column">
                                          <small class="text-muted mb-1">Sous-total</small>
                                          <span class="fw-bold"><?=$produitEnPanier["total"]?>Fb</span>
                                      </div>
                                  </div>
                                  
                                  <div class="col-6">
                                      <div class="d-flex flex-column">
                                          <small class="text-muted mb-1">Livraison</small>
                                          <span class="fw-bold text-success" id="shippingCostDisplay">Gratuit</span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- Section total -->
                          <div class="col-md-3">
                              <div class="border-start ps-3">
                                  <small class="text-muted d-block mb-1">Total TTC</small>
                                  <div class="d-flex align-items-center">
                                      <span class="h4 fw-bold text-primary mb-0" id="totalPriceDisplay"><?=$produitEnPanier["total"]?>Fb</span>
                                      <small class="text-muted ms-2">TVA incluse</small>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- Section action -->
                          <div class="col-md-2">
                              <div class="d-grid">
                                  <button type="button" id="btn-commande" 
                                  class="btn btn-primary btn-sm py-2"
                                  onclick="passerCommande(1)"
                                  >
                                    <div class="dot-spinner d-none" id="loading-spinner-commande">
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                        <div class="dot-spinner__dot"></div>
                                    </div>
                                    <i class="fi-arrow-right me-1"></i>
                                      Commander 
                                  </button> 
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </aside>


          <script>
            document.addEventListener('DOMContentLoaded', function() {
              const shippingSelect = document.getElementById('shippingMethodHorizontal');
              const pickupDetails = document.getElementById('pickupDetailsHorizontal');
              const standardDetails = document.getElementById('standardDetailsHorizontal');
              const expressDetails = document.getElementById('expressDetailsHorizontal');
              const shippingCostDisplay = document.getElementById('shippingCostDisplay');
              const totalPriceDisplay = document.getElementById('totalPriceDisplay');
              
              function updateShippingDetails() {
                  // Cacher tous les détails
                  pickupDetails.classList.add('d-none');
                  standardDetails.classList.add('d-none');
                  expressDetails.classList.add('d-none');
                  
                  // Afficher les détails correspondants
                  const selectedValue = shippingSelect.value;
                  if (selectedValue === 'pickup') {
                      pickupDetails.classList.remove('d-none');
                  } else if (selectedValue === 'standard') {
                      standardDetails.classList.remove('d-none');
                  } else if (selectedValue === 'express') {
                      expressDetails.classList.remove('d-none');
                  }
                  
                  // Mettre à jour les prix
                  updateTotal();
              }
              
              function updateTotal() {
                  const shippingCosts = {
                      'pickup': 0,
                      'standard': 3500,
                      'express': 6000
                  };
                  
                  const subtotal = <?=$produitEnPanier["total"]?>;
                  const shippingCost = shippingCosts[shippingSelect.value];
                  const total = subtotal + shippingCost;
                  
                  // Mettre à jour l'affichage des frais de livraison
                  if (shippingCost === 0) {
                      shippingCostDisplay.textContent = 'Gratuit';
                      shippingCostDisplay.className = 'fw-bold text-success';
                  } else {
                      shippingCostDisplay.textContent = shippingCost.toFixed(2) + 'Fb';
                      shippingCostDisplay.className = 'fw-bold';
                  }
                  
                  // Mettre à jour le total
                  totalPriceDisplay.textContent = total.toFixed(2) + 'Fb';
              }
              
              // Écouter les changements
              shippingSelect.addEventListener('change', updateShippingDetails);
              
              // Initialiser
              updateShippingDetails();
          });
          </script>
          <!-- ///////////////////////////////// -->
        <?php } ?>

        </div>
      </div>
    </main>

    <!-- FOOTER ...........................-->
    <?php include("./includes/footer.php") ?>
    <!-- FOOTER ...........................-->
    
    <script>

    //..produit_id client_id quantite  | commande
    let url_pagner_update = "../app/index.php?action=panier/update";
    let url_delete_to_panier = "../app/index.php?action=panier/delete&id=";
    let url_commande_depuis_panier = "../app/index.php?action=commande/create";
   
    function updatePannier(pannier_id, produit_id, quantite) {   
        let loading_spinner = document.getElementById(`loading-spinner-panier-${quantite}`);  
        let submit_btn = document.getElementById(`btn-pannier-${quantite}`);  
          
        // Préparation des données à envoyer
        let formData = new FormData();  
        formData.append("id", pannier_id);
        formData.append("client_id", <?=$_CLIENT_ID?>);
        formData.append("quantite", quantite);  
        formData.append("produit_id", produit_id);  
 
        // Options pour la requête fetch
        const options = {  
            method: 'POST',  
            body: formData   
        };
        
        loading_spinner.classList.remove("d-none");
        submit_btn.disabled = true;

        // Envoi de la requête AJAX
        fetch(url_pagner_update, options)
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
          
             sweetAlertSuccessMessage(data.message || "Panier mis a jour avec success", title = "Mis en panier reussi") 
              // Connexion réussie  
              loading_spinner.classList.add("d-none"); 

              setTimeout(()=>{
                window.location.href = window.location.href;
              },3000);

              submit_btn.disabled = false; 
          } 
          else { 
              // Réactiver le bouton
              sweetAlertDangerMessage(data.message || "Une erreur est survenu lors de la mis en panier du produit",title = "Erreur...")
              submit_btn.disabled = false; 
              loading_spinner.classList.add("d-none");
          }
        })
        .catch(error => {
            // Erreur réseau ou autre
            console.error("Erreur:", error); 
            sweetAlertDangerMessage("Erreur de connexion au serveur. Veuillez réessayer",title = "Echec...")
            // Réactiver le bouton
            submit_btn.disabled = false; 
            loading_spinner.classList.add("d-none");
        });  
      } 
   
    function retirerDuPanier(pannier_id) {   
      let loading_spinner = document.getElementById(`loading-spinner-delete-panier-${pannier_id}`);  
      let submit_btn = document.getElementById(`btn-delete-pannier-${pannier_id}`);  
        
      // Préparation des données à envoyer 
      let formData = new FormData();  
      formData.append("id", pannier_id); 

      // Options pour la requête fetch
      const options = {  
          method: 'POST',  
          body: formData   
      };
      
      loading_spinner.classList.remove("d-none");
      submit_btn.disabled = true;

      // Envoi de la requête AJAX
      fetch(url_delete_to_panier, options)
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
        
            sweetAlertSuccessMessage(data.message || "Peduit retire du panier avec success", title = "Produit retire") 
            // Connexion réussie  
            loading_spinner.classList.add("d-none"); 

            setTimeout(()=>{
              window.location.href = window.location.href;
            },3000);

            submit_btn.disabled = false; 
        } 
        else { 
            // Réactiver le bouton
            sweetAlertDangerMessage(data.message || "Une erreur est survenu",title = "Erreur...")
            submit_btn.disabled = false; 
            loading_spinner.classList.add("d-none");
        }
      })
      .catch(error => {
          // Erreur réseau ou autre
          console.error("Erreur:", error); 
          sweetAlertDangerMessage("Erreur de connexion au serveur. Veuillez réessayer",title = "Echec...")
          // Réactiver le bouton
          submit_btn.disabled = false; 
          loading_spinner.classList.add("d-none");
      });  
    } 

    function passerCommande(is_for_panier = 0) {
        let loading_spinner = document.getElementById(`loading-spinner-commande`);  
        let submit_btn = document.getElementById(`btn-commande`);  

        const shippingSelect = document.getElementById('shippingMethodHorizontal');
        const selectedValue = shippingSelect.value;

        let type_commande = 0;
        switch(selectedValue) {
            case "pickup" : type_commande = 1; break;
            case "standard" : type_commande = 2; break;
            case "express" : type_commande = 3; break;
        }
  
        // Préparation des données à envoyer
        let formData = new FormData();   
        formData.append("client_id", <?=$_CLIENT_ID?>);
        formData.append("is_for_panier", is_for_panier);  
        formData.append("type_commande", type_commande);  
 
        // Options pour la requête fetch
        const options = {  
            method: 'POST',  
            body: formData   
        };
        
        loading_spinner.classList.remove("d-none");
        submit_btn.disabled = true;

        // Envoi de la requête AJAX
        fetch(url_commande_depuis_panier, options)
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
          
             sweetAlertSuccessMessage(data.message || "Commande realise avec success", title = "Commande reussi") 
              // Connexion réussie  
              loading_spinner.classList.add("d-none"); 

              setTimeout(()=>{
                window.location.href = window.location.href;
              },3000);

              submit_btn.disabled = false; 
          }
          else { 
              // Réactiver le bouton
              sweetAlertDangerMessage(data.message || "Une erreur est survenu lors de la commande",title = "Commande echoue")
              submit_btn.disabled = false; 
              loading_spinner.classList.add("d-none");
            }
        })
        .catch(error => {
            // Erreur réseau ou autre
            console.error("Erreur:", error); 
            sweetAlertDangerMessage("Erreur de connexion au serveur. Veuillez réessayer",title = "Echec...")
            // Réactiver le bouton
            submit_btn.disabled = false; 
            loading_spinner.classList.add("d-none");
        });  
    }

    </script>

</body></html>