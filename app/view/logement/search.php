<?php include 'app/view/layout/header.php'; ?>
<div id="search_container">
	<form id="search" action="#" method="POST">
						<?php 
            if (isset($_GET["user"])) {
              scrollist("place", $place, "place_id", "place_name", "dropdown", "listplace", array("default" => "Tous les pays", "selected" => $_GET["pays"])); 
            } else {
              scrollist("place", $place, "place_id", "place_name", "dropdown", "listplace", array("default" => "Tous les pays")); 
            }
            ?>	
					
            <select name="type" class="dropdown" id="listtype">
              <option value="0">Types de logements</option>
            </select>
            <input type="text" name="saisie" id="saisie" placeholder="Musique, art, mode..." />
           
              <button  type="submit" ><i class="fa fa-search"></i></button>
	 </form>


       
    
    



<div id="testSearch">
  

      <?php if(isset($_GET['place'])) {foreach($logements as $logement) { ?>
								  <div class="logement">
         <div>
        <img src="<?= $logement['logement_photo'];?>"/>
        <h2><?= $logement['logement_name'];?></h2>
        <p><?= $logement['contenu']; ?></p>
        <p><?= $logement['logement_category_type'];?></p>
        <span><?= $logement['logement_price']; ?></span>

       <a  href="?module=logement&action=detail&id=<?= $logement['logement_id']?>"> Lire la suite</a>
       </div>
       </div>
<?php }} ?>
  

</div>
</div>
<script>
$(document).ready( function() {
  $("#listplace").change(function() {
    $("#listtype").load('webroot/ajax/type_filter.php?place='+$("#listplace").val() )
  });
});

$("#search").submit(function(e) {
  $(".logement").remove();
  e.preventDefault();
  var url = 'index.php?module=logement&action=search';
  history.pushState('no', 'Liste des résultats', url);

   
    var jqxhr = $.ajax(  {
      url: "webroot/ajax/post_search.php",
      method: "POST",
      data: "place=" + $('#listplace').val() + "&type=" + $('#listtype').val() + "&saisie=" + $('#saisie').val(),
      dataType: "html"
    })
      .done(function() {
         console.log( "success" );
         console.log(jqxhr.responseText);
         
         $("#testSearch").append(jqxhr.responseText);

    })
      .fail(function() {
        console.log( "error" );
    })
   
  });
  
</script>
<?php 
include 'app/view/layout/footer.php'; ?>