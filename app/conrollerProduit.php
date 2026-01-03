<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
 
    include_once("model.php");
  
    // nom, prenom, email, password, photo, genre, role
    function produitController($action, $data) {
        try{ 
            if(empty($action)) {
                throw new ErrorException("Aucune methode fourni",404);
            }

            switch($action) { 
                case "update": 
                    if(isProduitValid($data) && isset($data["id"]) && !empty($data["id"])) {
                        $response = updateProduit($data); 
                        return $response;
                    }
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire[".implode(array_keys($data)),404); 
                    break;

                case "create":
                    if(isProduitValid($data)) {
                        $response = addProduit($data); 
                        return $response;
                    }
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire",404); 
                    break;

                case "active_desactive":
                    if(isset($data["statut"]) && isset($data["id_produit"])) {
                        $id = intval($data["id_produit"]);
                        $statut = intval($data["statut"]);
                        $response = activeDesactiveProduit($id, $statut); 
                        return $response; 
                    }
                    else 
                        throw new ErrorException("Une erreur est survenu",500); 
                        break;
                    
                case "getById":
                    if(isset($data["produit_id"]) && !empty($data["produit_id"])) {
                        $id = intval($data["produit_id"]); 
                        $response = getProduits($id); 
                        return $response; 
                    }
                    else 
                        throw new ErrorException("Une erreur est survenu",500); 

                default :;
            } 
        }
        catch(Exception $e) {
            return getResponse($e->getMessage(), $e->getCode(), false);
        }
    }
    

    function isProduitValid($data) { 
        if(isset($data["titre"]) && isset($data["description"]) && isset($data["categorie_id"]) 
        && isset($data["photo"]) && isset($data["quantite"]) && isset($data["prix_unitaire"])) 
        {
            if(!empty($data["titre"]) && !empty($data["description"]) && !empty($data["categorie_id"]) 
            && !empty($data["photo"]) && !empty($data["quantite"]) && !empty($data["prix_unitaire"])) 
            {
                return true;
            }  
        }
        
        return false;
    }

    function getProduits($id=null,$is_admin=false) {
        if($id) return getProduitById($id);
        else return getAllProduit($is_admin);
    }

    function getLastProduit() {
        return getLastSavedProduit();
    }

?>