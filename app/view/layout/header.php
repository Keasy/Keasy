
 <?php 
if(!defined("_BASE_URL")) die("Ressource interdite !");
?>
<!DOCTYPE html>
<html lang="<?php echo PAGE_LANG; ?>">
<head>
  <meta charset="<?php echo PAGE_CHARSET ?>">
  <title><?php echo PAGE_TITLE; ?></title>
  <link rel="stylesheet" type="text/css" href="webroot/css/global.css" >
   <script src="webroot/js/jQuery-3.1.1.js"></script>
</head>
<body class="<?php echo BODY_CLASS; ?>">

 <header>
   <div class="header">
   
         <a href="?module=logement&action=index"><img class="logo" src="webroot/photos/logo.png" alt="logo de keasy" /></a>
 
       <?php if (!isset($_SESSION['user'])) { ?>
         <div>
           <a href="index.php?module=user&action=login">Connexion</a>

         </div>
         <div>|</div>
         <div>
           <a href="index.php?module=user&action=new">Inscription</a>
         </div>
       <?php }
      
         else if (isset($_SESSION['user'])){
            if ($_SESSION['level'] == USER_ADMIN) { 
       ?>
                <div> 
                    <a href="index.php?module=admin&action=index">Espace Administrateur</a>
                </div>
                <div>|</div>
        <?php
            }
            else if ($_SESSION['level'] == USER_LAMBDA) { 
         ?>
                <div> 
                    <a href="index.php?module=user&action=index">Mon profil</a>
                </div>
                <div>|</div>
           <?php }  ?>

            <div>
                <a href="index.php?module=user&action=logout">Déconnexion</a>
            </div>
        <?php } ?>
 </div>     

</header>

 

