<?php
require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
?>

<!DOCTYPE html>
<html lang="fr">

<?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'head.php'); ?>


<body>
    
    <div id="appSw" class="page">

        <?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'header.php'); ?>

        <?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'sideLeft.php'); ?>

        <div class="contenue">
            <?= $content = (isset($content)) ? $content : "lien interrompue" ?>
        </div>

        <?php require(VIEWS . 'siteWeb/fragmentsSw' . DIRECTORY_SEPARATOR . 'footer.php'); ?>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="<?= SCRIPTS . 'siteWeb/jsSw' . DIRECTORY_SEPARATOR . 'appSw.js' ?>"></script>
</body>

</html>