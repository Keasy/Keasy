<?php 
if(!defined("_BASE_URL")) die("Ressource interdite !");
?>
<h2>Les commentaires</h2>
<?php
  
  foreach ($comment as $com) {
      ?>
    <ul>  
         <li> <?=$com['comment_title']?>
         <li> Auteur : <?=$com['user_lastname']. " ". $com['user_firstname'] ?></li> 
         <li> Date : <?=$com['comment_date'] ?></li>
         <li>  <b><?=$com['comment_message'] ?></b></li>
    </ul>
      
<?php

  } ?>
