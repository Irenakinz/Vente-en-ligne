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
        
        // $host = "sql211.infinityfree.com";
        // $user = "f0_40808932";
        // $password = "W7V8LkYQFMV";
        // $dbName = "if0_40808932_quincaillerie_db"; //  

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
    // Atributs : id nom prenom Email password  adresse photo genre
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

            
            return getResponse("Aucun client trouvé", 404, true, $clients);

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
        $sql = "SELECT quantite FROM produits WHERE id = :id AND statut = 1";

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

            return getResponse("Stock valable", 200, true);

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

            if ($checkStock["success"] !== true) {
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

                return getResponse("Quantité du panier mise à jour avec success", 200, true);
            }

            // Récupération du prix unitaire
            $stmtPrice = $pdo->prepare("SELECT prix_unitaire FROM produits WHERE id = :id");
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
            if ($checkStock["success"] !== true) {
                return $checkStock;
            }

            $sql_panier = "UPDATE panier SET quantite = :quantite WHERE id = :id AND client_id = :client_id";

            $stmt = $pdo->prepare($sql_panier);
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

            return getResponse("Produit supprimé du panier avec success", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }

    // Récupérer le panier d'un client
    function getPanier($client_id)
    {
        $sql = "SELECT p.*,pr.id as produit_id, pr.titre, pr.image, pr.description, c.description categorie
                FROM panier p
                INNER JOIN produits pr ON p.produit_id = pr.id
                INNER JOIN categorie c ON pr.categorie_id = c.id
                WHERE p.client_id = :client_id";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':client_id' => $client_id]);
            $panier = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$panier) {
                return getResponse("Panier vide", 404, false);
            }

            $coupTotal = 0;

            foreach($panier as $produit) {
                $coupTotal += $produit['quantite'] * $produit["prix_unitaire"];
            }

            $data = ["panier"=>$panier, "total"=>$coupTotal, "articles"=> count($panier)];

            return getResponse("voir la liste", 404, true,$data); 

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
 
    function deletePanierClient($client_id) {
         try {
            $pdo = getConnection();

            $sql = "DELETE FROM panier
                    WHERE client_id = :client_id ";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':client_id' => $client_id, 
            ]);

            return getResponse("Panier supprimé", 200, true);

        } catch (Exception $e) {
            throw $e;
        }
    }
    // ...........................................................

    // GESTION DES COMMANDES
    // Attributs : id, client_id, type_commande, couptotatal,
    // date_commande, date_livraison, is_commande_paid, etat 

    //id_commande id_produit 

    // Ajouter une commande 
    function addCommande($commande){
        try {
            $pdo = getConnection();
            
            // Démarrer une transaction
            $pdo->beginTransaction();

            // Calculer le coût total en vérifiant le stock pour chaque produit
            $couptotatal = 0;
            $produitsCommandes = $commande['produits']; // Tableau des produits: [['id' => X, 'quantite' => Y], ...]

            foreach ($produitsCommandes as $produit) {
                // Vérification du stock pour chaque produit
                $checkStock = verifyStock($produit['produit_id'], $produit['quantite']);
                if ($checkStock["success"] !== true) {
                    $pdo->rollBack();
                    return $checkStock;
                }

                // Récupérer le prix unitaire
                $stmtPrice = $pdo->prepare(
                    "SELECT prix_unitaire FROM produits WHERE id = :id"
                );
                $stmtPrice->execute([':id' => $produit['produit_id']]);
                $prixUnitaire = $stmtPrice->fetchColumn();

                // Ajouter au coût total
                $couptotatal += ($prixUnitaire * $produit['quantite']);
            }

            switch($commande['type_commande']) {
                case 1: $couptotatal+=0;
                case 2: $couptotatal+=3500;
                case 3: $couptotatal+=6000;
            }

            // Insérer dans la table commandes
            $sqlCommande = "INSERT INTO commandes 
                            (client_id, type_commande, couptotatal, date_commande, date_livraison, is_commande_paid, etat)
                            VALUES 
                            (:client_id, :type_commande, :couptotatal, NOW(), :date_livraison, :is_commande_paid, :etat)";

            $stmtCommande = $pdo->prepare($sqlCommande);
            $stmtCommande->execute([
                ':client_id' => $commande['client_id'],
                ':type_commande' => $commande['type_commande'],
                ':couptotatal' => $couptotatal,
                ':date_livraison' => isset($commande['date_livraison']) ? $commande['date_livraison'] : NULL,
                ':is_commande_paid' => isset($commande['is_commande_paid']) ? $commande['is_commande_paid'] : 0,
                ':etat' => isset($commande['etat']) ? $commande['etat'] : 0
            ]);

            // Récupérer l'ID de la commande nouvellement créée
            $commandeId = $pdo->lastInsertId();

            // Insérer chaque produit dans la table produit_commande
            foreach ($produitsCommandes as $produit) {
                // Récupérer le prix unitaire à nouveau (ou utiliser un tableau pré-calculé)
                $stmtPrice = $pdo->prepare("SELECT prix_unitaire FROM produits WHERE id = :id");
                $stmtPrice->execute([':id' => $produit['produit_id']]);
                $prixUnitaire = $stmtPrice->fetchColumn();

                // Insérer dans produit_commande
                $sqlProduitCommande = "INSERT INTO produit_commande 
                                    (id_commande, id_produit, quantite, prix_unitaire)
                                    VALUES 
                                    (:id_commande, :id_produit, :quantite, :prix_unitaire)";

                $stmtProduit = $pdo->prepare($sqlProduitCommande);
                $stmtProduit->execute([
                    ':id_commande' => $commandeId,
                    ':id_produit' => $produit['produit_id'],
                    ':quantite' => $produit['quantite'],
                    ':prix_unitaire' => $prixUnitaire
                ]);

                // Décrémenter le stock pour ce produit
                $pdo->prepare(
                    "UPDATE produits SET quantite = quantite - :q WHERE id = :id"
                )->execute([
                    ':q' => $produit['quantite'],
                    ':id' => $produit['produit_id']
                ]);
            }

            deletePanierClient($commande['client_id']);

            // Valider la transaction
            $pdo->commit();

            return getResponse("Commande réalisée avec succès. ID: " . $commandeId, 201, true, ['commande_id' => $commandeId]);

        } catch (Exception $e) {
            // Annuler la transaction en cas d'erreur
            if (isset($pdo) && $pdo->inTransaction()) {
                $pdo->rollBack();
            }
            throw $e;
        }
    }

    // si les produit provienne directement du panier
    function addCommandeDepuisPanier($type_commande, $client_id) {
        $pannier = getPanier( $client_id);

        if(!$pannier["success"]) {
            return getResponse("Une erreur est survenu, votre panier semble etre vide", 500, false);
        }

        $lis_prpduit = [];

        foreach($pannier["data"]['panier'] as $produit) {
            $id_produit = $produit["produit_id"];
            $auantite = $produit["quantite"];
            $lis_prpduit[] = array("produit_id"=>$id_produit, "quantite"=>$auantite);
        }

        

        $commande = array("client_id"=>$client_id, "type_commande"=>$type_commande, "produits"=>$lis_prpduit);
        return addCommande($commande);
        
    }  
     
    // ................................................................
    // Version alternative sans JSON (pour MySQL < 5.7)
    function getCommandeByClientSimple($client_id)
    {
        $sql = "SELECT 
                cmd.*,
                cl.nom as client_nom,
                cl.prenom as client_prenom
                FROM commandes cmd
                INNER JOIN clients cl ON cmd.client_id = cl.id
                WHERE cmd.client_id = :client_id
                ORDER BY cmd.date_commande DESC";

        try {
            $pdo = getConnection();
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':client_id' => $client_id]);

            $commandes = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!$commandes) {
                return getResponse("Aucune commande pour ce client", 404, false);
            }

            // Récupérer les détails des produits pour chaque commande
            foreach ($commandes as &$commande) {
                $sqlProduits = "SELECT 
                                    pc.*,
                                    p.titre,
                                    p.image,
                                    p.description,
                                    (pc.quantite * pc.prix_unitaire) as sous_total
                                FROM produit_commande pc
                                INNER JOIN produits p ON pc.id_produit = p.id
                                WHERE pc.id_commande = :commande_id";
                
                $stmtProduits = $pdo->prepare($sqlProduits);
                $stmtProduits->execute([':commande_id' => $commande['id']]);
                $produits = $stmtProduits->fetchAll(PDO::FETCH_ASSOC);
                
                $commande['produits_detaille'] = $produits;
                $commande['nombre_produits'] = count($produits);
            }
 
            return getResponse("Commandes pour le client", 404, true, $commandes);

        } catch (Exception $e) {
            throw $e;
        }
    }

    function getClientStats($client_id) {
        try {
            $pdo = getConnection();
            
            // Requête unique pour toutes les statistiques
            $sql = "SELECT 
                        -- Nombre total de produits commandés
                        (
                            SELECT SUM(pc.quantite)
                            FROM produit_commande pc
                            INNER JOIN commandes cmd ON pc.id_commande = cmd.id
                            WHERE cmd.client_id = :client_id
                        ) as total_produits_commandes,
                        
                        -- Nombre de commandes en cours (etat = 0)
                        (
                            SELECT COUNT(*)
                            FROM commandes
                            WHERE client_id = :client_id AND etat = 0
                        ) as commandes_en_cours,
                        
                        -- Nombre de commandes livrées (etat = 2 selon votre structure précédente)
                        (
                            SELECT COUNT(*)
                            FROM commandes
                            WHERE client_id = :client_id AND etat = 2
                        ) as commandes_livrees,
                        
                        -- Coût total dépensé (commandes avec état validé = 1)
                        (
                            SELECT COALESCE(SUM(couptotatal), 0)
                            FROM commandes
                            WHERE client_id = :client_id AND etat = 1
                        ) as total_depense_valide,
                        
                        -- Coût total toutes commandes confondues
                        (
                            SELECT COALESCE(SUM(couptotatal), 0)
                            FROM commandes
                            WHERE client_id = :client_id
                        ) as total_depense_tout,
                        
                        -- Nombre total de commandes
                        (
                            SELECT COUNT(*)
                            FROM commandes
                            WHERE client_id = :client_id
                        ) as total_commandes
                    FROM DUAL";
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute([':client_id' => $client_id]);
            
            $stats = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Formatage des résultats
            $result = [
                'total_produits_commandes' => (int)($stats['total_produits_commandes'] ?? 0),
                'commandes_en_cours' => (int)($stats['commandes_en_cours'] ?? 0),
                'commandes_livrees' => (int)($stats['commandes_livrees'] ?? 0),
                'total_depense_valide' => (int)($stats['total_depense_valide'] ?? 0),
                'total_depense_tout' => (int)($stats['total_depense_tout'] ?? 0),
                'total_commandes' => (int)($stats['total_commandes'] ?? 0)
            ];
            
            return getResponse("Statistiques récupérées", 200, true, $result);
            
        } catch (Exception $e) {
            return getResponse("Erreur lors de la récupération des statistiques: " . $e->getMessage(), 500, false);
        }
    }
    // Toutes les commandes// Toutes les commandes avec leurs produits
    // ................................................................
    function getAllCommandes()
    {
        $sql = "SELECT 
                    cmd.*,
                    cl.nom as client_nom,
                    cl.photo as client_photo,
                    cl.prenom as client_prenom,
                    cl.email as client_email,
                    p.titre, p.image, pc.quantite AS quantiteCommande,
                    COUNT(pc.id_produit) as nombre_produits
                FROM commandes cmd
                INNER JOIN client cl ON cmd.client_id = cl.id
                LEFT JOIN produit_commande pc ON cmd.id = pc.id_commande
                LEFT JOIN produits p ON pc.id_produit = p.id
                GROUP BY cmd.id, cmd.client_id, cmd.type_commande, cmd.couptotatal, 
                        cmd.date_commande, cmd.date_livraison, cmd.is_commande_paid, 
                        cmd.etat, cl.nom, cl.prenom, cl.email
                ORDER BY cmd.date_commande DESC";

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


    // ..............................................
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

    // GESTION DES UTILISATEURS ..............................................
    
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
        $sql = "SELECT * FROM clients WHERE email = :email LIMIT 1";

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

            return getResponse("Connexion reussit avec success", 200, true,$client);
             

        } catch (Exception $e) {
            throw $e;
        }
    }
 
    // $data = getClients();
    // print_r($data);
?> 

