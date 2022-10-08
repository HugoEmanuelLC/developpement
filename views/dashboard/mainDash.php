<?php
//require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
?>

<!DOCTYPE html>
<html lang="fr">

<?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'head.php'); ?>


<body>

    <div id="appDash" class="page">

        <?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'header.php'); ?>

        <div class="contenue">
            <?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'sideLeft.php'); ?>
            <div class="box_contenue">
                <?= $content = (isset($content)) ? $content : "lien interrompue" ?>
            </div>
        </div>

        <?php require(VIEWS . 'dashboard/fragmentsDash' . DIRECTORY_SEPARATOR . 'footer.php'); ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="<?= SCRIPTS . 'dashboard/jsDash' . DIRECTORY_SEPARATOR . 'appDash.js' ?>"></script>
</body>

</html>