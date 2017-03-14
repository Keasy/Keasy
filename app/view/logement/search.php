<?php include 'app/view/layout/header.php'; ?>

	<form id="search" action="#" method="POST">
						<?php 
            if (isset($_GET["user"])) {
              scrollist("place", $place, "place_id", "place_name", "dropdown", "listplace", array("default" => "Tous les pays", "selected" => $_GET["pays"])); 
            } else {
              scrollist("place", $place, "place_id", "place_name", "dropdown", "listplace", array("default" => "Tous les pays")); 
            }
            ?>	
					
            <select name="type" class="dropdown" id="listtype">
              <option value="0">Pick type</option>
            </select>
           
              <button  type="submit" >Rechercher</button>
	 </form>


       
    
    



<div id="testSearch">
  
  <div class="logement" id="test">
      <?php if(isset($_GET['place'])) {foreach($logements as $logement) { ?>
								
         <div>
      
        <h2><?= $logement['logement_name'];?></h2>
        <p><?= $logement['logement_price']; ?></p>
        <p><?= $logement['contenu']; ?></p>
        <p><?= $logement['logement_category_type'];?></p>

       <a class="menu_title" href="?module=logement&action=detail&id=<?= $logement['logement_id']?>"> Lire la suite</a>
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
      data: "place=" + $('#listplace').val() + "&type=" + $('#listtype').val(),
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
<?php include 'app/view/layout/footer.php'; ?>