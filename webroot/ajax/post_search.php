<?php
define("_BASE_URL", true);
include_once("../../app/config/config.inc.php");
include_once("../../app/model/pdo.inc.php");




try {
    //On envoie la requête
    $query = $pdo->prepare('SELECT logement_id, logement_name, logement_price, cat_id, logement_category_type, place_name, 
                                        left(logement_details,298) as contenu
                                        FROM logement
                                        INNER JOIN cat_logement
                                        ON logement.cat_id = cat_logement.logement_cat_id
                                        INNER JOIN location_place
                                        ON logement.location_place_id = location_place.place_id 
                                        WHERE logement_cat_id= :type
                                        AND place_id= :place');
                                        
  
    $query->bindParam(':place', $_GET['place'], PDO::PARAM_INT);
    $query->bindParam(':type', $_GET['type'], PDO::PARAM_INT);
    $query->execute();
    $logements = $query->fetchAll();
    $query->closeCursor();
    //On retourne tous les lire_articles
    	foreach($logements as $logement) { 
								
        echo " <div class='logement'>";
      
        echo "<h2>".$logement['logement_name']."</h2>";
        echo "<p>".$logement['logement_price']."</p>";
        echo "<p>".$logement['contenu']."</p>";
        echo "<p>".$logement['logement_category_type']."</p>";

       echo '<a class="menu_title" href="?module=logement&action=detail&id='.$logement['logement_id'].'"> Lire la suite</a>';
       echo " </div>";
       
    }
    

}

catch (Exception $e) {
    die('Erreur SQL : ' . $e->getMessage());
}
