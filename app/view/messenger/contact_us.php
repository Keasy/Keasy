<?php include 'app/view/layout/header.php'; ?>


<form id="form" method="POST" action="?module=messenger&action=contact_us">
<input type="text" name="title" placeholder="Titre"><br>
<input type="date" name="dateC" placeholder="date arrivée"><br>
<input type="text" name="message" placeholder="Message"><br><br>
<input type="submit" value="Valider">

</form>

<?php include 'app/view/layout/footer.php'?>