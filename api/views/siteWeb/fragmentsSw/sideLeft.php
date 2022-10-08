<?php

if (isset($listDesMenus)) {

    $afficherMenu='';
    $keywordsNameMenu='';

    foreach ($listDesMenus as $menu) {

        $nomMenus = ucwords($menu[1]);

        $afficherMenu .='<a href="'.$urlSw.'/menu/'.$menu[0].'">'.$nomMenus.'</a>';//$urlSw dans la page servicesUrl/url.php
        $keywordsNameMenu .= $nomMenus .',';
        // setcookie("keuboards",['name'], $nomMenus, time() + (3600 * 1));
    }
    

} else {
    $afficherMenu = '<a href="#!#">aucun menu dans la liste</a>';
}

?>




<div class="sousNavBar side_left" :class=" { desactive_side_left , active_side_leftMenu } ">

    <?= $afficherMenu = (isset($afficherMenu)) ? $afficherMenu : "lien interrompue" ?>

    <button type="button" @click="toggleClassOfSideLeft">X</button>
</div>

<div class="phoneCommande side_left" :class=" { desactive_side_left , active_side_leftPhone } ">
    <button type="button" @click="toggleClassOfSideLeft">X</button>

    <h1 class="phoneInfo">Commander par téléphone</h1>

    <div class="effetPhone">
        <h1>
            <a class="ecrain_petit" href="tel:02.203.43.00">
                <i class="fa-solid fa-phone"></i></a>
            
            <p class="ecrain_large">02.203.43.00</p>
        </h1>
    </div>
</div>