<?php include 'app/view/layout/header.php'; ?>


<form id="form" method="POST" action="?module=logement&action=reservation&id=<?=$_GET['id'] ?>">
<input type="date" name="dateA" placeholder="date arrivée"><br>
<input type="date" name="dateR" placeholder="date retour"><br><br>
<input type="submit" value="Valider">

</form>
<script>
 

</script>

<?php include 'app/view/layout/footer.php'; ?>