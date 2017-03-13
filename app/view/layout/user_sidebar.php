<div class="sidebar">
    <ul>
   
        <li><a href="?module=user&action=edit">Mes informations</a></li>
        <li><a href="?module=user&action=documents">Mes documents</a></li>
         <?php if ($_SESSION["user"]["cat_user_id"] == 1) { ?>
        <li><a href="?module=user&action=reservation">Mes réservations</a></li>
       <?php } 
        else if ($_SESSION["user"]["cat_user_id"] == 2) { ?>
            <li>Mes logements</li>
        <?php } ?>
        <li>Messagerie</li>
    </ul>
</div>