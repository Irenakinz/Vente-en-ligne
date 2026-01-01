<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    include_once("model.php");

    function getCategorie($id = null) {
        if($id) return getCategorieById($id);
        else return getAllCategorie();
    }

?>