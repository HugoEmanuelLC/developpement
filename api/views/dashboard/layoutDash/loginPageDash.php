<?php
session_start();

require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
$http = $urlDash . "/auth";

$msg = "";

//HEAD
$keywords = '';
$description = '';
$descriptitle = 'Dashboard | Login';

// $backUrlStyle = "../";
// $page_dashboard = "page_dash" ." testCss";  //control de div parent main.php
//$_SESSION["background_image"] =  'black-stars.jpg';    //fond d'ecran de div parent main.php
// $backUrlStyle = (isset($_GET['msg'])) ? '../' : false;
// require('../views/dashboard/fragments/navbar.php');
// require_once('../views/dashboard/services/deconnAuth.php');
$imgBackgroundPageProduit = './public/dashboard/imagesDash';
require(VIEWS . 'dashboard/servicesDash/auth' . DIRECTORY_SEPARATOR . 'deconnAuth.php');

?>



<!DOCTYPE html>
<html lang="fr">

<?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'head.php'); ?>

<body>
    <div class="page">
        <div class="contenue_head"></div>

        <div class="contenue_body" style="background-image: url('<?= $AficherImgBackgroundPageProduit = (isset($imgBackgroundPageProduit)) ? $imgBackgroundPageProduit : false ?>');">
            <div class="login">
                <div class="titre_loguin">
                    <a class="a_loguin_retour" href="<?= $http; ?>/../../"> <i class="fa-solid fa-chevron-left"></i> &nbsp; Retour </a>
                    <h1><?= $descriptitle ?> </h1>

                    <h3><?= $msg = (isset($_GET["msg"])) ? $_GET["msg"] : false; ?></h3>
                    <h3><?= $msgDeconnecter = (isset($msgDeconnecter)) ? $msgDeconnecter : false; ?></h3>
                </div>

                <form action="<?= $http; ?>" method="post">
                    <div class="">
                        <label for="usr">User</label>
                        <input type="text" name="usr">
                    </div>

                    <div class="">
                        <label for="psw">Password</label>
                        <input type="password" name="psw">
                    </div>
                    <br>
                    <br>
                    <div class="button_loguin_submit">
                        <button type="submit">Connection</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>