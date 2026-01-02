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

      <!-- // DEBUT SECTION BLOCK 1 D'ACCEUILLE -->
      <section class="position-relative bg-info overflow-hidden py-5">
        <!-- Éléments décoratifs subtils -->
        <div class="position-absolute top-0 start-0 w-100 h-100">
            <!-- Motif de fond discret -->
            <div class="position-absolute top-50 start-50 translate-middle opacity-10" style="width: 100%; max-width: 600px;">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 800 400" class="text-white">
                    <path d="M100,100 Q200,50 300,100 T500,100" fill="none" stroke="currentColor" stroke-width="2"/>
                    <path d="M100,200 Q250,150 400,200 T700,200" fill="none" stroke="currentColor" stroke-width="2"/>
                    <circle cx="150" cy="150" r="8" fill="currentColor"/>
                    <circle cx="350" cy="150" r="8" fill="currentColor"/>
                    <circle cx="550" cy="150" r="8" fill="currentColor"/>
                    <circle cx="250" cy="250" r="8" fill="currentColor"/>
                    <circle cx="450" cy="250" r="8" fill="currentColor"/>
                    <circle cx="650" cy="250" r="8" fill="currentColor"/>
                </svg>
            </div>
        </div>

        <div class="container position-relative z-3 py-5 py-sm-6 py-lg-7">
            <!-- Contenu centré -->
            <div class="text-center mx-auto" style="max-width: 850px;">
                <!-- Titre principal -->
                <h1 class="display-3 text-white fw-bold mb-4">
                    Votre expert en matériaux <span class="text-warning">&</span> outillage
                </h1>
                
                <!-- Sous-titre -->
                <p class="lead text-light mb-5 px-3">
                    Tout ce dont vous avez besoin pour vos projets, du bricolage aux chantiers professionnels. 
                    Un large choix, des prix compétitifs et un service personnalisé.
                </p>
                
                <!-- Séparateur décoratif -->
                <div class="mx-auto mb-5" style="width: 100px; height: 3px; background: rgba(255, 255, 255, 0.3);"></div>
                
                <!-- Points clés -->
                <div class="row justify-content-center mb-5">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="text-center px-3">
                            <div class="bg-white bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-shield-check text-white fs-3"></i>
                            </div>
                            <h4 class="text-white h5 fw-bold">Qualité garantie</h4>
                            <p class="text-light small mb-0">Matériaux certifiés et outils de marques reconnues</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mb-4 mb-md-0">
                        <div class="text-center px-3">
                            <div class="bg-white bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-truck text-white fs-3"></i>
                            </div>
                            <h4 class="text-white h5 fw-bold">Livraison rapide</h4>
                            <p class="text-light small mb-0">Disponible en magasin ou livré sous 24h-48h</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4">
                        <div class="text-center px-3">
                            <div class="bg-white bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" 
                                style="width: 70px; height: 70px;">
                                <i class="bi bi-headset text-white fs-3"></i>
                            </div>
                            <h4 class="text-white h5 fw-bold">Conseils experts</h4>
                            <p class="text-light small mb-0">Notre équipe vous guide dans vos choix techniques</p>
                        </div>
                    </div>
                </div>
                
                <!-- Boutons d'action -->
                <div class="d-flex flex-wrap justify-content-center gap-3 mb-5">
                  <a href="#produits" class="btn btn-light btn-lg px-5 py-3 fw-bold shadow-sm">
                      <i class="bi bi-tools me-2"></i>
                      Voir les produits
                  </a> 
                </div> 
                
                <!-- Appel à action secondaire -->
                <div class="mt-4">
                    <p class="text-light small mb-0">
                        <i class="bi bi-info-circle me-1"></i>
                        Besoin d'un produit spécifique ? 
                        <a href="#contact" class="text-warning text-decoration-none fw-medium">Contactez-nous</a> 
                        pour une recherche personnalisée.
                    </p>
                </div>
            </div>
        </div>
      </section>
      <!-- // FIN SECTION BLOCK 1 D'ACCEUILLE -->

      <!-- LISTE DES CATEGORIES DISPONIBLES -->
      <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 mb-xxl-3" id="categories">
        <div class="d-flex align-items-start justify-content-between gap-4 pt-5 pb-3 mb-2 mb-sm-3 mb-lg-4">
          <h2 class="mb-0">Nos catégories de produits</h2> 
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-3 g-sm-4">
         <?php
          $responseCategorie = getCategorie();
          if(isset($responseCategorie["success"]) && $responseCategorie["success"]){
              foreach($responseCategorie['data'] ?? $responseCategorie as $categorie){
                  if(is_array($categorie) && isset($categorie["id"])){
          ?> 
           <!-- Catégorie -->
          <div class="col">
            <article class="hover-effect-scale position-relative d-inline-flex align-items-center gap-3">
              <div class="position-relative d-flex align-items-center justify-content-center text-secondary-emphasis" style="width: 56px; height: 56px">
                <?=$categorie["icone"]?>
                <span class="hover-effect-target position-absolute top-0 start-0 w-100 h-100 bg-body-secondary rounded-circle" style="--fn-transform-scale: 1.1"></span>
              </div>
              <h3 class="h6 fw-normal mb-0">
                <a class="hover-effect-underline stretched-link" href="nos-produits.php?categorie=<?= htmlspecialchars($categorie["id"]) ?>">
                  <?= htmlspecialchars($categorie["description"]) ?>
                </a>
              </h3>
            </article>
          </div> 
          <?php
                  }
              } 
          }
          ?>  
        </div>
      </section>
      <!--// LISTE DES CATEGORIES DISPONIBLES -->
 
 
      <!-- NOS DERNIES PRODUIT AJOUTER -->
      <section class="container pt-2 pt-sm-3 pt-md-4 pt-lg-5 pb-5 my-xxl-3">
        <div class="d-sm-flex justify-content-between gap-3 pb-3 mb-2 mb-sm-3">
          <h2 class="mb-sm-0">Nos derniers produits ajoutés</h2>
          <ul class="nav nav-pills flex-sm-nowrap gap-2 text-nowrap">
            <li class="nav-item me-1">
              <a class="nav-link active" aria-current="page" href="#!">Voir tous les produits</a>
            </li> 
          </ul>
        </div>

        <!-- Carrousel de produits qui devient une grille sur écrans > 1200px (breakpoint xl) -->
        <div class="swiper" data-swiper="{
          &quot;slidesPerView&quot;: 1,
          &quot;spaceBetween&quot;: 24,
          &quot;pagination&quot;: {
            &quot;el&quot;: &quot;.swiper-pagination&quot;,
            &quot;clickable&quot;: true
          },
          &quot;breakpoints&quot;: {
            &quot;550&quot;: {
              &quot;slidesPerView&quot;: 2
            },
            &quot;850&quot;: {
              &quot;slidesPerView&quot;: 3
            },
            &quot;1200&quot;: {
              &quot;slidesPerView&quot;: 4
            }
          }
        }">
          <div class="swiper-wrapper">
        <?php

            $ResponseProduit = getLastProduit();
            if($ResponseProduit["success"]) {
              $lastProduits = $ResponseProduit["data"];
              foreach($lastProduits as $produit) {
        ?>
              <!-- Produit 1 -->
              <div class="swiper-slide h-auto">
                <article class="card h-100 hover-effect-scale">
                  <div class="card-img-top position-relative overflow-hidden"> 
                    <div class="" style="width:auto;">
                      <img src="<?php echo BASE_URL; ?>/Vente-en-ligne/medias/<?=$produit["image"]?>" alt="Kit d'outils multifonctions" style="width:100%;height:230px;object-fit:cover">
                    </div>
                  </div>
                  <div class="card-body pb-3">
                    <div class="d-flex align-items-center justify-content-between mb-2">
                      <div class="fs-xs text-body-secondary me-3"><?=formatDateFrancais($produit["date_save"])?></div>
                      <div class="d-flex gap-2 position-relative z-2"> 
                      </div>
                    </div>
                    <h3 class="h6 mb-2">
                      <span class="hover-effect-underline stretched-link me-1" href="#!"><?=$produit["titre"]?></span>
                      <!-- <span class="fs-xs fw-normal text-body-secondary">32 pièces</span> -->
                    </h3>
                    <p class="text-body-secondary fs-xs mb-2"><?=$produit["description"]?></p>
                    <div class="d-flex align-items-center mt-auto justify-content-between">
                      <div class="h6 text-primary mb-0"> 
                        <?=$produit["prix_unitaire"]?>Fb
                      </div>
                      <button  style="cursor: pointer; position: relative; z-index: 10;" class="btn btn-primary btn-sm d-flex gap-1" onclick="ajoutAuPanier(<?=$produit['id']?>)">
                        <i class="fi-shopping-cart"></i>Ajouter
                      </button>
                    </div>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-4">
                    <div class="border-top pt-3">
                      <div class="row row-cols-2 g-2 fs-xs">
                        <div class="col d-flex align-items-center gap-1">
                          <?=$produit["icone"]?>
                          <?=$produit["categorie"]?>
                        </div> 
                        <div class="col d-flex align-items-center gap-1">
                          <i class="fi-box"></i>
                          En stock
                        </div> 
                      </div>
                    </div>
                  </div>
                </article>
              </div> 
        <?php
              }
            }

        ?>
            
          </div>

          <!-- Pagination (Points) -->
          <div class="swiper-pagination position-static mt-3 mt-lg-4"></div>
        </div>
      </section>
      <!--// NOS DERNIES PRODUIT AJOUTER -->

  
    </main>

    <!-- FOOTER ...........................-->
    <?php include("./includes/footer.php") ?>
    <!-- FOOTER ...........................-->
   

</body></html>












