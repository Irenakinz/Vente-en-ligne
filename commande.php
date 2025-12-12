<?php
$bdd=new
PDO('mysql:host=localhost; dbname=Quincaillerie; charset=utf8', 'root', '');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Nos Produits - Quincaillerie </title>
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

   <div class="container1">
    <form method="POST">
      <label for="produit">PRODUIT COMMANDé</label>
      <input type="text" id="produit" name="Produit" required> <br> </br>

      <label for="client">NOM COMPET DU CLIENT</label>
      <input type="text" id="client" name="Client" required> <br> </br>

      <label for="name">QUANTITE</label>
      <input type="number" id="quantite" name="Quantite" required> <br> </br>

      <label for="date">DATE DE COMMANDE</label>
      <input type="date" id="date" name="Date" required> <br> </br>

     
     <button type="submit" name="Envoy1">Ajouter </button> <br>   </br>
     </form>

     <?php
    if(isset($_POST["Envoy1"])) {

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
      $insertquinca="insert into boncommande(nom_client, nom_produit, quantite, date_commnde) Values ('$Recup_produit','$Recup_client','$Recup_quantite','$Recup_date')";
    $bdd->exec($insertquinca);
    }
    ?>
   </div>
   </main>

<?php include 'footer.php'; ?>
</body>
</html>

