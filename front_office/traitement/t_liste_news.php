<?php
		//Récupération du nombre de news à afficher;
		// Pour chaque newstion
		// affichage du résultat
		
		include("../classes/ct_Connexion.php");
		$nbNews = 0;
		$c = new Connexion();
		$c->setReq("SELECT count(*) from news;");
		$d_nbOcc = $c->Select();
		if(!(is_a($d_nbOcc, "PDOStatement")))
											{
												echo("Erreur");
											}
											else
											{
												while($donnees = $d_nbOcc->fetch())
												{
													$nbNews = $donnees;
												}
											}
		foreach($nbNews AS $key => $value)
		{

			echo $key." // ".$value."<br />\n";

		}
$nbnews = $value;
echo $nbnews;

?>
<div id="corps">

		<?php include("../HTML/util/head.php"); ?>
		<?php include("../HTML/util/menu_haut.php"); ?>
	<div id="content">


		<div id="bloc_main">
		<table>
			<tr>
				<th>Num News</th>
				<th>Date News </th>
				<th>Lien XML</th>
			</tr>
			
					
		<?php
				// Récupération des promotions
				$c = new Connexion();
				$c->setReq("SELECT * from news;");
				$d_news = $c->Select();
				if(!(is_a($d_news, "PDOStatement")))
											{
												echo("Erreur");
											}
											else
											{
												while($donnees = $d_news->fetch())
												{
													?>
													<tr>
														<td><?php echo $donnees['NUMNEWS'];?></td>
														<td><?php echo $donnees['DATENEWS'];?></td>
														<td><?php echo $donnees['LINKXML'];?></td>
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
