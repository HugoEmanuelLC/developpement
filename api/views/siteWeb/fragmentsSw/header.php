<?php
require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');
?>
<header>
    <div class="logo">
        <h1>Waw Momo <span>Sandwichs - Petite Restauration - Take Away</span></h1>
    </div>

    <div class="navbar">
        <a href="<?= $urlSw ?>">Accueil</a>
        <!--<a href="#!">À Propos</a>-->
        <a href="#!" @click="toggleClassInSideLeftPhone">Commander</a>
        <a href="#!" @click="toggleClassInSideLeftMenu">Menu</a>
    </div>
</header>