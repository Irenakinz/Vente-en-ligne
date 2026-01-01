<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

    include_once("model.php");
  
    // nom, prenom, email, password, photo, genre, role
    function adminController($action, $data) {
        try{ 
            if(empty($action)) {
                throw new ErrorException("Aucune methode fourni",404);
            }

            switch($action) {
                case "nouveau_admin" :
                    if(isDataValid($data)) return addAdmin($data); 
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire",404); 
                    break;

                case "login" :
                    if(isset($data["email"]) && isset($data["password"]) 
                        && !empty($data["email"]) && !empty($data["password"])) {
                            $email = htmlspecialchars($data["email"]);
                            $password = htmlspecialchars($data["password"]);
                            $response = loginAdmin($email, $password);

                            if($response["success"]) $_SESSION['user'] = $response["data"]; 

                            return $response;
                    } 
                    else 
                        throw new ErrorException("Veuillez renseigner tous les champs avant de soumettre le formulaire",404); 
                    break;

                case "update": 
                    if(isDataValid($data) && isset($data["id"]) && !empty($data["id"])) {
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
                    if(isDataValid($data)) {
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

    function isDataValid($data) { 
        if(isset($data["nom"]) && isset($data["prenom"]) && isset($data["email"]) 
        && isset($data["photo"]) && isset($data["genre"]) && isset($data["role"])) 
        {
            if(!empty($data["nom"]) && !empty($data["prenom"]) && !empty($data["email"]) 
            && !empty($data["genre"]) && !empty($data["role"]) && !empty($data["photo"])) 
            {
                return true;
            }  
        }
        
        return false;
    }

    function getAdmin($id=null) {
        if($id) return getAdminById($id);
        else return getAdmins();
    }

?>