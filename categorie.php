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
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
  <?php
    include'header.php';
    ?>
  </header>

  <main>

   <div class="container2">
    <form method="POST">
      <label for="categorie">CATEGORIE</label>
      <select name="categorie" id="categorie" required> 

      <option value="Outils">Outils</option>
      <option value="Electricite">Electricité</option>
      <option value="Peinture">Peinture</option>
      <option value="Sanitaire">Sanitaire</option>
      <option value="Visserie">Visserie</option>
      </select> <br> </br>
      
      <label for="produit">NOM DU PRODUIT</label>
      <input type="text" id="produit" name="Produit" required> <br> </br>

     <button type="submit" name="Envoy2">AJOUTER</button> <br>   </br>
     </form>

     <?php
    if(isset($_POST["Envoy2"])) {

      $Recup_categorie=$_POST["categorie"];
      $Recup_Produit=$_POST["Produit"];

      echo "<table border='2'> 
      <tr>
      <th>categorie</th>
      <th>Produit</th>
      </tr>
      
      <tr>
      <td>$Recup_categorie</td> 
      <td>$Recup_Produit</td>
      </tr>";
      
      $insertquinca="insert into client(nom_client, prenom_client, mot_de_passe, adresse, telephone) Values ('$Recup_nom','$Recup_prenom','$Recup_mot_de_passe','$Recup_adresse','$Recup_telephone')";
    $bdd->exec($insertquinca);
    }
    ?>
   </div>
   </div>

</main>

</body>
</html>