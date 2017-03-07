<?php 
if(!defined("_BASE_URL")) die("Ressource interdite !");
function lire_users($offset, $limite)
{
    global $pdo;

try {
    //On envoie la requête
    $query = $pdo->prepare('SELECT user_login, user_email
                                        FROM blog_users
                                        LIMIT :offset, :limite');

    // On initialise les paramètres
    $query->bindParam(':offset', $offset, PDO::PARAM_INT);
    $query->bindParam(':limite', $limite, PDO::PARAM_INT);

    //On execute la requête
    $query->execute();
    //On récupere les résultats
    $users = $query->fetchAll();
    //Supprimer le curseur
    $query->closeCursor();
    //On retourne tous les lire_articles
    return $users;
}

catch (Exception $e) {
    die('Erreur SQL : ' . $e->getMessage());
}
}