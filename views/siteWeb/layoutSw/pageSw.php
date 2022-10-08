<?php
require(VIEWS . 'servicesUrl' . DIRECTORY_SEPARATOR . 'url.php');

$keywords = 'mots cles';
$description = 'description';
$descriptitle = 'Page';

$homeLink = $urlSw;

?>


<div class="contenue_head">
    <h1><?php print_r($params); ?></h1>
</div>

<div class="contenue_body">
    <h1><?= $descriptitle; ?></h1>
</div>