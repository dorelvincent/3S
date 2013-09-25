
	<div id="corps">

		<?php include("util/head.php"); ?>
		<?php include("util/menu_haut.php"); ?>
		<div id="content">


		<div id="bloc_main">
						<fieldset>
				<legend>INSCRIPTION</legend>
					<form method="post" action="../Traitements/t_execute_inscription.php" name="toto">
						<table>
							<tr>
								<td><label for="pseudo">Pseudo : </label></td>
								<td><input type="text" name="pseudo" id="pseudo" /></td>
							</tr>
							<tr>
								<td><label for="nom" id="noml">Nom : </label></td>
								<td><input type="text" name="nom" id="nom" /><span class="alert">*</span></td>
							</tr>
							<tr>
								<td><label for="prenom" id="prenoml">Prénom : </label></td>
								<td><input type="text" name="prenom" id="prenom" /><span class="alert">*</span></td>
								
							</tr>
							<tr>
								<td><label for="ddn">Date de Naissance : </label></td>
								<td><input type="text" name="ddn" id="ddn" /><br/><span class="small">Au format JJ/MM/AAAA</span></td>
							</tr>
							<tr>
								<td><label for="mail">E-Mail : </label></td>
								<td><input type="text" name="mail" id="mail" /></td>
							</tr>
							<tr>
								<td><label for="mailconfirm">Confirmation du Mail : </label></td>
								<td><input type="terxt" name="mailconfirm" id="mailconfirm" /></td>
							<tr>
								<td><label for="pass">Mot de Passe : </label></td>
								<td><input type="password" name="pass" id="pass" /></td>
								
							</tr>
							<tr>
								<td><label for="passconfirm" id="passconfirml">Confirmation du Mot de Passe : </label></td>
								<td><input type="password" name="passconfirm" id="passconfirm" /></td>
							</tr>
							<tr>
								
							</tr>
							<tr><td colspan=2><span class="alert">Les champs avec une étoile (*) sont obligatoires</span></td></tr>
							<tr>
								<td><input type="reset" name="reset" id="reset" value="Effacer" /></td>
								<td><input type="submit" name="inscr" id="inscr" value="S'Inscrire" /></td>
						</table>
					</form>
				</fieldset>
		</div>
		
		<div id="bloc_infos">					
			<?php include("util/menu_right.php"); ?>		
		</div>
		<div id="footer">
			<?php include("util/footer.php"); ?>	
		</div>
	</div>
	</body>
</html>
