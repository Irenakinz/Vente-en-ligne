<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'connexion.php';
    if ($_SERVER["REQUEST_METHOD"] =="POST"){
        $nom = $_POST['Nom'];
        $prenom = $_POST['Prenom'];
        $mdp = $_POST['mot_de_passe'];
        $tel = $_POST['Telephone'];

        $sql = "SELECT * FROM clients WHERE Nom = ? AND Prenom = ? AND mot_de_passe = ? AND telephone = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $nom, $prenom, $mdp, $tel);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            echo "Connexion reussie !
            Bienvenue $prenom $nom.";
        } else {
            echo "Informations incorrectes. Veillez réessayer."
        }

        $stmt->close();
        $stmt->close();

    }
    ?>
    
</body>
</html>