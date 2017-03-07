 <?php 
 if(!defined("_BASE_URL")) die("Ressource interdite !");
 include("app/view/layout/header.php"); ?>
 
  <h3>Sign in</h3>
    <form id="signinForm" method="post" action="?module=user&action=login" >

        <input name="login" type="text"  id="login" placeholder="Login"><br><br>
        <input name="mdp" type="password"  id="mdp" placeholder="Password"><br><br>
        <input type="submit" value="Se connecter"/>
    </form>
<?php var_dump($_POST); ?>
 <?php include("app/view/layout/footer.php"); ?>