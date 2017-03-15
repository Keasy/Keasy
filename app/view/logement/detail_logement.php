<?php
if(!defined("_BASE_URL")) die("Ressource interdite !");
 include 'app/view/layout/header.php'; ?>

<div class="detail_logement">
  <div id="testphoto">
    <img id="prout" src="<?php echo $repertoire.$photos['photo']?>">
  </div>
  <div class="detail_content">
    <div class="detail_left">
      <h1><?=$detail['logement_name']?></h1>
      <p><?=$detail['place_name']. ", " .$detail['logement_category_type']. ", ".$detail['logement_height']?></p>
      <p>Description :  <?=$detail['logement_details']?></p>
    </div>
    <div class="detail_right">
      <p><?=$detail['user_lastname']. " " . $detail['user_firstname']?></p>
      <p><?=$detail['logement_price']?></p>
      <?php if (!isset($_SESSION['user']['cat_user_id'])) { ?>
        <p>Veuillez vous connecter pour effectuer une réservation</p>
      <?php }
      else if ($_SESSION['user']['cat_user_id'] == 1) { ?>
        <a href="?module=logement&action=reservation&id=<?=$detail["logement_id"]?>">Réserver ce logement</a>
     <?php } ?>
    </div>
  </div>
</div>


<?php include('app/view/commentaire/commentaire.php'); ?>
<?php include ('app/view/layout/footer.php'); ?>

