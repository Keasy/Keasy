<?php 
 if(!defined("_BASE_URL")) die("Ressource interdite !");
 include("app/view/layout/header.php"); 
 include("app/view/layout/user_sidebar.php") 
?>

<h2>Vos logements</h2>
<div class="list_logement">

    <?php foreach ($logements as $cle => $logement) {
    ?>
  <div class="logement">
    <h4><?=$logement['logement_name'];?></h4><br>
    <?= $logement['logement_price']; ?><br>
    <?= $logement['place_name']; ?><br>
    <?= $logement['logement_category_type']; ?><br>
    <p>Photo : </p>
    <img class="testphoto" src="<?php echo $repertoire.$logement['logement_photo']?>"/>
     <a class="menu_title" href="?module=logement&action=detail&id=<?=$logement['logement_id']?>">
        Lire la suite</a>
  </div>
<?php } ?>

</div>

 <?php include("app/view/layout/footer.php"); ?>