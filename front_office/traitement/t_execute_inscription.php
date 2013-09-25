<?php 

	include('../classes/ct_Connexion.php');
	include('../classes/cm_Utilisateur.php');
	
	
	/* Récupération des valeurs saisies */
	$log = false;
	$pass = false;
	$mail = false;
	$mailconfirm = false;
	$passconfirm = false;
	

	if(!($_POST['pseudo']== ""))
	{
		$p_pseudo = $_POST['pseudo'];
		$log = true;				
	}
	
	if(!($_POST['pass']== ""))
	{
		$p_pass = $_POST['pass'];
		$pass = true;
	}
	
	if(!($_POST['passconfirm']== ""))
	{
		$p_passconfirm = $_POST['passconfirm'];
		$passconfirm = true;
	}
	
	if(!($_POST['mail']=== ""))
	{
		$p_mail = $_POST['mail'];
		$mail = true;
	}

	if(!($_POST['mailconfirm']== ""))
	{
		$p_mailconfirm = $_POST['mailconfirm'];
		$mailconfirm = true;
	}
	
	if(!($log AND $pass AND  $passconfirm AND $mail AND $mailconfirm))
	{
		
		$err = new Erreurs();
		$err->Hydrate(0, "../f_inscription.php");
		$err->PopUp();
		$err->Redirect();
	}
		
	/* Si pseudo n'est pas déjà dans la base, et que mail non plus, */
	
	$c_recuperation = new Connexions();
	$req = "SELECT * FROM users";
	$c_recuperation->setreq($req);
	$reponse = $c_recuperation->Select();
	
	$v_loginexistant = false;
	$v_mailexistant = false;
	
	while($donnees = $reponse->fetch())			
	{
		$utilisateur = new Utilisateur();
		$utilisateur->Extraire($donnees['id']);
		
		if($utilisateur->getlogin() == $p_pseudo)
		{
			$v_loginexistant = true;
		}
		if($utilisateur->getmail() == $p_mail)
		{
			$v_mailexistant = true;
		}
	}
	if($v_loginexistant || $v_mailexistant)
	{
		$err = new Erreurs();
		$err->Hydrate(13, "../f_inscription.php");
		$err->PopUp();
		$err->Redirect();
		
	}
	else   
	{
		/*Si pass = pass confirm ET mail = mail Confirm;*/
		if($p_pass == $p_passconfirm && $p_mail == $p_mailconfirm)
		{
			$NouveauUser = new Utilisateur();
			$NouveauUser->Hydrate($p_pseudo, $p_pass, $p_mail);
			$NouveauUser->Ajout();
			?><script style="text/javascript">alert('Ajout Effectué !');</script><?php
			 $url_redirig="../f_index.php";
			 echo "<script style='text/javascript'> location.href='".$url_redirig."'; </script>";
			
		} 
		else
		{
			$err = new Erreurs();
			$err->Hydrate(14, "../f_inscription.php");
			$err->PopUp();
			$err->Redirect();
			
			
		}
	}
	?> 
		