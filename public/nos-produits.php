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
      <div class="container pt-4 pb-5 mb-xxl-3"> 
        <!-- Filter sidebar + Listings grid view -->
        <div class="row pb-2 pb-sm-3 pb-md-4 pb-lg-5"> 
          <!-- Listings grid -->
          <div class="col-lg-12">

            <!-- Sort selector + Map view toggle -->
            <div class="d-flex align-items-center gap-4 pb-3 mb-2 mb-xl-3">
              <div class="fs-sm text-nowrap d-none d-md-inline">Showing 116 results</div>
              <div class="position-relative ms-md-auto" style="width: 170px">
                <i class="fi-sort position-absolute top-50 start-0 translate-middle-y z-1 ms-3"></i>
                <select class="form-select form-icon-start rounded-pill" data-select="{
                  &quot;removeItemButton&quot;: false,
                  &quot;classNames&quot;: {
                    &quot;containerInner&quot;: [&quot;form-select&quot;, &quot;form-icon-start&quot;, &quot;rounded-pill&quot;]
                  }
                }">
                <option value="Popular">Popular</option>
                <option value="Rating">Rating</option>
                <option value="Price asc">Price asc</option>
                <option value="Price desc">Price desc</option>
                </select>
              </div>
              <div class="nav ms-auto ms-md-0">
                <a class="nav-link position-relative p-0" href="#map" data-bs-toggle="offcanvas">
                  <i class="fi-map fs-base me-2"></i>
                  <span class="hover-effect-underline stretched-link">View on <span class="d-none d-sm-inline">the</span> map</span>
                </a>
              </div>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-2 row-cols-xl-3 g-4 g-sm-3 g-lg-4">

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/01.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Barcelona National Zoo</a>
                    </h3>
                    <p class="fs-sm mb-0">Discover fascinating animals and a fun-filled adventure for the whole family.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.6</span>
                        <span class="fs-xs text-body-secondary align-self-end">(7523)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">3.2 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$20</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/02.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Mountain Lake Tour</a>
                    </h3>
                    <p class="fs-sm mb-0">Enjoy breathtaking views, fresh air, and a peaceful escape into the wilderness.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.5</span>
                        <span class="fs-xs text-body-secondary align-self-end">(214)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">13 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$60</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/03.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Jeep Tour with 4x4 Club</a>
                    </h3>
                    <p class="fs-sm mb-0">Explore the wild side of Barcelona in our reliable off-road 4x4 vehicle!</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(185)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">9.8 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$130</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/04.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Sky Views Observatory</a>
                    </h3>
                    <p class="fs-sm mb-0">Take in breathtaking skyline views from an unparalleled vantage point.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.3</span>
                        <span class="fs-xs text-body-secondary align-self-end">(3462)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">1.7 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$5</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/05.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Museum of Illusions</a>
                    </h3>
                    <p class="fs-sm mb-0">Challenge your perception with mind-bending and interactive exhibits.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.6</span>
                        <span class="fs-xs text-body-secondary align-self-end">(1572)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">2.3 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$35</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/06.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Barcelona Oceanarium</a>
                    </h3>
                    <p class="fs-sm mb-0">Enter a world of aquatic discovery at one of the biggest aquariums in Europe.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(8325)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">1.8 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$40</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/07.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Art &amp; Design Museum</a>
                    </h3>
                    <p class="fs-sm mb-0">Europe's most extensive collection of modern and contemporary art.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.9</span>
                        <span class="fs-xs text-body-secondary align-self-end">(2078)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">1.4 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$15</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/08.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Tibidabo Ferris Wheel</a>
                    </h3>
                    <p class="fs-sm mb-0">Atop the Tibidabo Entertainment Park, you can enjoy a spot of sightseeing.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.4</span>
                        <span class="fs-xs text-body-secondary align-self-end">(1059)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">3.6 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$10</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/09.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">VRFun Virtual Reality Park</a>
                    </h3>
                    <p class="fs-sm mb-0">Immersive virtual reality park offering stunning VR experiences for all ages.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.9</span>
                        <span class="fs-xs text-body-secondary align-self-end">(112)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">2.1 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$25</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/10.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">La Sagrada Familia</a>
                    </h3>
                    <p class="fs-sm mb-0">Antoni Gaudí's masterpiece features stunning design and intricate details.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.8</span>
                        <span class="fs-xs text-body-secondary align-self-end">(12694)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">0.5 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$30</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/11.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">City Guided Tour</a>
                    </h3>
                    <p class="fs-sm mb-0">Embark on an interactive city tour around central Barcelona with a guide.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.7</span>
                        <span class="fs-xs text-body-secondary align-self-end">(389)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">0.9 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$42</div>
                  </div>
                </article>
              </div>

              <!-- Listing -->
              <div class="col">
                <article class="card h-100 hover-effect-scale hover-effect-opacity bg-transparent">
                  <div class="card-img-top position-relative bg-body-tertiary overflow-hidden">
                    <div class="ratio hover-effect-target" style="--fn-aspect-ratio: calc(198 / 304 * 100%)">
                      <img src="assets/img/listings/city-guide/v1/12.jpg" alt="Image">
                    </div>
                    <div class="position-absolute top-0 end-0 z-2 hover-effect-target opacity-0 pt-1 pt-sm-0 pe-1 pe-sm-0 mt-2 mt-sm-3 me-2 me-sm-3">
                      <button type="button" class="btn btn-sm btn-icon btn-light bg-light border-0 rounded-circle animate-pulse" aria-label="Add to wishlist">
                        <i class="fi-heart animate-target fs-sm"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body pt-3 pb-2 px-3">
                    <span class="badge text-body-emphasis bg-secondary-subtle text-decoration-none mb-2">Entertainment</span>
                    <h3 class="h5 pt-1 mb-2">
                      <a class="hover-effect-underline stretched-link" href="single-entry-city-guide.html">Live Music Boat Tour</a>
                    </h3>
                    <p class="fs-sm mb-0">Listen to professional musicians onboard as they entertain you on your journey.</p>
                  </div>
                  <div class="card-footer bg-transparent border-0 pt-0 pb-3 px-3">
                    <div class="d-flex align-items-center gap-3">
                      <div class="d-flex align-items-center gap-1">
                        <i class="fi-star-filled text-warning"></i>
                        <span class="fs-sm text-secondary-emphasis">4.5</span>
                        <span class="fs-xs text-body-secondary align-self-end">(264)</span>
                      </div>
                      <div class="d-flex align-items-center gap-1 min-w-0 fs-sm">
                        <i class="fi-map-pin"></i>
                        <span class="text-truncate">2.7 km from center</span>
                      </div>
                    </div>
                    <div class="h6 pt-3 mb-0">$50</div>
                  </div>
                </article>
              </div>
            </div>

            <!-- Pagination -->
            <nav class="pt-3 mt-3" aria-label="Listings pagination">
              <ul class="pagination pagination-lg">
                <li class="page-item disabled me-auto">
                  <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2" href="#!" aria-label="Previous page">
                    <i class="fi-chevron-left mx-1"></i>
                  </a>
                </li>
                <li class="page-item active" aria-current="page">
                  <span class="page-link rounded-pill">
                    <span style="margin: 0 1px">1</span>
                    <span class="visually-hidden">(current)</span>
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
                  <a class="page-link d-flex align-items-center h-100 fs-lg rounded-pill px-2" href="#" aria-label="Next page">
                    <i class="fi-chevron-right mx-1"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </main>

    <!-- FOOTER ...........................-->
    <?php include("./includes/footer.php") ?>
    <!-- FOOTER ...........................-->
   

</body></html>