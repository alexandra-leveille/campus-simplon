<?php include_once("utility.php");


echo "hello world !!!";
exit();


$db = connectDatabase();

if (isset($_POST["create_data"])) {
  // echo "data posted: creation";
  // debug($_POST);
  createData();
}

if (isset($_GET["action"]) && $_GET["action"] === "read_data") {
  // echo "data posted: creation";
  // debug($_POST);
  readData();
}


function createData() {
  global $db;

  $req = $db->prepare("INSERT INTO lieux (adresse, cp, lati, longi) VALUES (:adresse, :cp, :lati, :longi)");

  $req->bindParam(':adresse', $_POST["adresse"]);
  $req->bindParam(':cp', $_POST["cp"]);
  $req->bindParam(':lati', $_POST["lati"]);
  $req->bindParam(':longi', $_POST["longi"]);

  $res = $req->execute();

  // debugX($res);
}

function readData() {
  global $db;
  $req = $db->prepare("SELECT * FROM lieux");
  $req->execute();
  $res = $req->fetchAll(PDO::FETCH_OBJ);
  $_SESSION["lieux"] = $res;
  header("Location: index.php");
}


function updateData() {
  $sql = "UPDATE INTO maBase";
}


function deleteData() {
  $sql = "DELETE FROM maBase";
}
