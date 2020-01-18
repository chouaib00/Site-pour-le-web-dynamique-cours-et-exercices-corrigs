<?php
	function ajouter(){
		require_once("DataBase.php");
		$db = new DataBase();
		require_once("Employe.php");

	 $nom_emp = $_POST['nom_employe'];
	 $num_emp = $_POST['num_employe'];
	 $fon_emp = $_POST['fonction_employe'];
	 $cf_emp = $_POST['chef'];
	 $dt_emp = $_POST['date'];
	 $sl_emp = $_POST['salaire'];
	 $dep_emp = $_POST['departement'];

	 $a = new Employe($num_emp,$nom_emp,$fon_emp,$cf_emp,$dt_emp,$sl_emp,$dep_emp);
	 $db->insert_employe($a);
		
	
	}
	
	
  
?>