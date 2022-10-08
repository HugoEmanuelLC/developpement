<?php
require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
require(VIEWS . 'siteWeb/servicesSw' . DIRECTORY_SEPARATOR . 'serviceSw.php');
// require(VIEWS . 'siteWeb/components' . DIRECTORY_SEPARATOR . 'sideLeft.php');
require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'listProduitsMenu.php');

$ICON = SCRIPTS . 'siteWeb/imagesSw' . DIRECTORY_SEPARATOR . 'logoWM.png';
?>

<!DOCTYPE html>
<html lang="fr">

<?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'head.php'); ?>


<body>
    
    <div id="appSw" class="page">

        <?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'header.php'); ?>

        <?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'sideLeft.php'); ?>

        <?= $content = (isset($content)) ? $content : "lien interrompue" ?>

        <?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'footer.php'); ?>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="<?= SCRIPTS . 'siteWeb/jsSw' . DIRECTORY_SEPARATOR . 'appSw.js' ?>"></script>
</body>

</html>