<?php
session_start();

require(VIEWS . 'dashboard/servicesDash/auth' . DIRECTORY_SEPARATOR . 'verifAuth.php');
// require(VIEWS . 'dashboard/servicesDash/crud' . DIRECTORY_SEPARATOR . 'serviceCrud.php');

$keywords = 'mots cles';
$description = 'description';
$descriptitle = 'Home Page Dashboard';

?>


<div class="contenue_head">
    <h1><?= $descriptitle; ?></h1>
</div>
<div class="contenue_body">
    <h2>body</h2>
</div>