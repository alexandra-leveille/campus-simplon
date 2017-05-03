<?php
include_once("utility.php");

$db = connectDatabase();

// si POST contient create_user
// si oui => exécuter une fonction pour insérer le nouvel user

if (isset($_POST["create_user"])) {
    createUser();
    header("Location: index.php");
}

function createUser() {
    global $db;
    // debugX($_POST);
    $req = $db->prepare("INSERT INTO utilisateurs (nom, prenom, email) VALUE (:nom, :prenom, :email)");
    $req->bindParam(":nom", $_POST["nom"]);
    $req->bindParam(":prenom", $_POST["prenom"]);
    $req->bindParam(":email", $_POST["email"]);

    $res = $req->execute();
    return $res;
}

function readUser($id) {
}

function readUsers() {
    global $db;
    $req = $db->prepare("SELECT * FROM utilisateurs");
    $req->execute();
    $res = $req->fetchAll(PDO::FETCH_OBJ);
    return $res;
}


function updateUser() {
}

function deleteUser() {
}
