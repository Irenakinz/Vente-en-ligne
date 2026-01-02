    <aside class="col-lg-3" style="margin-top: -0px">
        <div class="offcanvas-lg offcanvas-start sticky-lg-top pe-lg-3 pe-xl-4" id="accountSidebar">
        <div class="d-none d-lg-block" style="height:"></div>

        <!-- Header -->
        <div class="offcanvas-header d-lg-block py-3 p-lg-0">
            <div class="d-flex flex-row flex-lg-column align-items-center align-items-lg-start">
            <div class="flex-shrink-0 bg-body-secondary border justify-content-center align-items-center rounded-circle overflow-hidden" style="width: 64px; height: 64px">
                <img src="<?= !empty($_SESSION['user']["photo"]) ? "../../medias/".$_SESSION['user']["photo"] : "avatar.jpg"?>" alt="Avatar" style="object-fit:cover;width:100%;height:100%">
            </div>
            <div class="pt-lg-3 ps-3 ps-lg-0 py-3">
                <h6 class="mb-1"><?=$_SESSION['user']["nom"]." ".$_SESSION['user']["prenom"]?></h6>
                <p class="fs-sm mb-0"><?=$_SESSION['user']["email"]?></p> 
            </div>
            </div>
            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar" aria-label="Close"></button>
        </div>

        <hr class="p-0 m-0">

        <!-- Body (Navigation) -->
         <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
            <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="dashboard.php">
                    <i class="fi-dashboard fs-base opacity-75 me-2 text-success"></i> 
                    Tableau de bord
                </a>
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="profile.php">
                    <i class="fi-user fs-base opacity-75 me-2"></i>
                    Mon profil
                </a>
                
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="list-produit.php">
                    <i class="fi-package fs-base opacity-75 me-2"></i>
                    Gestion produits
                </a>
                
                <a class="list-group-item list-group-item-action d-flex align-items-center" aria-current="page" href="list-commandes.php">
                    <i class="fi-shopping-cart fs-base opacity-75 me-2"></i>
                    Gestion commandes
                </a> 

                <hr class="p-0 m-0">
                
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="list-client.php">
                    <i class="fi-user-check fs-base opacity-75 me-2"></i>
                    Mes clients
                </a>
                
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="list-admins.php">
                    <i class="fi-shield fs-base opacity-75 me-2"></i>
                    Administrateurs
                </a>
            </nav>
            
            <nav class="list-group list-group-borderless pt-1 border-top">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="logs-activites.php">
                    <i class="fi-clock fs-base opacity-75 me-2"></i>
                    Journal activités
                </a>

                <a class="list-group-item list-group-item-action d-flex align-items-center" href="?logout=true">
                    <i class="fi-log-out fs-base opacity-75 me-2"></i>
                    Se déconnecter
                </a>
            </nav>
            <div class="dropdown">
            <button type="button" class="theme-switcher btn btn-icon btn-outline-secondary fs-lg border-0 animate-scale" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Toggle theme (light)">
              <span class="theme-icon-active d-flex animate-target">
                <i class="fi-sun"></i>
              </span>
            </button>
            <ul class="dropdown-menu start-50 translate-middle-x" style="--fn-dropdown-min-width: 9rem; --fn-dropdown-spacer: .5rem">
              <li>
                <button type="button" class="dropdown-item active" data-bs-theme-value="light" aria-pressed="true">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="fi-sun"></i>
                  </span>
                  <span class="theme-label">Light</span>
                  <i class="item-active-indicator fi-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="dark" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="fi-moon"></i>
                  </span>
                  <span class="theme-label">Dark</span>
                  <i class="item-active-indicator fi-check ms-auto"></i>
                </button>
              </li>
              <li>
                <button type="button" class="dropdown-item" data-bs-theme-value="auto" aria-pressed="false">
                  <span class="theme-icon d-flex fs-base me-2">
                    <i class="fi-auto"></i>
                  </span>
                  <span class="theme-label">Auto</span>
                  <i class="item-active-indicator fi-check ms-auto"></i>
                </button>
              </li>
            </ul>
          </div>
        </div>
        <!-- /////////////////// -->
    </aside>