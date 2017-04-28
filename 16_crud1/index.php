<?php
  include_once("utility.php");
  include_once("api.php");
  $all_lieux = readAllLieux();
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
    <input class="input" type="number" name="lati" step="any" value="111.3333">
    <input class="input" type="number" name="longi" step="any" value="611.3333">
    <input id="submit_create" type="submit" name="create_lieux">
  </form>

  <h2 class="title">Afficher les lieux (READ)
      <a href="api.php?action=read_lieux">OK</a>
  </h2>
  <?php
    if (sizeof($all_lieux) === 0) {
        echo '<div class="no-result">Pas de lieux pour le moment</div>';
    } else {
      echo '<ul class="list lieux">';
      foreach ($all_lieux as $lieu) {
        echo '<li class="item">';
            echo "<span>$lieu->cp</span>";
            echo "<span>$lieu->adresse</span>";
            echo "<span>$lieu->lati</span>";
            echo "<span>$lieu->longi</span>";
            echo '<a href="editer-lieux.php?id=' .
            $lieu->id . '">editer</a>';
            echo '<a href="api.php?action=delete_lieu&id=' .
            $lieu->id . '">supprimer</a>';
        echo "</li>";
      }
      echo "</ul>";
    }
  ?>
</body>
</html>
