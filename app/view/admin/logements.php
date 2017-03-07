<?php
if(!defined("_BASE_URL")) die("Ressource interdite !");
?>

<div id="user_contain">
    <h3>Liste des logements</h3>
    <table>
        <thead>
        <tr>
            <th>Catégories</th>
            <th>Pays</th>
            <th>Prix</th>

        </tr>
        </thead>
        <tbody>
        <?php
        //Pour chauqe article du tableau des articles

        foreach ($logements as $logement) {
            ?>
            <tr>
                <td><?=$logement['logement_name'] ?></td>
                <td> <?=$logement['logement_place'] ?></td>
                <td> <?=$logement['logement_price'] ?></td>
            </tr>


            <?php

        } ?>
        </tbody>


    </table>
</div>

