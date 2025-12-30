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

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/tools/drill.jpg" alt="Perceuse visseuse sans fil">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-primary-subtle text-decoration-none mb-2">Outillage électrique</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Perceuse-Visseuse 18V</a>
                    </h3>
                    <p class="fs-sm mb-0">Perceuse-visseuse sans fil professionnelle avec 2 batteries lithium-ion et couple max 60 Nm.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.6</span>
                        <span class="fs-xs text-body-secondary align-self-end">(243)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">89,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/paint/bucket.jpg" alt="Peinture murale">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-warning-subtle text-decoration-none mb-2">Peinture</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Peinture Murale Mate 2.5L</a>
                    </h3>
                    <p class="fs-sm mb-0">Peinture acrylique mate pour intérieur, lavable, couvrance exceptionnelle.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.5</span>
                        <span class="fs-xs text-body-secondary align-self-end">(87)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">
                        <span class="text-decoration-line-through text-body-secondary fs-xs me-1">29,90€</span>
                        24,90€
                      </div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/garden/kit.jpg" alt="Kit jardinage">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-success-subtle text-decoration-none mb-2">Jardinage</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Kit Jardinage 5 Pièces</a>
                    </h3>
                    <p class="fs-sm mb-0">Kit complet avec pelle, râteau, transplantoir, serfouette et griffe. Manches ergonomiques.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.9</span>
                        <span class="fs-xs text-body-secondary align-self-end">(203)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">45,50€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/security/lock.jpg" alt="Serrure connectée">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-info-subtle text-decoration-none mb-2">Sécurité</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Serrure Connectée Bluetooth</a>
                    </h3>
                    <p class="fs-sm mb-0">Serrure connectée avec application mobile, empreinte digitale et code numérique.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.6</span>
                        <span class="fs-xs text-body-secondary align-self-end">(156)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">89,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/measure/laser.jpg" alt="Télémètre laser">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Mesure</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Télémètre Laser 100m</a>
                    </h3>
                    <p class="fs-sm mb-0">Télémètre laser haute précision avec calcul automatique de surface et volume.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.9</span>
                        <span class="fs-xs text-body-secondary align-self-end">(189)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">149,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/tools/saw.jpg" alt="Scie circulaire">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-primary-subtle text-decoration-none mb-2">Outillage électrique</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Scie Circulaire 2000W</a>
                    </h3>
                    <p class="fs-sm mb-0">Scie circulaire professionnelle avec guide laser et coupe à 45°. Puissance 2000W.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.8</span>
                        <span class="fs-xs text-body-secondary align-self-end">(127)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">Stock limité</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">129,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/paint/roller.jpg" alt="Rouleau à peinture">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-warning-subtle text-decoration-none mb-2">Peinture</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Kit Peinture Professionnel</a>
                    </h3>
                    <p class="fs-sm mb-0">Kit complet avec rouleaux, bacs et accessoires pour peinture professionnelle.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.4</span>
                        <span class="fs-xs text-body-secondary align-self-end">(98)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">34,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/garden/watering.jpg" alt="Système d'arrosage">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-success-subtle text-decoration-none mb-2">Jardinage</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Système d'Arrosage Automatique</a>
                    </h3>
                    <p class="fs-sm mb-0">Kit d'arrosage automatique avec programmateur et 20 arroseurs pour jardin.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.5</span>
                        <span class="fs-xs text-body-secondary align-self-end">(142)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">
                        <span class="text-decoration-line-through text-body-secondary fs-xs me-1">79,90€</span>
                        64,90€
                      </div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/tools/welder.jpg" alt="Poste à souder">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-danger-subtle text-decoration-none mb-2">Soudure</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Poste à Souder Inverter 200A</a>
                    </h3>
                    <p class="fs-sm mb-0">Poste à souder inverter professionnel pour soudure à l'arc et TIG.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(89)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">349,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/security/alarm.jpg" alt="Alarme maison">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-info-subtle text-decoration-none mb-2">Sécurité</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Kit Alarme Maison Sans Fil</a>
                    </h3>
                    <p class="fs-sm mb-0">Kit alarme maison complet avec centrale, détecteurs et sirène. Installation facile.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.8</span>
                        <span class="fs-xs text-body-secondary align-self-end">(203)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">189,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/products/measure/level.jpg" alt="Niveau laser">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Ajouter aux favoris">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Mesure</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-product.html">Niveau Laser 3 Points</a>
                    </h3>
                    <p class="fs-sm mb-0">Niveau laser professionnel avec projection de points verticaux et horizontaux.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.6</span>
                        <span class="fs-xs text-body-secondary align-self-end">(112)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-box"></i>
                        <span class="text-truncate">En stock</span>
                      </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between pt-3">
                      <div class="h6 text-primary mb-0">79,90€</div>
                      <button type="button" class="btn btn-primary btn-sm">
                        <i class="fi-shopping-cart me-1"></i>
                        Ajouter
                      </button>
                    </div>
                  </div>
                </article>
              </div>

              <!-- Produit -->
              <div class="col">
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
              </div>
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