<?php
if(!defined("_BASE_URL")) die("Ressource interdite !");
 include 'app/view/layout/header.php'; ?>

<div class="detail_logement">

<h1><?=$detail['logement_name']?></h1>
<h2>Type <?=$detail['logement_category_type']?></h2>
<h4>Propriétaire : <?=$detail['user_lastname']. " " . $detail['user_firstname']?></h4>

<p>Description : 
  <?=$detail['logement_details']?>
</p>
<p>Prix : <?=$detail['logement_price']?></p>
<p>Lieu : <?=$detail['place_name']?></p>
<p>Photo : <img id="testphoto" src="<?php
    echo $repertoire.$photos['photo']?>"></p>
   

<a class="menu_title" href="?module=logement&action=reservation&id=<?=$detail["logement_id"]?>">
        Réserver ce logement</a>
</div>


<?php include('app/view/commentaire/commentaire.php'); ?>
<?php include ('app/view/layout/footer.php'); ?>

