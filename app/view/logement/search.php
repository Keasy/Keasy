<?php include 'app/view/layout/header.php'; ?>
<?php include 'app/view/layout/module_search.php';?>
<div class="content_logement">
 
  <?php
  //Pour chauqe logement du tableau des logements
  foreach ($logements as $logement) {
      ?>
    <div class="logement">
      
        <h2><?=$logement['logement_name'] ?></h2>
        <p><?=$logement['logement_price'] ?></p>
        <p><?=$logement['contenu']?></p>
        <p><?=$logement['logement_category_type']?></p>

        <a class="menu_title" href="?module=logement&action=detail&id=<?=$logement['logement_id']?>">
        Lire la suite</a>
      </div>
<?php

  } ?>
</div>
<?php 
if (isset($_GET["user"])) {
paginate($nb_logements, PAGINATION_LOGEMENT, 'logement', 'search', '&pays=' . $_GET['place'] .'&type=' . $_GET['type']); 
} else {
paginate($nb_logements, PAGINATION_LOGEMENT, 'logement', 'search'); 
} 
?>
<script>
document.getElementById("listtype").onchange = function () {

    if (document.getElementById("listtype").value == 0 && document.getElementById("listplace").value == 0 ) {
        var url = "?module=logement&action=search";
    } else {
        var url = "?module=logement&action=search&pays=" + document.getElementById("listplace").value + "&type=" + document.getElementById("listtype").value;
    }
    
    window.location = url;
}
</script>

<?php include 'app/view/layout/footer.php'; ?>