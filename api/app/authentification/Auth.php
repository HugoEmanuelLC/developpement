<?php

namespace App\authentification;

use App\database\ConnMySql;
use App\controllers\Controller;

class Auth extends Controller
{

    public $usr;
    public $psw;

    public function __construct()
    {}

    public function veriffication($username,$password)
    {
        $conn = new ConnMySql;
        $pdo = $conn->connMySql();
        $req = "SELECT * FROM `auth` WHERE `username`=? AND `password`=?";
        $resultReq = $pdo->prepare($req);
        $resultReq->execute(array($username,$password));
		$reponse=$resultReq->fetchAll();

        return $reponse;
    } 

}

