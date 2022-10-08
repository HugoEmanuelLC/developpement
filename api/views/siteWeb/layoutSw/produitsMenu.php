<?php

require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'listProduitsMenu.php');

$keywords = 'mots cles, mots cles';
$description = 'description de la page';
$descriptitle = $titreMenu = (isset($titreMenu)) ? $titreMenu : "pas de nom" . $imageMenu = (isset($imageMenu)) ? $imageMenu : false;
$back = "../";


$imgBackground = '.././public/siteWeb/imagesSw/imagesMenus/' . $imageMenu = (isset($imageMenu)) ? $imageMenu : "pas de nom";
$imgBackgroundPageProduit = '.././public/images/siteweb/imgsBackgrounds/brennan-burling-ay53qag90W8-unsplash.jpg';

// $homeLink = $urlSw;

?>


<div class="contenue">
    <div class="contenue_body">
        <div class="produits" style="background-image: url('<?= $AficherImgBackgroundPageProduit = (isset($imgBackgroundPageProduit)) ? $imgBackgroundPageProduit : false ?>');">

            <div class="imgMenu" style="background-image: url(<?= $imgBackground; ?>);"></div>

            <h1><?= $descriptitle ?></h1>

            <table>
                <?= $afficherProduits = (isset($afficherProduits)) ? $afficherProduits : "probleme avec la list de produits" //dans listProduitsMenu.php
                ?>
            </table>
        </div>
    </div>
</div>