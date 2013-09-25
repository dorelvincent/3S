
		<div id="corps">
				<?php include ("../HTML/util/head.php");
					  include_once("../Classes/ct_connexion.php"); ?>

			<div id="content">
			
				
				<div id="bloc_main">
					<?php 
						$c = new Connexion();
						$c->setReq("SELECT * from produit P, marque M, categorie C, souscat SSC where P.CODEMARQUE = M.CODEMARQUE AND P.CODESSCAT = SSC.CODESSCAT AND SSC.CODECAT = C.CODECAT;");
						$prod = $c->Select();
						if(!is_a($prod, 'PDOStatement'))
						{
							echo "ERREUR !!";
						}else
						{
							while($donnees = $prod->fetch())
							{?>
								<div class="prod">
									<?php echo "<h1> Produit numéro " .  $donnees['NUMPROD']; ?></h1><h3> Marque <?php echo $donnees['LIBMARQUE']; ?></h3>
									
									
								</div>
							<?php
							}
						}
					?>
				

				</div>
				<div id="bloc_droit">
					<p align="justify" style="margin:5%;"><b> 
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ultrices neque vitae metus ultricies suscipit blandit nulla euismod. Fusce justo lacus, bibendum rutrum pharetra et, accumsan at lorem. Sed et ante est, vel tristique sapien. Duis elit lorem, condimentum at mollis feugiat, pellentesque eget velit. Sed adipiscing adipiscing pretium. Integer nulla urna, accumsan in tempor quis, pulvinar quis elit. Cras ultricies, nunc quis tempus auctor, velit nibh luctus nibh, eu interdum magna lectus sit amet turpis.Suspendisse vitae purus vitae ligula consectetur rhoncus. Maecenas volutpat hendrerit eleifend. Mauris eleifend urna quis tortor faucibus imperdiet. Proin ac est ultrices dui ultricies luctus et ac nisi. Phasellus venenatis posuere scelerisque. Proin odio orci, imperdiet egestas posuere eget, aliquam ut tellus. Nulla quis lobortis felis. Quisque non mauris ante, eget imperdiet diam. Mauris quis orci non purus malesuada ullamcorper. Nam diam massa, sollicitudin sed feugiat quis, cursus a massa. Aliquam vitae risus tellus, et egestas dolor.Suspendisse malesuada consectetur lectus non vulputate. Proin tempor massa vel est luctus sit amet commodo erat pulvinar. Cras et libero ligula. Aliquam erat volutpat. Vestibulum et elit dui. Etiam hendrerit porta turpis, vitae tempor sem laoreet et. Morbi nec mi ante, vel fringilla diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris et ipsum eu elit bibendum volutpat eget eget magna. Maecenas sed dui vitae risus facilisis pellentesque vitae vel enim. Praesent egestas lacus in neque ullamcorper vel tempus sapien condimentum. Phasellus a sem odio, vel ornare nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer vel velit erat. Fusce ac faucibus risus. Aliquam consequat luctus erat non laoreet.Curabitur dictum auctor mi, quis cursus neque dictum eget. Quisque pellentesque nulla nec elit commodo nec ornare magna mattis. Mauris eleifend ornare mollis. Duis pulvinar pharetra laoreet. Vivamus id dolor id nunc lacinia dignissim quis vitae sapien. Cras velit lorem, imperdiet id pretium ut, commodo non arcu. Duis varius, dui eget tempus aliquet, mauris lorem bibendum lacus, id scelerisque justo sapien sit amet dui. Nullam pulvinar viverra sem ac sagittis.Aliquam sagittis ante quis est luctus in pharetra ligula congue. Nulla aliquet sem ac odio venenatis vitae facilisis lorem vehicula. Aliquam sodales, odio vitae semper lobortis, est urna fringilla est, et ullamcorper est magna vel sem. Suspendisse nec lacus nunc, a posuere lectus. Sed elementum, nibh ac sagittis semper, neque dui gravida massa, eget ultricies sem tortor at nulla. Donec cursus, metus non porta viverra, elit nisi fringilla erat, nec mattis est dolor non purus. Vestibulum malesuada nulla ipsum, eget faucibus eros. 
					</b></p>
				</div>
				<a href="../../index.php">Retour au site</a>

		</div>	
		
	</body>
	
	
</html>