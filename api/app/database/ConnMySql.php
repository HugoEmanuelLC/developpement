<?php

namespace App\database;

use PDO;
use PDOException;

class ConnMySql{

    public function connMySql(){

        $mySqlConfig  = array (
            "local" => array(
                "host" => "localhost", 
                "dbname" => "waw_momo", 
                "login" => "root", 
                "pswr" => ""
            ),
        
            "online" => array(
                "host" => "wawmomo.be", 
                "dbname" => "u883840348_waw_momo", 
                "login" => "u883840348_hc85", 
                "pswr" => "050710hC85"
            ),
        );
        
        $host = $mySqlConfig["local"]["host"];    //hugoweb.xyz
        $dbname = $mySqlConfig["local"]["dbname"];   //u883840348_waw_momo
        $login = $mySqlConfig["local"]["login"];        //u883840348_hc85
        $pswr = $mySqlConfig["local"]["pswr"];             //050710hC85

        try {

            $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$login,$pswr);
            
            return $bdd;
                
        }catch (PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function crudMySql(){
        

        $mySqlConfig  = array (
            "local" => array(
                "host" => "localhost", 
                "dbname" => "waw_momo", 
                "login" => "root", 
                "pswr" => ""
            ),
        
            "online" => array(
                "host" => "wawmomo.be", 
                "dbname" => "u883840348_waw_momo", 
                "login" => "u883840348_hc85", 
                "pswr" => "050710hC85"
            ),
        );
            

        $host = $mySqlConfig["local"]["host"];    //hugoweb.xyz
        $dbname = $mySqlConfig["local"]["dbname"];   //u883840348_waw_momo
        $login = $mySqlConfig["local"]["login"];        //u883840348_hc85
        $pswr = $mySqlConfig["local"]["pswr"];             //050710hC85

        try {

            $bdd = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$login,$pswr);
            
            return $bdd;
                
        }catch (PDOException $e){
            echo $e->getMessage();
        }
    }
}