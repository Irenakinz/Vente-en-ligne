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
                case "create" :
                    if(isProduitValid($data)) return addProduit($data); 
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire",404); 
                    break; 

                case "update": 
                    if(isProduitValid($data) && isset($data["id"]) && !empty($data["id"])) {
                        $response = updateAdmin($data);
                        if($response["success"]) {
                            $_SESSION['user'] = getAdminById($data["id"]);
                        }

                        return $response;
                    }
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire[".implode(array_keys($data)),404); 
                    break;
                case "create":
                    if(isProduitValid($data)) {
                        $response = addAdmin($data); 
                        return $response;
                    }
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire",404); 
                    break;

                 case "active_desactive":
                    if(isset($data["statut"]) && isset($data["id_admin"])) {
                        $id = intval($data["id_admin"]);
                        $statut = intval($data["statut"]);
                        $response = disableAdmin($id, $statut); 
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

    // function getAdmin($id=null) {
    //     if($id) return getAdminById($id);
    //     else return getAdmins();
    // }

?>