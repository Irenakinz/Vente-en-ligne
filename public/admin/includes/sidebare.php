    <aside class="col-lg-3" style="margin-top: -0px">
        <div class="offcanvas-lg offcanvas-start sticky-lg-top pe-lg-3 pe-xl-4" id="accountSidebar">
        <div class="d-none d-lg-block" style="height:"></div>

        <!-- Header -->
        <div class="offcanvas-header d-lg-block py-3 p-lg-0">
            <div class="d-flex flex-row flex-lg-column align-items-center align-items-lg-start">
            <div class="flex-shrink-0 bg-body-secondary border rounded-circle overflow-hidden" style="width: 64px; height: 64px">
                <img src="../assets/img/account/avatar.jpg" alt="Avatar">
            </div>
            <div class="pt-lg-3 ps-3 ps-lg-0">
                <h6 class="mb-1">Michael Williams</h6>
                <p class="fs-sm mb-0">m.williams@example.com</p>
            </div>
            </div>
            <button type="button" class="btn-close d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#accountSidebar" aria-label="Close"></button>
        </div>

        <!-- Body (Navigation) -->
         <div class="offcanvas-body d-block pt-2 pt-lg-4 pb-lg-0">
            <nav class="list-group list-group-borderless">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="dashboard.php">
                    <i class="fi-users fs-base opacity-75 me-2"></i>
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
                
                <a class="list-group-item list-group-item-action d-flex align-items-center active" aria-current="page" href="list-commandes.php">
                    <i class="fi-shopping-cart fs-base opacity-75 me-2"></i>
                    Gestion commandes
                </a> 

                <hr>
                
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="list-client.php">
                    <i class="fi-user-check fs-base opacity-75 me-2"></i>
                    Mes clients
                </a>
                
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="list-admins.php">
                    <i class="fi-shield fs-base opacity-75 me-2"></i>
                    Administrateurs
                </a>
            </nav>
            
            <nav class="list-group list-group-borderless pt-3">
                <a class="list-group-item list-group-item-action d-flex align-items-center" href="logs-activites.php">
                    <i class="fi-clock fs-base opacity-75 me-2"></i>
                    Journal activités
                </a>

                <a class="list-group-item list-group-item-action d-flex align-items-center" href="account-signin.html">
                    <i class="fi-log-out fs-base opacity-75 me-2"></i>
                    Se déconnecter
                </a>
            </nav>
        </div>
        <!-- /////////////////// -->
    </aside>