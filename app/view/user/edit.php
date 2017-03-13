     <?php 
 if(!defined("_BASE_URL")) die("Ressource interdite !");
 include("app/view/layout/header.php"); 
 include("app/view/layout/user_sidebar.php") ?>

<div class="ajout_contain">
    <h1>Modifier son profil</h1>
    <form id="form_post" method="post" action="?module=user&action=edit" enctype="multipart/form-data">
		<label for="lastname"> Nom</label>
		<input type="text" name="lastname" maxlength="200" value="<?= $user["user_lastname"] ?>" required/><br>

        <label for="firstname"> Prénom</label>
		<input type="text" name="firstname" maxlength="200" value="<?= $user["user_firstname"] ?>" required/><br>

        <label for="mail"> Mail</label>
		<input type="mail" name="mail" maxlength="200" value="<?= $user["user_mail"] ?>" required/><br>

        <label for="password"> Mot de passe</label>
		<input type="password" name="password" maxlength="200" value="<?= $user["user_password"] ?>" required/><br>

        <label for="age"> Age</label>
		<input type="text" name="age" maxlength="4" value="<?= $user["user_age"] ?>" required/><br>

        <label for="gender"> Sexe</label>
		<input type="text" name="gender" maxlength="2" value="<?= $user["user_gender"] ?>" required/><br>

        <label for="numero"> Numero</label>
		<input type="text" name="numero" maxlength="200" value="<?= $user["user_phone_number"] ?>" required/><br>

        <label for="descr"> Description</label>
		<input type="text" name="descr" maxlength="200" value="<?= $user["user_description"] ?>" required/><br>


        <input type="submit" value="Enregistrer" /> <input type="reset" name="Effacer" value="Effacer" />
    </form>

 


 <?php include("app/view/layout/footer.php"); ?>
							