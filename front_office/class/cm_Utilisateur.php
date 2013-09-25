<?php
				/******* Necessite Class Connexion dans le code **********/

class Utilisateur
{
	private $v_login;
	private $v_pass;
	private $v_mail;
	private 
	
	
	/********** Constructeur ************/
	
	public function __construct()
	{
		
		$this->setlogin(NULL);
		$this->setpass(NULL);
		$this->setmail(NULL);
	}
	
	/******** Accesseurs ********/
	
	public function getlogin()
	{
		return $this->v_login;
	}
	
	public function setlogin($p_login)
	{
		$this->v_login = $p_login;
	}
	
	public function getpass()
	{
		return $this->v_pass;
	}
	
	public function setpass($p_pass)
	{
		$this->v_pass = $p_pass;
	}
	
	public function getmail()
	{
		return $this->v_mail;
	}
	
	public function setmail($p_mail)
	{
		$this->v_mail = $p_mail;
	}
	/****************************/
	
	public function Extraire($p_id)
	{
		$connexion = new Connexions();
		$req = "Select * from users where id = ".$p_id.";";
		$connexion->setreq($req);
		$reponse = $connexion->Select();
		while($donnees = $reponse->fetch())
		{
			$this->setlogin($donnees['login']);
			$this->setpass($donnees['pass']);
			$this->setmail($donnees['mail']);
		}
	}
	
	public function Ajout()
	{	
		$connexion = new Connexions();
		$req = "insert into utilisateur (login, pass, mail) values ('" . $this->getlogin() . "', '" . $this->getpass() . "', '" . $this->getmail() . "');";
		$connexion->setreq($req);
		$connexion->Exec();
	}
	
	public function Hydrate($p_login, $p_pass, $p_mail)
	{
		$this->setlogin($p_login);
		$this->setpass($p_pass);
		$this->setmail($p_mail);
	}
}

?>