<?php
if(!defined("_BASE_URL")) die("Ressource interdite !");
$nb_logements = counttable("logement");


$logements = selecttable('logement', array("orderby" => "logement_name",
    "order" => "ASC",
    "limite" => ":offset", ":limit"
));



// Traitement sur les données
foreach ($logements as $cle => $logement) {

    $logements[$cle]['logement_name'] =  $logement['logement_name'];
    $logements[$cle]['logement_place'] =  $logement['logement_place'];
    $logements[$cle]['logement_price'] =  $logement['logement_price'];


}

define("BODY_CLASS", "logement");
define("PAGE_TITLE", "Liste des logements");
include_once("app/view/admin/logements.php");