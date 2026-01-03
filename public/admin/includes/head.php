
  <?php 

    session_start() ;
    include_once("../../app/conrollerAdmin.php");
    include_once("../../app/controllerCategorie.php");
    include_once("../../app/conrollerProduit.php");
    include_once("../../app/conrollerProduit.php");
    include_once("../../app/conrollerClient.php");

  ?> 
  <head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Vente produits</title>
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap HTML Template">
    <meta name="keywords" content="directory, listings, search, car dealer, real estate, city guide, business listings, medical directories, event listings, e-commerce, market, multipurpose, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="../assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="../assets/app-icons/icon-180x180.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">


    <!-- Theme switcher (color modes) -->
    <script src="../assets/js/theme-switcher.js"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="../assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="../assets/icons/finder-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="../assets/icons/finder-icons.min.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="../assets/vendor/glightbox/glightbox.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="../assets/css/theme.min.css" as="style">
    <link rel="preload" href="../assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="../assets/css/theme.min.css" id="theme-styles">
    <link rel="stylesheet" href="../assets/css/anime.css">

    <!-- Customizer -->
    <script src="../assets/js/customizer.min.js"></script>
  </head>

  <?php

  if((!isset($_SESSION['user']) && empty($_SESSION['user']))
    || ($_SESSION['user']['role'] !== "admin" && $_SESSION['user']['role'] !== "root")) 
        header("Location:index.php");
   
  if(isset($_GET["logout"]) && !empty($_GET["logout"])) {
    session_unset();
    session_destroy();
    header("Location:index.php");
  }

   // Ou détecter automatiquement :
    $base_url = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    define('BASE_URL', $base_url);
    
  ?>

<style>
    .dot-spinner.spine-bouse {
        --uib-size: 2.0rem;
        --uib-speed: .9s;
        --uib-color: #1a27e7ff;
    }
</style>