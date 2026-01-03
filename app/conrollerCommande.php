<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    include_once("model.php");
  
    // produit_id client_id quantite
    function commandeController($action, $data) {
        try{ 
            if(empty($action)) {
                throw new ErrorException("Aucune methode fourni",404);
            }
            
            switch($action) {  
                case "create": 
                    if(isset($data["is_for_panier"]) && isset($data["client_id"]) && isset($data["type_commande"])
                        && !empty($data["client_id"]) && !empty($data["type_commande"])) {
                            if($data["is_for_panier"] == 1) {
                                return addCommandeDepuisPanier($data["type_commande"], $data["client_id"]); 
                            }
                            else{
                                $client_id = $data["client_id"];
                                $type_commande = $data["type_commande"];

                                $id_produit = $data["produit_id"];
                                $quantite = $data["quantite"];

                                $lis_prpduit[] = array("produit_id"=>$id_produit, "quantite"=>$quantite);

                                $commande = array("client_id"=>$client_id, "type_commande"=>$type_commande, "produits"=>$lis_prpduit);
                                return addCommande($commande);
                            } 
                    } 
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire[".implode(array_keys($data)),404);
                    
                case "valider":
                    if(isset($data["id"]) && !empty($data["id"])) {
                        return validerCommande($data["id"]);
                    }
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire[".implode(array_keys($data)),404);
                default :
                    
            } 
        }
        catch(Exception $e) {
            return getResponse($e->getMessage(), $e->getCode(), false);
        }
    }
 
    
    function getAllCommandesCtrl($client_id=null) {
        if($client_id) return getCommandeByClientSimple($client_id); 
    }

    function getStatistiqueClent($client_id) {
        return getClientStats($client_id);
    }

    function getCommandesList() {
        return getAllCommandes();
    }

?>