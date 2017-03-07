<?php 
if(!defined("_BASE_URL")) die("Ressource interdite !");
?>
<!DOCTYPE html>
<html lang="<?php echo PAGE_LANG; ?>">
<head>
  <meta charset="<?php echo PAGE_CHARSET ?>">
  <title><?php echo PAGE_TITLE; ?></title>
  <link rel="stylesheet" type="text/css" href="webroot/css/global.css" >
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body class="<?php echo BODY_CLASS; ?>">

 <header>
   <div class="header">
         <div> 
            <a href="index.php">Accueil</a>
         </div>
         <div>|</div>
       
         <?php if (isset($_SESSION["level"]) == USER_ADMIN) {?>
         <div>
         <a href="index.php?module=admin&action=index">ESPACE ADMINISTRATION</a>
         </div>
         <div>|</div>
            <div>
           <a href="index.php?module=user&action=logout">DéConnexion</a>
         </div>
           <?php } ?>
          
         <?php if (isset($_SESSION["school"])) {?>
         <div>
         <a href="index.php?module=school&action=index&school=<?=$_SESSION['school']['school_id']?>">ESPACE ADMINISTRATION</a>
         </div>
          <div>|</div>
          <div>
           <a href="index.php?module=school&action=logout">Déconnexion</a>
         </div>
         
         <?php }  ?>
         <?php if (!isset($_SESSION["user"]) && (!isset($_SESSION["school"]))) {
          
           ?>
         <div>
           <a href="index.php?module=user&action=login">Connexion</a>

         </div>
         <div>|</div>
         <div>
           <a href="index.php?module=user&action=new">Inscription</a>
         </div>
         <?php } else if (isset($_SESSION['user']) && $_SESSION['level'] = USER_LAMBDA){ ?>
          
         <div>|</div>
          <div>
          <a href="?module=user&action=index">Mon profil</a>
         </div>
         <div>|</div>
         
         <div>
           <a href="index.php?module=messenger&action=contact_us">Nous contacter</a>
         </div>
           <div>
           <a href="index.php?module=user&action=logout">DéConnexion</a>
         </div>
           <?php } ?>
       
       
        </div>
 </header>
 

