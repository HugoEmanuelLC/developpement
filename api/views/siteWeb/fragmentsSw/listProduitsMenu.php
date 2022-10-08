<?php
require(VIEWS . 'siteWeb/servicesSw' . DIRECTORY_SEPARATOR . 'serviceSw.php');

$afficherProduits = "";

if (isset($produitsDuMenu)) {

    $indice = 0;

    foreach ($produitsDuMenu as $Produit) {

        $indice = $indice +1;

        if ($indice %2==0) {

            $nomProduit = ucfirst($Produit[1]);

            $afficherProduits .= '
            <tr class="pair">
                <td>' . $nomProduit . '</td>
                <td>' . $Produit["PRIX"] . ' €</td>
            </tr>';
        }else{

            $nomProduit = ucfirst($Produit[1]);

            $afficherProduits .= '
            <tr>
                <td>' . $nomProduit . '</td>
                <td>' . $Produit["PRIX"] . ' €</td>
            </tr>';

        }

        if (isset($params[0]) && $params[0] == $Produit[5]) {

            $titreMenu = ucwords($Produit['NAME']);
            $imageMenu = $Produit['URL_IMG'];
        } else {
            $titreMenu = "error";
            $imageMenu = "error";
        }
    }
} else {

    $afficherProduits = "aucun Produit dans la liste";
}



// echo $afficherProduits;
