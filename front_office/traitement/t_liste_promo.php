<?php
		//Récupération du nombre de promo à afficher;
		// Pour chaque promotion
		// affichage du résultat
		
		include("../classes/ct_Connexion.php");
?>
<div id="corps">

		<?php include("../HTML/util/head.php"); ?>
		<?php include("../HTML/util/menu_haut.php"); ?>
	<div id="content">


		<div id="bloc_main">
		<table>
			<tr>
				<th>Code Promotion</th>
				<th>Nom Promotion </th>
				<th>Pourcentage Reduc</th>
			</tr>
			
					
		<?php
				// Récupération des promotions
				$c = new Connexion();
				$c->setReq("SELECT * from promotion;");
				$d_promo = $c->Select();
				if(!(is_a($d_promo, "PDOStatement")))
											{
												echo("Erreur");
											}
											else
											{
												while($donnees = $d_promo->fetch())
												{
													?>
													<tr>
														<td><?php echo $donnees['CODEPROMO'];?></td>
														<td><?php echo $donnees['LIBPROMO'];?></td>
														<td><?php echo $donnees['PCTGEREDUCPROMO'];?></td>
													</tr><?php
												}
											}?>
			
		</table>
						
		</div>
		
		<div id="bloc_infos">					
			<?php include("../HTML/util/menu_right.php"); ?>		
		</div>
		<div id="footer">
			<?php include("../HTML/util/footer.php"); ?>	
		</div>
	</div>
	</body>
</html>
