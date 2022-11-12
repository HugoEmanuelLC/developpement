<?php 

include_once('configDB.php'); 


$conn = new mysqli($host,$login,$pswr,$dbname);

if ($conn->connect_error) {
    die("Failed to connect.".$conn->connect_error);
}

$json=array();

$sql="SELECT * FROM `regions` WHERE `id_country` = 1 ORDER BY `name` ASC";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();

while ($row = $result->fetch_assoc()) {
    array_push($json, $row);
}

echo json_encode($json);