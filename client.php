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

<?php
   echo "<h3>LOGIN</h3>";
   ?>

   <main>

   <div class="container">
    <form method="POST">
      <label for="nom">NOM</label>
      <input type="text" id="nom" name="Nom" required> <br> </br>

      <label for="prenom">PRENOM</label>
      <input type="text" id="prenom" name="Prenom" required> <br> </br>

      <label for="mdp">MOT DE PASSE</label>
      <input type="password" id="mdp" name="mot_de_passe" required> <br> </br>


      <label for="name">ADRESSE</label>
      <input type="text" id="adresse" name="Adresse" required> <br> </br>


      <label for="name">TELEPHONE</label>
     <input type="tel" id="telephone" name="Telephone" required> <br> </br>
     
     <button type="submit" name="Envoy">Ajouter </button> <br>   </br>
     </form>

     <?php
    if(isset($_POST["Envoy"])) {

      $Recup_nom=$_POST["Nom"];
      $Recup_prenom=$_POST["Prenom"];
      $Recup_mot_de_passe=$_POST["mot_de_passe"];
      $Recup_adresse=$_POST["Adresse"];
      $Recup_telephone=$_POST["Telephone"];
      echo "<table border='1'> 
      <tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>mot_de_passe</th>
      <th>Adresse</th>
      <th>Telephone</th>
      </tr>
      
      <tr>
      <td>$Recup_nom</td> 
      <td>$Recup_prenom</td>
      <td>$Recup_mot_de_passe</td>
      <td>$Recup_adresse</td>
      <td>$Recup_telephone</td>
      </tr>";

      $insertquinca="insert into client(nom_client, prenom_client, mot_de_passe, adresse, telephone) Values ('$Recup_nom','$Recup_prenom','$Recup_mot_de_passe','$Recup_adresse','$Recup_telephone')";
    $bdd->exec($insertquinca);

    }
    ?>
   </div>
   </main>

</body>
</html>