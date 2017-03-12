<?php 
if(!defined("_BASE_URL")) die("Ressource interdite !");
protection("user", "user", "login", USER_LAMBDA);

if(isset($_POST["pseudo"])) {
    include_once('app/model/user/edit_user.php');
    $resultat = edit_users($_POST,  $_SESSION["user"]["user_id"]);
 

    if ($resultat) {
    header("Location:?module=user&action=edit&notif=ok");
    } else {
    header("Location:?module=user&action=edit&notif=nok");
  }   
}

$options = array("wherecolumn" => "ID", "wherevalue" => $_SESSION["user"]["ID"]);

$users = selecttable('blog_users', $options);

foreach ($users as $cle => $user) {

  $users[$cle]['user_login'] =  $user['user_login'];
  $users[$cle]['user_pass'] =  $user['user_pass'];
  $users[$cle]['user_email'] =  $user['user_email'];
  $users[$cle]['display_name'] =  $user['display_name'];
 
}

define("BODY_CLASS", "modify_user");
define("PAGE_TITLE", "Modifier utilisateur");
include_once("app/view/user/edit.php");