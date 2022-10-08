<?php

$keywords = 'waw momo, wawmomo, pas chers, restaurant Braine-L\'Aleud, restaurant Waterloo,';
$description = 'restaurant waw momo à Braine-L\'Aleud';
$descriptitle = 'Accueil';

?>


<div class="presentation">
    <div class="img_de_presentation" style="background-image: url('./public/siteWeb/imagesSw/imgsBackgrounds/rajat-sarki-Px6DxlRw7XM-unsplash.jpg');">

        <div class="bloc_header">

            <div class="header_body">
                <h1>WAWMOMO</h1>
                <h4>SANDWICHERIE - PETITE RESTAURATION - TAKE AWAY</h4>
            </div>

            <i class="fleche fas fa-long-arrow-alt-down"></i>

        </div>

    </div>


</div>

<?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'imageLocal.php'); ?>


<div class="contenue">
    <div class="text">

        <div class="box_photoProfil">
            <div class="photoProfil" style="background-image: url('./public/siteWeb/imagesSw/imagesGalleries/36357af8.jpg');"></div>

        </div>
    </div>


    <?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'gallerie.php'); ?>
    <?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'horaires.php'); ?>

    <div id="map" class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d157.99956800750047!2d4.379203293862088!3d50.68295330368792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3cfe4e8998219%3A0x60e883c37ef09aed!2sWaw%20Momo!5e0!3m2!1sfr!2sfr!4v1628520801702!5m2!1sfr!2sfr" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>