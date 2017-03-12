

					
						<form id="search" action="#" method="POST">
						<?php 
            if (isset($_GET["user"])) {
              scrollist("pays", $place, "place_id", "place_name", "dropdown", "listplace", array("default" => "Tous les pays", "selected" => $_GET["pays"])); 
            } else {
              scrollist("pays", $place, "place_id", "place_name", "dropdown", "listplace", array("default" => "Tous les pays")); 
            }
            ?>	
					
            <select name="type" class="dropdown" id="listtype">
              <option value="0">Pick type</option>
            </select>
            <select name="type" class="dropdown" id="listtype">
              <option value="0">Pick type</option>
            </select>
            <select name="type" class="dropdown" id="listtype">
              <option value="0">Pick type</option>
            </select>
              
					</form>
<button  type="submit" >Rechercher</button>
 
					


<div id="testSearch">
</div>


<script>


$(document).ready( function() {
  $("#listplace").change(function() {
    $("#listtype").load('webroot/ajax/type_filter.php?place='+$("#listplace").val() )
  });
   $("#search").submit(function() {
    $("#testSearch").load('webroot/ajax/post_search.php?place='+$("#listplace").val()+'&type='+$("#listtype").val());
    return false;
  });
});




</script>