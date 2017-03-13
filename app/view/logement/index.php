<?php 
if(!defined("_BASE_URL")) die("Ressource interdite !");
include 'app/view/layout/header.php';
?>

<div class="content_search" >
<h1>KE<span class="keasyblue">AS</span>Y, UNE PLATEFORME <span class="keasyblue">ETUD</span>IANTE</h1>

<div class="coco">
<div class="wrapper">
  <form class="login"  method="post" action="?module=user&action=login">
    <p class="title">Log in</p>
    <input type="text" placeholder="E-mail" autofocus name="login" id="login"/>
   <i class="fa fa_user"></i>
    <input type="password" placeholder="Password" name="mdp" id="mdp"/>
    
    <i class="fa fa_key"></i>

    <a href="#">Forgot your password?</a>
    <button>
      <span type="submit"  class="state"/>Se connecter</span>
    </button>
  </form>
</div>
</div>

<div class="coco2">
  <div class="wrapper2">
    <form class="inscri" method="post" action="?module=user&action=new">
		<p class="title">S'inscrire</p>	

		<label for="login"> Nom </label>
		<input type="text" name="login" maxlength="200" placeholder="Nom" required/>
							
		<label for="firstname"> Prénom </label>
		<input type="text" name="firstname" maxlength="200" placeholder="Prénom" required/>
							
		<label for="mdp"> Mot de passe </label>
		<input type="password" name="mdp" maxlength="200" placeholder="Azeaz" required/>
						
		<label for="email"> E-mail </label>
		<input  name="email" type="text" required placeholder="dupont@bou.com"/> 
						
		<label for="age"> Age </label>
		<input type="text" name="age" maxlength="200" placeholder="Age" required/>
		<label for="genre"> Genre </label>

		<div>F<input type="checkbox" name="genre" value="F"/> M<input type="checkbox" name="genre" value="M"/>
		</div>					
		<label for="phone"> Téléphone </label>
		<input type="text" name="phone" maxlength="200" placeholder="Téléphone" required/>
							
		<label for="descri">Description</label>
		<input type="text" name="descri" maxlength="200" placeholder="Description" required/>
							
		<label for="catid">Categorie</label>
        <div>
		<?php 
            if (isset($_GET["user"])) {
              scrollist("catid", $catid, "user_cat_id", "user_category_type", "dropdown", "listcat", array("default" => "Toutes les catégories", "selected" => $_POST["catid"])); 
            } else {
              scrollist("catid", $catid, "user_cat_id", "user_category_type", "dropdown", "listcat", array("default" => "Toutes les catégories")); 
			  
            }
         ?>	
		</div>

        <button>
           <span type="submit"  class="state"/>S'inscrire'</span>
        </button>
        
	</form>		
  </div>
</div>
<script type="text/javascript" src="webroot/js/form.js"></script>

<?php
include 'app/view/layout/module_search.php';
?>
</div>


<div class="info_k">

    <div class="info_kg">
    <img src="webroot/photos/picto/home(2).png" alt="picto maison"/>
        <h2>Trouvez le logement qui vous correspond</h2>
        <p>rnezirjzeiroikzeojruhzeiurjoizehrhzieruzegrhzerhjezkjrnhjzebrjkberbzekjr
        <br>ejzojekzajelnjazklrjekazbekjanzbhjebhazbegabzjhebjhazbekjazgehaz<br>
        zheuiazjeuiazhiuehuazgeuyhzaetfgazuehgytazguyheyazgeu</p>
    </div>
    <div class="info_kd">
        <div class="ccg">
            <img src="webroot/photos/picto/home(1).png" alt="picto maison"/>
            <p>Plus de 30 000 membres</p>
        </div>
        <div class="ccd">
            <img src="webroot/photos/picto/home(1).png" alt="picto maison"/>
            <p>Faites des économies</p>
        </div>
    </div>

</div>

<div class="owner">
    <h2>Vous êtes propriétaire ?</h2>
    <p>Keasy c'est aussi une plateforme pour les propriétaires qui<br> cherchent à louer leur appartement de manière sure, sécurisée avec des étudiants validés !</p>

    <button>Déposer une annonce</button>

</div>

<div class="ex_logement">
    <div class="ex 1">
        <img src="https://a0.muscache.com/im/pictures/90157089/180b2f6e_original.jpg"/>
        <h4>Cosy appart in Paris - 60€</h4>
        <p>It's near to the station Bourse with good acces to...</p>
    </div>
    <div class="ex 2">
        <img src="https://a0.muscache.com/im/pictures/90157089/180b2f6e_original.jpg"/>
        <h4>Cosy appart in Paris - 60€</h4>
        <p>It's near to the station Bourse with good acces to...</p>
    </div>
    <div class="ex 3">
        <img src="https://a0.muscache.com/im/pictures/90157089/180b2f6e_original.jpg"/>
        <h4>Cosy appart in Paris - 60€</h4>
        <p>It's near to the station Bourse with good acces to...</p>
    </div>

</div>



<?php include 'app/view/layout/footer.php'; ?>




