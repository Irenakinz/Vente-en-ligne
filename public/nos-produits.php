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


      <section class="position-relative pt-5 pb-md-3 pb-lg-4 pb-xl-5 mt-n1 mt-sm-0 bg-body-tertiary">
        <!-- Overlay pour améliorer la lisibilité -->
        <div class="position-absolute top-0 start-0 w-100 h-100 "></div>
        
        <div class="container position-relative z-2 pt-md-4 pt-lg-5 pb-xxl-3">
          <div class="pt-sm-2 mx-auto" style="max-width: 820px">
            <h1 class="display-4 text-center  mb-sm-4">Notre catalogue de quincaillerie</h1>
            <p class="fs-lg text-center pb-3 pb-sm-0 pb-lg-2 pb-xl-3 mb-4 mb-sm-5 mx-auto" style="max-width: 546px">
              Découvrez notre sélection complète d'outils, matériaux et équipements pour tous vos projets de bricolage, construction et rénovation. Des produits de qualité, au meilleur prix.
            </p> 
          </div>
        </div>
        
        <!-- Forme décorative en bas -->
        <div class="position-absolute bottom-0 start-0 w-100 overflow-hidden" style="line-height: 0; transform: rotate(180deg);">
          <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="width: 100%; height: 60px;">
            <path d="M1200 120L0 16.48 0 0 1200 0 1200 120z" class="shape-fill" fill="#ffffff"></path>
          </svg>
        </div>
      </section>



      <div class="container pt-4 pb-5 mb-xxl-3"> 
        <!-- Filter sidebar + Listings grid view -->
        <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5">  

          <!-- Grille de produits -->
          <div class="col-lg-12">

          <!-- Filtres et recherche -->
          <form class="d-flex flex-column flex-md-row align-items-start justify-content-center mb-4 align-items-md-center gap-3 pb-4 mb-2 mb-xl-3">
            
            <!-- Recherche par nom -->
            <div class="position-relative flex-grow-1" style="max-width: 400px;">
              <i class="fi-search position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
              <input type="text" name="search" class="form-control form-icon-start rounded-pill ps-5" placeholder="Rechercher un produit...">
            </div>
            
            <!-- Tri par catégorie -->
            <div class="position-relative" style="width: 220px;">
              <i class="fi-tag position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
              <select name="category" class="form-select form-icon-start rounded-pill" data-select="{
                &quot;removeItemButton&quot;: false,
                &quot;classNames&quot;: {
                  &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;form-icon-start&quot;, &quot;rounded-pill&quot;]
                }
              }">
                <option value="all">Toutes les catégories</option>
                <option value="electrical">Outillage électrique</option>
                <option value="manual">Outillage manuel</option>
                <option value="paint">Peinture</option>
                <option value="garden">Jardinage</option>
                <option value="security">Sécurité</option>
                <option value="plumbing">Plomberie</option>
                <option value="measure">Mesure</option>
              </select>
            </div>
            
             
            <!-- Bouton de soumission -->
            <button type="submit" class="btn btn-primary rounded-pill px-4 px-md-5">
              <i class="fi-search me-2"></i>
              Rechercher
            </button>
          </form>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

                <?php

                    $ResponseProduit = getProduits();
                    if($ResponseProduit["success"]) {
                      $lastProduits = $ResponseProduit["data"];
                      foreach($lastProduits as $produit) {
                        $imageProduit = BASE_URL."/Vente-en-ligne/medias/".$produit["image"];
                ?>
                  <!-- Produit - Version boutons horizontaux -->
                  <div class="swiper-slide h-auto">
                      <article class="card h-100 hover-effect-scale border-0 shadow-sm hover-shadow-lg transition-all">
                          <!-- Image avec overlay au survol -->
                          <div class="card-img-top position-relative overflow-hidden rounded-top" 
                              style="height: 200px;">
                              <img src="<?php echo $imageProduit ?>" 
                                  alt="<?= htmlspecialchars($produit["titre"]) ?>" 
                                  class="w-100 h-100 object-fit-cover transition-transform"
                                  style="transition: transform 0.3s ease;">
                              
                              <!-- Overlay au survol -->
                              <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-0 hover-effect-target d-flex align-items-center justify-content-center opacity-0 transition-all">
                                  <div class="text-center text-white p-3">
                                      <i class="fi-eye fs-3 mb-2"></i>
                                      <p class="small mb-0">Voir les détails</p>
                                  </div>
                              </div>
                          </div>
                          
                          <!-- Corps de la carte -->
                          <div class="card-body">
                              <!-- Catégorie -->
                              <div class="mb-2">
                                  <span class="badge bg-light text-dark border">
                                      <i class="fi-tag me-1"></i><?= htmlspecialchars($produit["categorie"]) ?>
                                  </span>
                              </div>
                              
                              <!-- Titre -->
                              <h3 class="h6 mb-2 text-dark line-clamp-1">
                                  <?= htmlspecialchars($produit["titre"]) ?>
                              </h3>
                              
                              <!-- Description -->
                              <p class="text-body-secondary fs-xs mb-3 line-clamp-2">
                                  <?= htmlspecialchars($produit["description"]) ?>
                              </p>
                              
                              <!-- Prix et date -->
                              <div class="d-flex justify-content-between align-items-center mb-3">
                                  <div class="h5 text-primary fw-bold mb-0">
                                      <?= number_format($produit["prix_unitaire"], 0, ',', ' ') ?> Fb
                                  </div>
                                  <div class="text-muted fs-xs">
                                      <?=formatDateFrancais($produit["date_save"])?>
                                  </div>
                              </div>
                              
                              <!-- Boutons d'action HORIZONTAUX -->
                              <div class="d-flex gap-2">
                                  <!-- Bouton Commander (principal) -->
                                  <button type="button" 
                                          class="btn btn-success flex-fill d-flex align-items-center justify-content-center gap-1 py-2"
                                          data-produit-id="<?= htmlspecialchars($produit['id']) ?>"
                                          data-produit-titre="<?= htmlspecialchars($produit['titre']) ?>"
                                          data-produit-description="<?= htmlspecialchars($produit['description']) ?>"
                                          data-produit-prix="<?= intval($produit['prix_unitaire']) ?>"
                                          data-produit-stock="<?= intval($produit['quantite']) ?>"
                                          data-produit-image="<?= htmlspecialchars($imageProduit) ?>"
                                          onclick="initProduitDansModal(this)">
                                      <i class="fi-shopping-bag"></i>
                                      <span class="small">Commander</span>
                                  </button>
                                  
                                  <!-- Bouton Panier (secondaire) -->
                                  <button type="button" 
                                          class="btn btn-outline-primary d-flex align-items-center justify-content-center px-3 py-2"
                                          onclick="ajoutAuPanier(<?=$produit['id']?>)"
                                          title="Ajouter au panier" id="submit_btn_<?=$produit['id']?>">
                                      <i class="fi-shopping-cart"></i>
                                      <div class="dot-spinner d-none" id="loading_spinner_<?=$produit['id']?>">
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
                          
                          <!-- Footer loading_spinner_ | submit_btn_ --> 
                          <div class="card-footer bg-light bg-opacity-50 border-0 pt-0">
                              <div class="d-flex justify-content-between align-items-center fs-xs text-body-secondary">
                                  <div class="d-flex align-items-center gap-1">
                                      <?=$produit["icone"]?>
                                      <span><?= htmlspecialchars($produit["categorie"]) ?></span>
                                  </div>
                                  <div class="d-flex align-items-center gap-1 text-success">
                                      <i class="fi-check-circle"></i>
                                      <span>Disponible</span>
                                  </div>
                              </div>
                          </div>
                      </article>
                  </div>
                <?php
                      }
                    }

                ?>

              <!-- Produit -->
              <!-- <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/tools/compressor.jpg" alt="Compresseur air">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-primary-subtle text-decoration-none mb-2">Outillage</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Compresseur d'Air 50L</a>
                    </h3>
                    <p class="fs-sm mb-0">Compresseur d'air silencieux 50 litres avec kit d'accessoires complet.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(178)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">249,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div> -->
            </div>

            <!-- Pagination -->
            <nav class="pt-3 mt-3" aria-label="Pagination produits">
              <ul class="pagination pagination-lg">
                <li class="page-item disabled me-auto">
                  <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2" href="#!" aria-label="Page précédente">
                    <i class="fi-chevron-left mx-1"></i>
                  </a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link rounded-pill">
                    <span style="margin: 0 1px">1</span>
                    <span class="visually-hidden">(page actuelle)</span>
                  </span>
                </li>
                <li class="page-item">
                  <a class="page-link rounded-pill" href="#!">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link rounded-pill" href="#!">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link rounded-pill" href="#!">4</a>
                </li>
                <li class="page-item">
                  <span class="page-link px-2 pe-none">...</span>
                </li>
                <li class="page-item">
                  <a class="page-link rounded-pill" href="#!">10</a>
                </li>
                <li class="page-item ms-auto">
                  <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2" href="#" aria-label="Page suivante">
                    <i class="fi-chevron-right mx-1"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /////////////////////////////////////////// -->
      </div>
    </main>

    <!-- FOOTER ...........................-->
    <?php include("./includes/footer.php") ?>
    <!-- FOOTER ...........................-->
   

</body></html>