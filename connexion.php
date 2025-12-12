<?php
$bdd=new
PDO('mysql:host=localhost; dbname=Quincaillerie; charset=utf8', 'root', '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-container">
<h2>Connexion Client</h2>
<form method="POST" action="verif_login.php">
<label for="nom">Nom :</label>
<input type="text" id="nom" name="Nom" required>

<label for="prenom">Prénom :</label>
<input type="text" id="prenom" name="Prenom" required>
<label for="mdp">Mot de passe :</label>
<input type="password" id="mdp" name="mot_de_passe" required>
<label for="adresse">Adresse :</label>
<input type="adresse" id="adresse" name="Adresse" required>
<label for="tel">Téléphone :</label>
<input type="tel" id="tel" name="Telephone" required>

<input type="submit" name="btn" value="Se connecter">
</form>

<?php
if(isset($_POST["btn"])) {
    $recup_nom=$_POST["Nom"];
    $recup_prenom=$_POST["Prenom"];
    $recup_mdp=$_POST["mot_de_passe"];
    $recup_adresse=$_POST["Adresse"];
    $recup_tel=$_POST["Telephone"];

    $insertquinca="insert into client(nom_client, prenom_client, mot_de_passe, adresse, telephone) Values ('$recup_nom','$recup_prenom','$recup_mdp','$recup_adresse','$recup_telephone')";
    $bdd->exec($insertquinca);
}
?>

</div>
</body>
</html>