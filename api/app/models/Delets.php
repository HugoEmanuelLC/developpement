<?php

namespace App\models;

use App\database\ConnMySql;
use Exception;

class Delets extends ConnMySql{

    public function deleteitemMenu($deleteID)
    {
        try {
            
            $deleteItem = "DELETE FROM `produits` WHERE `ID` = $deleteID";
            $itemsMenuDelete = $this->crudMySql()->query($deleteItem);
            return $itemsMenuDelete;

        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }
        
    }


}