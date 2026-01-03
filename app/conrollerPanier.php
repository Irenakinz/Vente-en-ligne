<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    include_once("model.php");
  
    // produit_id client_id quantite
    function panierController($action, $data) {
        try{ 
            if(empty($action)) {
                throw new ErrorException("Aucune methode fourni",404);
            }

            switch($action) {  
                case "update": 
                    if(isset($data["id"]) && isset($data["client_id"]) && isset($data["quantite"])
                        && !empty($data["id"]) && !empty($data["client_id"]) && !empty($data["quantite"])) {
                        $response = updatePanier($data); 
                        return $response; 
                    } 
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire[".implode(array_keys($data)),404); 
                    break;

                case "ajout_au_panier":
                    if(isset($data["produit_id"]) && isset($data["client_id"]) && isset($data["quantite"])
                        && !empty($data["produit_id"]) && !empty($data["client_id"]) && !empty($data["quantite"])) {
                        $response = addToPanier($data); 
                        return $response; 
                    }
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire",404); 
                    break;

                case "delete":
                    if(isset($data["id"])) {
                        $id = intval($data["id"]); 
                        $response = deleteToPanier($id); 
                        return $response; 
                    }
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire",404); 
                    break;
                
                default :;
            } 
        }
        catch(Exception $e) {
            return getResponse($e->getMessage(), $e->getCode(), false);
        }
    }

    // function isDataValid($data) { 
    //     if(isset($data["nom"]) && isset($data["prenom"]) && isset($data["email"]) 
    //     && isset($data["photo"]) && isset($data["genre"]) && isset($data["role"])) 
    //     {
    //         if(!empty($data["nom"]) && !empty($data["prenom"]) && !empty($data["email"]) 
    //         && !empty($data["genre"]) && !empty($data["role"]) && !empty($data["photo"])) 
    //         {
    //             return true;
    //         }  
    //     }
        
    //     return false;
    // }

    function getAllPaniers($client_id=null) {
        if($client_id) return getPanier($client_id); 
    }

?>