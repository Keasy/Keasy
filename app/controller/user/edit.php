<?php 
if(!defined("_BASE_URL")) die("Ressource interdite !");
protection("user", "user", "login", USER_LAMBDA);

if(isset($_POST["lastname"])) {

    include_once('app/model/user/edit_user.php');
    $user_id =  $_SESSION["user"]["user_id"];
    $resultat = edit_user($_POST,  $user_id);

    if ($resultat) {
    header("Location:?module=user&action=edit&notif=ok");
    } else {
      var_dump($_POST);
    header("Location:?module=user&action=edit&notif=nok");
  }   
}

$options = array("wherecolumn" => "user_id", "wherevalue" => $_SESSION["user"]["user_id"]);

$users = selecttable('user', $options);

foreach ($users as $cle => $user) {

  $users[$cle]['user_lastname'] =  $user['user_lastname'];
  $users[$cle]['user_firstname'] =  $user['user_firstname'];
  $users[$cle]['user_mail'] =  $user['user_mail'];
  $users[$cle]['user_password'] =  $user['user_password'];
  $users[$cle]['user_age'] =  $user['user_age'];
  $users[$cle]['user_gender'] =  $user['user_gender'];
  $users[$cle]['user_phone_number'] =  $user['user_phone_number'];
  $users[$cle]['user_description'] =  $user['user_description'];
 
}




define("BODY_CLASS", "modify_user");
define("PAGE_TITLE", "Modifier utilisateur");
include_once("app/view/user/edit.php");