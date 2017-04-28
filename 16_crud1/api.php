<?php include_once("utility.php");


$db = connectDatabase();

if (isset($_POST["create_lieux"])) {
  // echo "data posted: creation";
  // debug($_POST);
  createData();
}

if (isset($_GET["action"]) && $_GET["action"] === "read_lieux") {
  // echo "data posted: read";
  // debug($_GET);
  readAllLieux();
  header("Location: index.php");
}

if (isset($_GET["action"]) && $_GET["action"] === "delete_lieu") {
  deleteData();
}


function createData() {
  global $db;

  debug($_POST);
  exit;
  $req = $db->prepare("INSERT INTO lieux (adresse, cp, lati, longi) VALUES (:adresse, :cp, :lati, :longi)");

  $req->bindParam(':adresse', $_POST["adresse"]);
  $req->bindParam(':cp', $_POST["cp"]);
  $req->bindParam(':lati', $_POST["lati"]);
  $req->bindParam(':longi', $_POST["longi"]);

  $res = $req->execute();
  header("Location: index.php");
  // debugX($res);
}


function readLieu($id) {
  global $db;
  $req = $db->prepare("SELECT * FROM lieux WHERE id = :id");
  $req->bindParam(':id', $id);
  $req->execute();
  $res = $req->fetch(PDO::FETCH_OBJ);
  return $res;
}

function readAllLieux() {
  global $db;
  $req = $db->prepare("SELECT * FROM lieux");
  $req->execute();
  $res = $req->fetchAll(PDO::FETCH_OBJ);
  return $res;
}


function updateData() {
  $sql = "UPDATE INTO maBase";
}


function deleteData() {
    global $db;
    // exit;
    $req = $db->prepare("DELETE FROM lieux WHERE id = :id");
    $req->bindParam(':id', $_GET["id"]);
    $req->execute();
    header("Location: index.php");
  // echo $sql;
}
