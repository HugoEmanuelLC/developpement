<?php 

header("Access-Control-Allow-Origin: *");

$host = "localhost";  
$dbname = "world";   
$login = 'root';    
$pswr = ''; 

$con = mysqli_connect($host,$login,$pswr,$dbname);
$response = array();

if ($con) {
    $sql = "SELECT * FROM country ORDER BY `name` DESC";
    $result = mysqli_query($con,$sql);
    if ($result) {
        $x = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $response[$x]['name'] = $row['name'];
            $x++;
        }
        echo json_encode($response, JSON_PRETTY_PRINT);
    }
}else{
    echo "Not DataBase";
}