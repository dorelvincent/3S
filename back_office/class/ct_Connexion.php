<?php
/* Classe Connexion, qui est utilis�e � chaque fois qu'on a besoin d'une connexion � la base de donn�es. */
class Connexion
{
	const HOST = 'localhost'; // Host LocalHost
	const DBNAME = 'ppe'; // Nom de la base � chercher
	const USER ='root';	// Utilisateur de MySQL(pseudo) 	
	const MDP = '';		// Mot de passe correspondant
	
	private $bdd;
	private $v_req;		// Requete SQL � executer
	private $v_etat;	// �tat de la connexion, TRUE si ouverte, FALSE si ferm�e
	
	
	public function __construct()
	{
		$this->setetat = false;	//Connexion ferm�e
	}
	
		/* Accesseurs */
	
	public function getbdd()
	{
		return $this->bdd;
	}
	
	public function getreq()
	{
		return $this->v_req;
	}
	public function getetat()
	{
		return $this->v_etat;
	}
	
		/* Mutateurs*/
		
	public function setbdd($p_bdd)
	{
		$this->bdd = $p_bdd;
	}
	
	public function setreq($p_req)
	{
		$this->v_req = $p_req;
	}

	public function setetat($p_etat)
	{
		$this->v_etat =$p_etat;
	}
			
	
		/* Fonctions utiles */
		
	private function Connexion() /*Fonction de connexion, appell�e par les autres fonctions */
	{
		try
		{
			$bdd = new PDO('mysql:host='.Connexion::HOST.';dbname='.Connexion::DBNAME, Connexion::USER, Connexion::MDP);
			$this->setetat(true);	//Connexion ouverte
			return($bdd);
		}
		catch (Exception $e)
		{
			die('Erreur : ' . $e->getMessage());
			$this->setetat(false);	//Connexion ferm�e
			return(die);
		}	
	}
	
	public function Select() /* fonction utilis�e pour instruction SELECT */
	{
			/* Sch�ma de fonctionnement en programme :
				Instanciation d'un objet : $o_Objet = new Connexions("localhost", "biblio", "root", "");
				Valorisation de la requ�te : $o_Objet->setreq($maReq);
				R�cup�ration et lecture : 	$reponse = $o_Objet->Select();
											if(!(is_a($reponse, "PDOStatement")))
											{
												erreur de connexion
											}
											else
											{
												while($donnees = $reponse->fetch())
												{
													Traitement
												}
											}
				*/
		if($this->getetat() == false)	
		{
			$bdd = $this->Connexion();
			$this->setbdd($bdd);
		}
		
		$bdd = $this->getbdd();
		//echo $this->getreq()."<br />";
		$reponse = $bdd->query($this->getreq());
		
		return ($reponse);
	
	}
	
	public function Exec() /* fonction utilis�e pour les instructions INSERT INTO, UPDATE, DELETE */
	
	{ 
			/*Sch�ma de fonctionnement en programme :
				Instanciation d'un objet : $o_Objet = new Connexions("localhost", "biblio", "root", "");
				Valorisation de la requ�te : $o_Objet->setreq($maReq);
				Execution de la requ�te : $o_Objet->Exec();
			*/
			
		if($this->v_etat == false)	
		{
			$bdd = $this->Connexion();
			$this->setbdd($bdd);
		}
		$bdd = $this->getbdd();

		$bdd->exec($this->getreq());
		//ACTION EFFECTUEE
	}
}
