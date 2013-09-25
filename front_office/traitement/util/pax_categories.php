<?php
header("Content-Type:text/xml");
echo"<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";

include_once("../../classes/ct_Connexion.php");
$c = new Connexion();
$c->setReq("SELECT * FROM categorie, souscat Where categorie.CODECAT = souscat.CODECAT and  categorie.CODECAT = '".$_GET['cat']."'");
$d_cate = $c->Select();
?><categorie>
<?php

if(!(is_a($d_cate, "PDOStatement")))
{
	
?>  <souscat> ERREUR !! </souscat><?php
	
}else
{
	while ($donnees = $d_cate->fetch())
	{
		?><souscat><?php echo $donnees['LIBSSCAT'];?></souscat><?php echo "\n";
		?><codecat><?php echo $donnees['CODESSCAT'];?> </codecat><?php echo "\n";
	}
}

?></categorie>
	