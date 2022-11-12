<?php 

include_once('configDB.php'); 


$conn = new mysqli($host,$login,$pswr,$dbname);

if ($conn->connect_error) {
    die("Failed to connect.".$conn->connect_error);
}

$json=array();
$idPageCompany = 0;
$idPageCompany = $_GET['idPageCompany'];

$sql="SELECT * FROM `company` AS COM
    INNER JOIN `contact` AS CONT
    ON COM.idCompany = CONT.id_company 
    INNER JOIN `job` AS j
    ON COM.id_job = j.id
    WHERE COM.idCompany = $idPageCompany ";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();
while ($row = $result->fetch_assoc()) {
    array_push($json, $row);
}

echo json_encode($json);