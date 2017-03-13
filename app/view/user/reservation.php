<?php 
 if(!defined("_BASE_URL")) die("Ressource interdite !");
 include("app/view/layout/header.php"); 
 include("app/view/layout/user_sidebar.php") 
?>

<div class="list_resa">

    <?php foreach ($resas as $cle => $resa) {
    ?>
  <div class="resa">
    <h4><?=$resa['user_firstname'] ." ". $resa['user_lastname'];?></h4>
    <h4><?=$resa['logement_name'];?></h4><br>
    <?= $resa['logement_price']; ?><br>
    <?= $resa['place_name']; ?><br>
    <?= $resa['logement_category_type']; ?><br>
    <?= $resa['reservation_date_arrive']; ?><br>
    <p><?= $resa['reservation_date_return']; ?>  </p>
  </div>
<?php } ?>

</div>

 <?php include("app/view/layout/footer.php"); ?>