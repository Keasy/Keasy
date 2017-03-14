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
                                        
  
    $query->bindParam(':place', $_POST['place'], PDO::PARAM_INT);
    $query->bindParam(':type', $_POST['type'], PDO::PARAM_INT);
    $query->execute();
    $loge = $query->fetchAll();
    $query->closeCursor();
    //On retourne tous les lire_articles
    $return = "";
    foreach($loge as $log) { 
								
       $return.= " <div class='logement'>";
        $return .= "<h2>".$log['logement_name']."</h2>";
         $return .="<p>".$log['logement_price']."</p>";
        $return .="<p>".$log['contenu']."</p>";
        $return .="<p>".$log['logement_category_type']."</p>";

       $return .='<a class="menu_title" href="?module=logement&action=detail&id='.$log['logement_id'].'"> Lire la suite</a>';
       $return .=" </div>";
       
    }
    if (!isset($return)) {
    echo "<div class='logement'>Désolé aucun logement ne correspond à votre recherche</div>";
    }
    else {
        echo $return;
    }

}

catch (Exception $e) {
    die('Erreur SQL : ' . $e->getMessage());
}
