<?php 


header("Access-Control-Allow-Origin: *");
function connection(){

    $host = "localhost";  
    $dbname = "world";   
    $login = 'root';    
    $pswr = '';     

    try {

        $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$login,$pswr);
        
        return $bdd;
            
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}

?>