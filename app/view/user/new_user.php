<?php 
if(!defined("_BASE_URL")) die("Ressource interdite !");
include 'app/view/layout/header.php'; ?>

<div class="ajout_contain">
    <h1>S'inscrire</h1>
    <form id="form_post" method="post" action="?module=user&action=new">
				<table>
					<caption> S'inscrire sur le site</caption>

                    	<tr>
						<th>
							<label for="login"> Nom </label>
						</th>
						<td>
						<input type="text" name="login" maxlength="200" required/>
							
						</td>
					</tr>
					<tr>
						<th>
							<label for="firstname"> Prénom </label>
						</th>
						<td>
						<input type="text" name="firstname" maxlength="200" placeholder="Prénom" required/>
							
						</td>
					</tr>
					

					<tr>
						<th>
							<label for="mdp"> Mot de passe </label>
						</th>
						<td>
							<input type="password" name="mdp" maxlength="200" required/>
						</td>
					</tr>

					<tr>
						<th>
							<label for="email"> E-mail </label>
						</th>
						<td>
							<input  name="email" type="text" required> </textarea>
						</td>
					</tr>
					<tr>
						<th>
							<label for="age"> Age </label>
						</th>
						<td>
						<input type="text" name="age" maxlength="200" placeholder="Age" required/>
							
						</td>
					</tr>
					<tr>
						<th>
							<label for="genre"> Genre </label>
						</th>
						<td>
						F<input type="checkbox" name="genre" value="F"/>
						M<input type="checkbox" name="genre" value="M"/>
							
						</td>
					</tr>
					<tr>
						<th>
							<label for="phone"> Téléphone </label>
						</th>
						<td>
						<input type="text" name="phone" maxlength="200" placeholder="Téléphone" required/>
							
						</td>
					</tr>
					<tr>
						<th>
							<label for="descri">Description</label>
						</th>
						<td>
						<input type="text" name="descri" maxlength="200" placeholder="Description" required/>
							
						</td>
					</tr>
                    <tr>
					<th>
							<label for="catid">Categorie</label>
						</th>
						<td>
							<?php 
            if (isset($_GET["user"])) {
              scrollist("catid", $catid, "user_cat_id", "user_category_type", "dropdown", "listcat", array("default" => "Toutes les catégories", "selected" => $_POST["catid"])); 
            } else {
              scrollist("catid", $catid, "user_cat_id", "user_category_type", "dropdown", "listcat", array("default" => "Toutes les catégories")); 
			  
            }
            ?>	
			</td>
					</tr>
					<tr>
						<th></th>
						<td>
							<input type="submit" value="Enregistrer" /> <input type="reset" name="Effacer" value="Effacer" />
						</td>
					</tr>
				</table>
			</form>
			

</div>

<?php 
include 'app/view/layout/footer.php'; ?>