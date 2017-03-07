<?php 



if(isset($_GET["userid"])) {
    include_once("app/model/school/validate.php");
    $resultat = edit_users($_GET['userid']);
 
    if ($resultat) {
      echo "oooook";
      var_dump($resultat);
    } 
    else {
      echo "nooook";
    }   
}



 

define("BODY_CLASS", "modify_user");
define("PAGE_TITLE", "Modifier utilisateur");
include_once("app/view/user/edit.php");
