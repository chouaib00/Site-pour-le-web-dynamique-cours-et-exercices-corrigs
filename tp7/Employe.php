<?php

class Employe{
	
	private $num;	
	private $nom;
	private $job;
	private $chef;
	private $dat;
	private $salaire;
	private $departement;
	
	function __construct($num,$nom="null",$job="null",$chef="null",$dat=null,$salaire=null,$departement){
		$this->num = $num;
		$this->nom = $nom;
		$this->job =$job;
		$this->chef=$chef;
		$this->dat =$dat;
		$this->salaire=$salaire;
		$this->departement=$departement;
	}
	
	public function getNum()
    {
        return $this->num;
    }
	
    public function getNom()
    {
        return $this->nom;
    }
	
    public function getJob()
    {
        return $this->job;
    }
	
    public function getChef()
    {
        return $this->chef;
    }
	
    public function getDate()
    {
        return $this->dat;
    }
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function getDepartement()
    {
        return $this->departement;
    }
}

?>