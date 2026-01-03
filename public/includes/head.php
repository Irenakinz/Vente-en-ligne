  
  <?php 

    session_start() ; 
    include_once("../app/controllerCategorie.php");
    include_once("../app/conrollerProduit.php"); 
    include_once("../app/conrollerPanier.php");

    $_IS_CONNECTED = (isset($_SESSION['client']) && !empty($_SESSION['client'])) ? 1 : 0;

    $_CLIENT_ID = 0;

    if(isset($_SESSION['client']) && !empty($_SESSION['client'])) {
      $_CLIENT_ID = $_SESSION['client']["id"];
    } 
    
    // Ou détecter automatiquement :
    $base_url = (isset($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'];
    define('BASE_URL', $base_url);

    if(isset($_GET["logout"]) && !empty($_GET["logout"])) {
      session_unset();
      session_destroy();
      header("Location:index.php");
    }
    
  ?> 
  
  <head>
    <meta charset="utf-8">

    <!-- Viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover">

    <!-- SEO Meta Tags -->
    <title>Salama</title>
    <meta name="description" content="Finder - Directory &amp; Listings Bootstrap HTML Template">
    <meta name="keywords" content="directory, listings, search, car dealer, real estate, city guide, business listings, medical directories, event listings, e-commerce, market, multipurpose, ui kit, light and dark mode, bootstrap, html5, css3, javascript, gallery, slider, mobile, pwa">
    <meta name="author" content="Createx Studio">

    <!-- Webmanifest + Favicon / App icons -->
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="manifest" href="/manifest.json">
    <link rel="icon" type="image/png" href="assets/app-icons/icon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon" href="assets/app-icons/icon-180x180.png">
    <link rel="stylesheet" href="assets/css/anime.css">

    <!-- Theme switcher (color modes) -->
    <script src="assets/js/theme-switcher.js"></script>

    <!-- Preloaded local web font (Inter) -->
    <link rel="preload" href="assets/fonts/inter-variable-latin.woff2" as="font" type="font/woff2" crossorigin="">

    <!-- Font icons -->
    <link rel="preload" href="assets/icons/finder-icons.woff2" as="font" type="font/woff2" crossorigin="">
    <link rel="stylesheet" href="assets/icons/finder-icons.min.css">

    <!-- Vendor styles -->
    <link rel="stylesheet" href="assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/vendor/choices.js/choices.min.css">

    <!-- Bootstrap + Theme styles -->
    <link rel="preload" href="assets/css/theme.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.rtl.min.css" as="style">
    <link rel="stylesheet" href="assets/css/theme.min.css" id="theme-styles">
    <link rel="stylesheet" href="assets/css/anime.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Customizer -->
    <script src="assets/js/customizer.min.js"></script>
  </head>



<?php
 
function formatDateFrancais($dateString) {
    // Vérifier si la date est valide
    if (empty($dateString) || strtotime($dateString) === false) {
        return "Date invalide";
    }
    
    // Essayer setlocale d'abord
    setlocale(LC_TIME, 'fr_FR.UTF-8', 'fr_FR', 'fr', 'French_France.1252');
    $dateFormatee = strftime("%d %B %Y", strtotime($dateString));
    
    // Fallback si setlocale ne fonctionne pas
    if (empty($dateFormatee) || strpos($dateFormatee, '%') !== false) {
        $mois_fr = [
            1 => "janvier", 2 => "février", 3 => "mars", 4 => "avril",
            5 => "mai", 6 => "juin", 7 => "juillet", 8 => "août",
            9 => "septembre", 10 => "octobre", 11 => "novembre", 12 => "décembre"
        ];
        
        $timestamp = strtotime($dateString);
        $jour = date("d", $timestamp);
        $mois = $mois_fr[date("n", $timestamp)];
        $annee = date("Y", $timestamp);
        
        $dateFormatee = $jour . " " . $mois . " " . $annee;
    }
    
    return $dateFormatee;
}
 

?>