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
$idCity = 0;
$idJob = 0;
$idCity = $_GET['idCity'];
$idJob = $_GET['idJob'];

$sql="SELECT * FROM `company` AS cmp 
    INNER JOIN `job` AS jb
    ON cmp.id_job = jb.id
    INNER JOIN `contact` AS CONT
    ON cmp.idCompany= CONT.id_company 
    WHERE cmp.id_city = $idCity AND cmp.id_job = $idJob;";

$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();

while ($row = $result->fetch_assoc()) {
    array_push($json, $row);
}

echo json_encode($json);

