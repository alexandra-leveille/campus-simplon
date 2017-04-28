<?php
  include_once("utility.php");
  include_once("api.php");
  $lieu = readLieu($_GET["id"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo "éditer lieux - $lieu->adresse";?></title>
        <link rel="stylesheet" href="styles/styles.css">
        <script src="../utility/utility.js"></script>
        <script src="js/app.js"></script>
    </head>
    <body>
        <a href="index.php">Retour à l'accueil</a>
        <h1 class="title">Editer ce lieux</h1>
        <p>
            Mission Dev Unit (:3) <br>
            Inclure une google map avec l'api JS<br>
            Ecouter les clicks sur la map<br>
            insérer/updater un marqueur sous la zone cliquée<br>
            Mettre à jour les input lati/longi<br>
            ... avec les valeurs correspondante ! >_<'
        </p>
        <form action="api.php" method="post">
            <input class="input" type="text" name="adresse" placeholder="<?php echo $lieu->adresse; ?>">
            <input class="input" type="number" name="cp" placeholder="<?php echo $lieu->cp; ?>">
            <input class="input" type="number" name="lati" step="any" value="<?php echo $lieu->lati; ?>">
            <input class="input" type="number" name="longi" step="any" value="<?php echo $lieu->longi; ?>">
            <input id="update_lieu" type="submit" name="update_lieu">
        </form>
    </body>
</html>
