<?php


header("Access-Control-Allow-Origin: *");

$host = "localhost"; 
$login = 'root';    
$pswr = '';   
$dbname = "world";  




$conn = new mysqli($host,$login,$pswr,$dbname);

if ($conn->connect_error) {
    die("Failed to connect.".$conn->connect_error);
}

$json=array();
$idRegion = 0;
$idRegion = $_GET['idRegion'];

$sql="SELECT * FROM `city` WHERE `id_region` = $idRegion ORDER BY `name` ASC";

$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();

while ($row = $result->fetch_assoc()) {
    array_push($json, $row);
}

echo json_encode($json);

