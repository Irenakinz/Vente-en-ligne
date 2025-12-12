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

    <h1>Nos Produits</h1>
    
  </header>

  <main>
   <div class="container3">
    <form method="POST">
      <label for="produit">PRODUIT LIVRé</label>
      <input type="text" id="produit" name="Produit" required> <br> </br>

      <label for="client">NOM COMPLET DU CLIENT</label>
      <input type="text" id="client" name="Client" required> <br> </br>

      <label for="name">QUANTITE</label>
      <input type="number" id="quantite" name="Quantite" required> <br> </br>

      <label for="date">DATE DE COMMANDE</label>
      <input type="date" id="date" name="Date" required> <br> </br>

     
     <button type="submit" name="Envoy3">Ajouter </button> <br>   </br>
     </form>

     <?php
    if(isset($_POST["Envoy3"])) {

      $Recup_produit=$_POST["Produit"];
      $Recup_client=$_POST["Client"];
      $Recup_quantite=$_POST["Quantite"];
      $Recup_date=$_POST["Date"];
      echo "<table border='1'> 
      <tr>
      <th>Produit</th>
      <th>Client</th>
      <th>Quantite</th>
      <th>Date</th>
      </tr>
      
      <tr>
      <td>$Recup_produit</td> 
      <td>$Recup_client</td>
      <td>$Recup_quantite</td>
      <td>$Recup_date</td>
      </tr>";
    }
    $insertquinca="insert into client(nom_client, prenom_client, mot_de_passe, adresse, telephone) Values ('$Recup_nom','$Recup_prenom','$Recup_mot_de_passe','$Recup_adresse','$Recup_telephone')";
    $bdd->exec($insertquinca);
    ?>
   </div>
   </main>
</header>

</body>
</html>