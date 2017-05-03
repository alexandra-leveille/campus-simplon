<?php
  include("inc/header.php");
  $users = readUsers();
?>
    <h1 class="title"><a class="link" href="https://fr.wikipedia.org/wiki/CRUD">CRUD</a> 2</h1>
    <p class="text">
    Créer une petite application pour insérer/lire/editer/supprimer des utilisateurs en base de données.<br>
    La base suite le modèle suivant :<br>
    <hr>
    id (medium int, unsigned, AI, primary key)<br>
    nom (varchar, 128)<br>
    prenom (varchar, 128)<br>
    email (varchar 256)<br>
    <hr>
    La page "créer utilisateur" amène au formulaire pour ajouter en base<br>
    La page index (lister) recence tous les utilisateurs<br>
    On peut éditer les infos de chaque utilisateur
    </p>
    <div class="page">
        <?php debug($users); ?>
    </div>
</body>
</html>
