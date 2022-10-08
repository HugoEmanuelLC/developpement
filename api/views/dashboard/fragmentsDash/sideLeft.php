<?php 
// require(VIEWS . 'dashboard/components' . DIRECTORY_SEPARATOR . 'listMenu.php'); 
?>

<div class="side_left" :class=" { desactive_side_left , active_side_left } ">
    <!--<button type="button" @click="toggleClassOfSideLeft">X</button>-->
    <h3>Menu:</h3>

    <a href="<?= $urlDash ?>/menus">menus</a>
    <!--<a href="#!">link</a>
    <a href="#!">link</a>-->
</div>