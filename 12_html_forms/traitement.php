<?php
/*
 * mode = si non renseigné ou 0 => print_r
 * sinon si mode = 1, fait un var_dump (indique le type des données)
*/
function debug($val, $mode = 0) {
    echo '<pre style="background:#' . substr(md5(rand()), 0, 6) . '">';
    if ($mode === 1) {
        var_dump($val);
    } else {
        print_r($val);
    }
    echo "</pre>";
}

function debugX($val, $mode = 0) {
    echo '<pre style="background:#' . substr(md5(rand()), 0, 6) . '">';
    if ($mode === 1) {
        var_dump($val);
    } else {
        print_r($val);
    }
    echo "</pre>";
    exit;
}

echo "hello world";
echo '<a href="index.html">retour formulaire</a>';


$mon_null_car_non_defini;
$str = "une chaîne de caractères";
$str2 = 'une chaîne de caractères en guillemets simples';
$bool1 = true && false || true;
// les booléens suivent les mêmes règles qu'en JS ^^
$nb = 123;
debug($nb);
$nb2 = 13.55 + 55 * (123);
debug($nb2);
// mêmes règles et opérateurs aussi pour les opérations mathématiques
$o = new stdClass();
/*
    en PHP, on accède aux propriétés d'un objet avec la flèche (->)
    (et pas le point (.) comme en JS
*/
$o->prop = "ce que tu veux représenter ...";
debug($str);
debug($nb);
debug($o);
debug($mon_null_car_non_defini);
$tableau = array(1, 2, NULL, "yo", false);
debug($tableau);
echo "<hr>";
echo $tableau[0];
echo $tableau[count($tableau) - 1];
echo "<hr>";
$level_en_php = "débutant";

if ($level_en_php === "confirmé") {
    exit("circulez, y'a rien à voir ...");
} else {
    debug("faites gaffe c'est important pour la suite !");
}

for ($i = 0; $i < count($tableau); $i++) {
    echo $tableau[$i] . "<br>";
}

// la méthode de notre formulaire est en "post"
// les données sont donc envoyées vers le serveur
// dans une variable dite "superglobale" =>
// nommée $_POST
// $_POST est un tableau (array) disponible dans toutes
// les pages de vos programmes PHP !
debug($_POST);
debug($_POST["brand"]);
debug($_POST["type"]);
debug($_POST["price_range"]);
