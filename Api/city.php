<?php

include_once("configDB.php");

function citys(int $id)
{
    try {

        if (isset($id)) {

            $requeteDesCitys = "SELECT * 
                    FROM `city` Ci 
                    JOIN `country` Co 
                    ON Ci.id_country = Co.id 
                    WHERE Ci.id_country = $id 
                    GROUP BY `name`";

            $listCitys = connection()->query($requeteDesCitys);
        
            return $listCitys;
        }

    }catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }

    
}
?>