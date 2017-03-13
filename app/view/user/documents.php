<?php 
 if(!defined("_BASE_URL")) die("Ressource interdite !");
 include("app/view/layout/header.php"); 
 include("app/view/layout/user_sidebar.php") ?>

<div class="ajout_doc">
    <h1>Gérer ses documents</h1>

<?php if ($_SESSION['user']['cat_user_id'] == 1) { ?>
    <form method="post" action="?module=user&action=documents" enctype="multipart/form-data">
    <label for="certif"> Description</label>
        <input type="text" name="nom_certif" placeholder="Nom du fichier">
		<input type="file" name="certif"><br>

        <input type="submit" value="Enregistrer" /> <input type="reset" name="Effacer" value="Effacer" />
    </form>

<h2>Certificat de scolarité</h2>
<div class="docu">
<?php if ($names){
    foreach ($names as $name) { ?>

    <img src="<?php echo TARGET_DIR.$name['user_certificate_school'] ?>"/>

<?php } }
else {
    echo "<p></p>";
    }
}
else if ($_SESSION['user']['cat_user_id'] == 2) { ?>
    <p>test</p>
<?php } ?>
</div>

 <?php include("app/view/layout/footer.php"); ?>