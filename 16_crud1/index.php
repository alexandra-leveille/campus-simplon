<?php
  include_once("utility.php");
  // session_destroy();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD 1</title>
  <link rel="stylesheet" href="styles/styles.css">
  <script src="../utility/utility.js"></script>
  <script src="js/app.js"></script>
</head>
<body>
  <h1 class="title">CRUD 1</h1>
  <p class="text">
    l'acronyme CRUD représente les opération élémentaires en programmation<br>
    CREATE / READ / UPDATE / DELETE
  </p>
  <p class="text">
    première étape : créer une petite base de données<br>
    comprendre les principes de base<br>
    insérer, lire, mettre à jour, supprimer des données...<br>
    nous commençons par la méthode synchrone<br>
    puis utiliseront la technologie AJAX pour communiquer de façon asynchrone avec le serveur PHP
  </p>

  <h2 class="title">Ajouter lieux (Create)</h2>

  <form action="api.php" method="post">
    <input class="input" type="text" name="adresse" placeholder="adresse" value="test">
    <input class="input" type="number" name="cp" placeholder="code postal" value="75018">
    <input class="input" type="number" name="lati" placeholder="latitude" value="45.555">
    <input class="input" type="number" name="longi" placeholder="longitude" value="45.777">
    <input id="submit_create" type="submit" name="create_data">
  </form>
  <!--
  <h2 class="title">Afficher  les lieux (READ)</h2>
  <a href="api.php?action=read_data">read me homie</a>
  <?php
    //if (isset($_SESSION["lieux"])) {
      //debug($_SESSION["lieux"]);
    //}
  ?>
-->
</body>
</html>
