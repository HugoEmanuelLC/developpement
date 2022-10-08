<header>
    <!--<div class="header_head"></div>-->
    <div class="header_body">
        <?= $homeLink = (isset($homeLink)) ? '<a href="'.$homeLink .'">Home</a>' : null ?>
        <a href="#!" @click="toggleClassInSideLeft">side left</a>
        <a href="<?= $urlSw ?>/item/85">page item</a>
        <a href="<?= $urlSw ?>/dashboard">dashboard</a>
    </div>
</header>