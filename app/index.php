<?php

    declare(strict_types=1);

    session_start();

    include_once("conrollerAdmin.php");
    include_once("conrollerClient.php");
    include_once("conrollerProduit.php");

    set_exception_handler(function($e){
        echo json_encode(getResponse($e->getMessage(), $e->getCode(), false));
    });

    set_error_handler(function( int $errno,String $errstr, String $errfile,int $errline){
        throw new ErrorException($errstr,500,$errno,$errfile,$errline);
    });

     
    if(!isset($_GET['action']) && empty(($_GET['action']))) {
        echo json_encode(["message"=>"action requis", "success"=>false, "code"=>404]); exit;
    }

    $tabAction = explode("/",$_GET['action']);
    $action = $tabAction[1];
    $path = $tabAction[0];
    $data = [];
 
    switch($_SERVER["REQUEST_METHOD"]) {
        case "POST" : $data = $_POST; break;
        case "GET" : $data = $_GET;; break;
    }

    if(isset($_FILES['photo'])) $data["photo"] = $_FILES['photo'];

    switch($path) {
        case "admin" : 
            $return = adminController($action, $data);
            echo json_encode($return); break;

        case "produit" : 
            $return = produitController($action, $data);
            echo json_encode($return); break;

        case "client" : 
            $return = clientController($action, $data);
            echo json_encode($return); break;
    }

?>

