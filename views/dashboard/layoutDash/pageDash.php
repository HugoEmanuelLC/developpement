<?php
session_start();

require(VIEWS . 'dashboard/servicesDash/auth' . DIRECTORY_SEPARATOR . 'verifAuth.php');
// require(VIEWS . 'dashboard/servicesDash/crud' . DIRECTORY_SEPARATOR . 'serviceCrud.php');

$keywords = 'mots cles';
$description = 'description';
$descriptitle = 'Page / params : ';

$homeLink = $urlDash;

?>

<div class="contenue_head">
    <h1><?= $descriptitle = (isset($params[0])) ? $descriptitle . $params[0] : false ?></h1>
    <div>
        <a class="color1" href="#!">sous item</a>
        <a class="color2" href="#!">sous item</a>
        <a class="color3" href="#!">sous item</a>
        <a class="color1" href="#!">sous item</a>
    </div>
</div>

<div class="contenue_body">

    <div class="itemNew">

        <h2>Ajouter des nouveaux articles:</h2>

        <form action="<?= $URL . '/menu/' . $Produit['menu_id'] ?>" method="post">
            <div>
                <label for="nomNew">
                    <h3>Nom :</h3>
                </label>
                <input type="text" name="nomNew" value="">

                <label for="prixNew">
                    <h3>Prix :</h3>
                </label>
                <input type="text" name="prixNew" value="">
            </div>
            <input class="button" type="submit" value="Envoyer">
        </form>
    </div>




    <h2>Modifier ou supprimer des articles</h2>

    <div class="box_items">
        <div class="items">

            <form action="' . $URL . '/menu/' . $Produit['menu_id'] . '" method="post">
                <p style="color: green;">' . $msgNew . '</p>
                <div>
                    <input type="hidden" name="idUpd" value="' . $Produit[0] . '">

                    <label for="nomUpd">
                        <h3>Nom:</h3>
                    </label>
                    <input type="text" name="nomUpd" value="' . $nomProduit . '">

                    <label for="prixUpd">
                        <h3>Prix:</h3>
                    </label>
                    <input type="text" name="prixUpd" value="' . $Produit['PRIX'] . '">
                </div>
                <input class="button" type="submit" value="Enregistrer">
            </form>
            <form class="deleteButton" action="' . $URL . '/menu/' . $Produit['menu_id'] . '" method="post">

                <button name="delItemID" value="' . $Produit[0] . '">Delete</button>
            </form>
        </div>


        <div class="items">

            <form action="' . $URL . '/menu/' . $Produit['menu_id'] . '" method="post">
                <p style="color: green;">' . $msgNew . '</p>
                <div>
                    <input type="hidden" name="idUpd" value="' . $Produit[0] . '">

                    <label for="nomUpd">
                        <h3>Nom:</h3>
                    </label>
                    <input type="text" name="nomUpd" value="' . $nomProduit . '">

                    <label for="prixUpd">
                        <h3>Prix:</h3>
                    </label>
                    <input type="text" name="prixUpd" value="' . $Produit['PRIX'] . '">
                </div>
                <input class="button" type="submit" value="Enregistrer">
            </form>
            <form class="deleteButton" action="' . $URL . '/menu/' . $Produit['menu_id'] . '" method="post">

                <button name="delItemID" value="' . $Produit[0] . '">Delete</button>
            </form>
        </div>
    </div>

</div>