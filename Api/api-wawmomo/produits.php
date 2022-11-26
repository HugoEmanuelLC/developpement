<?php
include_once('configDB.php'); 

$conn = new mysqli($host,$login,$pswr,$dbname);

if ($conn->connect_error) {
    die("Failed to connect.".$conn->connect_error);
}

$json=array();
$id_menu = 0;
$id_menu = $_GET['i'];

$sql="SELECT * FROM `produits` WHERE `menu_id` = $id_menu ORDER BY `nom` ASC";

$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();

while ($row = $result->fetch_assoc()) {
    array_push($json, $row);
}

echo json_encode($json);