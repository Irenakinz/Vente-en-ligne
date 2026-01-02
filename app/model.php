<?php

    // Gestion des delechargement des fichiers
    function uploadFile($file) {
        try {
            if (!isset($file['tmp_name']) || empty($file['tmp_name'])) {
                throw new Exception("L'image que vous avez soumis est invalide, merci de bien verifier ce champ", 400);
            }

            $folderImages = "../medias/";

            if (!is_dir($folderImages)) {
                mkdir($folderImages, 0775, true);
            }

            $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
            $newFileName = date('Ymd_His') . '_' . uniqid() . '.' . $extension;
            $targetPath = $folderImages . $newFileName;

            if (!move_uploaded_file($file['tmp_name'], $targetPath)) {
                throw new Exception("Échec de l'upload du fichier", 500);
            }

            return $newFileName; // on stocke seulement le nom du fichier

        } catch (Exception $e) {
            throw $e;
        }
    }


    // gestionnaires des reponses serveurs
    function getResponse($message, $code, $success = false,$data = []){
        return [
            "code" => $code,
            "message" => $message,
            "success" => $success,
            "data" => $data
        ];
    }

    // connexion a la BD .......................................
    function getConnection(){
        $host = "localhost";
        $user = "root";
        $password = "";
        $dbName = "quincaillerie_db"; //  

        try {

            $pdo = new PDO(
                "mysql:host=$host;dbname=$dbName;charset=utf8",
                $user,
                $password,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            ); 

            return $pdo;

        } catch (PDOException $e) {
            throw new Exception("Erreur de connexion à la base de données");
        }
    } 

    // GESTIONS DES ADMINISTRATEURS ..................................
    //||||||| ATRIBUTS : Id Nom Prénom Email Password Photo Genre Statut

    function addAdmin($adminData){
        $sql = "INSERT INTO admin (nom, prenom, email, password, photo, genre, role)
                VALUES (:nom, :prenom, :email, :password, :photo, :genre, :role)";
                

        try {
            $pdo = getConnection();

            $hashedPassword = password_hash($adminData['password'], PASSWORD_BCRYPT);

            $photo = uploadFile($adminData['photo']);
            
            if (!$photo) {
                return getResponse("Erreur lors de l'upload de la photo", 400, false);
            }

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $adminData['nom'],
                ':prenom' => $adminData['prenom'],
                ':email' => $adminData['email'],
                ':password' => $hashedPassword,
                ':photo' => $photo,
                ':genre' => $adminData['genre'],
                ':role' =>$adminData['role']
            ]);

            
            return getResponse("Admin ajouté avec succès", 201, true);

        } catch (Exception $e) {
            throw $e;
        }
    }
 
    function updateAdmin($adminData){
        $sql = "UPDATE admin 
                SET nom=:nom, prenom=:prenom, email=:email, photo=:photo, genre=:genre
                WHERE id=:id LIMIT 1";

        try {
            $pdo = getConnection();
            $photoStr = isset($adminData["photo_str"]) ? $adminData["photo_str"] : "";
            $photo = $adminData['photo'];
            
            if (!empty($photo) && isset($photo["tmp_name"]) && !empty($photo["tmp_name"])) {
                $photo = uploadFile($photo);
                if (!$photo) 
                    return getResponse("Erreur lors de l'upload de la photo", 400, false);
                
            }
            else $photo = $photoStr;

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $adminData['nom'],
                ':prenom' => $adminData['prenom'],
                ':email' => $adminData['email'],
                ':photo' => $photo,
                ':genre' => $adminData['genre'],
                ':id' => $adminData['id']
            ]);

            return getResponse("Admin modifié avec succès", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    function getAdmins(){
        $sql = "SELECT * FROM admin ORDER BY id DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->query($sql);
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$results) {
                return getResponse("Aucun admin trouvé", 404, false,[]);
            }

            return getResponse("visualiser les admins trouves", 404, true,$results);

        } catch (Exception $e) {
            throw $e;
        }
    }

    function getAdminById($id){
        $sql = "SELECT * FROM admin WHERE id = :id LIMIT 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            $admin = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$admin) {
                return getResponse("Admin introuvable", 404, false);
            }

            return getResponse("...info", 404, false,$admin);

        } catch (Exception $e) {
            throw $e;
        }
    }
    
    function disableAdmin($id, $statut = 0){
        try {
            $pdo = getConnection();

            $sql = "UPDATE admin SET statut = :statut WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':statut' => $statut,
                ':id' => $id
            ]);

            return getResponse(
                "Admin " . ($statut == 0 ? "désactivé" : "activé") . " avec succès",
                200,
                true
            );

        } catch (Exception $e) {
            throw $e;
        }
    }
 
    //||||||| ...........................................................

    // GESTION DES CLIENTS
    // Atributs : Id Nom Prénom Email Password  Adresse Photo Genre
    function addClient($client)
    {
        $sql = "INSERT INTO clients (nom, prenom, email, password, adresse, photo, genre)
                VALUES (:nom, :prenom, :email, :password, :adresse, :photo, :genre)";

        try {
            $pdo = getConnection();

            $hashedPassword = password_hash($client['password'], PASSWORD_BCRYPT);

            $photo = uploadFile($client['photo']);
            if (!$photo) {
                return getResponse("Erreur lors de l'upload de la photo", 400, false);
            }

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $client['nom'],
                ':prenom' => $client['prenom'],
                ':email' => $client['email'],
                ':password' => $hashedPassword,
                ':adresse' => $client['adresse'],
                ':photo' => $photo,
                ':genre' => $client['genre']
            ]);

            return getResponse("Votre compte a été créé avec succès", 201, true);

        } catch (Exception $e) {
            throw $e;
        }
    }


    function updateClient($client){
        $sql = "UPDATE clients 
                SET nom=:nom, prenom=:prenom, email=:email, adresse=:adresse, 
                    photo=:photo, genre=:genre
                WHERE id=:id LIMIT 1";

        try {
            $pdo = getConnection();

            $photo = $client['photo'];

            if (is_array($photo)) {
                $photo = uploadFile($photo);
            }

            if (!$photo) {
                return getResponse("Erreur lors de l'upload de la photo", 400, false);
            }

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nom' => $client['nom'],
                ':prenom' => $client['prenom'],
                ':email' => $client['email'],
                ':adresse' => $client['adresse'],
                ':photo' => $photo,
                ':genre' => $client['genre'],
                ':id' => $client['id']
            ]);

            return getResponse("Client modifié avec succès", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    } 

    function getClients()
    {
        $sql = "SELECT * FROM clients ORDER BY id DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->query($sql);
            $clients = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$clients) {
                return getResponse("Aucun client trouvé", 404, false);
            }

            return $clients;

        } catch (Exception $e) {
            throw $e;
        }
    }

    function getClientByCommande($commande_id)
    {
        $sql = "SELECT c.* 
                FROM clients c
                INNER JOIN commandes cmd ON c.id = cmd.client_id
                WHERE cmd.id = :commande_id";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':commande_id' => $commande_id]);

            $client = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$client) {
                return getResponse("Aucun client trouvé", 404, false);
            }

            return $client;

        } catch (Exception $e) {
            throw $e;
        }
    }

    function getClientById($id)
    {
        $sql = "SELECT * FROM clients WHERE id = :id LIMIT 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            $client = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$client) {
                return getResponse("Aucun client trouvé", 404, false);
            }

            return $client;

        } catch (Exception $e) {
            throw $e;
        }
    }

    function disableClient($id)
    {
        try {
            $pdo = getConnection();

            $sql = "UPDATE clients SET statut = 0 WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            return getResponse("Client supprimé avec succès", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }
    
    // ...........................................................

    // GESTION DES CATEGORIE
    // Atributs : id description

    function addCategorie($description)    {
        $sql = "INSERT INTO categorie (description) VALUES (:description)";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql); 
            $stmt->execute([':description' => $description]); 
            return getResponse("Catégorie ajoutée avec succès", 201, true);

        } catch (Exception $e) {
            throw $e;
        }
    } 

    function getAllCategorie()
    {
        $sql = "SELECT * FROM categorie ORDER BY id DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->query($sql);
            $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$categories) {
                return getResponse("Aucune catégorie trouvée", 404, false);
            }

            return getResponse("..categorie trouve avec success", 200, true,$categories);

        } catch (Exception $e) {
            throw $e;
        }
    }

    function getCategorieById($id)
    {
        $sql = "SELECT * FROM categorie  WHERE id=".$id." ORDER BY id DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->query($sql);
            $categories = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$categories) {
                return getResponse("Aucune catégorie trouvée", 404, false);
            }

            return getResponse("..categorie trouve avec success", 200, true,$categories);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // ...........................................................

    // GESTION DES PRODUITS
    // Atributs : id titre description id_catégorie quantité Prix unitaire image représentatif statut

    //ok
    function addProduit($produit)
    {
        $sql = "INSERT INTO produits
                (titre, description, categorie_id, quantite, prix_unitaire, image, statut)
                VALUES
                (:titre, :description, :categorie_id, :quantite, :prix_unitaire, :image, 1)";

        try {
            $pdo = getConnection();

            $image = uploadFile($produit['photo']);
            if (!$image) {
                return getResponse("Erreur lors de l'upload de l'image", 400, false);
            }

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':titre' => $produit['titre'],
                ':description' => $produit['description'],
                ':categorie_id' => $produit['categorie_id'],
                ':quantite' => $produit['quantite'],
                ':prix_unitaire' => $produit['prix_unitaire'],
                ':image' => $image
            ]);

            return getResponse("Produit ajouté avec succès", 201, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    //ok
    function updateProduit($produit)
    {
        $sql = "UPDATE produits SET  titre=:titre,  description=:description,
                categorie_id=:categorie_id,  quantite=:quantite,
                prix_unitaire=:prix_unitaire, image=:image
                WHERE id=:id LIMIT 1";

        try {
            $pdo = getConnection();

            $image = $produit['photo'];
            $image_update = $produit['image_update'];

            if (is_array($image) && isset($image["tmp_name"]) && !empty($image["tmp_name"])) {
                $image = uploadFile($image);
                if (!$image) {
                    return getResponse("Erreur lors de l'upload de l'image", 400, false);
                }
            } else{
                $image = $image_update;
            }

            

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':titre' => $produit['titre'],
                ':description' => $produit['description'],
                ':categorie_id' => $produit['categorie_id'],
                ':quantite' => $produit['quantite'],
                ':prix_unitaire' => $produit['prix_unitaire'],
                ':image' => $image,
                ':id' => $produit['id']
            ]);

            return getResponse("Produit modifié avec succès", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    //ok
    function getAllProduit($is_admin = false)
    {
        $sql = "SELECT p.*, c.description AS categorie, c.icone icone
                FROM produits p
                INNER JOIN categorie c ON p.categorie_id = c.id".($is_admin == false ? " AND p.statut = 1":"")."
                ORDER BY p.id DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->query($sql);
            $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$produits) {
                return getResponse("Aucun produit trouvé", 404, false);
            }

            return getResponse("Liste des produits", 404, true,$produits);
            

        } catch (Exception $e) {
            throw $e;
        }
    }

    //ok
    function getProduitById($id)
    {
        $sql = "SELECT * FROM produits WHERE id = :id LIMIT 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            $produit = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$produit) {
                return getResponse("Produit introuvable", 404, false);
            }
 
            return getResponse("details du produits", 200, true,$produit);

        } catch (Exception $e) {
            throw $e;
        }
    }

    function getProduitByCategorie($categorie_id,$is_admin = false)
    {
        $sql = "SELECT p.*, c.description AS categorie, c.icone icone
                FROM produits p
                INNER JOIN categorie c ON p.categorie_id = c.id 
                WHERE categorie_id = :categorie_id ".($is_admin == false ? " AND p.statut = 1":"")."
                ORDER BY id DESC";
        

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':categorie_id' => $categorie_id]);

            $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$produits) {
                return getResponse("Aucun produit trouvé pour cette catégorie", 404, false);
            }

            
            return getResponse("liste des produits", 200, true,$produits);

        } catch (Exception $e) {
            throw $e;
        }
    }

    //ok
    function activeDesactiveProduit($id, $statut = 0)
    {
        try {
            $pdo = getConnection();

            $sql = "UPDATE produits SET statut = :statut WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':statut' => $statut,
                ':id' => $id
            ]);

            return getResponse(
                "Produit " . ($statut == 1 ? "activé" : "désactivé") . " avec succès",
                200,
                true
            );

        } catch (Exception $e) {
            throw $e;
        }
    }

    function getLastSavedProduit() {
         $sql = "SELECT p.*, c.description AS categorie, c.icone icone
                FROM produits p
                INNER JOIN categorie c ON p.categorie_id = c.id WHERE p.statut = 1
                ORDER BY p.id DESC LIMIT 6";

        try {
            $pdo = getConnection();
            $stmt = $pdo->query($sql);
            $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$produits) {
                return getResponse("Aucun produit trouvé", 404, false);
            }

            return getResponse("Liste des produits", 404, true,$produits);
            

        } catch (Exception $e) {
            throw $e;
        }
    }
 
    // ...........................................................

    // GESTION DES PANIERS
    // Attributs : id, client_id, produit_id, quantite, prix_unitaire, created_at 

    // Vérifie si le stock est suffisant
    function verifyStock($produit_id, $quantite)
    {
        $sql = "SELECT quantite FROM produit WHERE id = :id AND statut = 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $produit_id]);
            $produit = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$produit) {
                return getResponse("Produit introuvable ou désactivé", 404, false);
            }

            if ($produit['quantite'] < $quantite) {
                return getResponse("Stock insuffisant (quantite restant:".$produit['quantite'].")", 400, false);
            }

            return true;

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Ajouter un produit au panier
    function addToPanier($panier)
    {
        try {
            $pdo = getConnection();

            $checkStock = verifyStock($panier['produit_id'], $panier['quantite']);

            if ($checkStock !== true) {
                return $checkStock;
            }

            // Vérifie si le produit existe déjà dans le panier
            $sqlCheck = "SELECT id, quantite FROM panier 
                        WHERE client_id = :client_id AND produit_id = :produit_id";
            $stmtCheck = $pdo->prepare($sqlCheck);
            $stmtCheck->execute([
                ':client_id' => $panier['client_id'],
                ':produit_id' => $panier['produit_id']
            ]);

            $existing = $stmtCheck->fetch(PDO::FETCH_ASSOC);

            if ($existing) {
                // Mise à jour quantité
                $sqlUpdate = "UPDATE panier SET quantite = quantite + :quantite WHERE id = :id";
                $stmtUpdate = $pdo->prepare($sqlUpdate);
                $stmtUpdate->execute([
                    ':quantite' => $panier['quantite'],
                    ':id' => $existing['id']
                ]);

                return getResponse("Quantité du panier mise à jour", 200, true);
            }

            // Récupération du prix unitaire
            $stmtPrice = $pdo->prepare("SELECT prix_unitaire FROM produit WHERE id = :id");
            $stmtPrice->execute([':id' => $panier['produit_id']]);
            $prix = $stmtPrice->fetchColumn();

            // Ajout au panier
            $sql = "INSERT INTO panier (client_id, produit_id, quantite, prix_unitaire)
                    VALUES (:client_id, :produit_id, :quantite, :prix_unitaire)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':client_id' => $panier['client_id'],
                ':produit_id' => $panier['produit_id'],
                ':quantite' => $panier['quantite'],
                ':prix_unitaire' => $prix
            ]);

            return getResponse("Produit ajouté au panier avec success", 201, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Mettre à jour le panier (quantité)
    function updatePanier($panier)
    {
        try {
            $pdo = getConnection();

            $checkStock = verifyStock($panier['produit_id'], $panier['quantite']);
            if ($checkStock !== true) {
                return $checkStock;
            }

            $sql = "UPDATE panier SET quantite = :quantite WHERE id = :id AND client_id = :client_id";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':quantite' => $panier['quantite'],
                ':id' => $panier['id'],
                ':client_id' => $panier['client_id']
            ]);

            return getResponse("Panier mis à jour avec succès", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Supprimer un produit du panier
    function deleteToPanier($id)
    {
        try {
            $pdo = getConnection();

            $sql = "DELETE FROM panier WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            return getResponse("Produit supprimé du panier", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Récupérer le panier d'un client
    function getAllPaniers($client_id)
    {
        $sql = "SELECT p.*, pr.titre, pr.image
                FROM panier p
                INNER JOIN produit pr ON p.produit_id = pr.id
                WHERE p.client_id = :client_id";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':client_id' => $client_id]);
            $panier = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$panier) {
                return getResponse("Panier vide", 404, false);
            }

            return $panier;

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Supprimer le panier après un temps donné
    function deletePanierAfterTimeGiven($timeInSecond, $client_id)
    {
        try {
            $pdo = getConnection();

            $sql = "DELETE FROM panier
                    WHERE client_id = :client_id
                    AND TIMESTAMPDIFF(SECOND, created_at, NOW()) >= :time";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':client_id' => $client_id,
                ':time' => $timeInSecond
            ]);

            return getResponse("Panier expiré supprimé", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }
 
    // ...........................................................

    // GESTION DES COMMANDES
    // Attributs : id, produit_id, client_id, type_commande, quantite,
    // date_commande, date_livraison, is_commande_paid, etat 

    // Ajouter une commande
    function addCommande($commande){
        try {
            $pdo = getConnection();

            // Vérification du stock
            $checkStock = verifyStock($commande['produit_id'], $commande['quantite']);

            if ($checkStock !== true) {
                return $checkStock;
            }

            // Récupérer le prix unitaire
            $stmtPrice = $pdo->prepare(
                "SELECT prix_unitaire FROM produit WHERE id = :id"
            );

            $stmtPrice->execute([':id' => $commande['produit_id']]);
            $prixUnitaire = $stmtPrice->fetchColumn();

            $sql = "INSERT INTO commande
                    (produit_id, client_id, type_commande, quantite, prix_unitaire,
                    date_commande, is_commande_paid, etat)
                    VALUES
                    (:produit_id, :client_id, :type_commande, :quantite, :prix_unitaire, NOW(), 0, 0)";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':produit_id' => $commande['produit_id'],
                ':client_id' => $commande['client_id'],
                ':type_commande' => $commande['type_commande'],
                ':quantite' => $commande['quantite'],
                ':prix_unitaire' => $prixUnitaire
            ]);

            // Décrémentation du stock
            $pdo->prepare(
                "UPDATE produit SET quantite = quantite - :q WHERE id = :id"
            )->execute([
                ':q' => $commande['quantite'],
                ':id' => $commande['produit_id']
            ]);

            return getResponse("Commande realisé avec succès", 201, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Mettre à jour une commande (avant validation)
    function updateCommande($id, $data)
    {
        $sql = "UPDATE commande SET type_commande = :type_commande, quantite = :quantite WHERE id = :id AND etat = 0";

        try {
            $pdo = getConnection();

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':type_commande' => $data['type_commande'],
                ':quantite' => $data['quantite'],
                ':id' => $id
            ]);

            return getResponse("Commande mise à jour", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Valider une commande (payer + terminer)
    function validerCommande($id)
    {
        try {
            $pdo = getConnection();

            $sql = "UPDATE commande SET is_commande_paid = 1, etat = 1, date_livraison = NOW() WHERE id = :id";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            return getResponse("Commande validée avec succès", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Toutes les commandes
    function getAllCommandes()
    {
        $sql = "SELECT c.*, p.titre, cl.nom, cl.prenom
                FROM commande c INNER JOIN produit p ON c.produit_id = p.id
                INNER JOIN client cl ON c.client_id = cl.id ORDER BY c.date_commande DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->query($sql);
            $commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$commandes) {
                return getResponse("Aucune commande trouvée", 404, false);
            }

            return $commandes;

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Commande par ID
    function getCommandeById($id)
    {
        $sql = "SELECT * FROM commande WHERE id = :id LIMIT 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            $commande = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$commande) {
                return getResponse("Commande introuvable", 404, false);
            }

            return $commande;

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Commandes par client
    function getCommandeByClient($client_id)
    {
        $sql = "SELECT * FROM commande WHERE client_id = :client_id ORDER BY date_commande DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':client_id' => $client_id]);

            $commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$commandes) {
                return getResponse("Aucune commande pour ce client", 404, false);
            }

            return $commandes;

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Commandes par produit
    function getCommandeByProduit($produit_id)
    {
        $sql = "SELECT * FROM commande 
                WHERE produit_id = :produit_id
                ORDER BY date_commande DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':produit_id' => $produit_id]);

            $commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$commandes) {
                return getResponse("Aucune commande pour ce produit", 404, false);
            }

            return $commandes;

        } catch (Exception $e) {
            throw $e;
        }
    } 
 
    // ................................................................

    // GESTION DES LOGS D'ACTIVITÉS UTILISATEURS (ADMIN SEULEMENT)
    // Attributs : id, user_email, date_connexion, date_deconnexion,
    // success (0,1), adresse_ip, navigateur 

    // Ajouter un log (connexion admin)
    function addLog($log)
    {
        $sql = "INSERT INTO logs_activites
                (user_email, date_connexion, success, adresse_ip, navigateur)
                VALUES (:user_email, NOW(), 1, :adresse_ip, :navigateur)"; 
        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':user_email' => $log['user_email'],
                ':adresse_ip' => $log['adresse_ip'],
                ':navigateur' => $log['navigateur']
            ]);

            return getResponse("Log de connexion enregistré", 201, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Récupérer tous les logs
    function getAllLogs()
    {
        $sql = "SELECT * FROM logs_activites ORDER BY date_connexion DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->query($sql);
            $logs = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$logs) {
                return getResponse("Aucun log trouvé", 404, false);
            }

            return $logs;

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Récupérer un log par ID
    function getLogsById($id)
    {
        $sql = "SELECT * FROM logs_activites WHERE id = :id LIMIT 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':id' => $id]);

            $log = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$log) {
                return getResponse("Log introuvable", 404, false);
            }

            return $log;

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Récupérer les logs d'un administrateur (par email)
    function getLogsByUser($user_email)
    {
        $sql = "SELECT * FROM logs_activites  WHERE user_email = :user_email ORDER BY date_connexion DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':user_email' => $user_email]);

            $logs = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$logs) {
                return getResponse("Aucun log pour cet administrateur", 404, false);
            }

            return $logs;

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Mettre fin à une session admin (déconnexion)
    function closeLogSession($user_email)
    {
        $sql = "UPDATE logs_activites
                SET date_deconnexion = NOW(), success = 0
                WHERE user_email = :user_email AND success = 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':user_email' => $user_email]);

            return getResponse("Session administrateur fermée", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // GESTION DES UTILISATEURS .............................................
    
    function loginAdmin($email, $password)
    {
        $sql = "SELECT * FROM admin WHERE email = :email LIMIT 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':email' => $email]);
            $admin = $stmt->fetch(PDO::FETCH_ASSOC);

            // Email incorrect
            if (!$admin) {
                throw new Exception("Email ou mot de passe incorrect", 401);
            }

            // Mot de passe incorrect
            if (!password_verify($password, $admin['password'])) {
                throw new Exception("Email ou mot de passe incorrect", 401);
            }

            // Supprimer le mot de passe avant retour
            unset($admin['password']);

            return getResponse("Log de connexion enregistré", 200, true,$admin);

        } catch (Exception $e) {
            throw $e;
        }
    }

    function loginClient($email, $password)
    {
        $sql = "SELECT * FROM admin WHERE client = :email LIMIT 1";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':email' => $email]);
            $client = $stmt->fetch(PDO::FETCH_ASSOC);

            // Email incorrect
            if (!$client) {
                throw new Exception("Email ou mot de passe incorrect", 401);
            }

            // Mot de passe incorrect
            if (!password_verify($password, $client['password'])) {
                throw new Exception("Email ou mot de passe incorrect", 401);
            }

            // Supprimer le mot de passe avant retour
            unset($client['password']);

            return $client;

        } catch (Exception $e) {
            throw $e;
        }
    }

   
?> 