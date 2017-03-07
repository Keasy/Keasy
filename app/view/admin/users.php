<?php
if(!defined("_BASE_URL")) die("Ressource interdite !");
?>

    <div id="user_contain">
        <h3>Liste des utilisateurs</h3>
        <table>
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>

            </tr>
            </thead>

            <tbody>
            <?php
            //Pour chauqe article du tableau des articles

            foreach ($users as $user) {
                ?>
                <tr>
                    <td><?=$user['user_lastname'] ?></td>

                    <td> <?=$user['user_firstname'] ?></td>
                </tr>


                <?php

            } ?>
            </tbody>


        </table>
    </div>
