

					
						<form id="search" action="?module=logement&action=search" method="GET">
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
</div>


<script>

$('#search').submit(function(event) {
  event.preventDefault();
  if ($('#listplace').val() == 0) {
    var url = "?module=logement&action=search";
  }
  else {
    var url = "?module=logement&action=search&place=" + $("#listplace").val() + 
          "&type=" + $("#listtype").val();
  }
  window.location = url;
});



$(document).ready( function() {
  $("#listplace").change(function() {
    $("#listtype").load('webroot/ajax/type_filter.php?place='+$("#listplace").val() )
  });
 //  $("#search").submit(function() {
   // $("#testSearch").load('webroot/ajax/post_search.php?place='+$("#listplace").val()+'&type='+$("#listtype").val());
    //return false;
 // });
});




</script>